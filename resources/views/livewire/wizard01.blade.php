@extends('layouts.main', ['activePage' => 'Inscrpción', 'titlePage' => 'Proceso de Inscripción'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            @if(!empty($successMessage))
                            <div class="alert alert-success">
                                {{ $successMessage }}
                            </div>
                            @endif

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

                            <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
                                <div class="col-xs-12">
                                    <div class="col-md-12">

                                        <!-- <h3> Step 1</h3> -->

                                        <div class="container">
                                            <p class="h5">Ejemplo de tarjetas (Header and footer) </p>
                                            <div class="card">
                                                <h5 class="card-header">Featured</h5>
                                                <div class="card-body">
                                                    <h5 class="card-title">Special title treatment</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover">
                                                    <thead class="text-primary">
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Código</th>
                                                            <th>Nombre</th>
                                                            <th>Estilo</th>
                                                            <th>Nivel</th>
                                                            <th>Género</th>
                                                            <th>Participantes</th>
                                                            <th>Costo</th>
                                                            <th class="text-right">Seleccione</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($categories as $category)
                                                        <tr>
                                                            <td>{{ ++$i }}</td>
                                                            <td>{{ $category->code }}</td>
                                                            <td>{{ $category->name }}</td>
                                                            <td>{{ $category->style }}</td>
                                                            <td>{{ $category->level }}</td>
                                                            <td>{{ $category->gender }}</td>
                                                            <td>{{ $category->participants }}</td>
                                                            <td>{{ $category->cost }}</td>
                                                            <!-- Botón radio -->
                                                            <td><input type="radio" name="category" wire:model='category_id' value="{{$category->id}}"></td>
                                                            @error('category_id') <span class="error">{{ $message }}</span> @enderror
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                <!-- Nombre del Usuario -->
                                                <td><input type="hidden" name="user_name" wire:model='user_name' value="{{Auth::user()->name}}"></td>
                                                @error('user_name') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit" type="button">Next</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <h3> Step 2</h3>


                                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="secondStepSubmit">Next</button>
                                        <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button>
                                    </div>
                                </div>
                            </div>


                            <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <h3> Step 3</h3>

                                        <table class="table">
                                            <!--  -->
                                        </table>

                                        <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
                                        <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer mr-auto">
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection