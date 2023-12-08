<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use App\Models\Formation;
use Carbon\Carbon;
use Carbon\PHPStan\AbstractMacro;
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

        $formation = Formation::all();

        return view('app.apprenant', [
            'apprenants' => $apprenants,
            'formations' => $formation
        ]);
    }

    public function createApprenant(Request $request)
    {
        //convertion de la chaine de caracter retourné par $request en int
        $formationid = (int) $request->input('formationId');

        DB::table('apprenants')->insert([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'formation_id' => $formationid,
            'created_at' => Carbon::now(),
            'updated_at' => now()
        ]);

        return redirect()->route('app.apprenants');
    }
}
