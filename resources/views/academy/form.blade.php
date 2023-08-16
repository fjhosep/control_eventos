<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre de la Academia') }}
            {{ Form::text('name', $academy->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Director') }}
            {{ Form::text('director', $academy->director, ['class' => 'form-control' . ($errors->has('director') ? ' is-invalid' : ''), 'placeholder' => 'Director']) }}
            {!! $errors->first('director', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dirección') }}
            {{ Form::text('address', $academy->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ciudad') }}
            {{ Form::text('city', $academy->city, ['class' => 'form-control' . ($errors->has('city') ? ' is-invalid' : ''), 'placeholder' => 'City']) }}
            {!! $errors->first('city', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Provincia o Estado') }}
            {{ Form::text('province', $academy->province, ['class' => 'form-control' . ($errors->has('province') ? ' is-invalid' : ''), 'placeholder' => 'Province']) }}
            {!! $errors->first('province', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('País') }}
            {{ Form::text('country', $academy->country, ['class' => 'form-control' . ($errors->has('country') ? ' is-invalid' : ''), 'placeholder' => 'Country']) }}
            {!! $errors->first('country', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Número de Teléfono') }}
            {{ Form::text('phone_number', $academy->phone_number, ['class' => 'form-control' . ($errors->has('phone_number') ? ' is-invalid' : ''), 'placeholder' => 'Phone Number']) }}
            {!! $errors->first('phone_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Número de Teléfomo Movil') }}
            {{ Form::text('mobile_phone', $academy->mobile_phone, ['class' => 'form-control' . ($errors->has('mobile_phone') ? ' is-invalid' : ''), 'placeholder' => 'Mobile Phone']) }}
            {!! $errors->first('mobile_phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo') }}
            {{ Form::email('email', $academy->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <!--Footer-->
    <div class="card-footer ml-auto mr-auto  ">
        <button type="submit" class="btn btn-primary mx-auto">Enviar</button>
    </div>
    <!--End footer-->
</div>