@extends('layouts.main', ['activePage' => 'eventos', 'titlePage' => 'Crear Eventos'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <!-- <form method="POST" action="{{ route('event.store') }}" role="form" enctype="multipart/form-data"> -->
                <form method="POST" action="{{ route('event.store') }}" role="form" enctype="multipart/form-data" onsubmit="return confirm('Desea Añadir el Registro?')">
                    @csrf
                    <div class=" card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Evento</h4>
                            <p class="card-category">Crear nuevo Evento</p>
                        </div>
                        <div class="card-body">
                            <div class="float-right">
                                <a class="btn btn-success" href="{{ route('event.index') }}"> Volver</a>
                            </div>

                            @include('event.form')
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    @endsection