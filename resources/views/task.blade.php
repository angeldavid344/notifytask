<div class="box box-info padding-1">
    <div class="box-body">
        // create me a form where date_end is a calendar and a clock to select the time
        {{ Form::label('date_end') }}
        {{ Form::text('date_end', $task->date_end, ['class' => 'form-control' . ($errors->has('date_end') ? ' is-invalid' : ''), 'placeholder' => 'Date End']) }}
        {!! $errors->first('date_end', '<div class="invalid-feedback">:message</div>') !!}

        //make me a component where date_end is a calendar where i can choose date and time
        {{ Form::label('date_end') }}
        {{ Form::text('date_end', $task->date_end, ['class' => 'form-control' . ($errors->has('date_end') ? ' is-invalid' : ''), 'placeholder' => 'Date End']) }}
        {!! $errors->first('date_end', '<div class="invalid-feedback">:message</div>') !!}
    
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>