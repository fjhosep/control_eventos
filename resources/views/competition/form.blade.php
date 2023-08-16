<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $competition->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de la Competencia']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('code', $competition->code, ['class' => 'form-control' . ($errors->has('code') ? ' is-invalid' : ''), 'placeholder' => 'Código de la Competencia']) }}
            {!! $errors->first('code', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <!--Footer-->
    <div class="card-footer ml-auto mr-auto  ">
        <button type="submit" class="btn btn-primary mx-auto">Enviar</button>
    </div>
    <!--End footer-->
</div>