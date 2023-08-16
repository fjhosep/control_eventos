@extends('layouts.app')

@section('template_title')
{{ $competingParticipant->name ?? 'Show Competing Participant' }}
@endsection

@section('content')

<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
            <p>Step 1</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
            <p>Step 2</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}" disabled="disabled">3</a>
            <p>Step 3</p>
        </div>
    </div>
</div>
<!--  -->
<div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
    <div class="col-xs-12">
        <div class="col-md-12">
            <h3> Step 1</h3>

            <div class="card-body">

                <div class="form-group">
                    <strong>Competencia:</strong>
                    {{ $category->category_type->name }}
                </div>

                <div class="form-group">
                    <strong>Código:</strong>
                    {{ $category->code }}
                </div>

                <div class="form-group">
                    <strong>Nombre:</strong>
                    {{ $category->name }}
                </div>

                <div class="form-group">
                    <strong>Estilo:</strong>
                    {{ $category->style }}
                </div>

                <div class="form-group">
                    <strong>Nivel:</strong>
                    {{ $category->level }}
                </div>

                <div class="form-group">
                    <strong>Gender:</strong>
                    {{ $category->gender }}
                </div>

                <div class="form-group">
                    <strong>Cost:</strong>
                    {{ $category->cost }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('competing-participant.store') }}" role="form" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="category_id" value='{{ $category->id }}'>
                        <input type="hidden" name="user_id" value='{{ Auth::user()->name }}'>
                    </form>
                </div>

            </div>

            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit" type="button">Next</button>
        </div>
    </div>
</div>
<!--  -->
<div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
    <div class="col-xs-12">
        <div class="col-md-12">
            <h3> Step 2</h3>

            <!-- Añadir Código -->

            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="secondStepSubmit">Next</button>
            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button>
        </div>
    </div>
</div>
<!--  -->
<div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
    <div class="col-xs-12">
        <div class="col-md-12">
            <h3> Step 3</h3>

            <table class="table">
                <tr>
                    <td>Product Name:</td>
                    <td><strong>{{$name}}</strong></td>
                </tr>
                <tr>
                    <td>Product Amount:</td>
                    <td><strong>{{$amount}}</strong></td>
                </tr>
                <tr>
                    <td>Product status:</td>
                    <td><strong>{{$status ? 'Active' : 'DeActive'}}</strong></td>
                </tr>
                <tr>
                    <td>Product Description:</td>
                    <td><strong>{{$description}}</strong></td>
                </tr>
                <tr>
                    <td>Product Stock:</td>
                    <td><strong>{{$stock}}</strong></td>
                </tr>
            </table>

            <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
        </div>
    </div>
</div>

<!-- <section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">Show Competing Participant</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('competing-participant.index') }}"> Back</a>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <strong>Competencia:</strong>
                        {{ $category->category_type->name }}
                    </div>

                    <div class="form-group">
                        <strong>Código:</strong>
                        {{ $category->code }}
                    </div>

                    <div class="form-group">
                        <strong>Nombre:</strong>
                        {{ $category->name }}
                    </div>

                    <div class="form-group">
                        <strong>Estilo:</strong>
                        {{ $category->style }}
                    </div>

                    <div class="form-group">
                        <strong>Nivel:</strong>
                        {{ $category->level }}
                    </div>

                    <div class="form-group">
                        <strong>Gender:</strong>
                        {{ $category->gender }}
                    </div>

                    <div class="form-group">
                        <strong>Cost:</strong>
                        {{ $category->cost }}


                        <div class="card-body">
                            <form method="POST" action="{{ route('competing-participant.store') }}" role="form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="category_id" value='{{ $category->id }}'>
                                <input type="hidden" name="user_id" value='{{ Auth::user()->name }}'>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section> -->
@endsection