@extends('adminlte::page')

@section('title', 'Client')

@section('template_title')
    {{ $client->name ?? "{{ __('Show') Client" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Client</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('client.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>First Name:</strong>
                            {{ $client->first_name }}
                        </div>
                        <div class="form-group">
                            <strong>Second Name:</strong>
                            {{ $client->second_name }}
                        </div>
                        <div class="form-group">
                            <strong>Surname:</strong>
                            {{ $client->Surname }}
                        </div>
                        <div class="form-group">
                            <strong>Second Surname:</strong>
                            {{ $client->second_surname }}
                        </div>
                        <div class="form-group">
                            <strong>Identification Document:</strong>
                            {{ $client->identification_document }}
                        </div>
                        <div class="form-group">
                            <strong>Nationality:</strong>
                            {{ $client->nationality }}
                        </div>
                        <div class="form-group">
                            <strong>Sex:</strong>
                            {{ $client->sex }}
                        </div>
                        <div class="form-group">
                            <strong>Birthdate:</strong>
                            {{ $client->birthdate }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $client->email }}
                        </div>
                        <div class="form-group">
                            <strong>Mobile Number:</strong>
                            {{ $client->mobile_number }}
                        </div>
                        <div class="form-group">
                            <strong>Country:</strong>
                            {{ $client->country }}
                        </div>
                        <div class="form-group">
                            <strong>Home:</strong>
                            {{ $client->home }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $client->status }}
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