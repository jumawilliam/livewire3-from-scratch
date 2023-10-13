<div>
    <h1>User Details</h1>
    <form wire:submit="save" class="offset-3 col-6">
        <x-input wire:model="name" name="name" type="text" label="Name"/>
        <x-input wire:model="email" name="email" type="email" label="Email Address"/>
        <x-input wire:model="phone" name="phone" type="number" label="Phone Number"/>
        <x-input wire:model="password" name="password" type="password" label="Password"/>
        <x-button class="btn-success">
            Save
        </x-button>
    </form>
</div>
