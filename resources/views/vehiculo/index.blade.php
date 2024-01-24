@extends('layouts.cars')
@section('content')

<body>
    <table class="table table-dark table-hover">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Año</th>
        <th scope="col">Precio</th>
        <th scope="col">Dueño</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($vehiculos as $vehiculo)
        <tr>
        <th scope="row">{{$vehiculo->id}}</th>
        <td>{{$vehiculo->marca}}</td>
        <td>{{$vehiculo->modelo}}</td>
        <td>{{$vehiculo->year}}</td>
        <td>{{$vehiculo->precio}}</td>
        <td>{{$vehiculo->user->name}} {{$vehiculo->user->apellidos}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('vehiculo.edit',['vehiculo'=>$vehiculo])}}" role="button">Editar</a>
            <a class="btn btn-primary" href="#" role="button">Ver dueño</a>
            <a class="btn btn-primary" href="#" role="button">Eliminar</a>
        </td>
        </tr>
        @endforeach
        
    </tbody>
    </table>
</body>

@endsection