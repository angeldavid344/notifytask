@extends('adminlte::page')

@section('title', 'Reserva')

@section('template_title')
    Reserva
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Reserva') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('reserva.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre Persona</th>
										<th>Detalles</th>
										<th>Espacio Id</th>
										<th>Fecha</th>
										<th>Hora Ini</th>
										<th>Hora Fin</th>
										<th>Co Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservas as $reserva)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $reserva->nombre_persona }}</td>
											<td>{{ $reserva->detalles }}</td>
											<td>{{ $reserva->espacio_id }}</td>
											<td>{{ $reserva->fecha }}</td>
											<td>{{ $reserva->hora_ini }}</td>
											<td>{{ $reserva->hora_fin }}</td>
											<td>{{ $reserva->co_id }}</td>

                                            <td>
                                                <form action="{{ route('reserva.destroy',$reserva->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('reserva.show',$reserva->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('reserva.edit',$reserva->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $reservas->links() !!}
            </div>
        </div>
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop