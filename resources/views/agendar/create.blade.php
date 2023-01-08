@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Marcação</h1>
@stop

@section('content')
<div id="content">
  <div class="container mb-3">
    
      
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title font-weight-bold" style="text-align: center;">Marcação </h3>
            </div>

            <form action="{{ url('agendar') }}" method="post">
                {!! csrf_field() !!}
        
           <div class="card-body">
              <div class="form-row">
                
                  <div class="col-md-4 mb-3">
                    <label for="validationServer01">Nome</label>
                    <input type="text" class="form-control" placeholder="Insira o Nome:" name="nome" required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationServer02">Apelido</label>
                    <input type="text" class="form-control " placeholder="Insira o Apelido:" name="apelido" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" placeholder="Insira o Email:" name="email" id="inputEmail4"
                      required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationServer04 ">Evento</label>
                    <select class="custom-select " id="validationServer04" name="evento"
                      aria-describedby="validationServer04Feedback" required>
                      <option disabled selected value>Selecione o Evento</option>
                      <option value="Shoot">Shoot</option>
                      <option value="Casamento">Casamento</option>
                      <option value="Estudio">Estudio</option>
                      <option value="Outros">Outros</option>
                    </select>

                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="validationServer04">Pacote</label>
                    <select class="custom-select " id="validationServer04" name="pacote"
                      aria-describedby="validationServer04Feedback" required>
                      <option disabled selected value>Selecione o Pacote</option>
                      <option value="Basic">Basic</option>
                      <option value="Standard">Standard</option>
                      <option value="Premium">Premium</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="date">Data </label>
                    <input type="date" class="date form-control" placeholder="data" name="data"id="data" required>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="validationServer04">Estado</label>
                    <select class="custom-select " id="validationServer04" name="estado"
                      aria-describedby="validationServer04Feedback" required>
                      <option value="Pendente" class="badge bg-primary">Pendente</option>
                      <option value="Confirmado " class="badge bg-success">Confirmado</option>
                      <option value="Cancelado" class="badge bg-danger">Cancelado</option>
                    </select>
                  </div>
                 
                 </div>
                <button class="btn btn-success" type="submit" value="save" >Marcar</button>
                {{-- <button class="btn btn-primary" type="submit">Imprimir</button> --}}
              </div>
            </div> 
          </div>
        </form>
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
