@extends('layouts.main', ['activePage' => 'shoppingcart', 'titlePage' => 'Asociar Participantes'])

@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <!--Enter code here -->
            <div class="container">

                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Categorías en las que participaran los registrados en tu cuenta</h4>
                        <p class="card-category">Selecciones los participantes que competiran de acuerdo a su categoría</p>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="text-primary">
                                <tr>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th>Estilo</th>
                                    <th>Nivel</th>
                                    <th>Género</th>
                                    <th class="text-right">Acción </th>
                                    <th class="text-right">Acción </th>
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

                                    <td class=" text-right">
                                        <a class="btn btn-sm btn-facebook" href="{{ route('competing-participant.edit',$category->id) }}"><i class="fa fa-fw fa-edit "></i>Añadir Participante</a>
                                    </td>

                                    <td class=" text-right">
                                        <a class="btn btn-sm btn-success" href="{{ route('competing-participant.show',$category->id) }}"><i class="fa fa-fw fa-eye "></i>Ver registrados</a>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection