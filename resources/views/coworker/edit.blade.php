@extends('adminlte::page')

@section('title', 'Coworker')

@section('template_title')
    {{ __('Update') }} Coworker
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Coworker</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('coworker.update', $coworker->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
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