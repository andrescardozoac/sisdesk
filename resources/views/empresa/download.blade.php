@extends('plantilla.plantilla')

@section('titulo','Mostrar Empresa')

@section('contenido')

  
<div class="container">
     <br>
     @include('empresa.navuser')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('empresa.index')}}">Inicio</a></li>
    <li class="breadcrumb-item"><a>Descargar Aplicativo</a></li>
   <!-- <li class="breadcrumb-item active" aria-current="page">{{$Empresa->nombre}}</li>-->
  </ol>
</nav>
</div>


<div class="container register">


                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="http://www.idaipqroo.org.mx/wp-content/uploads/2018/06/proteccion-de-datos-personales-791x1024.png"/>
                        <h3>Bienvenid@</h3>
                        <p>Por favor seleccione el Sistema Operativo y Descarge el Aplicativo!</p>
                        
                    </div>
                    <div class="col-md-9 register-right">
                 
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                
                                <h3 class="register-heading">Descargar Aplicación - SISDESK</h3>
                                                            
                                <div class="row register-form">

                                <div class="col-md-6">                                        

                                    <div class="form-group">
                                            
                                                <img src="http://127.0.0.1/sisdesk/resources/images/win.png"  style="width:20%;" />
                                                Windows
                                                <a href="#" download="sisdesk.exe">
                                                <img src="http://127.0.0.1/sisdesk/resources/images/btn.png" style="width:40%;"/>
                                                </a>
                                    </div>
                                    

                                        <div class="form-group">
                                           
                                                
                                                <img src="http://127.0.0.1/sisdesk/resources/images/mac.png" style="width:20%;" />
                                                Mac OSX
                                                <a href="#" download="sisdesk.pkg">
                                                <img src="http://127.0.0.1/sisdesk/resources/images/btn.png" style="width:40%;"/>
                                                <a/>
                                        </div>

                                        <div class="form-group">
                                           
                                                <img src="http://127.0.0.1/sisdesk/resources/images/lin.png" style="width:25%;"/>
                                                Linux
                                                <a href="#" download="sisdesk.deb">
                                                <img src="http://127.0.0.1/sisdesk/resources/images/btn.png" style="width:40%;"/>
                                                </a>
                                        </div>

                                    
                                </div>

                                
                           
                            </div>
                            </div>
                       
                        </div>
                    </div>
                </div>

            </div>
<!--@include('plantilla.footer',['container'=>'container'])-->
@endsection