@extends('layouts.main', ['activePage' => 'schemes', 'titlePage' => 'Editar Esquema'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('schemes.update', $scheme->id) }}" method="post" class="form-horizontal">
          @csrf
          @method('PUT')
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Esquema</h4>
              <p class="card-category">Ingresar datos</p>
            </div>
            <div class="card-body">
              <div class="float-right">
                <a class="btn btn-success" href="{{ route('criteria.index') }}"> Volver</a>
              </div>
              <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="name" placeholder="Ingrese el nombre del esquema" value="{{ old('name', $scheme->name) }}" autofocus>
                  @if ($errors->has('name'))
                  <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                  @endif
                </div>
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