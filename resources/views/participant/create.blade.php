@extends('layouts.main', ['activePage' => 'participants', 'titlePage' => 'Añadir Participante'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <form method="POST" action="{{ route('participants.store') }}" role="form" enctype="multipart/form-data" onsubmit="return confirm('Desea Añadir el Registro?')">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Participante</h4>
                            <p class="card-category">Añadir Participante</p>
                        </div>
                        <div class="card-body">
                            <div class="float-right">
                                <a class="btn btn-success" href="{{ route('participants.index') }}"> Volver</a>
                            </div>

                            @include('participant.form')
                        </div>

                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection