@extends('adminlte::page')

@section('title', 'Reserva')

@section('template_title')
    {{ $reserva->name ?? "{{ __('Show') Reserva" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Reserva</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reservas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Persona:</strong>
                            {{ $reserva->nombre_persona }}
                        </div>
                        <div class="form-group">
                            <strong>Detalles:</strong>
                            {{ $reserva->detalles }}
                        </div>
                        <div class="form-group">
                            <strong>Espacio Id:</strong>
                            {{ $reserva->espacio_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $reserva->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Ini:</strong>
                            {{ $reserva->hora_ini }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Fin:</strong>
                            {{ $reserva->hora_fin }}
                        </div>
                        <div class="form-group">
                            <strong>Co Id:</strong>
                            {{ $reserva->co_id }}
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