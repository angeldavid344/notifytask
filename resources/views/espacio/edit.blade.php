@extends('adminlte::page')

@section('title', 'Espacio')

@section('template_title')
    {{ __('Update') }} Espacio
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Espacio</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('espacio.update', $espacio->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('espacio.form')

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