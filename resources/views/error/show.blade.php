@extends('layouts.main', ['activePage' => 'category', 'titlePage' => ''])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Errores y Penalizaciones</h4>
                                <p class="card-category">Detalle</p>
                            </div>
                            <div class="card-body">

                                <div class="float-right">
                                    <a class="btn btn-success" href="{{ route('error.index') }}"> Volver</a>
                                </div>

                                <div class="form-group">
                                    <strong>Name:</strong>
                                    {{ $error->name }}
                                </div>
                                <div class="form-group">
                                    <strong>Assigned Score:</strong>
                                    {{ $error->assigned_score }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection