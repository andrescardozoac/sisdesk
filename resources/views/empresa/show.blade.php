@extends('plantilla.plantilla')

@section('titulo','Mostrar Empresa')

@section('contenido')

  
<div class="container">
     <br>
     @include('empresa.navuser')


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('empresa.index')}}">Inicio</a></li>
    <li class="breadcrumb-item"><a>Mostrar Empresa</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{$Empresa->nombre}}</li>
  </ol>
</nav>
</div>


<form action="{{route('empresa.update',$Empresa->id)}}" method="POST">
@method('PUT')
@csrf

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
                                
                                <h3 class="register-heading">Mostrar Empresa</h3>
                                                            
                                <div class="row register-form">

                                <div class="col-md-6">                                        

                                    <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-map-marker-alt text-info"></i></div>
                                                </div>
                                            @php($tipoIDDesc=['NIT','MUNICIPIO','DEPARTAMENTO','DISTRITO'])
                                            @php($tipoIDVal=['NI','MU','DE','DI'])
                                            @php($cont=0)

                                             <select name ="tipoIdentificacion" class="form-control" required disabled="true">
                                                <option class="hidden" disabled>Tipo Identificación</option>
                                                
                                                @foreach($tipoIDVal as $tipo)
                                               
                                                <option value = "<?php echo $tipo;?>"

                                                    @if ($Empresa->tipoid == $tipo)
                                                        selected
                                                    @endif
                                                    
                                                >{{$tipoIDDesc[$cont]}}
                                                </option>
                                                @php($cont++)
                                                @endforeach  
                                            </select>
                                            </div>
                                    </div>
                                
                                        
                                    

                                        <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                                </div>
                                            <input disabled="true" type="text" class="form-control" id="nombreEmpresa" name="nombreEmpresa" placeholder="Nombre Empresa" required="" value="{{$Empresa->nombre}}" disabled="true">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-building  text-info"></i></div>
                                                </div>
                                                @php($tipoEmp=['IPS','OTRA'])
                                             <select name ="tipoEmpresa" class="form-control" required disabled="true">
                                                <option class="hidden" selected disabled value="">Tipo Empresa</option>
                                                @foreach($tipoEmp as $tipoE)
                                               
                                                <option value = "<?php echo $tipoE;?>"

                                                    @if ($Empresa->tipoEmpresa == $tipoE)
                                                        selected
                                                    @endif
                                                    
                                                >{{$tipoE}}
                                                </option>
                                                @endforeach  
                                            </select>
                                            </div>
                                    </div>

                                

                                        <div id ="divHabilitacion" class="form-group" style="display:none">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user-edit text-info"></i></div>
                                                </div>
                                            <input type="number" class="form-control" id="codigohabilitacion" name="codigohabilitacion" placeholder="Codigo Habilitacion" required="" value="{{$Empresa->codHabilitacion}}" disabled="true"/>
                                            </div>
                                        </div>

                                        
                                        @if($Empresa->rol == '1')
                                            @php($empresa = 'checked')
                                            @php($particular = '')
                                        @else
                                            @php($empresa = '')
                                            @php($particular = 'checked')
                                        @endif
                                     
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="rol" value="1" {{$empresa}} disabled="true">
                                                    <span> Fabricante/Importador </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="rol" value="2" {{$particular}} disabled="true">
                                                    <span> No Aplica </span> 
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
                                             <input type="text" name="identificacion" class="form-control" placeholder="Identificación" value="{{$Empresa->identificacion}}" required="" disabled="true"/>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa  fa-at text-info"></i></div>
                                                </div>
                                             <input type="email" name="email" class="form-control" placeholder="Email" value="{{$Empresa->correo}}" required disabled="true"/>
                                            </div>
                                        </div>
                                      
                                        <div class="form-group">
                                           <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
                                                </div>
                                            <input class="form-control" type="number" name="telefono" placeholder="Telefono: 18491115555" id="telefono" value="{{$Empresa->telefono}}" required disabled="true"> 
                                            </div>
                                        </div>
                                        
                                        <a  href="{{route('empresa.edit',$Empresa->id)}}" class="redondo btn btn-success btncolorblanco">
                                                        <i class="fa fa-edit"></i> Editar 
                                                      </a>
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