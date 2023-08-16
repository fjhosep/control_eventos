@extends('layouts.app')

@section('template_title')
    Create Competing Event
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Competing Event</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('competing-events.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('competing-event.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
