@extends('layouts.main', ['activePage' => 'Evento', 'titlePage' => ''])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Competencias</h4>
                            <p class="card-category">Lista de Competencias</p>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                            <div class="alert alert-success" role="success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <div class="row">

                                <form action="{{ route('competing-event.store') }}" method="POST">
                                    @csrf
                                    <div class="card-body">

                                        <div class="float-right">
                                            <a class="btn btn-success" href="{{ route('competing-event.index') }}"> Volver</a>
                                        </div>

                                        <div class="table-responsive">

                                            <table class="table table-striped table-hover">

                                                <thead class="thead">
                                                    <tr>
                                                        <th>Seleccione</th>
                                                        <th>Código</th>
                                                        <th>Nombre</th>

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach ($competitions as $competition)
                                                    <tr>
                                                        <input type="hidden" name='event' value="{{ $event_id }}">
                                                        <td><input type="checkbox" id="" name="competition[]" value="{{ $competition->id }}"></td>
                                                        <td>{{ $competition->code }}</td>
                                                        <td>{{ $competition->name }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>

                                            </table>

                                        </div>

                                    </div>
                                    <div class="card-footer ml-auto mr-auto  ">
                                        <button type="submit" class="btn btn-primary mx-auto">Enviar</button>
                                    </div>
                                    <!--End footer-->
                                </form>
                            </div>
                        </div>
                        {!! $competitions->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection