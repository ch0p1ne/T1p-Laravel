<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\View\View;

class FormationController extends Controller
{
    public function index(): View
    {
        return view('app.formation', [
            'formations' => Formation::all()
        ]);
    }
}
