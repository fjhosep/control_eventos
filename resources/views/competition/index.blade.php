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
                                <div class="row">
                                    <div class="col-12 text-right">
                                        @can('competition_create')
                                        <a href="{{ route('competitions.create') }}" class="btn btn-sm btn-facebook">Añadir Competencia</a>
                                        @endcan
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>
                                                    No
                                                </th>

                                                <th>Nombre de la Categoría</th>
                                                <th>Código</th>
                                                <th class="text-right">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($competitions as $competition)
                                            <tr>
                                                <td>{{ ++$i }}</td>

                                                <td>{{ $competition->name }}</td>
                                                <td>{{ $competition->code }}</td>

                                                <td class=" text-right">
                                                    <form action="{{ route('competitions.destroy',$competition->id) }}" method="POST" onsubmit="return confirm('Desea Eliminar el Registro?')">
                                                        @can('competition_show')
                                                        <a class=" btn btn-sm btn-primary " href=" {{ route('competitions.show',$competition->id) }}"><i class="fa fa-fw fa-eye" title="Detalle"></i></a>
                                                        @endcan
                                                        @can('competition_edit')
                                                        <a class="btn btn-sm btn-success" href="{{ route('competitions.edit',$competition->id) }}"><i class="fa fa-fw fa-edit" title="Editar"></i></a>
                                                        @endcan
                                                        @can('competition_destroy')
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash" title="Eliminar"></i></button>
                                                        @endcan
                                                    </form>

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