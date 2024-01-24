@extends('layouts.user')
@section('content')

<body>
    <table class="table table-dark table-hover">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Correo</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->apellidos}}</td>
        <td>{{$user->email}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('user.edit',['user'=>$user])}}" role="button">Editar</a>
            <a class="btn btn-primary" href="#" role="button">Ver autos</a>
            <a class="btn btn-primary" href="#" role="button">Eliminar</a>
        </td>
        </tr>
        @endforeach
        
    </tbody>
    </table>
</body>

@endsection