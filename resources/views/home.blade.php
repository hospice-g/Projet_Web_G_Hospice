@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row start-content-center py-lg-5">
        <div class="col-md-12 py-5" >
            @if (session()->has('message'))
                <div class="alert alert-success" role="alert">
                      {{ session('message') }}
                </div>
            @endif    

                    
               
            
              
            <div class="card ">

               
                
                <div class="card-header list-group-item-action list-group-item-primary">
                   <h3> {{ __(' Bienvenue sur la plateforme IMMOB-PORTO') }}</h3>
                    
                   


          <div class="card-body ">
              <h4 class="fs-1">Vous avez deux options, vous pouvez choisir l'option <a href="{{route('gestionMaison.pageUsersDemande')}}">Client</a> si vous désirez gérer les demandes d'achat ou de location ou l'option <a href="{{route('gestionMaison.pageUsers')}}">Proprietaire</a> si vous disposez des maisons à vendre ou à louer </h4>
          </div>
                      
         
         <div class="card-body ">
          <li class="list-group-item list-group-item-action list-group-item-primary"><a href="{{route('gestionMaison.pageUsersDemande')}}"><h4>Client<h4></a></li>
          
          <li class="list-group-item list-group-item-action list-group-item-primary"><a href="{{route('gestionMaison.pageUsers')}}"><h4>Proprietaire<h4></a></li>
         
         </div>
         
         </div>

                      



            </div>
        </div>
    </div>
</div>

    





@endsection