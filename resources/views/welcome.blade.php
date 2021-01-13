@extends('layouts.landingpages')

@section('content')
<div class="container" style="
    padding-top: 50px;">
    <div class="row align-items-center">
        <div class="col-md-6 text-center">
           <h1><i class="fas fa-exchange-alt"></i> PackTrack</h1>
          
           <p>Tratando suas encomendas com agilidade!</p>
           <a href="/login" type="button" class="btn btn-primary btn-sm ">Entrar</a>
        </div>
        <div class="col-md-6 ">
            <img src="{{ asset('img/delivery.png') }}" class="img-fluid" alt="" />
        </div>
        </div>
    </div>
</div>
@endsection
