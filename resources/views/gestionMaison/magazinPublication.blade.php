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
            
            <div class="card">
                
                <div class="card-header bg-success">
                    <h3>{{ __('BIENVENUE SUR IMMOB-PORTO') }}</h3>
                    

               </div>

            <div class="card-header">
              <ul class="list-group-item active">
              <h4>{{ __('Voici la liste des offres disponibles') }}</h4>
               </ul> 
            </div>

            
            @php

            $l = "Publication de vente"

            @endphp

    <div class="container"> 
           
       
         @if(count($Maison_a_ds) !=0) 

       
       <div class="col-md-12">
        <div class="row">
        
           @foreach($Maison_a_ds as $j)

         <div class="col-6">
            <a href="" class="thumbnail">
                <img src="/imageget/{{$j->photo}}" alt="Image"  class="w-75 rounded-circle" />
            </a>    
                <p>Une {{$j->nom}}: {{$j->description}} disponible à {{$j->lieu_maison}} à {{$j->prix}} FCFA @if($j->nom != $l) par mois 
                    @endif

                 tel: {{$j->num_user}} 

            </p>
          </div>
          @endforeach  
       
         
      </div>
         

    </div>

           
           
   @else
      <div class="card-body"> Aucune Publication
     </div>
    @endif
     
   </div>



  </div>

 


             <div class="card-body "> <ul class="card-body list-group list-group-item-action btn btn-success"> <a href="{{ route('register') }}">Inscrivez-vous si vous désirez faire une demande/publication</a></ul> 
             </div>
        

    </div>


</div>





            </div>

    

@endsection