<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Visiteur;

class ProfilController extends Controller
{
   
    public function profilVisiteur()
    {
        $visiteurs = Visiteur::all();

        return view("editprofil", ["visiteurs" => $visiteurs]);
    }

    public function storeEdit(Request $request) {
        $request->validate([
            "nom"=>["required", "string"],
        ]);
        $profil = Visiteur::find(auth()->id());
        $profil->VIS_NOM = $request->nom;
        $profil->Vis_PRENOM = $request->prenom;
        $profil->VIS_ADRESSE = $request->adresse;
        $profil->VIS_CP = $request->cp;
        $profil->VIS_VILLE = $request->ville;
        $profil->save();
        return redirect(route('profil'));

    }
}