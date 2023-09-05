<div class="flex flex-col items-start p-10 space-y-4 " >
    <span class= "flex flex-col items-center max-w-sm p-3 text-3xl font-black rounded-xl bg-amber-400 nt-5"> Edit User </span>
    <div class= "border-l-4 border-r-4 rounded-xl border-amber-400 bg-amber-400 border-y-8">
        <x-ui-input label="First Name" placeholder="First name" wire:model='firstName' />
        <x-ui-input label="Middle Name" placeholder="Middle name" wire:model='middleName' />
        <x-ui-input label="Last Name" placeholder="Last name" wire:model='lastName' />
        <x-ui-input label="Email Address" placeholder="Email address" wire:model='email' />
        <x-ui-button label="Save" wire:click='update({{$user->id}})' class="bg-white border-amber-400 border-y-8"/>
    </div>



        {{-- Be like water. --}}

</div>
