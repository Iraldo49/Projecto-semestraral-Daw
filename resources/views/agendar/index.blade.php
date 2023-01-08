@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Marcação</h1>
@stop

@section('content')
<div id="content">
  <div class="container mb-3">
    <form method="POST">
      
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title font-weight-bold" style="text-align: center;">Lista Marcação </h3>
            </div>


            <div class="card-body">
              <a href="{{ url (' /agendar/create') }}" class="btn btn-success btn-sm" title="Add New Event">
                  Adicionar novo 
              </a>
          </div>

          <table class="table caption-top">
            
            <thead>
              <tr>
                <th scope="col">Nr.</th>
                <th scope="col">Nome</th>
                <th scope="col">Apelido</th>
                <th scope="col">Email</th>
                <th scope="col">Evento</th>
                <th scope="col">Pacote</th>
                <th scope="col">Data</th>
                <th scope="col">Estado</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ( $agendar as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nome }}</td>
                <td>{{ $item->apelido}}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->evento}}</td>
                <td>{{ $item->pacote}}</td>
                <td>{{ $item->data}}</td>
                <td>{{ $item->estado}}</td>

                <td>
                  
                  {{-- <a href="/agendar/edit/{{  $item->id }}" title="view evento"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Ver</button></a>
                  <a href=""  title="edit evento"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-Square-o" aria-hidden="true"></i>Edit</button></a> --}}
                  <a  href="/agendar/show/{{  $item->id }}" class="btn btn-primary" href="#" role="button">ver</a>
                  <a  href="/agendar/edit/{{  $item->id }}" class="btn btn-primary" href="#" role="button">edit</a>
                  {{-- <a href="" title="delete evento"></a> --}}
                
                {{-- <form method="POST" action=" {{ url ('/agendar' . '/' . $item->id) }} " accept-charset="UTF-8" style="display: inline" >
                  {{ method_field ('DELETE')}}
                  {{csrf_field()}}
                  <button type="submit" class="btn btn-danger btn-sm" title="delete agendar" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i>Remover Evento</button>
                </form> --}}
                </td>
              </tr>
           
              @endforeach
            </tbody>
            
            

          </table>
          <div class="py4">
            {{ $agendar->links() }}
        </div>


            {{-- <div class="card-body">
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
                      <option value="Outros">Outros</option>
                    </select>

                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="validationServer04">Pacote</label>
                    <select class="custom-select " id="validationServer04" name="pacote"
                      aria-describedby="validationServer04Feedback" required>
                      <option disabled selected value>Selecione o Pacote</option>
                      <option value="Basic">Basic</option>
                      <option value="Normal">Normal</option>
                      <option value="Plus">Plus</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="date">Data </label>
                    <input type="date" class="date form-control" placeholder="data" name="data"id="data" required>
                  </div>
                  {{-- <div class="col-md-12 mb-3">
                    <label for="message" class="form-label">Discrição do Evento</label>
                    <textarea class="form-control" rows="3" cols="50" id="message"name="message" placeholder="Dê a Discrição:" tabindex="4"></textarea>
                  </div> --}}
                {{-- </div>
                <button class="btn btn-primary" type="submit">Marcar</button>
                <button class="btn btn-primary" type="submit">Imprimir</button>
              </div>
            </div> --}} 
          </div>
        </div>
      </div>
    </form>
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
