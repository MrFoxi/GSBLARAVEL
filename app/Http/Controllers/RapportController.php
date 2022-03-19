<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rapport;

class RapportController extends Controller
{
    function show(){
        $data = Rapport::all();
        return view('rapport',['rapport_visite'=>$data]);
    }
}
