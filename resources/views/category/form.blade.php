<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group">
            {{ Form::label('Tipo de Categoría') }}
            {{ Form::select('Tipo de Categoría', $categorytype, $category->category_type_id, ['class' => 'form-control' . ($errors->has('category_type_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de Categoría']) }}
            {!! $errors->first('category_type_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('code', $category->code, ['class' => 'form-control' . ($errors->has('code') ? ' is-invalid' : ''), 'placeholder' => 'Código']) }}
            {!! $errors->first('code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $category->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nivel') }}
            {{ Form::text('level', $category->level, ['class' => 'form-control' . ($errors->has('level') ? ' is-invalid' : ''), 'placeholder' => 'Nivel']) }}
            {!! $errors->first('level', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estilo') }}
            {{ Form::text('style', $category->style, ['class' => 'form-control' . ($errors->has('style') ? ' is-invalid' : ''), 'placeholder' => 'Estilo']) }}
            {!! $errors->first('style', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Género') }}
            {{ Form::text('gender', $category->gender, ['class' => 'form-control' . ($errors->has('gender') ? ' is-invalid' : ''), 'placeholder' => 'Género']) }}
            {!! $errors->first('gender', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Participantes') }}
            {{ Form::text('participants', $category->participants, ['class' => 'form-control' . ($errors->has('participants') ? ' is-invalid' : ''), 'placeholder' => 'Participantes']) }}
            {!! $errors->first('participants', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Costo de inscripción') }}
            {{ Form::text('cost', $category->cost, ['class' => 'form-control' . ($errors->has('cost') ? ' is-invalid' : ''), 'placeholder' => 'Cost']) }}
            {!! $errors->first('cost', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <!--Footer-->
    <div class="card-footer ml-auto mr-auto  ">
        <button type="submit" class="btn btn-primary mx-auto">Enviar</button>
    </div>
    <!--End footer-->
</div>