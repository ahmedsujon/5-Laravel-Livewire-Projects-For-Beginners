<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $numberOne = 0;
    public $numberTwo = 0;
    public string $action = '+';
    public float $result = 0;
    public bool $disabled = false;

    public function calculate()
    {
        $num1 = (float)$this->numberOne;
        $num2 = (float)$this->numberTwo;

        if ($this->action == '-') {
            $this->result = $num1 - $num2;
        } elseif ($this->action == '+') {
            $this->result = $num1 + $num2;
        } elseif ($this->action == '*') {
            $this->result = $num1 * $num2;
        } elseif ($this->action == '/') {
            $this->result = $num1 / $num2;
        } elseif ($this->action == '%') {
            $this->result = $num1 / 100 * $num2;
        }
    }

    public function updated(){
        if ($this->numberOne == '' || $this->numberTwo == ''){
            $this->disabled = true;
        }else{
            $this->disabled = false;
        }
    }

    public function render()
    {
        return view('livewire.calculator');
    }
}
