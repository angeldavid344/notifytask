@extends('adminlte::page')

@section('title', 'Coworker')

@section('template_title')
    {{ __('Create') }} Coworker
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Coworker</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('coworker.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('coworker.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop