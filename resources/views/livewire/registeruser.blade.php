<div class="offset-3 col-6">
    <form wire:submit="save">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input wire:model="name" type="text" class="form-control">
            <div>
            @error('name')<span class="text-danger">{{$message}}</span>@enderror
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input wire:model="email" type="email" class="form-control">
            <div>
                @error('email')<span class="text-danger">{{$message}}</span>@enderror
                </div>
        </div>
        <div class="mb-3">
            <label class="form-label">password</label>
            <input wire:model.live.debounce.150ms="password" type="password" class="form-control">
            <div>
                @error('password')<span class="text-danger">{{$message}}</span>@enderror
            </div>
        </div>
        <button  type="submit" class="btn btn-primary">
            Submit
            <div wire:loading class="spinner-border spinner-border-sm">
            </div>
        </button>
    </form>
</div>
