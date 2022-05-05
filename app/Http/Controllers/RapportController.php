<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rapport;
use App\Models\Praticien;
use App\Models\Visiteur;
use Illuminate\Support\Facades\Auth;

class RapportController extends Controller
{
    public function rapport() {
        $id = Auth::user()->VIS_MATRICULE;
        $rapports = Rapport::join('praticien', 'rapport_visite.PRA_NUM', '=', 'praticien.PRA_NUM')
            ->where('rapport_visite.VIS_MATRICULE', $id)
            ->get();

        return view("rapport", ["rapports" => $rapports]);
    }
    public function rapportVisiteur() {
        $praticiens = Praticien::all();

        return view("nouveauRapport", ["praticiens" => $praticiens]);
    }

    public function store(Request $request) {
        $request->validate([
            'praticien' => ['required', 'string'],
            'date' => ['required', 'string'],
            'bilan' => ['required', 'string'],
            'motif' => ['required', 'string'],
        ]);

        $lastrapport = Rapport::orderByDesc('RAP_NUM')->first();
        $rapport = new Rapport();
        $rapport->VIS_MATRICULE = auth()->user()->VIS_MATRICULE;
        $rapport->RAP_NUM = $lastrapport->RAP_NUM +1;
        $rapport->PRA_NUM = $request->praticien;
        $rapport->RAP_DATE = $request->date;
        $rapport->RAP_BILAN = $request->bilan;
        $rapport->RAP_MOTIF = $request->motif;
        $rapport->save();
        session()->flash('success', 'Rapport ajouté avec succès');

        return redirect(route('rapport'));
    }
}
