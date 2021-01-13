@extends('layouts.template')

@section('content')
<h1 class="mt-4"><i class="fas fa-arrow-up"></i> Dados Gerais </h1>

<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Cod</th>
                <th>Unidade</th>                
                <th>Morador</th>
                <th>Data</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($encomendas as $encomenda)
            <tr>
                <td>{{$encomenda->code}}</td>
                <td>{{$encomenda->unidade['unidade']}}</td>                
                <td>{{$encomenda->morador['name']}} {{$encomenda->morador['lastname']}}</td>
                <td> {{ date('d/m/Y h:i:s A', strtotime($encomenda->created_at)) }}</td>
                @if ($encomenda->status == 'Aguardando Retirada')
                    <td><span class="badge badge-danger">{{$encomenda->status}} </span></td>
                @endif
                @if ($encomenda->status == 'Entregue')
                    <td><span class="badge badge-success">{{$encomenda->status}} </span></td>
                @endif
                
                <td>
                    <a class="btn btn-warning btn-group-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bars"></i> 
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#"><i class="fas fa-sms"></i> Notificar</a>
                        <a class="dropdown-item" href="{{ route('realizarcheckout', ['id' => $encomenda->id])}}"><i class="fas fa-check-double"></i> Realizar Checkout</a>
                    </div>
                </td>           
            </tr>
            @endforeach
            
        </tbody>
    </table>
   
</div>


<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            responsive: true,
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese-Brasil.json'
            }
        });
    });
</script>
@endsection