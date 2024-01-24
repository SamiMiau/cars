@extends('layouts.cars')
@section('content')
  <form method="post" action="{{route('vehiculo.store')}}">
    @csrf
    @method('post')
    <div class="mb-3">
      <label for="marca" class="form-label">Marca</label>
      <input type="text" class="form-control" id="marca" name="marca">
    </div>

    <div class="mb-3">
      <label for="modelo" class="form-label">Modelo</label>
      <input type="text" class="form-control" id="modelo" name="modelo">
    </div>

    <div class="mb-3">
      <label for="year" class="form-label">Año</label>
      <input type="number" class="form-control" id="year" name="year">
    </div>

    <div class="mb-3">
    <label for="user_id" class="form-label">Dueño</label>
    <select class="form-select form-select-sm" id="user_id" name="user_id" aria-label="user_id">
      <option selected>Seleccionar</option>
      @foreach($users as $user)
      <option value="{{$user->id}}">{{$user->name}}</option>
      @endforeach
    </select>
    </div>

    <div class="mb-3">
      <label for="precio" class="form-label">Precio</label>
      <input type="number" class="form-control" id="precio" name="precio">
    </div>

    <input class="btn btn-primary" type="submit" value="Crear">
  </form>

@endsection