<div>
    <h1>Transitions</h1>
    @if($showAlert)
    <div wire:transition.origin.left.delay.100ms class="alert alert-success">
        Alert Info
    </div>
    @endif
    <button wire:click="toggleAlert" class="btn btn-primary">show Alert</button>
</div>
