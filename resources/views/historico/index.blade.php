@extends('layouts.historico')
@section('content')

<body>
    <table class="table table-dark table-hover">
    <thead>
        <tr>
        <th scope="col">Id Vehiculo</th>
        <th scope="col">Dueño anterior</th>
        <th scope="col">Dueño nuevo</th>
        <th scope="col">Fecha</th>
        </tr>
    </thead>
    <tbody>
        @foreach($historicos as $historico)
        <tr>
        <th scope="row">{{$historico->vehiculo_id}}</th>
        <td>{{$historico->old_user_id}}</td>
        <td>{{$historico->new_user_id}}</td>
        <td>{{$historico->created_at}}</td>
        <td>
            <a class="btn btn-primary" href="#" role="button">Editar</a>
            <a class="btn btn-primary" href="#" role="button">Ver autos</a>
            <a class="btn btn-primary" href="#" role="button">Eliminar</a>
        </td>
        </tr>
        @endforeach
        
    </tbody>
    </table>
</body>

@endsection