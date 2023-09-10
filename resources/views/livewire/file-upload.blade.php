<div class="offset-3 col-6">
    <h1>File Upload</h1>
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif
    <form wire:submit="save">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input wire:model="name" type="text" class="form-control">
            <div>
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">File</label>
            <input wire:model="file" type="file" class="form-control">
            <div>
                @error('file')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <button class="btn btn-primary">submit</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($downloads as $download)
            <tr>
                <th scope="row">{{$loop->index+1}}</th>
                <td>{{$download->name}}</td>
                <td>
                    <button wire:click="downloadfile({{$download->id}})" class="btn btn-success btn-sm">Download</button> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
