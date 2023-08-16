<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Criterio') }}
            {{ Form::select('criterion_id', $criteria,  $item->criterion_id, ['class' => 'form-control' . ($errors->has('criterion_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Criterio']) }}
            {!! $errors->first('criterion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $item->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Puntaje asignado') }}
            {{ Form::text('assigned_score', $item->assigned_score, ['class' => 'form-control' . ($errors->has('assigned_score') ? ' is-invalid' : ''), 'placeholder' => 'Assigned Score']) }}
            {!! $errors->first('assigned_score', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <!--Footer-->
    <div class="card-footer ml-auto mr-auto  ">
        <button type="submit" class="btn btn-primary mx-auto" onsubmit="return confirm('Desea actualizar')">Enviar</button>
    </div>
    <!--End footer-->
</div>