@extends('layouts.main', ['activePage' => 'categories', 'titlePage' => 'Editar Categoría'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <form method="POST" action="{{ route('categories.update', $category->id) }}" role="form" enctype="multipart/form-data" onsubmit="return confirm('Desea Actualizar el Registro?')">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Categoría</h4>
                            <p class="card-category">Actualizar datos de la Categoría</p>
                        </div>
                        <div class="card-body">
                            <div class="float-right">
                                <a class="btn btn-success" href="{{ route('categories.index') }}"> Volver</a>
                            </div>

                            {{ method_field('PATCH') }}
                            @csrf

                            @include('category.form')
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection