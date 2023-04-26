@extends('adminlte::page')

@section('title', 'category')

{{-- @extends('layouts.app') --}}

@section('template_title')
    {{ $category->name ?? "{{ __('Show') Category" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Category</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('category.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $category->name }}
                        </div>
                        <div class="form-group">
                            <strong>Category:</strong>
                            {{ $category->category }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $category->status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

