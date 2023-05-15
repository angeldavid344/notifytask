@extends('adminlte::page')

@section('title', 'Espacio')

@section('template_title')
    {{ $espacio->name ?? "{{ __('Show') Espacio" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Espacio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('espacio.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $espacio->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $espacio->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Is Reservable:</strong>
                            {{ $espacio->is_reservable }}
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