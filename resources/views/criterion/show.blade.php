@extends('layouts.main', ['activePage' => 'category', 'titlePage' => 'Criterio'])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Criterio</h4>
                                <p class="card-category">Datos del Criterio</p>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <a class="btn btn-success" href="{{ route('categories.index') }}"> Volver</a>
                                </div>

                                <div class="form-group">
                                    <strong>Name:</strong>
                                    {{ $criterion->name }}
                                </div>
                                <div class="form-group">
                                    <strong>Assigned Score:</strong>
                                    {{ $criterion->assigned_score }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection