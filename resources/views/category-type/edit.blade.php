@extends('layouts.main', ['activePage' => 'CategoryType', 'titlePage' => 'Editar Tipo de Categoría'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <form method="POST" action="{{ route('category-type.update', $categoryType->id) }}" role="form" enctype="multipart/form-data" onsubmit="return confirm('Desea Actualizar el Registro?')">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Tipo de Categoría</h4>
                            <p class="card-category">Actualizar Tipo de Categoría</p>
                        </div>
                        <div class="card-body">
                            <div class="float-right">
                                <a class="btn btn-success" href="{{ route('category-type.index') }}"> Volver</a>
                            </div>

                            {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                        @endif --}}
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('category-type.form')
                    </div>
                </form>
            </div>
        </div>
        @endsection