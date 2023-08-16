<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Wizard extends Component
{
    public $currentStep = 1;
    public $successMessage = '';
    public $cardId, $name, $last_name, $email;
    public $bank, $num_operation, $payment_date, $image;

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        return view('livewire.wizard');
    }

    //

    public function firstStepSubmit()
    {
        // $validatedData = $this->validate([
        //     // 'cardId' => 'required|unique:payment',
        //     // 'name' => 'required|numeric',
        //     // 'last_name' => 'required',
        //     // 'email' => 'required'
        // ]);

        $this->currentStep = 2;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function secondStepSubmit()
    {
        // $validatedData = $this->validate([
        //     // 'cardId' => 'required|unique:payment',
        //     'name' => 'required',
        //     'last_name' => 'required',
        //     'email' => 'required'
        // ]);

        $this->currentStep = 3;
    }


    public function submitForm()
    {
        // Product::create([
        //     'name' => $this->name,
        //     'amount' => $this->amount,
        //     'description' => $this->description,
        //     'stock' => $this->stock,
        //     'status' => $this->status,
        // ]);

        $this->successMessage = 'Los datos de su pago han sido registrados.';

        $this->clearForm();

        $this->currentStep = 1;
    }

    //
    public function back($step)
    {
        $this->currentStep = $step;
    }

    //
    public function clearForm()
    {
        // $this->name = '';
        // $this->amount = '';
        // $this->description = '';
        // $this->stock = '';
        // $this->status = 1;
    }
}
