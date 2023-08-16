<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Academia de Procedencia') }}
            {{ Form::select('id_academy', $academies, $participant->id_academy, ['class' => 'form-control' . ($errors->has('id_academy') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione']) }}
            {!! $errors->first('id_academy', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Cédula / Pasaporte') }}
            {{ Form::text('cardId', $participant->cardId, ['class' => 'form-control' . ($errors->has('cardId') ? ' is-invalid' : ''), 'placeholder' => 'Cardid']) }}
            {!! $errors->first('cardId', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $participant->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido') }}
            {{ Form::text('lastName', $participant->lastName, ['class' => 'form-control' . ($errors->has('lastName') ? ' is-invalid' : ''), 'placeholder' => 'Lastname']) }}
            {!! $errors->first('lastName', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Nacimiento') }}
            {{ Form::date('birthName', $participant->birthName, ['class' => 'form-control' . ($errors->has('birthName') ? ' is-invalid' : ''), 'placeholder' => 'Birthname']) }}
            {!! $errors->first('birthName', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ciudad') }}
            {{ Form::text('city', $participant->city, ['class' => 'form-control' . ($errors->has('city') ? ' is-invalid' : ''), 'placeholder' => 'City']) }}
            {!! $errors->first('city', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado/  Provincia') }}
            {{ Form::text('province', $participant->province, ['class' => 'form-control' . ($errors->has('province') ? ' is-invalid' : ''), 'placeholder' => 'Province']) }}
            {!! $errors->first('province', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('País') }}
            {{ Form::text('country', $participant->country, ['class' => 'form-control' . ($errors->has('country') ? ' is-invalid' : ''), 'placeholder' => 'Country']) }}
            {!! $errors->first('country', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Número de Teléfono') }}
            {{ Form::text('phone_number', $participant->phone_number, ['class' => 'form-control' . ($errors->has('phone_number') ? ' is-invalid' : ''), 'placeholder' => 'Phone Number']) }}
            {!! $errors->first('phone_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono Movil') }}
            {{ Form::text('mobile_phone', $participant->mobile_phone, ['class' => 'form-control' . ($errors->has('mobile_phone') ? ' is-invalid' : ''), 'placeholder' => 'Mobile Phone']) }}
            {!! $errors->first('mobile_phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo') }}
            {{ Form::email('email', $participant->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::hidden('user', Auth::user()->name, ['class' => 'form-control' . ($errors->has('user') ? ' is-invalid' : ''), 'placeholder' => 'User']) }}
            {!! $errors->first('user', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <!--Footer-->
    <div class="card-footer ml-auto mr-auto  ">
        <button type="submit" class="btn btn-primary mx-auto">Enviar</button>
    </div>
    <!--End footer-->
</div>