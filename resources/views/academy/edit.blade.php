@extends('layouts.main', ['activePage' => 'academy', 'titlePage' => 'Editar Academia'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <form method="POST" action="{{ route('academies.update', $academy->id) }}" role="form" enctype="multipart/form-data" onsubmit="return confirm('Desea Actualizar el Registro?')">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Academia</h4>
                            <p class="card-category">Actualizar datos de la academia</p>
                        </div>
                        <div class="card-body">
                            <div class="float-right">
                                <a class="btn btn-success" href="{{ route('academies.index') }}"> Volver</a>
                            </div>

                            {{ method_field('PATCH') }}
                            @csrf

                            @include('academy.form')

                        </div>
                    </div>
            </div>

        </div>
    </div>
    @endsection