@extends('layouts.main', ['activePage' => 'category', 'titlePage' => 'Categorias'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Categorías</h4>
                                <p class="card-category">Lista de Categprías</p>
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
                                        <a href="{{ route('home') }}" class="btn btn-sm btn-facebook">Volver</a>
                                        @endcan
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>No</th>
                                                <th>Código</th>
                                                <th>Nombre</th>
                                                <th>Estilo</th>
                                                <th>Nivel</th>
                                                <th>Género</th>
                                                <th>Costo</th>
                                                <th class="text-right">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $category)
                                            <tr>

                                                <td>{{ $category->code }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->style }}</td>
                                                <td>{{ $category->level }}</td>
                                                <td>{{ $category->gender }}</td>
                                                <td>{{ $category->cost }}</td>

                                                <td class=" text-right">
                                                    <!-- <form action="{{ route('categories.destroy',$category->id) }}" method="POST" onsubmit="return confirm('Desea Eliminar el Registro?')"> -->
                                                    <!-- @can('category_show')
                                                        <a class=" btn btn-sm btn-primary " href=" {{ route('categories.show',$category->id) }}"><i class="fa fa-fw fa-eye" title="Detalle"></i></a>
                                                        @endcan-->
                                                    @can('category_edit')

                                                    <form method="POST" action="{{ route('in-shopping-cart.store') }}" role="form" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="category_id" value='{{ $category->id }}'>
                                                        <div class="box-footer mt20">
                                                            <input type="submit" value="Registarse" class="btn btn-primary"></input>
                                                        </div>
                                                    </form>

                                                    @endcan
                                                    @can('category_destroy')
                                                    @csrf
                                                    <!-- @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash" title="Eliminar"></i></button>
                                                        @endcan -->
                                                    <!-- </form> -->
                                                </td>


                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                            <div class="card-footer mr-auto">
                                <!-- Aqui va la paginacion -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection