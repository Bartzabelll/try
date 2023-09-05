<div class="grid my-5 text-3xl font-semibold text-center 8xl place-items-start md:place-items-center">
    <h1>Create User</h1>
    <div class= "border-l-4 border-r-4 rounded-xl border-y-8 w-80">
        <x-ui-input label="First Name" placeholder="First name" wire:model='firstName' />
        <x-ui-input label="Middle Name" placeholder="Middle name" wire:model='middleName' />
        <x-ui-input label="Last Name" placeholder="Last name" wire:model='lastName' />
        <x-ui-input label="Email Address" placeholder="Email address" wire:model='email' />
        <x-ui-inputs.password label="Password" placeholder="Password" wire:model='password' />
        <x-ui-inputs.password label="Confirm Password" placeholder="Confirm Password" wire:model='password_confirmation'  />
        <x-ui-button label="Save" wire:click='create' class="bg-amber-400 border-y-8"/>
    </div>

    {{-- flex justify-center items-center --}}

        {{-- Be like water. --}}

</div>
