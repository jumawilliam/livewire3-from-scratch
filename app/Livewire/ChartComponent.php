<?php

namespace App\Livewire;

use Livewire\Component;

class ChartComponent extends Component
{
    public $subscriptions=[
        ['Day'=>'Mon','Value'=>10],
        ['Day'=>'Tue','Value'=>20],
        ['Day'=>'Wed','Value'=>15],
        ['Day'=>'Thu','Value'=>25],
        ['Day'=>'Fri','Value'=>30],
        ['Day'=>'Sat','Value'=>22],
        ['Day'=>'Sun','Value'=>18],
    ];
    public function render()
    {
        return view('livewire.chart-component');
    }
}
