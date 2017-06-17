@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Modificar el Registro de {{$user->name}}</div>
                    <div class="panel-body">
                        {!! Form::open(['route' => ['users.update',$user], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nombre</label>

                                <div class="col-md-6">
                                    {!! Form::text('name',$user->name,['class' => 'form-control','placeholder'=>'Nombre', 'required']) !!}

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Correo</label>

                                <div class="col-md-6">
                                    {!! Form::email('email',$user->email,['class' => 'form-control','placeholder'=>'Correo', 'required']) !!}

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('numero') ? ' has-error' : '' }}">
                                <label for="numero" class="col-md-4 control-label">Número y bloque de la casa</label>

                                <div class="col-md-6">
                                    {!! Form::select('numero',[
                                   '101' => '101','102' => '102','103' => '103',
                                   '201' => '201','202' => '202','203' => '203',
                                   '301' => '301','302' => '302','303' => '303',],$user->numero,['class' => 'form-control', 'placeholder'=>'número de la casa', 'required']) !!}

                                    {!! Form::select('bloque',['a' => 'a','b' => 'b'],$user->bloque,['class' => 'form-control','placeholder'=>'bloque de la casa', 'required']) !!}

                                    @if ($errors->has('numero'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('numero') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Contraseña</label>

                                <div class="col-md-6">
                                    {!! Form::password('password',['class' => 'form-control','placeholder'=>'Contraseña', 'required']) !!}

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirmar
                                    Contraseña</label>

                                <div class="col-md-6">
                                    {!! Form::password('password-confirm',['class' => 'form-control','placeholder'=>'Confirmar Contraseña', 'required']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Modificar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

