<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filliere;
use Illuminate\View\View;

class FilliereController extends Controller
{
    public function liste_filliere()
    {
        $fillieres = Filliere::paginate(3);
        return view('filliere.liste',compact('fillieres'));
    }

    public function detail_filliere(string $id):View
    {
        $fillieres = Filliere::find($id);
        return view('filliere.detail')->with('fillieres', $fillieres);
    }


    public function ajouté_filliere() 
    {
        return view('filliere.ajoute');
    }
    public function ajouté_filliere_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'code_numerique' => 'required',
            'acronyme' => 'required',
            'niveau' => 'required',
            'numero_identifiant'=> 'required',
        ]);
        $filliere = new Filliere();
        $filliere->nom = $request->nom;
        $filliere->code_numerique = $request->code_numerique;
        $filliere->acronyme = $request->acronyme;
        $filliere->niveau = $request->niveau;
        $filliere->numero_identifiant = $request->numero_identifiant;
        $filliere->save();

        return redirect('/ajouté')->with('status','L\'filliere a bien été ajouté avec succés');
    }
    public function update_filliere($id){
        $fillieres = Filliere::find($id);
        return view('filliere.update',compact('fillieres'));
    }
    public function update_filliere_traitement(Request $request){
        $request->validate([
            'nom' => 'required',
            'code_numerique' => 'required',
            'acronyme' => 'required',
            'niveau' => 'required',
            'numero_identifiant'=> 'required',
        ]);
        $filliere = Filliere::find($request->id);
        $filliere->nom = $request->nom;
        $filliere->code_numerique = $request->code_numerique;
        $filliere->acronyme = $request->acronyme;
        $filliere->niveau = $request->niveau;
        $filliere->numero_identifiant = $request->numero_identifiant;
        $filliere->update();
        return redirect('/ajouté')->with('status','L\'filliere a bien été modifier avec succés.');

    }
    public function delete_filliere($id){
        $filliere = Filliere::find($id);
        $filliere->delete();
        return redirect('/ajouté')->with('status','L\'filliere a bien été supprimé avec succés.');

    }
    
}

