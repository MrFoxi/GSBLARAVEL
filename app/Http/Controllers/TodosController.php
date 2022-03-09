<?php

namespace App\Http\Controllers;
use App\Models\Todos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TodosController extends Controller
{
    public function liste()
    {
        return view("home", ["todos" => Todos::all()]);
    }
    public function saveTodo(Request $request)
    {
        $texte = $request->input('texte');
        if ($texte) {
            $todo = new Todos();
            $todo->texte = $texte;
            $todo->termine = 0;
            $todo->save();
        }
        return redirect()->route('liste');
    }
    public function markAsDone($id)
    {
        $todo = Todos::find($id);
        if ($todo) {
            if($todo->termine){
                $todo->termine = 0;
            }else{
                $todo->termine = 1;
            }
            $todo->save();
        }
        Session::flash('message', "Todo marquer terminer");
        return redirect()->route('liste');
    }
    public function deleteTodo($id){
        $todo = Todos::find($id);
        if($todo){
        $todo->delete();
        }
        return redirect()->route('liste');
    }
    public function Importance($id)
    {
        $todo = Todos::find($id);
        if ($todo) {
            if($todo->Importance){
                $todo->Importance = false;
            }else{
                $todo->Importance = true;
            }
            $todo->save();
        }
        return redirect()->route('liste');
    }
    public function listeNonImportante()
    {
        return view("compteur", ["todos" => Todos::all($todo = ['*'])]);
    }
    public function NonTermine($id){
        $todo = Todos::find($id);
        if ($todo) {
            
            if($todo->termine == 0){
                $todo->save();
                
            }
        }
        return redirect()->route('listeNonImportante');
    }
}
