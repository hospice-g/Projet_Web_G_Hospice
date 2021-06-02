  
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
                  
                    {{ __('Welcome Monsieur/madame') }} {{Auth::user()->name}}

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
                    
          <li class="list-group-item list-group-item-action list-group-item-secondary"><a href="{{route('gestionMaison.demande')}}">Lancer une demande</a></li>              

            <li class="list-group-item list-group-item-action list-group-item-secondary"><a href="{{route('gestionMaison.upProfilclient')}}">Modifier votre photo de profil profil</a></li>
        

             </ul>
          </div>



        


   
        <div class="card-body">
          <ul class="list-group-item list-group-item-action">
          <h3> Voici la liste de vos Demandes</h3>
          </ul>
            
    @if(count(Auth::user()->demandes) !=0) 

       
       <div class="col-md-12">
        <div class="externe">
          <div class="interne">
            
          
         <table class="table table-hover ">
        <thead class="table-light">
            <tr>
              <th>Nom de la demande</th>
              <th> Description</th>
              <th>type de maison</th>
              <th> Prix</th>
              <th>Region</th>
              <th>Telephone</th>
              <th>Action Supprimer</th>
              <th>Action modifier</th>
            </tr>
          </thead>
           @foreach(Auth::user()->demandes as $j)

       <tr class="table-primary">
       <td>{{$j->nom}}</td>
       <td>{{$j->description}}</td>
       <td>{{$j->type_action}}</td>
       <td>{{$j->prix}} FCFA</td>
       <td>{{$j->lieu_maison}}</td>
       <td>{{$j->num_user}}</td>
       <td> <form id="delete{{$j->id}}" action="{{route('gestionMaison.demandedestroy',$j->id) }}" style="display: none;" method="POST">
              @csrf
              @method('DELETE')
               
            </form>

            <a class="btn btn-danger btn-sm" role="button" 
            onclick="event.preventDefault(); document.getElementById('delete{{$j->id}}').submit();">
              Supprimer
            </a></td>
       <td><a href="#" class="btn btn-primary btn-sm">modifier</a></td>
     </tr>
          @endforeach  
        </table>
      </div>
    </div>
         
      </div>
         

    </div>

         

            

       
           
   @else
      <div class="card-body"> Aucune Demande
             </div>
    @endif
     
  </div>



  </div>
      
</div>
</div>

</div>

</div>

    
        

        @endsection