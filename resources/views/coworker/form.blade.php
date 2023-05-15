<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('user_id', 'User') }}
            {{ Form::select('user_id', $users, $coworker->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un usuario']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contrato_id', 'Contrato') }}
            {{ Form::select('contrato_id', $contratos, $coworker->contrato_id, ['class' => 'form-control' . ($errors->has('contrato_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un contrato']) }}
            {!! $errors->first('contrato_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>