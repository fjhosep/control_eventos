@extends('layouts.main', ['activePage' => 'items', 'titlePage' => ''])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Items</h4>
                <p class="card-category">Items de Evaluación</p>
              </div>
              <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success" role="success">
                  {{ session('success') }}
                </div>
                @endif
                <div class="row">
                  <div class="col-12 text-right">
                    @can('item_create')
                    <a href="{{ route('items.create') }}" class="btn btn-sm btn-facebook">Añadir Item</a>
                    @endcan
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class="text-primary">
                      <th>N°</th>
                      <th>Nombre</th>
                      <th>Puntaje Asignado</th>
                      <th>Criterio</th>
                      <th class="text-right">Acciones</th>
                    </thead>
                    <tbody>
                      @foreach ($items as $item)
                      <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->assigned_score }}</td>
                        <td>{{ $item->criterion->name }}</td>
                        <td class=" text-right">
                          <form action="{{ route('items.destroy',$item->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Desea Eliminar el Registro?')">
                            @can('item_show')
                            <a class="btn btn-sm btn-primary" href=" {{ route('items.show',$item->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                            @endcan
                            @can('item_edit')
                            <a class="btn btn-sm btn-success" href="{{ route('items.edit',$item->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                            @endcan
                            @can('item_destroy')
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                            @endcan
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer mr-auto">
                {{ $items->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection