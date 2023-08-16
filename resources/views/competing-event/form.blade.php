<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('event_id') }}
            {{ Form::text('event_id', $competingEvent->event_id, ['class' => 'form-control' . ($errors->has('event_id') ? ' is-invalid' : ''), 'placeholder' => 'Event Id']) }}
            {!! $errors->first('event_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('competition_id') }}
            {{ Form::text('competition_id', $competingEvent->competition_id, ['class' => 'form-control' . ($errors->has('competition_id') ? ' is-invalid' : ''), 'placeholder' => 'Competition Id']) }}
            {!! $errors->first('competition_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>