@extends('layouts.main', ['activePage' => 'errors', 'titlePage' => 'Sistema de errores'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Errores</h4>
                                <p class="card-category">Sistema de errores</p>
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                                <div class="alert alert-success" role="success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-12 text-right">
                                        @can('error_create')
                                        <a href="{{ route('error.create') }}" class="btn btn-sm btn-facebook">Añadir Penalidad</a>
                                        @endcan
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>N°</th>
                                            <th>Nombre</th>
                                            <th>Puntaje Asignado</th>
                                            <th class="text-right">Acciones</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($errors as $error)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $error->name }}</td>
                                                <td>{{ $error->assigned_score }}</td>
                                                <td class=" text-right">
                                                    <form action="{{ route('error.destroy', $error->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Esta seguro de quitar el registro?')">
                                                        @can('error_show')
                                                        <a class="btn btn-sm btn-primary " href="{{ route('error.show',$error->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                        @endcan
                                                        @can('error_edit')
                                                        <a class="btn btn-sm btn-success" href="{{ route('error.edit',$error->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                        @endcan
                                                        @can('error_destroy')
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
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
                                {{ $errors->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection