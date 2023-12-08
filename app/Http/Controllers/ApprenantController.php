<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ApprenantController extends Controller
{
    public function index() : View
    {
        // jointure entre la table apprenants et et la tables formations
        // puis definition des alias de nom de colone pour evité une requete ambigue
        $apprenants = DB::table('apprenants')
        ->join('formations', 'apprenants.formation_id' , '=', 'formations.id')
            // definition des alias de nom de colone pour evité une requete ambigue
            ->get(['*', 'formations.name as formation', 'apprenants.name as name']);

        return view('app.apprenant', [
            'apprenants' => $apprenants
        ]);
    }
}
