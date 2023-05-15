<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $contrato->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant_dias') }}
            {{ Form::text('cant_dias', $contrato->cant_dias, ['class' => 'form-control' . ($errors->has('cant_dias') ? ' is-invalid' : ''), 'placeholder' => 'Cant Dias']) }}
            {!! $errors->first('cant_dias', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant_horas') }}
            {{ Form::text('cant_horas', $contrato->cant_horas, ['class' => 'form-control' . ($errors->has('cant_horas') ? ' is-invalid' : ''), 'placeholder' => 'Cant Horas']) }}
            {!! $errors->first('cant_horas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cant_horas_sala') }}
            {{ Form::text('cant_horas_sala', $contrato->cant_horas_sala, ['class' => 'form-control' . ($errors->has('cant_horas_sala') ? ' is-invalid' : ''), 'placeholder' => 'Cant Horas Sala']) }}
            {!! $errors->first('cant_horas_sala', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('importe') }}
            {{ Form::text('importe', $contrato->importe, ['class' => 'form-control' . ($errors->has('importe') ? ' is-invalid' : ''), 'placeholder' => 'Importe']) }}
            {!! $errors->first('importe', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>