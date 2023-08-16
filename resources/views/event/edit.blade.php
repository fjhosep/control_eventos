@extends('layouts.main', ['activePage' => 'events', 'titlePage' => 'Editar Evento'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <form method="POST" action="{{ route('event.update', $event->id) }}" role="form" enctype="multipart/form-data" onsubmit="return confirm('Desea Actualizar el Registro?')">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Evento</h4>
                            <p class="card-category">Actualizar datos del Evento</p>
                        </div>
                        <div class="card-body">
                            <div class="float-right">
                                <a class="btn btn-success" href="{{ route('event.index') }}"> Volver</a>
                            </div>

                            @include('event.form')
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    @endsection