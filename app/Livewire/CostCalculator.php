<?php

namespace App\Livewire;

use Livewire\Component;

class CostCalculator extends Component
{
    public $amount;
    public $error;
    public $cost;
    public $min_balance;
    public function render()
    {
        return view('livewire.cost-calculator');
    }

    public function UpdatedAmount(){

        if($this->amount<0){
            return $this->error='Amount is too low';
        }elseif($this->amount>250000){
            return $this->error='Amount exceeds the maximum withdrawable';
        }

        $this->error=null;
        $amnt=$this->amount;

        $cost=match(true){
            $amnt>=50001&& $amnt<=250000 =>309,
            $amnt>=35001&& $amnt<=50000 =>278,
            $amnt>=20001&& $amnt<=35000 =>197,
            $amnt>=15001&& $amnt<=20000 =>185,
            $amnt>=10001&& $amnt<=15000 =>167,
            $amnt>=7501&& $amnt<=10000 =>115,
            $amnt>=5001&& $amnt<=7500 =>87,
            $amnt>=3501&& $amnt<=5000 =>69,
            $amnt>=2501&& $amnt<=3500 =>52,
            $amnt>=1501&& $amnt<=2500 =>29,
            $amnt>=1001&& $amnt<=1500 =>29,
            $amnt>=501&& $amnt<=1000 =>29,
            $amnt>=101&& $amnt<=500 =>29,
            $amnt>=50&& $amnt<=100 =>11,
            $amnt>=1&& $amnt<=49 =>0,
        };

        $this->cost=$cost;
        $this->min_balance=$this->amount+$cost;
    }
}
