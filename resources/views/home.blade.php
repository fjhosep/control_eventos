@extends('layouts.main', ['activePage' => 'principal', 'titlePage' => __('Principal')])

@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <!--Enter code here -->
            <div class="container">
                <p class="h5">COMPETENCIAS A REALIZARSE EN EL EVENTO</p>
                <div class="row">
                    @foreach ($competitions as $competition)
                    <div class="col-sm-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header card-header-success">
                                    <h5 class="card-title">
                                        NOMBRE DE LA COMPETENCIA
                                    </h5>
                                </div>

                                <p class="card-text mt-3">{{$competition->name}}</p>
                                <table>
                                    <td>
                                        <a href="{{route('principal.category', $competition->id)}}" class="btn btn-primary"> <class="material-icons">Ver Categorías</class=> </a>
                                    </td>
                                    <!-- <td>
                                        <a href="{{route('principal.wizard', $competition->id)}}" class="btn btn-primary"> <class="material-icons">Iniciar Inscripción</class=> </a>
                                    </td> -->
                                </table>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection