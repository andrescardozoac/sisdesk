@extends('plantilla.plantilla')

@section('titulo','SISDESK')


@section('contenido')
<div class="container py-5">
<h1>¿Desea eliminar el registro de la empresa: {{$Empresa->nombre}} ?</h1>


<form method="post" action="{{route('empresa.destroy',$Empresa->id)}}">
@method('DELETE')
@csrf

<input type="hidden" name="id_user" value="{{ Auth::user()->id }}"/>

<button type="submit" class="redondo btn btn-danger">
<i class="fas fa-trash-alt"></i>Eliminar
</button>
<a class = "redondo btn btn-secondary" href="{{route('cancelar')}}">
<i class="fas fa-ban"></i>Cancelar
</a>
</form>

</div>

<!--@include('plantilla.footer',['container'=>'container'])-->
@endsection