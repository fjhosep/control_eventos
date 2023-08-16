@extends('layouts.main', ['activePage' => 'academies', 'titlePage' => 'Añadir Academia'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <form method="POST" action="{{ route('academies.store') }}" role="form" enctype="multipart/form-data" onsubmit="return confirm('Desea Añadir el Registro?')">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Academia</h4>
                            <p class="card-category">Añadir Academia</p>
                        </div>
                        <div class="card-body">
                            <div class="float-right">
                                <a class="btn btn-success" href="{{ route('academies.index') }}"> Volver</a>
                            </div>

                            @include('academy.form')
                        </div>

                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection