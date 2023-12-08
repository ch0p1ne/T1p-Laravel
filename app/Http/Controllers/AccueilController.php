<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AccueilController extends Controller
{
    public function index() : View
    {
        return view('accueil');
    }
}
