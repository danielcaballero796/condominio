@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Reserva de Instalaciones</div>
                    <div class="panel-body">
                        {!! Form::open(['route' => ['reserva.store'], 'method' => 'POST', 'class' => 'form-horizontal']) !!}


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

                        <div class="form-group{{ $errors->has('valor') ? ' has-error' : '' }}">
                            <label for="valor" class="col-md-4 control-label">Valor</label>

                            <div class="col-md-6">
                                {!! Form::number('valor',null,['class' => 'form-control','placeholder'=>'Valor', 'required']) !!}

                                @if ($errors->has('valor'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('valor') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('numero') ? ' has-error' : '' }}">
                            <label for="numero" class="col-md-4 control-label">Numero</label>


                            <div class="col-md-6">
                                {!! Form::select('numero',[
                                '101' => '101','102' => '102','103' => '103',
                                '201' => '201','202' => '202','203' => '203',
                                '301' => '301','302' => '302','303' => '303',],null,['class' => 'form-control']) !!}

                                @if ($errors->has('numero'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('numero') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="bloque" class="col-md-4 control-label">Bloque</label>
                            <div class="col-md-6">
                                {!! Form::select('bloque',['a' => 'a','b' => 'b'],null,['class' => 'form-control']) !!}

                                @if ($errors->has('bloque'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bloque') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('numero') ? ' has-error' : '' }}">
                            <label for="instalacion" class="col-md-4 control-label">Instalacion</label>


                            <div class="col-md-6">
                                {!! Form::select('instalacion',['150' => 'Piscina','151' => 'Salon 1','152' => 'Salon 2','153' => 'Quiosco'],null,['class' => 'form-control']) !!}

                                @if ($errors->has('instalacion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('instalacion') }}</strong>
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