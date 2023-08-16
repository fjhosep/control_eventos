@extends('layouts.main', ['activePage' => 'category', 'titlePage' => 'Categorías'])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Mostrar Categoría</h4>
                                <p class="card-category">Datos de la Categoría</p>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <a class="btn btn-success" href="{{ route('categories.index') }}"> Volver</a>
                                </div>

                                <div class="form-group">
                                    <strong>Competencia:</strong>
                                    {{ $category->category_type->name }}
                                </div>

                                <div class="form-group">
                                    <strong>Código:</strong>
                                    {{ $category->code }}
                                </div>
                                <div class="form-group">
                                    <strong>Nombre:</strong>
                                    {{ $category->name }}
                                </div>
                                <div class="form-group">
                                    <strong>Estilo:</strong>
                                    {{ $category->style }}
                                </div>
                                <div class="form-group">
                                    <strong>Nivel:</strong>
                                    {{ $category->level }}
                                </div>
                                <div class="form-group">
                                    <strong>Gender:</strong>
                                    {{ $category->gender }}
                                </div>
                                <div class="form-group">
                                    <strong>Participantes:</strong>
                                    {{ $category->participants }}
                                </div>
                                <div class="form-group">
                                    <strong>Cost:</strong>
                                    {{ $category->cost }}
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection