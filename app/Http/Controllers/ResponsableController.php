<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responsable;

class ResponsableController extends Controller
{
    public function liste_responsable()
    {
        return view('responsable.liste');
    }
    public function ajouter_responsable()
    {
        return view('responsable.ajouter');
    }
    public function supprimer_responsable()
    {
        return view('responsable.supprimer');
    }
    public function modifier_responsable()
    {
        return view('responsable.modifier');
    }

    public function ajouter_responsable_traitement(Request $request)
    {
        $request->validate([
            'Nom'=>'required',
            'Prenom'=>'required',
            'Adresse'=>'required',
            'E-mail'=>'required',
            'Numero'=>'required',
        ]);
        $responsable = new Responsable();
        $responsable->Nom=$request->Nom;
        $responsable->Prenom=$request->Prenom;
        $responsable->Adresse=$request->Adresse;
        $responsable->Email=$request->Email;
        $responsable->Numero=$request->Numero;
        $responsable->save();
        return redirect('/ajouter')->with('status','L\'responsable a bien été ajouté avec succés');
    }
}
