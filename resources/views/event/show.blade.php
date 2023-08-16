@extends('layouts.main', ['activePage' => 'eventos', 'titlePage' => 'Eventos'])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Datos del Evento</h4>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <a class="btn btn-success" href="{{ route('event.index') }}"> Volver</a>
                                </div>

                                <div class="form-group">
                                    <strong>Nombre del Evento:</strong>
                                    {{ $event->name }}
                                </div>
                                <div class="form-group">
                                    <strong>Lugar de Evento:</strong>
                                    {{ $event->place }}
                                </div>
                                <div class="form-group">
                                    <strong>Dirección:</strong>
                                    {{ $event->address }}
                                </div>
                                <div class="form-group">
                                    <strong>País:</strong>
                                    {{ $event->country }}
                                </div>
                                <div class="form-group">
                                    <strong>Provincia:</strong>
                                    {{ $event->province }}
                                </div>
                                <div class="form-group">
                                    <strong>Ciudad:</strong>
                                    {{ $event->city }}
                                </div>
                                <div class="form-group">
                                    <strong>Organizado por:</strong>
                                    {{ $event->organizer }}
                                </div>
                                <div class="form-group">
                                    <strong>Fecha de Inicio:</strong>
                                    {{ $event->dateStart }}
                                </div>
                                <div class="form-group">
                                    <strong>Fecha de culminación:</strong>
                                    {{ $event->dateEnd }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection