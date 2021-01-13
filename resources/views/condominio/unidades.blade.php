@extends('layouts.template')
@section('content')




<h1 class="mt-4"><i class="fas fa-arrow-down"></i> Apartamentos </h1>

<div class="card mb-4">
    <div class="card-header">

        <i class="fas fa-table mr-1"></i> Listagem de Apartamentos
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Bloco</th>
                        <th>Apartamento</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($unidades as $unidade)
                    <tr>
                        <td>{{$unidade->id}}</td>
                        <td>{{$unidade->bloco}}</td>
                        <td>{{$unidade->unidade}}</td>
                        <td>
                            <a class="btn btn-warning btn-group-sm dropdown-toggle" href="#" role="button"
                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bars"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#"><i class="fas fa-edit"></i> Editar</a>
                                <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i> Apagar</a>
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
    $(document).ready(function () {
        $('#dataTable').DataTable({
            responsive: true,
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese-Brasil.json'
            }
        });
    });
</script>

@endsection