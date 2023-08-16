<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('code', $categoryType->code, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Añadir Código']) }}
            {!! $errors->first('code', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Tipo de Categoría') }}
            {{ Form::text('name', $categoryType->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Añadir Tipo de Categoría']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <!--Footer-->
    <div class="card-footer ml-auto mr-auto  ">
        <button type="submit" class="btn btn-primary mx-auto" onsubmit="return confirm('Desea actualizar')">Enviar</button>
    </div>
    <!--End footer-->
</div>