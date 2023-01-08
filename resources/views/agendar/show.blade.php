@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<div id="content">
  <div class="container mb-3">
    
    <div class="container my-3">
      <div class="alert alert-success"></div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title font-weight-bold" style="text-align: center;">Listagem</h3>
            </div>
            <div class="card-bady">
            <div class="card-bady">
              <h5 class="card-title"> Nome : {{ $agendar->nome }}</h5><br>
              <h5 class="card-title">Apelido : {{ $agendar->apelido }}</h5>
              <p class="card-text"> Email: {{ $agendar->email }}</p>
              <p class="card-text"> Evento: {{ $agendar->evento }}</p>
              <p class="card-text"> Pacote: {{ $agendar->pacote }}</p>
              <p class="card-text"> Data: {{ $agendar->data }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

 
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop
