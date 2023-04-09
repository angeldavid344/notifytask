<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name_task') }}
            {{ Form::text('name_task', $task->name_task, ['class' => 'form-control' . ($errors->has('name_task') ? ' is-invalid' : ''), 'placeholder' => 'Name Task']) }}
            {!! $errors->first('name_task', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        {{-- <div class="form-group">
            {{ Form::label('id_status') }}
            {{ Form::text('id_status', $task->id_status, ['class' => 'form-control' . ($errors->has('id_status') ? ' is-invalid' : ''), 'placeholder' => 'Id Status']) }}
            {!! $errors->first('id_status', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $task->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        {{-- <div class="form-group">
            {{ Form::label('id_user') }}
            {{ Form::text('id_user', $task->id_user, ['class' => 'form-control' . ($errors->has('id_user') ? ' is-invalid' : ''), 'placeholder' => 'Id User']) }}
            {!! $errors->first('id_user', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('date_ini') }}
            {{ Form::text('date_ini', $task->date_ini, ['class' => 'form-control' . ($errors->has('date_ini') ? ' is-invalid' : ''), 'placeholder' => 'Date Ini']) }}
            {!! $errors->first('date_ini', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date_end') }}
            {{ Form::text('date_end', $task->date_end, ['class' => 'form-control' . ($errors->has('date_end') ? ' is-invalid' : ''), 'placeholder' => 'Date End']) }}
            {!! $errors->first('date_end', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>