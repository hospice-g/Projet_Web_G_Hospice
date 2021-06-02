
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
                  
                    {{ __('Welcome Administrateur') }} 



   
        <div class="card-body">
          <ul class="list-group-item list-group-item-action">
          <h3> Voici la liste de des utilisateurs qui ont fait des annonces</h3>
          </ul>
            
   

       
       <div class="col-md-12">
         <div class="externe">
          <div class="interne">
         <table class="table table-hover ">
        <thead class="table-light">
            
             <tr>
              <th>Nom  Utilisateur</th>
              <th> Adresse email</th>
              <th>Supprimer un utilisateur</th>   
            </tr>
          </thead>
           
            @foreach($users as $j) 
               @foreach($idu as $h)
                 @if($j->id == $h->user_id)
       <tr class="table-primary">
       <td>{{$j->name}}</td>
       <td>{{$j->email}}</td>
        <td><form id="delete{{$j->id}}" action="{{route('gestionMaison.destroyuser',$j->id) }}" style="display: none;" method="POST">
              @csrf
              @method('DELETE')
               
            </form>

            <a class="btn btn-danger btn-sm" role="button" 
            onclick="event.preventDefault(); document.getElementById('delete{{$j->id}}').submit();">
              Supprimer
            </a>
      </td>
     </tr>
           @endif
            @endforeach
          @endforeach  
        </table>
      </div>
    </div>
         
      </div>
         

    </div>

         
  

   <div class="card-body">
          <ul class="list-group-item list-group-item-action">
          <h3> Voici la liste de des utilisateurs qui ont fait des demandes</h3>
          </ul>
   

       
       <div class="col-md-12">
         <div class="externe">
          <div class="interne">
         <table class="table table-hover ">
        <thead class="table-light">
          
             <tr>
              <th>Nom  Utilisateur</th>
              <th> Adresse email</th>
              <th> Supprimer un utilisateur</th>   
            </tr>
          </thead>
           
            @foreach($users as $j) 
               @foreach($Demandes as $l)
                 @if($j->id == $l->user_id)
       <tr class="table-primary">
       <td>{{$j->name}}</td>
       <td>{{$j->email}}</td>
       <td><form id="delete{{$j->id}}" action="{{route('gestionMaison.destroyuser',$j->id) }}" style="display: none;" method="POST">
              @csrf
              @method('DELETE')
               
            </form>

            <a class="btn btn-danger btn-sm" role="button" 
            onclick="event.preventDefault(); document.getElementById('delete{{$j->id}}').submit();">
              Supprimer
            </a>
          </td>
     </tr>
           @endif
            @endforeach
          @endforeach  
        </table>
      </div>
    </div>
         
      </div>
         

    </div>



     <div class="card-body">
          <ul class="list-group-item list-group-item-action">
          <h3> Voici la liste de ceux qui ont soumis des email</h3>
          </ul>
   

       
       <div class="col-md-12">
         <div class="externe">
          <div class="interne">
         <table class="table table-hover ">
        <thead class="table-light">
           
             <tr> 
              <th> Adresse email</th> 
               <th> Date de soumission</th>   
            </tr>
          </thead>
           
            @foreach($ad as $j) 
       <tr class="table-primary">
       <td>{{$j->adresse}}</td>
       <td>{{$j->created_at}}</td>
       
     </tr>
           
          @endforeach  
        </table>
      </div>
    </div>
         
      </div>
         

    </div>


         

  



         

    
     
  </div>



</div>
</div>

</div>

</div>

    
        

@endsection



