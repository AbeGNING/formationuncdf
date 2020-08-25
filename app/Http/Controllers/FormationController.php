<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employe;

class FormationController extends Controller
{
    public function produit()
    {
        $tousEmployes = Employe::paginate(10);
        return view('pages.produits', compact('tousEmployes'));
    }
    
    public function accueil()
    {
        return view('pages.accueil');
    }

    public function service()
    {
        $tousEmployes = Employe::where('pays', 'Burkina Faso')->paginate(10);

        return view('pages.services', compact('tousEmployes'));
    }

    

    public function contact()
    {
        return view('pages.contact');
    }
}
