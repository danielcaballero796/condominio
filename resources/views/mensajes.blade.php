@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Notificaciones</div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <th>ID Usuario</th>
                            <th>ID Notificacion</th>
                            <th>Asunto</th>
                            <th>Mensaje</th>
                            <th>Tipo</th>
                            <th>Fecha</th>
                            <th></th>
                            </thead>
                            <tbody>
                            @foreach($todos as $noti)
                                <tr>
                                    <td>{{$noti->iduser}}</td>
                                    <td>{{$noti->idnotificacion}}</td>
                                    <td>{{$noti->asunto}}</td>
                                    <td>{{$noti->info}}</td>
                                    <td>
                                        @if($noti->tipo == "normal")
                                            <span class="label label-primary">{{$noti->tipo}}</span>
                                        @elseif($noti->tipo == "importante")
                                            <span class="label label-warning">{{$noti->tipo}}</span>
                                        @else
                                            <span class="label label-danger">{{$noti->tipo}}</span>
                                        @endif
                                    </td>
                                    <td>{{$noti->fecha}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $todos->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop