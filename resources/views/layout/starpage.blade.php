@extends('layout.layout')

@section('title','MediLink')

@section('content')
	<div class="row blue lighten-2" style="margin: 0px;text-align: center;">
        <div class="col s12 m12">
        <h6 class="textShadow">MediLink++</h6>
        </div>
  </div>

    <nav class="blue lighten-3">
    <div class="nav-wrapper">
      
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      <ul class="right hide-on-med-and-down">
        <li><a  href="index.html">Inicio</a></li>
        <li><a  href="Ayuda.html">Ayuda</a></li>
        <li><a  href="Acercade.html">Conocenos</a></li>
        <li><a  href="{{ route('users.login') }}">Ingresar</a></li>
        <li><a  href="{{ route('users.signup') }}">Registrarse</a></li>

      </ul>
     
    </div>
  </nav>
        
      	
      <div class="container">
        <div class="row">
          <div class="col s12 m12"> 
            <div class="slider">
              <ul class="slides">
                <li>
                  <img src="img/cirugias.jpg">
                  <div class="caption center-align">
                  </div>
                </li>
                <li>
                  <img src="img/cuidadofamiliar.jpg">
                  <div class="caption left-align">
                    <h3 class="black-text">Sientete seguro con nosotros</h3>
                    <h5 class="light black-text text-lighten-3">con la mejor atencion para nuestros clientes y su Familia</h5>
                  </div>
                </li>
                <li>
                  <img src="img/especialistas.jpg">
                  <div class="caption right-align">
                    <h3 class="black-text">En la Red con los mejores Medicos</h3>
                    <h5 class="light black-text text-lighten-3"></h5>
                  </div>
                </li>
                <li>
                  <img src="img/recetas.jpg">
                  <div class="caption right-align">
                    <h3 class="black-text">Recetas Medicas</h3>
                    <h5 class="light black-text text-lighten-3"></h5>
                  </div>
                </li>
                <li>
                  <img src="img/medicamentos.jpg">
                  <div class="caption right-align">
                    <h3 class="black-text">Medicinas</h3>
                    <h5 class="light black-text text-lighten-3"></h5>
                  </div>
                </li>

              </ul>
            
            </div>
            <br>
            <br>
  
  
          </div>
  
        </div>
      </div>
     
      	
      	
      	

        
        <div id="ourTeam" class="container section scrollspy">
        <div class="row">
        <div class="col s12 m12">
        <h2> Testimonios de Pacientes</h2>
        </div>

        </div>
        
        <div class="row">
        	
        	<div class="col s12 m12">
        <div class="card-panel blue lighten-3 z-depth-4">
          <div class="row valign-wrapper">
            <div class="col s4">
              <img src="img/pf1.png" alt="" class="responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s12 m12">
              <p>
                No tuve problemas para ingresar, y es muy intuitivo!
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 m12">
        <div class="card-panel blue lighten-3 z-depth-4">
          <div class="row valign-wrapper">
            <div class="col s4">
              <img src="img/pf2.png" alt="" class="responsive-img"> 
            </div>
            <div class="col s12 m3">
              <span class="black-text">
                Por mi edad siempre he tenido problemas en estas platformas, pero aqui me atienden facilmente y siempre me responden para cuando tengo dudas
                
              </span>
            </div>
          </div>
        </div>
      </div>
      
      
      
      
      <div class="col s12 m12">
        <div class="card-panel blue lighten-3 z-depth-4">
          <div class="row valign-wrapper">
            <div class="col s4">
              <img src="../../img/pf3.png" alt="" class="responsive-img"> 
            </div>
            <div class="col s12 m3">
              <span class="black-text">
                Nunca habia visto algo similar, siempre me tocaba hacer filas y ahora solo presiono unos botones desde mi telefono y listo, sin complicaciones realizo lo que necesito
                </span>
            </div>
          </div>
        </div>
      </div>
      
      
      
        </div>
      </div>  
      
      
      
      <br>
      <br>
      
      
      <div id="ourProjectss" class="section scrollspy">
      <div class="container">
      	<h2>Centros Medicos</h2>
      	<br>
      	<br>
      	<div class="row">
      		
      		
      		<div class="col s12 m6">
      			
      			<ul class="demo-3">
			    <li>
			        <figure>
			            <img src="img/hospital-panoramica.jpg" class="responsive-img" alt=""/>
			            <figcaption>
			                <h2>La Primera Clinica de nuestra Familia  </h2>
			               
			            </figcaption>
			        </figure>
			    </li>
			</ul>
	      </div>
	      
	      
	      <div class="col s12 m6">
      			
      			<ul class="demo-3">
			    <li>
			        <figure>
			            <img src="img/Hospital-Maria7.jpg" class="responsive-img" alt=""/>
			            <figcaption>
			                <h2>Primer Hospital de nuestra Familia
                      </h2>
			               
			            </figcaption>
			        </figure>
			    </li>
			</ul>
	      </div>
	      
	      <div class="col s12 m6">
      			
      			<ul class="demo-3">
			    <li>
			        <figure>
			            <img src="img/porsalud1.jpg" class="responsive-img" alt=""/>
			            <figcaption>
			                <h2>Nueva Clinica Agregada a nuestra Familia</h2>
			               
			            </figcaption>
			        </figure>
			    </li>
			</ul>
	      </div>
      					
      					
    </div><!--row-->
    
  </div><!--container-->
   </div>
      
      <br>
      <br>
      
       <div class="parallax-container section scrollspy valign-wrapper" id="aboutus">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="center row col s3">
        	
        	<h3 class="aboutUs" >Acerca de </h3>
       </div>
        <div class="center row col s12" style="color: rgb(8, 4, 4);">
        	<p>Nos esforzamos cada dia para tener una red a tu Disposicion con un servicio de Calidad</p>
       </div>
       
      </div>
    </div>
    <div class="parallax"><img src="/../../img/images.jpg" alt="img"></div>
  </div>
      
  <br>
      
      
      
      
  
	</div>
</div>
 
      
@endsection