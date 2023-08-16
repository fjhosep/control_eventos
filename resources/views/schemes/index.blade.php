@extends('layouts.main', ['activePage' => 'schemes', 'titlePage' => ''])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Esquemas</h4>
                <p class="card-category">Esquemas registrados</p>
              </div>
              <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success" role="success">
                  {{ session('success') }}
                </div>
                @endif
                <div class="row">
                  <div class="col-12 text-right">
                    @can('scheme_create')
                    <a href="{{ route('schemes.create') }}" class="btn btn-sm btn-facebook">Añadir Esquema</a>
                    @endcan
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class="text-primary">
                      <th>Nombre del Esquema</th>
                      <th class="text-right">Acciones</th>
                    </thead>
                    <tbody>
                      @foreach ($schemes as $scheme)
                      <tr>
                        <td>{{ $scheme->name }}</td>

                        <td class="td-actions text-right">
                          @can('scheme_edit')
                          <a href="{{ route('schemes.edit', $scheme->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                          @endcan
                          @can('scheme_destroy')
                          <form action="{{ route('schemes.destroy', $scheme->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Esta seguro de quitar el registro?')">
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
                {{ $schemes->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection