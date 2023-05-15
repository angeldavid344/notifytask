<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_persona') }}
            {{ Form::text('nombre_persona', $reserva->nombre_persona, ['class' => 'form-control' . ($errors->has('nombre_persona') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Persona']) }}
            {!! $errors->first('nombre_persona', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('detalles') }}
            {{ Form::text('detalles', $reserva->detalles, ['class' => 'form-control' . ($errors->has('detalles') ? ' is-invalid' : ''), 'placeholder' => 'Detalles']) }}
            {!! $errors->first('detalles', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('espacio_id', 'Espacio') }}
            {{ Form::select('espacio_id', $espacios, null, ['class' => 'form-control' . ($errors->has('espacio_id') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un espacio']) }}
            {!! $errors->first('espacio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::date('fecha', $reserva->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_ini') }}
            {{ Form::time('hora_ini', $reserva->hora_ini, ['class' => 'form-control' . ($errors->has('hora_ini') ? ' is-invalid' : ''), 'placeholder' => 'Hora Ini']) }}
            {!! $errors->first('hora_ini', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_fin') }}
            {{ Form::time('hora_fin', $reserva->hora_fin, ['class' => 'form-control' . ($errors->has('hora_fin') ? ' is-invalid' : ''), 'placeholder' => 'Hora Fin']) }}
            {!! $errors->first('hora_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('co_id', 'Co Id') }}
            {{ Form::text('co_id', $co_id, ['class' => 'form-control', 'readonly' => 'readonly']) }}
            {!! $errors->first('co_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>