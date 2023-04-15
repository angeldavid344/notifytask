@extends('adminlte::page')

@section('title', 'task')
{{-- @extends('layouts.app') --}}

@section('template_title')
    Task
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Task') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tasks.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Name Task</th>
										{{-- <th>Id Status</th> --}}
										<th>Description</th>
										{{-- <th>Id User</th> --}}
										<th>Date Ini</th>
										<th>Date End</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tasks as $task)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        
                                        <td>{{ $task->name_task }}</td>
                                        {{-- <td>{{ $task->id_status }}</td>  --}}
                                        <td>{{ $task->description }}</td>
                                        {{-- <td>{{ $task->id_user }}</td> --}}
                                        <td>{{ $task->date_ini }}</td>
                                        <td>{{ $task->date_end }}</td>

                                            <td>
                                                <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">
                                                    
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tasks.show',$task->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    @role('Admin')
                                                    <a class="btn btn-sm btn-success" href="{{ route('tasks.edit',$task->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                        <a href="/avisoTasks " class="btn btn-primary btn-sm float-right"  data-placement="left"><i class="fas fa-retweet"></i>
                                                          {{ __('recordatorio') }}
                                                        </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                    
                                                    @endrole
                                                    
                                                </form>
                                                
                                                @endforeach
                                            </td>
                                        </tr>
                                        
                                        
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tasks->links() !!}
            </div>
        </div>
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop