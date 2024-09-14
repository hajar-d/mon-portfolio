<?php

namespace App\Http\Controllers;
use App\Models\Projet;

use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function index()
    {
        $photos=['img1.jpg','img2.jpg','img3.png','img4.png'];
        $projets = Projet::all();
        return view('projets', compact('projets','photos'));
    }

    public function show($id)
    {
        $projet = Projet::findOrFail($id);
        return view('projets.show', compact('projet'));
    }
}
