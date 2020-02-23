@extends('plantilla.plantilla')

@section('titulo','Crear Empresa')

@section('contenido')

  
<div class="container">
     <br>
     @include('empresa.navuser')


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('empresa.index')}}">Inicio</a></li>
  <li class="breadcrumb-item active" aria-current="page">Crear Empresa</li>
  </ol>
</nav>
</div>





<form action="{{route('empresa.store')}}" method="post">
@csrf
 
    <input type="hidden" name="id_user" value="{{ Auth::user()->id }}"/>

<div class="container register">


                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="{{ asset('images/imagen1.png') }}" alt=""/>
                        <h3>Bienvenid@</h3>
                        <p>Por favor llena los datos correctamente en el sistema!</p>
                        
                    </div>
                    <div class="col-md-9 register-right">
                 
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                
                                <h3 class="register-heading">Crear Empresa</h3>
                                                            
                                <div class="row register-form">

                                <div class="col-md-6">                                        

                                    <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-map-marker-alt text-info"></i></div>
                                                </div>
                                             <select name ="tipoIdentificacion" class="form-control" required>
                                                <option class="hidden" selected disabled value="">Tipo Identificación</option>
                                                <option value = "NI">NIT</option>
                                                <option value = "MU">MUNICIPIO</option>
                                                <option value = "DE">DEPARTAMENTO</option>
                                                <option value = "DI">DISTRITO</option>
                                            </select>
                                            </div>
                                    </div>
                                
                                        
                                    

                                        <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                                </div>
                                            <input type="text" class="form-control" id="nombreEmpresa" name="nombreEmpresa" placeholder="Nombre Empresa" maxlength="50" required="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user-edit text-info"></i></div>
                                                </div>
                                            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" maxlength="50">
                                            </div>
                                        </div>

                                        
                                     
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="tipoEmpresa" value="Empresa" checked>
                                                    <span> Empresa </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="tipoEmpresa" value="Particular">
                                                    <span>Particular </span> 
                                                </label>
                                            </div>
                                        </div>
                                    
                                </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-address-card text-info"></i></div>
                                                </div>
                                             <input type="text" name="identificacion" class="form-control" placeholder="Identificación" value="" maxlength="20" required=""/>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa  fa-at text-info"></i></div>
                                                </div>
                                             <input type="email" name="email" class="form-control" placeholder="Email" value="" maxlength="50" required/>
                                            </div>
                                        </div>
                                      
                                        <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
                                                </div>
                                            <input class="form-control" type="text" name="telefono" placeholder="Telefono: 18491115555" id="telefono" maxlength="20" required> 
                                            </div>
                                        </div>
                                        
                                    <button type="submit" class="redondo btn btn-info"><i class="fas fa-save"></i> Guardar</button>
                                    <a href="{{route('cancelar')}}" class="redondo btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a>
                                </div>
                            </div>
                            </div>
                       
                        </div>
                    </div>
                </div>

            </div>

</form>
<!--@include('plantilla.footer',['container'=>'container'])-->
@endsection
