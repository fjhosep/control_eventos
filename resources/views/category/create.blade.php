@extends('layouts.main', ['activePage' => 'categories', 'titlePage' => 'Añadir Categoría'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <form method="POST" action="{{ route('categories.store') }}" role="form" enctype="multipart/form-data" onsubmit="return confirm('Desea Añadir el Registro?')">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Categorías</h4>
                            <p class="card-category">Añadir nueva Categoría</p>
                        </div>
                        <div class="card-body">
                            <div class="float-right">
                                <a class="btn btn-success" href="{{ route('categories.index') }}"> Volver</a>
                            </div>

                            @include('category.form')
                        </div>

                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection