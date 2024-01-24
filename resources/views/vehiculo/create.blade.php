@extends('layouts.cars')
@section('content')
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
<label for="year" class="form-label">Dueño</label>
<select class="form-select form-select-sm" aria-label="Dueño">
  <option selected>Seleccionar</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
</div>

<div class="mb-3">
  <label for="precio" class="form-label">Precio</label>
  <input type="number" class="form-control" id="precio" name="precio">
</div>

@endsection