@extends('layouts.main', ['activePage' => 'categoryType', 'titlePage' => 'Tipo de Categoría'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Tipo de Categorías</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                                <div class="alert alert-success" role="success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-12 text-right">
                                        @can('category_create')
                                        <a href="{{ route('category-type.create') }}" class="btn btn-sm btn-facebook">Añadir Tipo de Categoría</a>
                                        @endcan
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Código</th>
                                            <th>Tipo de Categoría</th>
                                            <th class="text-right">Acciones</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($categoryTypes as $categoryType)
                                            <tr>
                                                <td>{{ $categoryType->code }}</td>
                                                <td>{{ $categoryType->name }}</td>

                                                <td class="td-actions text-right">
                                                    @can('category_show')
                                                    <a href="{{ route('category-type.show',$categoryType->id) }}" class="btn btn-info"><i class="material-icons">person</i></a>
                                                    @endcan
                                                    @can('category_edit')
                                                    <a href="{{ route('category-type.edit',$categoryType->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                    @endcan
                                                    @can('category_destroy')
                                                    <form action="{{ route('category-type.destroy',$categoryType->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Esta seguro de quitar el registro?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit" rel="tooltip">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </form>
                                                    @endcan
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer mr-auto">
                                {!! $categoryTypes->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection