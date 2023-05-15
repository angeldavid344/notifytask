<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $espacio->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo', 'Tipo') }}
            {{ Form::select('tipo', ['oficina' => 'Oficina', 'puesto' => 'Puesto', 'sala' => 'Sala', 'servicio' => 'Servicio'], $espacio->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un tipo']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('is_reservable', 'Is Reservable') }}
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-secondary {{ $espacio->is_reservable == 1 ? 'active' : '' }}">
                    {{ Form::radio('is_reservable', 1, $espacio->is_reservable == 1) }} {{ $espacio->is_reservable == 1 ? 'Sí' : 'No' }}
                </label>
                <label class="btn btn-secondary {{ $espacio->is_reservable == 0 ? 'active' : '' }}">
                    {{ Form::radio('is_reservable', 0, $espacio->is_reservable == 0) }} {{ $espacio->is_reservable == 0 ? 'Sí' : 'No' }}
                </label>
            </div>
            {!! $errors->first('is_reservable', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>