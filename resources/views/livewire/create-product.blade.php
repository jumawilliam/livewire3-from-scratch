<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">{{$formtitle}}</h1>
          <button  type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Title</label>
                  <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror" >
                  @error('title')
                    <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">description</label>
                    <input wire:model="description" type="text" class="form-control @error('description') is-invalid @enderror" >
                    @error('description')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">price</label>
                    <input wire:model="price" type="number" class="form-control @error('price') is-invalid @enderror" >
                    @error('price')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>

              </form>
        </div>
        <div class="modal-footer">
          @if($editform)
          <button  type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button wire:click="update" type="button" class="btn btn-primary">update</button>
          @else
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button wire:click="save" type="button" class="btn btn-primary">Save changes</button>
          @endif
        </div>
      </div>
    </div>
  </div>
