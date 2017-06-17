@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Registro</div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Número</th>
                                    <th>Bloque</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->numero}}</td>
                                            <td>{{$user->bloque}}</td>
                                            <td><a href="{{ route('users.edit',$user->id)}}" class="btn btn-warning">modificar</a>


                                                <a href="{{route('users.destroy',$user->id)}}"
                                                   onclick="return confirm('¿Seguro que deseas eliminarlo?')"
                                                   class="btn btn-danger">eliminar</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection