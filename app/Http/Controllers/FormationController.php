<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class FormationController extends Controller
{
    public function index(): View
    {
        return view('app.formation', [
            'formations' => Formation::all()
        ]);
    }
    public function createFormation(Request $request): \Illuminate\Http\RedirectResponse
    {

        DB::table('formations')->insert([
            'name' => $request->input('name'),
            'nbr_participant' => $request->input('nbr_participant'),
            'created_at' => Carbon::now(),
            'updated_at' => now()
        ]);

        return redirect()->route('app.formations');
    }
}
