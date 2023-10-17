<div class="offset-3 col-6">
    <h1>Multiple File Uploads</h1>
    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
    <form wire:submit="uploadFile">
        <div
        x-data="{ uploading: false, progress: 0 }"
        x-on:livewire-upload-start="uploading = true"
        x-on:livewire-upload-finish="uploading = false"
        x-on:livewire-upload-error="uploading = false"
        x-on:livewire-upload-progress="progress = $event.detail.progress"
    >
        <div class="mb-3">
            <div x-show="uploading">
                <progress max="100" x-bind:value="progress"></progress>
            </div>
        </div>
        <div class="mb-3">
            <input type="file" id="files{{$id}}" wire:model="files" class="form-control" multiple>
        </div>
        <button class="btn btn-primary">Upload</button>
    </div>
    </form>
</div>
