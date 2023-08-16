@extends('layouts.main', ['activePage' => 'competitions', 'titlePage' => 'Añadir Competición'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <!-- <form method="POST" action="{{ route('event.store') }}" role="form" enctype="multipart/form-data"> -->
                <form method="POST" action="{{ route('competitions.store') }}" role="form" enctype="multipart/form-data" onsubmit="return confirm('Desea Añadir el Registro?')">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Competición</h4>
                            <p class="card-category">Añadir nueva Competencia</p>
                        </div>
                        <div class="card-body">
                            <div class="float-right">
                                <a class="btn btn-success" href="{{ route('competitions.index') }}"> Volver</a>
                            </div>

                            @include('competition.form')

                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection