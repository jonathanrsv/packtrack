@extends('layouts.template')
@section('content')

<h1 class="mt-4"><i class="fas fa-arrow-down"></i> Checkin </h1>

@include('layouts/flash-message')
<form method="POST" action="{{ route('insert_checkin') }}">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Unidade</label>
        <select class="form-control selectpicker" name="unidademorador" data-live-search="true" required>
            <option value="">Selecione uma unidade</option>
            @foreach ($moradores as $morador)
            <option value="{{$morador->unidade['id']}}-{{$morador->id}}">{{$morador->unidade['unidade']}} - {{$morador->name}}</option>
            @endforeach
        </select>
    </div>
    <input type="text" class="form-control" id="base_img" name="base_img" value='' hidden />
    <input type="text" class="form-control" name="morador_id" hidden />
    <div class="form-group">
        <label for="exampleInputPassword1">Referencia pacote</label>
        <input type="text" name="refpacote" class="form-control" id="" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Observação p/ morador</label>
        <input type="text" name="obs" class="form-control" id="" autocomplete="off">
    </div>

    <div class="form-group">        
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalCamera">
            Inserir foto
        </button>
    </div>
    <button type=" submit" class="btn btn-info  btn-block">Realizar Checkin</button>
</form>

<!-- Modal Camera -->
<div class="modal fade" id="modalCamera" tabindex="-1" role="dialog" aria-labelledby="modalCamera" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Camera</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="area">
                    <video class="embed-responsive-item" autoplay="true" id="webCamera">
                    </video>
                    <img id="imagemConvertida" />
                    <span style="font-size: 35px;" onclick="takeSnapShot()">
                        <i class="fas fa-camera"></i>
                    </span>
                    <span style="font-size: 35px;" onclick="takeSnapShotAgain()">
                        <i class="fas fa-redo-alt"></i>
                    </span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>               
              </div>
        </div>
    </div>
</div>
@endsection