<?php

namespace App\Livewire;
use Livewire\Attributes\Js;
use Livewire\Component;
class JsComponent extends Component
{
    public $title='this is my title';
    public function render()
    {
        return view('livewire.js-component');
    }

    #[Js]
    public function save()
    {
        return <<<'JS'
            alert($wire.title.toUpperCase());
        JS;
       // $this->js("alert('button clicked')");
    }
}