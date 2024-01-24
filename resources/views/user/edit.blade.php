@extends('layouts.user')
@section('content')
<form method="post" action="{{route('user.update',['user'=>$user])}}">
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
  </div>

  <div class="mb-3">
    <label for="apellidos" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{$user->apellidos}}">
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Correo</label>
    <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Contraseña</label>
    <input type="text" class="form-control" id="password" name="password">
  </div>

  <input class="btn btn-primary" type="submit" value="Editar">
</form>

@endsection