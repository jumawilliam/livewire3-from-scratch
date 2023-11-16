<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Loan;
class LoanCalculator extends Component
{
    public $amount=500;
    public $period=1;
    public $loans;

    public function mount(){
        $this->loans=Loan::where('min_amount','<=',$this->amount)
                            ->where('max_amount','>=',$this->amount)
                            ->where('min_period','<=',$this->period)
                            ->where('max_period','>=',$this->period)
                            ->get();
    }

    public function render()
    {
        return view('livewire.loan-calculator');
    }

    public function Updated($property){
        if($property==='amount'){
            $this->amount=ceil($this->amount/50)*50;
        }
        $this->getLoans();
    }

    public function getLoans(){
        $this->loans=Loan::where('min_amount','<=',$this->amount)
                            ->where('max_amount','>=',$this->amount)
                            ->where('min_period','<=',$this->period)
                            ->where('max_period','>=',$this->period)
                            ->get();
    }
}
