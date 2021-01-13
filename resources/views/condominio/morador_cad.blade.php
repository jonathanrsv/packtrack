@extends('layouts.template')

@section('content')
<h1 class="mt-4"><i class="far fa-keyboard"></i> Cadastrar Morador </h1>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i> Formulario
    </div>
    <div class="card-body">
        <form>
            
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Unidade</label>
                <div class="col-sm-10">
                    <select id="inputState" class="form-control">
                        <option selected>Selecione a unidade...</option>
                        <option>...</option>
                      </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nome">
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Sobrenome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Sobrenome">
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Telefone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="telefone">
                </div>
            </div>


        </form>

    </div>


</div>



@include('layouts.flash-message')
@endsection