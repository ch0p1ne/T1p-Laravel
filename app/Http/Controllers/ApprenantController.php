<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ApprenantController extends Controller
{
    public function index() : View
    {
        return view('app.apprenant', [
            'apprenants' => Apprenant::all()
        ]);
    }
}
