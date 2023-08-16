@extends('layouts.main', ['activePage' => 'schemes', 'titlePage' => 'Criterios'])
@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Criterios</h4>
                <p class="card-category">Criterios de Evaluación</p>
              </div>
              <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success" role="success">
                  {{ session('success') }}
                </div>
                @endif
                <div class="row">
                  <div class="col-12 text-right">
                    @can('criteria_create')
                    <a href="{{ route('criteria.create') }}" class="btn btn-sm btn-facebook">Añadir Criterio</a>
                    @endcan
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class="text-primary">
                      <th>N°</th>
                      <th>Nombre</th>
                      <th>Puntaje Asignado</th>
                      <th class="text-right">Acciones</th>
                    </thead>
                    <tbody>
                      @foreach ($criteria as $criterion)
                      <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $criterion->name }}</td>
                        <td>{{ $criterion->assigned_score }}</td>
                        <td class=" text-right">
                          <!-- <form action="{{ route('criteria.destroy',$criterion->id) }}" method="POST"> -->
                          <form action="{{ route('criteria.destroy', $criterion->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Esta seguro de quitar el registro?')">
                            @can('criteria_show')
                            <a class="btn btn-sm btn-primary " href="{{ route('criteria.show',$criterion->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                            @endcan
                            @can('criteria_edit')
                            <a class="btn btn-sm btn-success" href="{{ route('criteria.edit',$criterion->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                            @endcan
                            @can('criteria_destroy')
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
                {{ $criteria->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection