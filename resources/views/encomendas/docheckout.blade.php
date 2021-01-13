@extends('layouts.template')

@section('content')
<h1 class="mt-4"><i class="fas fa-arrow-up"></i> Realizar entrega </h1>
@include('layouts/flash-message')

<div class="row">
  <div class="col-md-12">

    <ul class="list-group">
      <li class="list-group-item"><b>Codigo Retirada:</b> {{$encomenda->code}} -
      @if($encomenda->urlimg)
        <a href="#" data-toggle="modal" data-target="#imgModal"><i class="fas fa-camera"></i>
          Visualizar imagem</a></li>
      @else
         <i> Imagem não cadastrada</i>
      @endif

      @if ($encomenda->status == 'Aguardando Retirada')
      <li class="list-group-item"><b>Status:</b> <span class="badge badge-danger">{{$encomenda->status}} </span> </li>
      @endif
      @if ($encomenda->status == 'Entregue')
      <li class="list-group-item"><b>Status:</b> <span class="badge badge-success">{{$encomenda->status}} </span> </li>
      @endif

      <li class="list-group-item"><b>Morador(a):</b> {{$encomenda->morador['name']}}
        {{$encomenda->morador['lastname']}} - <b>Unidade:</b> {{$encomenda->unidade['unidade']}}</li>
      @if($encomenda->ref_pacote)
      <li class="list-group-item"><b>Referência Pacote:</b> {{$encomenda->ref_pacote}}</li>
      @endif
    </ul>
    <br>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Informações do Recebedor</h5>
        <form method="POST" action="{{ route('realizarcheckout', ['id' => $encomenda->id]) }}">
          @csrf
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Recebedor</label>
            <div class="col-sm-10">
              <input type="text" name="nome_recebedor" id="nome_recebedor" class="form-control"
                value="{{$encomenda->morador['name']}} {{$encomenda->morador['lastname']}}" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Documento</label>
            <div class="col-sm-10">
              <input type="text" name="doc_recebedor" class="form-control" id="inputPassword" required>
              <small id="emailHelp" class="form-text text-muted">Deve ser CPF ou RG</small>
            </div>
          </div>

          <button type=" submit" class="btn btn-info  btn-block">Realizar Checkin</button>

        </form>


      </div>
    </div>


  </div>

  <!-- Photo Modal -->
  <div class="modal fade" id="imgModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Imagem do pacote de {{$encomenda->morador['name']}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="/storage/{{$encomenda->urlimg}}" class="img-fluid" alt="">
        </div>

      </div>
    </div>
  </div>

  <script>
    var nome_recebedor = document.getElementById("nome_recebedor");
    nome_recebedor.addEventListener("click", function () {
      this.focus();
      this.select();
    })

  </script>

  @endsection