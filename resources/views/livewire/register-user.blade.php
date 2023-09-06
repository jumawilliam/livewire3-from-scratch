<div class="offset-3 col-6">
    <form wire:submit="save">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input wire:model="form.name" type="text" class="form-control" >
            <div>
                @error('form.name') <span class="text-danger">{{ $message }}</span> @enderror 
            </div>
         
        </div>
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input wire:model="form.email" type="text" class="form-control" >
          <div>
            @error('form.email') <span class="text-danger">{{ $message }}</span> @enderror 
        </div>    
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input wire:model="form.password" type="password" class="form-control" >
          <div>
            @error('form.password') <span class="text-danger">{{ $message }}</span> @enderror 
        </div>    
        </div>
        <div class="mb-3 form-check">
          <input wire:mode="remember" type="checkbox" class="form-check-input">
          <label class="form-check-label" for="exampleCheck1">Remember</label>
        </div>
        <button type="submit" class="btn btn-primary">
            Submit
            <div wire:loading class="spinner-border spinner-border-sm" role="status">
                
            </div>
        </button>
      </form>
</div>
