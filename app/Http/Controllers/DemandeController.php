<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;
use Illuminate\Support\Facades\Auth;
use App\Models\Upprofil;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

     public function createDemande()
    {
        //
        return view("gestionMaison.demande");
    }

     public function createpageUsersDemande()
    {
        

        $Demandes = Demande::all();

        return view("gestionMaison.pageUsersDemande", compact('Demandes'));
    }



 public function  createdemandEncours()
    {
        

        $Demandes = Demande::all();

        return view("gestionMaison.demandeEncours", compact('Demandes'));
    }
       
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

     */



    public function storeDemande(Request $request)
    {
         $data =$request->validate([
         'prix' => 'required',
         'type_action' => 'required',
         'nom' => 'required',
         'telephone' => 'required',
         'lieu' => 'required',
         'description' => 'required'

        ]);

        $Demande = new Demande;
        $Demande->nom = $request->nom;
        $Demande->description = $request->description;
        $Demande->prix = $request->prix;
        $Demande->type_action = $request->type_action;
        $Demande->num_user = $request->telephone;
        $Demande->lieu_maison = $request->lieu;
        $Demande->user_id = Auth::id();
        $Demande->photo ="rien";

        $Demande->save();


        return redirect("/gestionMaison/pageUsersDemande")->with('message',"Votre demande est enregistrée avec succès");
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
        $m=Demande::findOrfail($id);
        $m->delete();

        return back()->with('message',"suppression reussie");

    }
}
