<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre del Evento') }}
            {{ Form::text('name', $event->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese Datos del Evento']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Lugar') }}
            {{ Form::text('place', $event->place, ['class' => 'form-control' . ($errors->has('place') ? ' is-invalid' : ''), 'placeholder' => 'Sitio donde se llevará a cabo el Evento']) }}
            {!! $errors->first('place', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dirección') }}
            {{ Form::text('address', $event->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Dirección exacta del Evento']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('País') }}
            {{ Form::text('country', $event->country, ['class' => 'form-control' . ($errors->has('country') ? ' is-invalid' : ''), 'placeholder' => 'País donde se realizará el Evento']) }}
            {!! $errors->first('country', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado o Provincia') }}
            {{ Form::text('province', $event->province, ['class' => 'form-control' . ($errors->has('province') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el Estado o Provincia']) }}
            {!! $errors->first('province', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ciudad') }}
            {{ Form::text('city', $event->city, ['class' => 'form-control' . ($errors->has('city') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad donde se realizará el Evento']) }}
            {!! $errors->first('city', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Organizado por:') }}
            {{ Form::text('organizer', $event->organizer, ['class' => 'form-control' . ($errors->has('organizer') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de los organizadores del evento']) }}
            {!! $errors->first('organizer', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de inicio del Evento') }}
            {{ Form::text('dateStart', $event->dateStart, ['class' => 'form-control' . ($errors->has('dateStart') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Inicio']) }}
            {!! $errors->first('dateStart', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de culminación del Evento') }}
            {{ Form::text('dateEnd', $event->dateEnd, ['class' => 'form-control' . ($errors->has('dateEnd') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de Cuminción']) }}
            {!! $errors->first('dateEnd', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <!--Footer-->
    <div class="card-footer ml-auto mr-auto  ">
        <button type="submit" class="btn btn-primary mx-auto">Enviar</button>
    </div>
    <!--End footer-->
</div>