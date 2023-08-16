@extends('layouts.main', ['activePage' => 'events', 'titlePage' => 'Eventos'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Eventos</h4>
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                                <div class="alert alert-success" role="success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-12 text-right">
                                        @can('event_create')
                                        <a href="{{ route('event.create') }}" class="btn btn-sm btn-facebook">Añadir Evento</a>
                                        @endcan
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">

                                        <th>No</th>
                                        <th>Nombre</th>
                                        <th>Lugar</th>
                                        <th>Direccion</th>
                                        <th>País</th>
                                        <th>Ciudad</th>

                                        <th class="text-right">Acciones</th>

                                        <tbody>
                                            @foreach ($events as $event)
                                            <tr>
                                                <td>{{ ++$i }}</td>

                                                <td>{{ $event->name }}</td>
                                                <td>{{ $event->place }}</td>
                                                <td>{{ $event->address }}</td>
                                                <td>{{ $event->country }}</td>
                                                <td>{{ $event->city }}</td>
                                                <td class=" text-right">
                                                    <form action="{{ route('event.destroy', $event->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Esta seguro de quitar el registro?')">
                                                        @can('event_show')
                                                        <a class="btn btn-sm btn-primary " href="{{ route('event.show',$event->id) }}" title='Detalle'><i class="fa fa-fw fa-eye"></i></a>
                                                        @endcan
                                                        @can('event_edit')
                                                        <a class="btn btn-sm btn-success" href="{{ route('event.edit',$event->id) }}" title='Editar'><i class="fa fa-fw fa-edit"></i></a>
                                                        @endcan
                                                        @can('event_destroy')
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" title='Eliminar'><i class="fa fa-fw fa-trash"></i></button>
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
                                {{ $events->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection