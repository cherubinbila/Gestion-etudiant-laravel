<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionController extends Controller
{
    public function index()
    {
        return view('gestion.index');
    }

    public function listeEtudiants()
    {
        return view('gestion.liste');
    }
}
