@extends('adminlte::page')

@section('title', 'Client')

@section('template_title')
    Client
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Client') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('client.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>First Name</th>
										<th>Second Name</th>
										<th>Surname</th>
										<th>Second Surname</th>
										<th>Identification Document</th>
										<th>Nationality</th>
										<th>Sex</th>
										<th>Birthdate</th>
										<th>Email</th>
										<th>Mobile Number</th>
										<th>Country</th>
										<th>Home</th>
										<th>Status</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $client)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $client->first_name }}</td>
											<td>{{ $client->second_name }}</td>
											<td>{{ $client->Surname }}</td>
											<td>{{ $client->second_surname }}</td>
											<td>{{ $client->identification_document }}</td>
											<td>{{ $client->nationality }}</td>
											<td>{{ $client->sex }}</td>
											<td>{{ $client->birthdate }}</td>
											<td>{{ $client->email }}</td>
											<td>{{ $client->mobile_number }}</td>
											<td>{{ $client->country }}</td>
											<td>{{ $client->home }}</td>
											<td>{{ $client->status }}</td>

                                            <td>
                                                <form action="{{ route('client.destroy',$client->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('client.show',$client->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('client.edit',$client->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $clients->links() !!}
            </div>
        </div>
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop