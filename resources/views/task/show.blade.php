@extends('adminlte::page')

@section('title', 'task')
{{-- @extends('layouts.app') --}}

@section('template_title')
    {{ $task->name ?? "{{ __('Show') Task" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Task</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tasks.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name Task:</strong>
                            {{ $task->name_task }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $task->description }}
                        </div>
                        <div class="form-group">
                            <strong>Date Ini:</strong>
                            {{ $task->date_ini }}
                        </div>
                        <div class="form-group">
                            <strong>Date End:</strong>
                            {{ $task->date_end }}
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