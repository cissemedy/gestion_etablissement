<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responsable;

class ResponsableController extends Controller
{

    
    public function liste_responsable()
    {
        $responsables = Responsable::all();
        return view('responsable.liste',compact('responsables'));
    }
    public function ajouter_responsable()
    {
        return view('responsable.ajouter');
    }
    public function ajouter_responsable_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'E_mail' => 'required',
            'numero'=> 'required',
        ]);
        $responsable = new Responsable();
        $responsable->nom = $request->nom;
        $responsable->prenom = $request->prenom;
        $responsable->adresse = $request->adresse;
        $responsable->E_mail = $request->E_mail;
        $responsable->numero = $request->numero;
        $responsable->save();
        return redirect('/ajouter')->with('status','L\'responsable a bien été ajouté avec succés');
    }
    public function update_responsable($id){
        $responsables = Responsable::find($id);
        return view('responsable.update', compact('responsable'));
    }
    public function update_responsable_traitement(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'E_mail' => 'required',
            'numero'=> 'required',
        ]);
        $responsable = Responsable::find($request->id);
        $responsable->nom = $request->nom;
        $responsable->prenom = $request->prenom;
        $responsable->adresse = $request->adresse;
        $responsable->E_mail = $request->E_mail;
        $responsable->numero = $request->numero;
        $responsable->update();
        return redirect('/responsable')->with('status','L\'responsable a bien été modifier avec succés');

    }
}
