<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Upprofil;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage ;
use App\Models\Demande;
use App\Models\Maison_a_d;
use App\Models\User;
use App\Models\AdresseSoumission;


use Illuminate\Support\Facades\DB;



class UsersController extends Controller
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

    

     public function createAdminPage()
    {
        
       //$users = DB::table('users')->orderBy('id','asc');
        
        $idu = Maison_a_d::orderBy('id','asc')->get();

        $Demandes = Demande::orderBy('id','asc')->get(); 

        $users = User::orderBy('id','asc')->get();

        $ad = AdresseSoumission::orderBy('id','asc')->get();

        return view("gestionMaison.admin" , compact('users','idu','Demandes','ad'));

    }



    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
    public function destroyuser($id)
    {
    
    $m=User::findOrfail($id);
        $m->delete();

        return redirect("/gestionMaison/admin")->with('message',"suppression reussie");

    }
}
