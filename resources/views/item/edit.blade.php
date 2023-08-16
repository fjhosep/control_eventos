@extends('layouts.main', ['activePage' => 'items', 'titlePage' => 'Editar Item'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <form method="POST" action="{{ route('items.update', $item->id) }}" role="form" enctype="multipart/form-data" onsubmit="return confirm('Desea Actualizar el Registro?')">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Item</h4>
                            <p class="card-category">Actualizar datos del Item</p>
                        </div>
                        <div class="card-body">

                            <div class="float-right">
                                <a class="btn btn-success" href="{{ route('items.index') }}"> Volver</a>
                            </div>

                            {{ method_field('PATCH') }}
                            @csrf

                            @include('item.form')
                        </div>
                </form>
            </div>
        </div>
        @endsection