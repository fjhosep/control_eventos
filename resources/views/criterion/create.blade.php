@extends('layouts.main', ['activePage' => 'criterio', 'titlePage' => 'Nuevo Criterio'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{ route('criteria.store') }}" role="form" enctype="multipart/form-data" onsubmit="return confirm('Desea Añadir el Registro?')">
                    @csrf

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title"></h4>
                            <p class="card-category">Ingresar datos</p>
                        </div>

                        <div class="card-body">

                            <div class="float-right">
                                <a class="btn btn-success" href="{{ route('criteria.index') }}"> Volver</a>
                            </div>

                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" value="{{ old('name') }}" autofocus>
                                    @if ($errors->has('name'))
                                    <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <label for="assigned_score" class="col-sm-2 col-form-label">Puntaje asignado</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="assigned_score" placeholder="Ingrese puntaje asignado" value="{{ old('assigned_score') }}">
                                    @if ($errors->has('assigned_score'))
                                    <span class="error text-danger" for="input-assigned_score">{{ $errors->first('assigned_score') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!--Footer-->
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                        <!--End footer-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection