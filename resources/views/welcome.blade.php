@include('layouts.header')


<div class="">
    

            <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">
        
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
              <h2><a href="#"> villa 2 salons  à vendre</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span>Porto-novo Avakpa</p>
              <p>Ce qui fait de nous un être humain est notre habitation.</p>
              <cite>$ 20.000.000 f</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2"></div>
              <h2><a href="#">Des chambre salon ordinaires à louer </a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span>Portono Avakpa </p>
              <p>Ce qui fait de nous un être humain est notre habitation.</p>
              <cite>20.000f</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-3"></div>
              <h2><a href="#">Un immeuble R+2 à vendre</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span>Cotonou Cadjehoun</p>
              <p>Ce qui fait de nous un être humain est notre habitation.</p>
              <cite>20.000.000f</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-4"></div>
              <h2><a href="#">Des chambres sanitaires à louer</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Porto-Novo(Dangbo) </p>
              <p>Ce qui fait de nous un être humain est notre habitation.</p>
              <cite>25.000f</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-5"></div>
              <h2><a href="#">Un immeuble R+2 à vendre</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span>Cotonou Zogbo</p>
              <p>Ce qui fait de nous un être humain est notre habitation</p>
              <cite>200.000.000f</cite>
              </blockquote>
            </div>
          </div>
        </div>



        <!-- /sl-slider -->



        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>

      </div><!-- /slider-wrapper -->
</div>



<div class="banner-search">
  <div class="container"> 
    <!-- banner -->
    <h3>Acheter, Vendre & Louer</h3>
    <h3>recherche une chambre par ici</h3>
    <div class="searchbar">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
        	<form action="{{ route('gestionMaison.showMagazinPublication') }}" method="GET"> 
             <div class="row">
          <div class="col-lg-3 col-sm-4">
            <select class="form-control">
                <option>Chambre sanitaire</option>
                <option>Chambre ordinaire</option>
                <option>salle de reunion</option>
                <option>bureau</option>
                <option>boutique</option>
                <option>Maison</option>
                <option>Espace de travail</option>
              </select>
              </div>
         
            <div class="col-lg-3 col-sm-4">
              <select class="form-control">
                <option>Achat</option>
                <option>Location</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
              <select class="form-control">
                <option>Prix</option>
                <option>10.000f - 50.000f</option>
                <option>50.000f - 100.000f</option>
                <option>100.000f - 200.000f</option>
                <option>200.000f - 1.000.000f</option>
                <option>1.000.000.000f - 2.000.000.000f</option>
                <option>2.000.000f - 3.000.000f</option>
                <option>15.000.000f - 25.000.000f</option>
                <option>30.000.000f - et plus</option>
              </select>
            </div>
            
              <div class="col-lg-3 col-sm-4">
              <button class="btn btn-success">Trouver</button>
              </div>



          </div>
      </form>
          
          
        </div>
        <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
          <p>Vous pouvez nous joindre en vous <a href="{{ route('register') }}">inscrivant</a> , si vous desirez faire partir de nos membres pour avoir accès à des demandes de locaation ou d'achat, des annonces ou mises à jour des propriétés</p>
       </div>
      </div>
    </div>
  </div>
</div>
  
@include('layouts.footer')


<!--
    
      <div class="col-lg-6 col-md-8 mx-auto text-center">
        <h1 class="fw-light">Oh les gars c'est cool</h1>
       
      </div>
    
  


    <div class="album py-5 bg-light mt-2">
    <div class="container ">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
-->
