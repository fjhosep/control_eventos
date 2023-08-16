@extends('layouts.main', ['activePage' => 'criterio', 'titlePage' => 'Actualizar Criterio'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('criteria.update', $criterion->id) }}" role="form" enctype="multipart/form-data" onsubmit="return confirm('Desea Modificar el Registro?')">
          @csrf
          @method('PUT')
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Criterio</h4>
              <p class="card-category">Modificar Datos</p>
            </div>
            <div class="card-body">
              <div class="float-right">
                <a class="btn btn-success" href="{{ route('criteria.index') }}"> Volver</a>
              </div>
              <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="name" value="{{ old('name', $criterion->name) }}" autofocus>
                  @if ($errors->has('name'))
                  <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                  @endif
                </div>
              </div>

              <div class="row">
                <label for="email" class="col-sm-2 col-form-label">Puntaje Asignado</label>
                <div class="col-sm-7">
                  <input type="assigned_score" class="form-control" name="assigned_score" value="{{ old('assigned_score', $criterion->assigned_score) }}">
                  @if ($errors->has('assigned_score'))
                  <span class="error text-danger" for="input-assigned_score">{{ $errors->first('assigned_score') }}</span>
                  @endif
                </div>
              </div>

              <div class="row">
                <label for="type" class="col-sm-2 col-form-label">Tipo</label>
              </div>
            </div>
            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
            <!--End footer-->
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
@endsection