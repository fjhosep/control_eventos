@extends('layouts.main', ['activePage' => 'CategoryType', 'titlePage' => 'Tipo de Categoría'])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Tipo de Categoría</h4>
                                <p class="card-category">Detalle</p>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <a class="btn btn-success" href="{{ route('category-type.index') }}"> Volver</a>
                                </div>

                                <div class="form-group">
                                    <strong>Código:</strong>
                                    {{ $categoryType->code }}
                                </div>

                                <div class="form-group">
                                    <strong>Tipo de Categoría:</strong>
                                    {{ $categoryType->name }}
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