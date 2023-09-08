<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\County;
use App\Models\Subcounty;
class DropDown extends Component
{
    public $counties;
    public $selectedcounty=null;
    public $subcounties;
    public function mount(){
        $this->counties=County::all();
    }
    public function render()
    {
        return view('livewire.drop-down');
    }

    public function updatedSelectedcounty(){
        $this->subcounties=Subcounty::where('county_code',$this->selectedcounty)->get();
    }
}
