@extends('layouts.app')

@section('template_title')
    {{ $competingEvent->name ?? 'Show Competing Event' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Competing Event</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('competing-events.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Event Id:</strong>
                            {{ $competingEvent->event_id }}
                        </div>
                        <div class="form-group">
                            <strong>Competition Id:</strong>
                            {{ $competingEvent->competition_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
