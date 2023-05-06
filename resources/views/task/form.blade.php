<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name_task', 'Sala') }}
            {{ Form::select('name_task', ['sala de reuniones' => 'Sala de reuniones'], $task->name_task, ['class' => 'form-control' . ($errors->has('name_task') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona una sala']) }}
            {!! $errors->first('name_task', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const salaSelect = document.querySelector('#name_task');
                const descriptionInput = document.querySelector('#description');
        
                salaSelect.addEventListener('change', function () {
                    if (this.value === 'sala de reuniones') {
                        descriptionInput.value = 'Esta es una sala totalmente equipada para un total de 20 personas';
                    } else {
                        descriptionInput.value = '';
                    }
                });
            });
        </script>
        
        <div class="form-group">
            {{ Form::label('description', 'Descripción') }}
            {{ Form::text('description', $task->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Descripción', 'id' => 'description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        {{-- <div class="form-group">
            {{ Form::label('id_user') }}
            {{ Form::text('id_user', auth()->id(), ['class' => 'form-control', 'readonly' => true]) }}
        </div> --}}
        <div class="form-group">
            {{ Form::label('date_ini') }}
            <input type="datetime-local" class="form-controller" name="date_ini" id="date_ini" value="{{ $currentDateTime }}" required='true'>
        </div>
        <div class="form-group">
            {{ Form::label('date_end') }}
            <input type="datetime-local" class="form-controller" name="date_end" id="date_end" value="{{ $currentDateTime }}" required='true'>
        </div>

        {{-- <div class="form-group">
            {{ Form::label('date_end') }}
            {{ Form::select('date_end', $horasDisponibles, null, ['class' => 'form-control' . ($errors->has('date_end') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione la fecha y hora de finalización']) }}
            {!! $errors->first('date_end', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
       

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary" onclick="return confirm('¿Estás seguro de que deseas seguir con la accion?')">{{ __('Submit') }}</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas cancelar la accion?')">{{ __('Cancel') }}</a>
    </div>
</div>