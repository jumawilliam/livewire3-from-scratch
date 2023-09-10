<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Rule;
use App\Models\Uploadfile;
use Illuminate\Support\Facades\Storage;
class FileUpload extends Component
{
    use WithFileUploads;

    #[Rule('required')]
    public $name;

    #[Rule('file|mimes:pdf,doc,docx|max:2048')]
    public $file;

    public $path;

    public $downloads;
    public function mount(){
        $this->downloads=Uploadfile::all();
    }
    public function render()
    {
        return view('livewire.file-upload');
    }

    public function save(){
        $this->validate();
        $this->path=$this->file->store('myfiles');

        Uploadfile::create([
            'name'=>$this->name,
            'path'=>$this->path,
        ]);

        session()->flash('status','File uploaded');
        return $this->redirect('fileupload',navigate:true);

    }

    public function downloadfile(Uploadfile $uploadfile){

        //dd($uploadfile);

        if(Storage::disk('local')->exists($uploadfile->path)){
            session()->flash('status','File is downloading');
            return Storage::download($uploadfile->path,$uploadfile->name);
        }
        session()->flash('status','File not found');
    }
}
