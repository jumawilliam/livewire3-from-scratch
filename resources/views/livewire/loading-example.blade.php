<div>
    <h1 class="text-primary" wire:loading.class="opacity-50">Loading States</h1>
    <form wire:submit="save">
        <div wire:loading.remove class="alert alert-warning">
            Instructions
        </div>
        <div wire:loading.delay wire:target="save" class="alert alert-primary">
            Saving form....
        </div>
        <button type="submit" wire:target="save" class="btn btn-primary">
            <div wire:loading wire:target="save" class="spinner-border spinner-border-sm">

            </div>
            Save
        </button>
    </form>

    <div wire:loading.block wire:target="delete" class="alert alert-secondary">
        deleting...
    </div>
    <button wire:loading.attr="disabled" wire:target="delete" wire:click="delete" class="btn btn-danger">
        <div wire:loading wire:target="delete" class="spinner-border spinner-border-sm">

        </div>
        Delete
    </button>
</div>
