
<x-layouts.app>
@volt
<div>
    <h1>Offline States</h1>
    <div wire:offline class="alert alert-danger">Your internet connection is lost!</div>
    <div wire:offline.remove class="alert alert-success">Your internet connection is restored!</div>
    <input type="text" class="form-control" wire:offline.class="is-invalid">
    <button class="btn btn-primary" wire:offline.attr="disabled">Save</button>
</div>
@endvolt
</x-layouts.app>
