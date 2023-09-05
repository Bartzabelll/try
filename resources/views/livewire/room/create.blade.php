<div class="grid my-5 text-3xl font-semibold text-center 8xl place-items-start md:place-items-center">
    <h1>Create Room</h1>
<div class="text-3xl font-semibold text-center 8xl w-96">
    <x-ui-input label="Room" placeholder="Enter room name" wire:model='name' />
    <x-ui-inputs.number label="Capacity" placeholder="Enter room capacity" wire:model='capacity' />
    <x-ui-input label="Description" placeholder="Enter room capacity" wire:model='description' />


    <x-ui-button label="Save" wire:click='create' class="bg-white border-amber-400 border-y-2"/>
</div>
</div>
