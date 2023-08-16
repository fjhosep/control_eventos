@extends('layouts.main', ['activePage' => 'academy', 'titlePage' => 'Academia'])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Mostrar Academia</h4>
                                <p class="card-category">Datos de la Academia</p>
                            </div>
                            <div class="card-body">

                                <div class="form-group">
                                    <strong>Name:</strong>
                                    {{ $academy->name }}
                                </div>
                                <div class="form-group">
                                    <strong>Director:</strong>
                                    {{ $academy->director }}
                                </div>
                                <div class="form-group">
                                    <strong>Address:</strong>
                                    {{ $academy->address }}
                                </div>
                                <div class="form-group">
                                    <strong>City:</strong>
                                    {{ $academy->city }}
                                </div>
                                <div class="form-group">
                                    <strong>Province:</strong>
                                    {{ $academy->province }}
                                </div>
                                <div class="form-group">
                                    <strong>Country:</strong>
                                    {{ $academy->country }}
                                </div>
                                <div class="form-group">
                                    <strong>Phone Number:</strong>
                                    {{ $academy->phone_number }}
                                </div>
                                <div class="form-group">
                                    <strong>Mobile Phone:</strong>
                                    {{ $academy->mobile_phone }}
                                </div>
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    {{ $academy->email }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection