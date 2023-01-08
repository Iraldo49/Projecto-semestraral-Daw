@extends('layouts.main')

@section('title', 'IK|FOTOGRAFIA')
 
@section('content')
    <!-- ======= Contact Section ======= -->
     {{-- <div id="contact" class="contact-area">
        <div class="contact-inner area-padding">
          <div class="contact-overly"></div>
          <div class="container mt-5">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                  <h2> Marcação de Sessões </h2>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
          <div class="container">



        <div class="row justify-content-center mt-4">

          <div class="col-lg-9">
            
            <form action="{{ url('agendar')}}" method="post">
             {!! csrf_field() !!}

             
             <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Apelido" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-3">
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
                <div class="col-md-6 form-group mt-3 mt-md-3">
                 
                  <select class="form-control " id="validationServer04" name="pacote"
                      aria-describedby="validationServer04Feedback" required>
                      <option disabled selected value>Selecione o Pacote</option>
                      <option value="Basic">Basic</option>
                      <option value="Standard">Standard</option>
                      <option value="Premium">Premium</option>
                    </select>
                </div>
    
                <div class="form-group mt-3">
                 <textarea class="form-control" name="message" rows="5" placeholder="Comentarios" required></textarea>
                </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> --
              <div class="text-center"><button type="submit">Marcar Sessão </button></div> 
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->
            </div>
          </div>
        </div>
    </div>--}}
    <div id="content" style=" margin-top: 100px;">
  <div class="container mb-3" >
    
      {{-- <div class="container my-3" style=" margin-top: 5px;">
        <div class="alert alert-success">
      </div> --}}
      {{-- <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title font-weight-bold" style="text-align: center; margin-top: 5px;">Marcação </h3>
            </div> --}}

            <form action="{{ url('agendar')}}" method="post" >
                {!! csrf_field() !!}
        
           <div class="card-body">
              <div class="form-row">
                
                  <div class="col-md-4 mb-3" style="align-items: center">
                    <label for="validationServer01" >Nome</label>
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
                    <select class="form-select" aria-label="Default select example" name="evento">
                      <option disabled selected value>Selecione o Evento</option>
                      <option value="Shoot">Shoot</option>
                      <option value="Casamento">Casamento</option>
                      <option value="Estudio">Estudio</option>
                      <option value="Outros">Outros</option>
                    </select>

                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="validationServer04">Pacote</label>
                    <select class="form-select" aria-label="Default select example" name="pacote">
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
                    <select class="form-select" aria-label="Default select example" name="estado">
                      <option value="Pendente" class="badge bg-primary">Pendente</option>
                      {{-- <option value="Confirmado " class="badge bg-success">Confirmado</option>
                      <option value="Cancelado" class="badge bg-danger">Cancelado</option> --}}
                    </select>
                  </div>
                  {{-- <div class="col-md-12 mb-3">
                    <label for="message" class="form-label">Discrição do Evento</label>
                    <textarea class="form-control" rows="3" cols="50" id="message"name="message" placeholder="Dê a Discrição:" tabindex="4"></textarea>
                  </div> --}}
                 </div>
                <button class="btn btn-success" type="submit" value="save" >Marcar</button>
                {{-- <button class="btn btn-primary" type="submit">Imprimir</button> --}}
              </div>
            </div> 
          </div>
        </form>
        {{-- </div>
      </div>
    
  </div>
</div>

</div>

  </div>
</div> --}}





@endsection