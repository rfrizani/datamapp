@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card border-dark mb-12">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5 class="card-title">Bem vindo {{ Auth::user()->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Progresso Atendido</h6>


                    <div style="margin-top: 1%" class="progress">
                    <div id="risco" class="progress-bar progress-bar-striped" role="progressbar" style="width: {{ isset($statu->porcentagem) ? number_format($statu->porcentagem, 2, '.', '') : 0 }}%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">{{ isset($statu->porcentagem) ? number_format($statu->porcentagem, 2, ',', '') : 0 }}%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
