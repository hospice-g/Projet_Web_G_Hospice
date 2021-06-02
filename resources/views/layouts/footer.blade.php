


<div class="footer">

<div class="container">



<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>Information</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="">A propos</a></li>        
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="">Blog</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="">Contact</a></li>
              </ul>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4> </h4>
                    <p>Être informé des dernière propriétés de notre marché</p>
            
                          
   <form method="POST" action="{{ route('Soumission.store') }}">
                        @csrf

                        @if(session()->has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message')}}
                        </div>
                        @endif

                            <div class="col-md-15">
                                 <input id="adresse" type="email"  name="adresse" class="form-control @error('adresse') is-invalid @enderror" placeholder="Entrer votre adresse email" >

                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                                
                            </div>

                             <button class="btn btn-success" type="submit">Soumettre</button>

     </form>


            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Nous suivre ?</h4>
                    <a href="#"><img src="images/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="images/twitter.png" alt="twitter"></a>
                    <a href="#"><img src="images/linkedin.png" alt="linkedin"></a>
                    <a href="#"><img src="images/instagram.png" alt="instagram"></a>
            </div>

             <div class="col-lg-3 col-sm-3">
                    <h4>Contactez nous ?</h4>
                    <p><b>Jhos </b><br>
<span class="glyphicon glyphicon-map-marker"></span> BP 0026 IMSP PORTO-NOVO (BENIN)<br>
<span class="glyphicon glyphicon-envelope"></span>julien.guidihounme@imsp-uac.org<br>
<span class="glyphicon glyphicon-earphone"></span> (00229) 97124431</p>
            </div>
        </div>
<p class="copyright">Copyright 2021. All rights reserved ...Pas de meilleur sans effort....	</p>


</div></div>




<!-- Modal -->

        
<!-- /.modal -->



</body>
</html>



