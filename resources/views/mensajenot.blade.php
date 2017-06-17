@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Notificación para {{$user->name}}</div>
                    <div class="panel-body">
                        {!! Form::open(['route' => ['mensaje.store'], 'method' => 'POST', 'class' => 'form-horizontal']) !!}

                        <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                            <label for="id" class="col-md-4 control-label">ID del Usuario</label>

                            <div class="col-md-6">
                                {!! Form::text('iduser',$user->id,['class' => 'form-control','placeholder'=>'ID','readonly' => 'readonly', 'required']) !!}

                                @if ($errors->has('id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('asunto') ? ' has-error' : '' }}">
                            <label for="asunto" class="col-md-4 control-label">Asunto</label>

                            <div class="col-md-6">
                                {!! Form::text('asunto',null,['class' => 'form-control','placeholder'=>'Asunto', 'required']) !!}

                                @if ($errors->has('asunto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('asunto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mensaje') ? ' has-error' : '' }}">
                            <label for="mensaje" class="col-md-4 control-label">Mensaje</label>

                            <div class="col-md-6">
                                {!! Form::textArea('info',null,['class' => 'form-control','placeholder'=>'Mensaje', 'required']) !!}

                                @if ($errors->has('mensaje'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mensaje') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
                            <label for="tipo" class="col-md-4 control-label">Tipo</label>

                            <div class="col-md-6">
                                {!! Form::select('tipo',['normal' => 'Normal','importante' => 'Importante','urgente' => 'Urgente'],null,['class' => 'form-control']) !!}

                                @if ($errors->has('tipo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tipo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }}">
                            <label for="fecha" class="col-md-4 control-label">Fecha</label>

                            <div class="col-md-6">
                                {!! Form::date('fecha',\Carbon\Carbon::now(),['class' => 'form-control','placeholder'=>'Fecha', 'required']) !!}

                                @if ($errors->has('fecha'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fecha') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop