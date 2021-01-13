@extends('layouts.template')

@section('content')
<h1 class="mt-4"><i class="fas fa-arrow-up"></i> Moradores </h1>
<div class="card mb-4">

@include('layouts.flash-message')

    <div class="card-header">
        <i class="fas fa-table mr-1"></i> Encomendas aguardando retirada
    </div>
    <div class="card-body">
    
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>                
                <th>Telefone</th>
                <th>Unidade</th>
                <th>Ações</th>
               
            </tr>
        </thead>
        
        <tbody>
            @foreach ($moradores as $morador)
            <tr>
                <td>{{$morador->id}}</td>
                <td>{{$morador->name}} {{$morador->lastname}}</td>
                <td>{{$morador->celphone}}</td>         
                <td>{{$morador->unidade['unidade']}}</td>  
                <td>
                    <a class="btn btn-warning btn-group-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bars"></i> 
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#"><i class="far fa-edit"></i> Editar</a>
                        <a class="dropdown-item" href="{{ route('deletarmorador', ['id' => $morador->id])}}"><i class="far fa-trash-alt"></i> Apagar</a>
                    </div>
                </td>                
              
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

    </div>
</div>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            responsive: true,
            "order": [[ 4, "asc" ]],
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese-Brasil.json'
            }
        });
    });
</script>
@endsection