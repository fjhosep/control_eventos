@extends('layouts.main', ['activePage' => 'Error', 'titlePage' => 'Editar Penalidad'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <form method="POST" action="{{ route('error.update', $error->id) }}" role="form" enctype="multipart/form-data" onsubmit="return confirm('Desea Actualizar el Registro?')">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Tipo de Penalidad</h4>
                            <p class="card-category">Actualizar Tipo de Penalidad</p>
                        </div>
                        <div class="card-body">

                            <div class="float-right">
                                <a class="btn btn-success" href="{{ route('error.index') }}"> Volver</a>
                            </div>

                            {{ method_field('PATCH') }}
                            @csrf

                            @include('error.form')
                        </div>
                </form>
            </div>
        </div>
        @endsection