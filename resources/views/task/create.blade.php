@extends('adminlte::page')

@section('title', 'Task')

{{-- @section('content_header')
    <h1>Task</h1>
@stop --}}

{{-- @extends('layouts.app') --}}

@section('template_title')
    {{ __('Create') }} Task
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Task</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tasks.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('task.form')

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
