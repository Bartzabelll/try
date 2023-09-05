<div class="mb-3">
    <x-ui-button href="{{route('room.create')}}" label="Primary" class="text-white rounded-full hover:text-amber-500 hover:bg-amber-700 bg-amber-500"  />
    <x-ui-input label="Room" placeholder="Enter room number" wire:model='roomName' />
    <x-ui-input label="Capacity" placeholder="Enter room capacity" wire:model='roomCapacity' />
</div>
<div>
