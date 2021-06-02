@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center py-lg-5">
        <div class="col-md-8 py-5">
            <div class="card">
                
                <div class="card-header couleurfond1">{{ __('Ajout d\'un offre') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('gestionMaison.store') }}" enctype="multipart/form-data">
                        @csrf

                        @if(session()->has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message')}}
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom de l\'offre') }}</label>
  
                            <div class="col-md-6">
                                <select name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror">
                                  <option value="Publication de loyer">Publication de loyer</option> 
                                   <option value="Publication de vente">Publication de vente</option>
              
                                </select>
                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            </div>
                             
                        </div>

                         <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <textarea rows="2" id="description" class="form-control" name="description" class="form-control @error('description') is-invalid @enderror"></textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            </div>

                             
                        </div>

                          <div class="form-group row">
                            <label for="lieu" class="col-md-4 col-form-label text-md-right">La localité</label>

                            <div class="col-md-6">
                                <select name="lieu" id="lieu" class="form-control @error('lieu') is-invalid @enderror">
                                   <option value="COTONOU"> COTONOU</option> 
                                   <option value="PORTO-NOVO"> PORTO-NOVO</option> 
                                   <option value="ABOMEY-CALAVI"> ABOMEY-CALAVI</option>
                                   <option value="DANGBO"> DANGBO</option>  
                                   <option value="BOHICON"> BOHICON</option>
                                   <option value="ALLADA">ALLADA</option> 
                                   <option value="SAVE">SAVE</option> 
                                   <option value="SAVALOU"> SAVALOU</option>
                                   <option value="DJIDJA">DJIDJA</option> 
                                   <option value="BONOU">BONOU</option> 
                                   <option value="ZÈ">ZÈ</option>  
                                   <option value="LOKOSSA">LOKOSSA</option> 
                                   <option value="AZOVÈ">AZOVÈ</option> 
                                   <option value="COVÈ"> COVÈ</option>  
                                </select>
                                @error('type_action')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            </div>
                             
                        </div>



                        



                   <div class="form-group row">
                            <label for="type_action" class="col-md-4 col-form-label text-md-right">Type de maison</label>

                            <div class="col-md-6">
                                <select name="type_action" id="type_action" class="form-control @error('type_action') is-invalid @enderror">
                                  <option value="Chambre salon sanitaire">Chambre salon sanitaire</option> 
                                   <option value="Chambre salon ordinaire">Chambre salon ordinaire</option>
                                   <option value="Villa R+2">Villa R+2</option>
                                   <option value="Villa R+2">Villa R+1</option> 
                                   <option value="Boutique">Boutique</option>
                                   <option value="Espace de travail">Espace de travail</option>
                                   <option value="Salle de reunion">Salle de reunion</option>
                                   <option value="Le choix n'est pas ici">Le choix n'est pas ici</option>
                                </select>
                                @error('type_action')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            </div>
                             
                        </div>


                     <div class="form-group row">
                            <label for="prix" class="col-md-4 col-form-label text-md-right">Prix de vente/loyer (FCFA)</label>

                            <div class="col-md-6">
                                <input id="prix" type="number"  name="prix" class="form-control @error('prix') is-invalid @enderror">

                                @error('prix')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                         </div>

                          
                     </div>

                     <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">Votre Téléphone</label>

                            <div class="col-md-6">
                                <input id="telephone" type="number"  name="telephone" class="form-control @error('telephone') is-invalid @enderror">

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                         </div>

                          
                     </div>



                        

                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">Photo de la maison</label>

                            <div class="col-md-6">
                                <input id="photo" type="file"  class="form-control @error('photo') is-invalid @enderror" name="photo">
                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn couleurfond1" >
                                    Publier l'ajout
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
