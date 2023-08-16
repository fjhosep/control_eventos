<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $error->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('assigned_score') }}
            {{ Form::text('assigned_score', $error->assigned_score, ['class' => 'form-control' . ($errors->has('assigned_score') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('assigned_score', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>

    <!--Footer-->
    <div class="card-footer ml-auto mr-auto  ">
        <button type="submit" class="btn btn-primary mx-auto">Enviar</button>
    </div>
    <!--End footer-->
</div>