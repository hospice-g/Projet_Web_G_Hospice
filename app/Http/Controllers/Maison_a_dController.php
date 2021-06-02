<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maison_a_d;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage ;
use App\Models\Upprofil;



class Maison_a_dController extends Controller
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
        return view("gestionMaison.ajout");
    }

    public function createpageUsers()
    {
        

        $Maison_a_ds = Maison_a_d::all();

        return view("gestionMaison.pageUsers", compact('Maison_a_ds'));
    }


public function showMagazinPublication()
    {
        
        $Maison_a_ds = Maison_a_d::all();

        return view("gestionMaison.magazinPublication", compact('Maison_a_ds'));
    }


/*
public function createhome()
    {
        //
        return view("/home");
    }
*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =$request->validate([
         'prix' => 'required',
         'type_action' => 'required',
         'nom' => 'required',
         'telephone' => 'required',
         'lieu' => 'required',

         'photo' => 'image|required',
         
        ]);

        if($request->photo){

            $path =basename($request->photo->store('imageget')) ;
            //resolution de la base
            $image = InterventionImage::make($request->photo)->widen(500)->encode();
            storage::put('imageget/'.$path, $image);
        }

        $Maison_a_d = new Maison_a_d ;
        $Maison_a_d->nom = $request->nom;
        $Maison_a_d->description = $request->description;
        $Maison_a_d->prix = $request->prix;
        $Maison_a_d->type_action = $request->type_action;
        $Maison_a_d->num_user = $request->telephone;
        $Maison_a_d->lieu_maison = $request->lieu;
        $Maison_a_d->user_id = Auth::id();
    
    if ($request->photo) 
          $Maison_a_d->photo = $path;


        $Maison_a_d->save();

        return redirect("/gestionMaison/pageUsers")->with('message',"l'offre est ajouté avec succès et sa publication prend effet immediatement");


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
        $h = Maison_a_d::findOrfail($id);
        $s =Maison_a_d::findOrfail($request) ;

        $request->nom = $s->nom  ;
        $request->description = $s->description ;
        $request->prix = $s->prix ;
        $request->type_action = $s->type_action ;
        $request->telephone = $s->num_user ;
        $request->lieu = $s->lieu_maison ; 
       
        $request->photo = $s->photo ;
    
       return view("gestionMaison.modifierAjout");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $m=Maison_a_d::findOrfail($id);
        $m->delete();

        return redirect("/gestionMaison/pageUsers")->with('message',"suppression reussie");

    }
}
