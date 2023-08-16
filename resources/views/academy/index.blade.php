@extends('layouts.main', ['activePage' => 'academy', 'titlePage' => 'Academias'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Academia</h4>
                                <p class="card-category">Lista de Academias Participantes</p>
                            </div>
                            <div class="card-body">

                                @if (session('success'))
                                <div class="alert alert-success" role="success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-12 text-right">
                                        @can('academy_create')
                                        <a href="{{ route('academies.create') }}" class="btn btn-sm btn-facebook">Añadir Academia</a>
                                        @endcan
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="text-primary">
                                            <tr>

                                                <th>No</th>

                                                <th>Nombre</th>
                                                <th>Director</th>
                                                <th>Número de Teléfono</th>
                                                <th>Telefono Movil</th>
                                                <th>Email</th>
                                                <th class="text-right">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($academies as $academy)
                                            <tr>
                                                <td>{{ ++$i }}</td>

                                                <td>{{ $academy->name }}</td>
                                                <td>{{ $academy->director }}</td>
                                                <td>{{ $academy->phone_number }}</td>
                                                <td>{{ $academy->mobile_phone }}</td>
                                                <td>{{ $academy->email }}</td>

                                                <td class=" text-right">
                                                    <form action="{{ route('academies.destroy',$academy->id) }}" method="POST" onsubmit="return confirm('Desea Eliminar el Registro?')">
                                                        @can('academy_show')
                                                        <a class=" btn btn-sm btn-primary " href=" {{ route('academies.show',$academy->id) }}"><i class="fa fa-fw fa-eye" title="Detalle"></i></a>
                                                        @endcan
                                                        @can('academy_edit')
                                                        <a class="btn btn-sm btn-success" href="{{ route('academies.edit',$academy->id) }}"><i class="fa fa-fw fa-edit" title="Editar"></i></a>
                                                        @endcan
                                                        @can('academy_destroy')
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
                                {{ $academies->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection