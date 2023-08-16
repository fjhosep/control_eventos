@extends('layouts.main', ['activePage' => 'competition', 'titlePage' => 'Competiciones'])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Mostrar Competición</h4>
                                <p class="card-category">Datos de la Competición</p>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <a class="btn btn-success" href="{{ route('competitions.index') }}"> Volver</a>
                                </div>

                                <div class="form-group">
                                    <strong>Name:</strong>
                                    {{ $competition->name }}
                                </div>
                                <div class="form-group">
                                    <strong>Code:</strong>
                                    {{ $competition->code }}
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