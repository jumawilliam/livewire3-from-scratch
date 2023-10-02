<div class="offset-3 col-6">
    <h1>Create Post</h1>
    <div class="card">
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form wire:submit="save">
                <div class="mb-3">
                  <label  class="form-label">Title</label>
                  <input wire:model.blur="title" wire:dirty.class="border-warning"  type="text" class="form-control">
                  @error('title')
                    <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Description</label>
                    <input wire:model.blur="description" type="text" class="form-control">
                    @error('description')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="alert alert-warning" wire:dirty>You have some unsaved changes</div>
                <div class="alert alert-secondary" wire:dirty.remove>Your form is in sync</div>
                <div class="alert alert-secondary" wire:dirty wire:target="title">You have some unsaved changes in the title</div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
      </div>
</div>