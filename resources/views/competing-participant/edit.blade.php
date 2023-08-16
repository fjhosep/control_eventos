@extends('layouts.main', ['activePage' => 'partipant', 'titlePage' => 'Registrar Participantes'])
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

                                <div class="col-12 text-right">
                                    <button class="btn btn-sm btn-facebook" onclick="javascript:window.history.back();">Volver</button>
                                </div>

                                <form action="{{ route('competing-participant.store') }}" method="POST">
                                    @csrf

                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead class="text-primary">
                                                <tr>

                                                    <th>No</th>

                                                    <th>Seleccione</th>
                                                    <th>Cédula</th>
                                                    <th>Nombre</th>
                                                    <th>Apellido</th>
                                                    <th>Email</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($participants as $participant)
                                                <tr>
                                                    <td>{{ ++$i }}</td>

                                                    <!-- <input type="hidden" name='category_id[]' value="{{ $participant->id }}"> -->
                                                    <input type="hidden" name='category_id' value="{{ $category_id }}">
                                                    <input type="hidden" name='user' value="{{$participant->user }}">
                                                    <!-- <td><input type="checkbox" id="" name="user[]" value="{{ $participant->user }}"></td> -->
                                                    <td><input type="checkbox" id="" name="participant_id[]" value="{{ $participant->id }}"></td>
                                                    <td>{{ $participant->cardId }}</td>
                                                    <td>{{ $participant->name }}</td>
                                                    <td>{{ $participant->lastName }}</td>
                                                    <td>{{ $participant->email }}</td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer ml-auto mr-auto  ">
                                        <button type="submit" class="btn btn-primary mx-auto">Enviar</button>
                                    </div>
                                </form>

                            </div>

                            <div class="card-footer mr-auto">
                                {{ $participants->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection