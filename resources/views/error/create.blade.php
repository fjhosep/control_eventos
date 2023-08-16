@extends('layouts.main', ['activePage' => 'Error', 'titlePage' => 'Añadir Penalidad'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <form method="POST" action="{{ route('error.store')}}" role="form" enctype="multipart/form-data" onsubmit="return confirm('Desea Añadir el Registro?')">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Tipo de Penalidad</h4>
                            <p class="card-category">Añadir tipo de Penalidad</p>
                        </div>
                        <div class="card-body">
                            <div class="float-right">
                                <a class="btn btn-success" href="{{ route('error.index') }}"> Volver</a>
                            </div>

                            @include('error.form')
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection