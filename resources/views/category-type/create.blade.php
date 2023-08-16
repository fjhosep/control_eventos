@extends('layouts.main', ['activePage' => 'CategoryType', 'titlePage' => 'Añadir Tipo de Categoría'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <!-- <form method="POST" action="{{ route('event.store') }}" role="form" enctype="multipart/form-data"> -->
                <form method="POST" action="{{ route('category-type.store')}}" role="form" enctype="multipart/form-data" onsubmit="return confirm('Desea Añadir el Registro?')">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Tipo de Categoría</h4>
                            <p class="card-category">Añadir tipo de Categoría</p>
                        </div>
                        <div class="card-body">
                            <div class="float-right">
                                <a class="btn btn-success" href="{{ route('category-type.index') }}"> Volver</a>
                            </div>


                            @include('category-type.form')
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection