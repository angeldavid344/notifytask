@extends('adminlte::page')

@section('title', 'task')
{{-- @extends('layouts.app') --}}

@section('template_title')
    {{ __('Update') }} Task
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Task</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tasks.update', $task->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
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