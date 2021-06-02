<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upprofil;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage ;
use App\Models\Demande;
use App\Models\Maison_a_d;


class UpProfilController extends Controller
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


        $Upprofils = Upprofil::all();

        
        return view("gestionMaison.upProfil",compact('Upprofils'));
    }

    public function createup()
    {


        $Upprofils = Upprofil::all();

        
        return view("gestionMaison.upProfilclient",compact('Upprofils'));
    }


    public function createdemande()
    {


        $Upprofils = Upprofil::all();

        
        return view("gestionMaison.demandestore",compact('Upprofils'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


         $data =$request->validate([
       
         'photo' => 'image|required',

        ]);

        
        if($request->photo){

            $path =basename($request->photo->store('imageProfil')) ;
            //resolution de la base
            $image = InterventionImage::make($request->photo)->widen(500)->encode();
            storage::put('imageProfil/'.$path, $image);
        }

        $UpProfil = new UpProfil ;
        $UpProfil->prenom = 'rien';
        $UpProfil->adresse = "rien";
        $UpProfil->telephone = 0;
        $UpProfil->age = 0;
        $UpProfil->user_id = Auth::id();
    
    if ($request->photo) 
          $UpProfil->photo = $path;


        $UpProfil->save();

        return redirect("/gestionMaison/pageUsers")->with('message',"votre photo a été bien modifiée");



    }

    public function storeup(Request $request)
    {


         $data =$request->validate([
       
         'photo' => 'image',

        ]);

        
        if($request->photo){

            $path =basename($request->photo->store('imageProfil')) ;
            //resolution de la base
            $image = InterventionImage::make($request->photo)->widen(500)->encode();
            storage::put('imageProfil/'.$path, $image);
        }

        $UpProfil = new UpProfil ;
        $UpProfil->prenom = 'rien';
        $UpProfil->adresse = "rien";
        $UpProfil->telephone = 0;
        $UpProfil->age = 0;
        $UpProfil->user_id = Auth::id();
    
    if ($request->photo) 
          $UpProfil->photo = $path;


        $UpProfil->save();

        return redirect("/gestionMaison/pageUsersDemande")->with('message',"votre photo a été bien modifiée");



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
        //
    }
}
