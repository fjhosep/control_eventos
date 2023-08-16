@extends('layouts.main', ['activePage' => 'items', 'titlePage' => 'Items'])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Mostrar Item</h4>
                                <p class="card-category">Items de Evaluación</p>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <a class="btn btn-primary" href="{{ route('items.index') }}"> Volver</a>
                                </div>

                                <div class="form-group">
                                    <strong>Nombre:</strong>
                                    {{ $item->name }}
                                </div>

                                <div class="form-group">
                                    <strong>Puntaje Asignado:</strong>
                                    {{ $item->assigned_score }}
                                </div>
                                <div class="form-group">
                                    <strong>Criterio:</strong>
                                    {{ $item->criterion->name }}
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