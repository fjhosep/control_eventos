<div class="content">
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

                        <div class="container p-4 border">
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

                            <div class="container p-4 ">

                                <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">

                                    <!-- <div class=" {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1"> -->

                                    <div class="col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- <h3> Step 1</h3> -->
                                                <div class="container-lg border">
                                                    <div class="card-header card-header-primary">
                                                        <h4 class="card-title">Registro</h4>
                                                        <p class="card-category">Datos del depositante</p>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="title">Cédula o Pasaporte:</label>
                                                            <input type="text" wire:model="cardId" class="form-control">
                                                            @error('cardId') <span class="error">{{ $message }}</span> @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="title">Nombre:</label>
                                                            <input type="text" wire:model="name" class="form-control" />
                                                            @error('name') <span class="error">{{ $message }}</span> @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="title">Apellido:</label>
                                                            <input type="text" wire:model="last_name" class="form-control" />
                                                            @error('last_name') <span class="error">{{ $message }}</span> @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="title">Correo Electronico:</label>
                                                            <input type="email" wire:model="email" class="form-control" />
                                                            @error('email') <span class="error">{{ $message }}</span> @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="title">Banco o Sistema de Pago:</label>
                                                            <input type="text" wire:model="bank" class="form-control" />
                                                            @error('bank') <span class="error">{{ $message }}</span> @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="title">Número de Operación:</label>
                                                            <input type="text" wire:model="num_operation" class="form-control" />
                                                            @error('num_operation') <span class="error">{{ $message }}</span> @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="title">Fecha de transancción</label>
                                                            <input type="date" wire:model="payment_date" class="form-control" />
                                                            @error('description') <span class="error">{{ $message }}</span> @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="title">Imagen</label>
                                                            <input type="text" wire:model="image" class="form-control" id="taskDescription" />
                                                            @error('description') <span class="error">{{ $message }}</span> @enderror
                                                        </div>

                                                        <div class="card-footer ml-auto mr-auto  ">
                                                            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit" type="button">Siguiente</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- </div> -->

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

                                                <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
                                                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
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
    </div>