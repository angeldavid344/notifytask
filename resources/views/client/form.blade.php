<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('first_name') }}
            {{ Form::text('first_name', $client->first_name, ['class' => 'form-control' . ($errors->has('first_name') ? ' is-invalid' : ''), 'placeholder' => 'First Name']) }}
            {!! $errors->first('first_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('second_name') }}
            {{ Form::text('second_name', $client->second_name, ['class' => 'form-control' . ($errors->has('second_name') ? ' is-invalid' : ''), 'placeholder' => 'Second Name']) }}
            {!! $errors->first('second_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Surname') }}
            {{ Form::text('Surname', $client->Surname, ['class' => 'form-control' . ($errors->has('Surname') ? ' is-invalid' : ''), 'placeholder' => 'Surname']) }}
            {!! $errors->first('Surname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('second_surname') }}
            {{ Form::text('second_surname', $client->second_surname, ['class' => 'form-control' . ($errors->has('second_surname') ? ' is-invalid' : ''), 'placeholder' => 'Second Surname']) }}
            {!! $errors->first('second_surname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('identification_document') }}
            {{ Form::text('identification_document', $client->identification_document, ['class' => 'form-control' . ($errors->has('identification_document') ? ' is-invalid' : ''), 'placeholder' => 'Identification Document']) }}
            {!! $errors->first('identification_document', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nationality') }}
            {{ Form::text('nationality', $client->nationality, ['class' => 'form-control' . ($errors->has('nationality') ? ' is-invalid' : ''), 'placeholder' => 'Nationality']) }}
            {!! $errors->first('nationality', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sex') }}
            {{ Form::select('sex', ['M' => 'Masculino', 'F' => 'Femenino', 'ND' => 'No definido'], $client->sex, ['class' => 'form-control' . ($errors->has('sex') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione su sexo']) }}
            {!! $errors->first('sex', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        {{-- <div class="form-group">
            {{ Form::label('birthdate') }}
            {{ Form::text('birthdate', $client->birthdate, ['class' => 'form-control' . ($errors->has('birthdate') ? ' is-invalid' : ''), 'placeholder' => 'Birthdate']) }}
            {!! $errors->first('birthdate', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('birthdate') }}
        <input type="date" class="form-controller" name="birthdate" id="birthdate" required='true'>
            {{-- {{ Form::select('date_ini', $task->date_ini, ['class' => 'form-control' . ($errors->has('date_ini') ? ' is-invalid' : ''), 'placeholder' => 'Date Ini']) }}
            {!! $errors->first('date_ini', '<div class="invalid-feedback">:message</div>') !!} --}}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $client->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mobile_number') }}
            {{ Form::text('mobile_number', $client->mobile_number, ['class' => 'form-control' . ($errors->has('mobile_number') ? ' is-invalid' : ''), 'placeholder' => 'Mobile Number']) }}
            {!! $errors->first('mobile_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('country') }}
            {{ Form::text('country', $client->country, ['class' => 'form-control' . ($errors->has('country') ? ' is-invalid' : ''), 'placeholder' => 'Country']) }}
            {!! $errors->first('country', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('home') }}
            {{ Form::text('home', $client->home, ['class' => 'form-control' . ($errors->has('home') ? ' is-invalid' : ''), 'placeholder' => 'Home']) }}
            {!! $errors->first('home', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::select('status', ['Pr' => 'Prospecto', 'Cl' => 'Cliente', 'Fn' => 'Finalizado'], $client->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un estado']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary" onclick="return confirm('¿Estás seguro de que deseas ejecutar esta accion?')">{{ __('Submit') }}</button>
        <a href="{{ route('client.index') }}" class="btn btn-danger"onclick="return confirm('¿Estás seguro de que deseas cancelar esta accion?')">{{ __('Cancel') }}</a>
    </div>
</div>