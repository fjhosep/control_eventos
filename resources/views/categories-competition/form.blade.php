<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('category_id') }}
            {{ Form::text('category_id', $categoriesCompetition->category_id, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => 'Category Id']) }}
            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('competition_id') }}
            {{ Form::text('competition_id', $categoriesCompetition->competition_id, ['class' => 'form-control' . ($errors->has('competition_id') ? ' is-invalid' : ''), 'placeholder' => 'Competition Id']) }}
            {!! $errors->first('competition_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>