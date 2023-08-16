@extends('layouts.main', ['activePage' => 'shoppingcart', 'titlePage' => ''])

@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <!--Enter code here -->
            <div class="container">

                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Registro</h4>
                        <p class="card-category">Categorías registradas</p>
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
                                    <th>Costo</th>
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
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-5">
                        <div class="card">
                            <!-- <div class="card-body"> -->
                            <div class="card-header card-header-success">
                                <h5 class="card-title">
                                    TOTAL A PAGAR:
                                </h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text mt-2">
                                <h5>{{ $total }}</h5>
                                </p>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="card">
                            <!-- <div class="card-body"> -->
                            <div class="card-header card-header-primary">
                                <h5 class="card-title">
                                    REGISTRO:
                                </h5>
                            </div>
                            <div class="card-body">
                                <a href="{{route('principal.wizard',$total)}}" class="btn btn-warning"> <class="material-icons">Iniciar Inscripción</class=> </a>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </div>
</div>

@endsection