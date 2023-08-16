@extends('layouts.main', ['activePage' => 'competition', 'titlePage' => 'Competencias'])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Competencias</h4>
                                <p class="card-category">Lista de Competencias a realizarse</p>
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                                <div class="alert alert-success" role="success">
                                    {{ session('success') }}
                                </div>
                                @endif

                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>
                                                    No
                                                </th>

                                                <th>Nombre de la Categoría</th>
                                                <th>Código</th>
                                                <th class="text-right">Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($competitions as $competition)
                                            <tr>
                                                <td>{{ ++$i }}</td>

                                                <td>{{ $competition->name }}</td>
                                                <td>{{ $competition->code }}</td>

                                                <td class=" text-right">

                                                    <a href="{{route('principal.category', $competition->id)}}" class="btn btn-primary"> <class="material-icons">Ver Categorías</class=> </a>

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                            <div class="card-footer mr-auto">
                                {{ $competitions->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection