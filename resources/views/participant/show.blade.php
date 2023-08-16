@extends('layouts.main', ['activePage' => 'participant', 'titlePage' => 'Participante'])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Particpante</h4>
                                <p class="card-category">Datos del Participante</p>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <a class="btn btn-success" href="{{ route('participants.index') }}"> Volver</a>
                                </div>

                                <div class="form-group">
                                    <strong>Academia:</strong>
                                    {{ $participant->academy->name }}
                                </div>

                                <div class="form-group">
                                    <strong>Cédula o Pasaporte:</strong>
                                    {{ $participant->cardId }}
                                </div>
                                <div class="form-group">
                                    <strong>Nombre:</strong>
                                    {{ $participant->name }}
                                </div>
                                <div class="form-group">
                                    <strong>Apellido:</strong>
                                    {{ $participant->lastName }}
                                </div>
                                <div class="form-group">
                                    <strong>Fecha de Nacimiento:</strong>
                                    {{ $participant->birthName }}
                                </div>
                                <div class="form-group">
                                    <strong>Ciudad:</strong>
                                    {{ $participant->city }}
                                </div>
                                <div class="form-group">
                                    <strong>Estado o Provincia:</strong>
                                    {{ $participant->province }}
                                </div>
                                <div class="form-group">
                                    <strong>País:</strong>
                                    {{ $participant->country }}
                                </div>
                                <div class="form-group">
                                    <strong>Número de Teléfono:</strong>
                                    {{ $participant->phone_number }}
                                </div>
                                <div class="form-group">
                                    <strong>Telefono Movil:</strong>
                                    {{ $participant->mobile_phone }}
                                </div>
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    {{ $participant->email }}
                                </div>
                                <div class="form-group">
                                    <strong>User:</strong>
                                    {{ $participant->user }}
                                </div>

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