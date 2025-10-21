<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    public function home()
    {
        $notreNom = 'Les Backend Dev';
        $allFruits = ['Pomme', 'Banane', 'Orange', 'Fraise'];
        return view('homepage', [
            'name' =>$notreNom,
            'allFruits' => $allFruits,
        ],);
        //return view('homepage', ['title' => 'Accueil']);
    }

    public function about()
    {
        return view('about', ['title' => 'À propos']);
    }
}
