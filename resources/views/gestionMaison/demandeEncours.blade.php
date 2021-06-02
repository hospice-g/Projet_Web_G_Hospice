  
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



   
        <div class="card-body">
          <ul class="list-group-item list-group-item-action">
          <h3> Voici la liste de des Demandes en cours</h3>
          </ul>
            
    @if(count($Demandes) !=0) 

       
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
            </tr>
          </thead>
           @foreach($Demandes as $j)

       <tr class="table-primary">
       <td>{{$j->nom}}</td>
       <td>{{$j->description}}</td>
       <td>{{$j->type_action}}</td>
       <td>{{$j->prix}} FCFA</td>
       <td>{{$j->lieu_maison}}</td>
       <td>{{$j->num_user}}</td>
       
       </tr>
          @endforeach  
        </table>
      </div>
    </div>
         
      </div>
         

    </div>

         

            

       
           
   @else
      <div class="card-body"> Aucune Demande en cours
             </div>
    @endif
     
  </div>



  </div>
      
      <div class="card-body"><a href="{{route('gestionMaison.pageUsers')}}"> Aller sur votre page</a></div>
</div>
</div>

</div>

</div>

    
        

        @endsection