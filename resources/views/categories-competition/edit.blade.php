@extends('layouts.main', ['activePage' => 'categories', 'titlePage' => 'Categorias'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Categorías</h4>
                            <p class="card-category">Lista de Categprías</p>
                        </div>
                        <div class="card-body">

                            <div class="float-right">
                                <a class="btn btn-success" href="{{ route('categories-competition.index') }}"> Volver</a>
                            </div>

                            @if (session('success'))
                            <div class="alert alert-success" role="success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <div class="row">

                                <form action="{{ route('categories-competition.store') }}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        <div class="table-responsive">

                                            <table class="table table-striped table-hover">

                                                <thead class="thead">
                                                    <tr>
                                                        <th>Seleccione</th>
                                                        <th>Código</th>
                                                        <th>Nombre</th>
                                                        <th>Nivel</th>
                                                        <th>Estilo</th>
                                                        <th>Género</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach ($categories as $category)
                                                    <tr>
                                                        <input type="hidden" name='competition' value="{{ $competition_id }}">
                                                        <td><input type="checkbox" id="" name="category[]" value="{{ $category->id }}"></td>
                                                        <td>{{ $category->code }}</td>
                                                        <td>{{ $category->name }}</td>
                                                        <td>{{ $category->level }}</td>
                                                        <td>{{ $category->style }}</td>
                                                        <td>{{ $category->gender }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>

                                            </table>

                                        </div>

                                    </div>
                                    <div class="card-footer ml-auto mr-auto  ">
                                        <button type="submit" class="btn btn-primary mx-auto">Enviar</button>
                                    </div>
                                    <!--End footer-->
                                </form>
                            </div>
                        </div>
                        {!! $categories->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection