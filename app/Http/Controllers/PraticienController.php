<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Praticien;

class PraticienController extends Controller
{
    function show(){
        $donne = Praticien::all();
        return view('praticien',['praticien'=>$donne]);
    }
}
