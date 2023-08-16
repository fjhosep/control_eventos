@extends('layouts.main', ['activePage' => 'partipant', 'titlePage' => 'Participantes'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Participantes</h4>
                                <p class="card-category">Lista de Participantes Registrados</p>
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                                <div class="alert alert-success" role="success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-12 text-right">
                                        @can('participant_create')
                                        <a href="{{ route('participants.create') }}" class="btn btn-sm btn-facebook">Añadir Participante</a>
                                        @endcan
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="text-primary">
                                            <tr>

                                                <th>No</th>

                                                <th>Academia</th>
                                                <th>Cédula</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Email</th>


                                                <th class="text-right">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($participants as $participant)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $participant->academy->name}}</td>
                                                <td>{{ $participant->cardId }}</td>
                                                <td>{{ $participant->name }}</td>
                                                <td>{{ $participant->lastName }}</td>
                                                <td>{{ $participant->email }}</td>

                                                <td class=" text-right">
                                                    <form action="{{ route('participants.destroy',$participant->id) }}" method="POST" onsubmit="return confirm('Desea Eliminar el Registro?')">
                                                        @can('participant_show')
                                                        <a class=" btn btn-sm btn-primary " href=" {{ route('participants.show',$participant->id) }}"><i class="fa fa-fw fa-eye" title="Detalle"></i></a>
                                                        @endcan
                                                        @can('participant_edit')
                                                        <a class="btn btn-sm btn-success" href="{{ route('participants.edit',$participant->id) }}"><i class="fa fa-fw fa-edit" title="Editar"></i></a>
                                                        @endcan
                                                        @can('participant_destroy')
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
                                {{ $participants->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection