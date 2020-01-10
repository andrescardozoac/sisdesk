@extends('plantilla.plantilla')

@section('titulo','Empresa')


@section('contenido')
<!--
<div class="container-fluid registerinicio">
                <div class="row">
                    <div class="col-md-6 register-left register-left1">
                    <img src="http://www.idaipqroo.org.mx/wp-content/uploads/2018/06/proteccion-de-datos-personales-791x1024.png" alt=""/>
                    </div>    
                    <div class="col-md-6 register-left">
                        
                        <h3>Bienvenid@</h3>
                        <p>Por favor llena los datos correctamente en el sistema!</p>
                        
                    </div>    
                </div>
</div>
-->


<div class="container-fluid ">


@if(session('datos'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
{{session('datos')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</div>

@endif

@if(session('cancelar'))

<div class="alert alert-danger alert-dismissible fade show" role="alert">
{{session('cancelar')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</div>

@endif
 <br>
@include('empresa.navuser')


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"><a href="{{route('empresa.index')}}">Inicio</a></li>
  </ol>
</nav>

   <br>
      <h1 class="text-center">Datos Empresa</h1>

      <br>
<div class="row float-right">
    <a href="{{route('empresa.create')}}"  class="btn btn-info btncolorblanco"><i class="fas fa-user-plus"></i> Agregar Empresa</a>
</div>
   <br>

<table class="table-responsive table text-center">
                                              <thead>
                                                <tr>
                                                  <th scope="col">Tipo ID.</th>
                                                  <th scope="col">Identificacion</th>
                                                  <th scope="col">Empresa</th>
                                                  <th scope="col">Correo</th>
                                                  <th scope="col">Telefono</th>
                                                  <th scope="col">Descripción</th>
                                                  <th scope="col">Tipo Empresa</th>
                                                  <th scope="col">Enlace de Descarga</th>
                                                  <th scope="col">Acción</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                              <?php
                                          
                                             $user = App\User::findOrFail(Auth::user()->id);
                                             $emp = $user->empresas;
                                             ?>
                                              @foreach($emp as $Empresaitem)
                                                <tr>
                                                  <th scope="row">{{$Empresaitem->tipoid}}</th>
                                                  <td>{{$Empresaitem->identificacion}}</td>
                                                  <td>
                                                  <a href="{{route('empresa.show',$Empresaitem->id)}}">
                                                  {{$Empresaitem->nombre}}
                                                  
                                                  </a>
                                                  
                                                 </td>
                                                  <td>{{$Empresaitem->correo}}</td>
                                                  <td>{{$Empresaitem->telefono}}</td>
                                                  <td>{{$Empresaitem->descripcion}}</td>
                                                  <td>{{$Empresaitem->tipoEmpresa}}</td>
                                                  <td> <a href="{{route('empresa.download',$Empresaitem->id)}}">
                                                  Descargar Aplicativo</td>
                                                  <td><a  href="{{route('empresa.edit',$Empresaitem->id)}}" class="btn btn-success btncolorblanco">
                                                        <i class="fa fa-edit"></i> Editar 
                                                      </a>

                                                      <a href="{{route('empresa.confirm',$Empresaitem->id)}}" class="btn btn-danger btncolorblanco">
                                                        <i class="fa fa-trash-alt"></i> Eliminar 
                                                      </a>
                                                  </td>
                                                  
                                                </tr>
                                                @endforeach

                                              </tbody>
                                            </table>
{{$Empresa->links()}}

</div>

<!-- @include('plantilla.footer',['container'=>'container-fluid'])-->
    @endsection
