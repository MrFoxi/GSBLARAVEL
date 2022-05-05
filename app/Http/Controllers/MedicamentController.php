<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicament;

class MedicamentController extends Controller
{
    //
    public function getAll()
    {
        $medicaments = Medicament::all();
        return view('medicaments', ['medicaments' => $medicaments]);
    }

    public function getById(Request $request){  
        $medicament = Medicament::find($request->selectMedId);
        // $medicament = medicament::where('MED_DEPOTLEGAL', $request->selectMedId)->first();

        $medicaments = Medicament::all();
        return view('medicaments', ['medicament' => $medicament, 'medicaments' => $medicaments]);

    }

    // Web service
    public function index()
    {
        $medicaments = Medicament::all();
        return response()->json($medicaments);
    }
  
}
