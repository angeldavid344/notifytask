@extends('layouts.app')

@section('template_title')
    {{ $contrato->name ?? "{{ __('Show') Contrato" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Contrato</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contrato.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $contrato->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cant Dias:</strong>
                            {{ $contrato->cant_dias }}
                        </div>
                        <div class="form-group">
                            <strong>Cant Horas:</strong>
                            {{ $contrato->cant_horas }}
                        </div>
                        <div class="form-group">
                            <strong>Cant Horas Sala:</strong>
                            {{ $contrato->cant_horas_sala }}
                        </div>
                        <div class="form-group">
                            <strong>Importe:</strong>
                            {{ $contrato->importe }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop