@extends('adminlte::page')

@section('title', 'Coworker')

@section('template_title')
    {{ $coworker->name ?? "{{ __('Show') Coworker" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Coworker</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('coworker.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $coworker->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Contrato Id:</strong>
                            {{ $coworker->contrato_id }}
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