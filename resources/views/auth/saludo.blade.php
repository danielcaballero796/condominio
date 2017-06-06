@extends('layouts.app')

@section('content')
<div class="col-xs-5 selectContainer">


<table class="table">
<thead>
      <tr>
        <th class="active">nombre</th>
        <th class="active">correo</th>
        <th class="active">modificar</th> 
      </tr>
        @<?php foreach ($vivi as $vivi): ?>
       <tbody>
        <tr>
        <td class="active">{{$vivi['name']}}</td>
        <td class="active">{{$vivi['email']}}</td>
        <td class="active"><button type="submit" class="btn btn-primary">modificar</button></td>
        </tr>
        </tbody>

        <?php endforeach ?>
                
    </thead>
</table>

</div>
@endsection