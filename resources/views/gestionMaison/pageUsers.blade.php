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
                
                <div class="card-header">
                  
                   <h4> {{ __('Welcome Monsieur/Madame') }} {{Auth::user()->name}} </h4>

                   @if(count(Auth::user()->upprofil) !=0)
              @foreach(Auth::user()->upprofil as $j)
              @endforeach
                 <div> <a href="#"><img src="/imageProfil/{{$j->photo}}" alt="profil" class="w-25 rounded-circle" width="" height="200"></a>
                 </div>
              

                @else
                   <div> <a href="#"><img src="/imageProfil/0.jpg" alt="profil" class="w-25 rounded-circle" width="" height="200"></a>
                   </div>

                @endif

       

           <div class="card-body list-group list-group-item-action " > 
                     <ul class="navbar-nav ml-auto">
                    
          <li class="list-group-item list-group-item-action list-group-item-secondary"><a href="{{route('gestionMaison.ajout')}}">Publier une offre</a></li> 

           <li class="list-group-item list-group-item-action list-group-item-secondary"><a href="{{route('gestionMaison.demandeEncours')}}">Voir les demande en cours</a></li>              
             

            <li class="list-group-item list-group-item-action list-group-item-secondary"><a href="{{route('gestionMaison.upProfil')}}">Modifier votre photo de profil</a></li>
        

             </ul>
          </div>


                   @php
                     
                     $l = "Publication de vente"
                   
                   @endphp
        


   
        <div class="card-body">
          <ul class="list-group-item list-group-item-action">
          <h3> Voici la liste de vos Publications</h3>
          </ul>
            
    @if(count(Auth::user()->maison_a_ds) !=0) 

       
       <div class="col-md-12">
        <div class="row">
        
           @foreach(Auth::user()->maison_a_ds as $j)

         <div class="col-6">
            <a href="" class="thumbnail">
                <img src="/imageget/{{$j->photo}}" alt="image"  class="w-75 rounded-circle" />
            </a>    
                <p>Une {{$j->nom}}: {{$j->description}} disponible à {{$j->lieu_maison}} à {{$j->prix}} FCFA @if($j->nom != $l) par mois 
                    @endif
                   tel: {{$j->num_user}} 

            <form id="delete{{$j->id}}" action="{{route('gestionMaison.destroy',$j->id) }}" style="display: none;" method="POST">
              @csrf
              @method('DELETE')
               
            </form>

            <a class="btn btn-danger btn-sm" role="button" 
            onclick="event.preventDefault(); document.getElementById('delete{{$j->id}}').submit();">
              Supprimer
            </a>
            <a href="#" class="btn btn-primary btn-sm">Modifier</a>
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
      
</div>
</div>

</div>

</div>

</div>



















    

        
     
    



@endsection