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
                                <div class="alert alert-warning" role="success">
                                    {{ session('success') }}
                                </div>
                                @endif

                                <div class="table-responsive">
                                    <table class="table">

                                        <th>No</th>
                                        <th>Nombre</th>
                                        <!-- <th>Lugar</th>
                                        <th>Direccion</th>
                                        <th>País</th>
                                        <th>Ciudad</th> -->

                                        <th class="text-right">Acciones</th>

                                        <tbody>
                                            @foreach ($events as $event)
                                            <tr>
                                                <td>{{ ++$i }}</td>

                                                <td>{{ $event->name }}</td>
                                                <!-- <td>{{ $event->place }}</td>
                                                <td>{{ $event->address }}</td>
                                                <td>{{ $event->country }}</td>
                                                <td>{{ $event->city }}</td> -->
                                                <td class=" text-right">
                                                    @can('event_create')
                                                    <a class="btn btn-sm btn-facebook" href="{{ route('competing-event.edit',$event->id) }}"><i class="fa fa-fw fa-edit "></i>Añadir Competencias</a>
                                                    @endcan
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