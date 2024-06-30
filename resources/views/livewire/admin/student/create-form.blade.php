<div>
    <x-mary-form wire:submit='save'>
        <div class="mt-2 bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
            <div class="grid grid-cols-3 gap-4 p-6 text-gray-900 dark:text-gray-100">
                {{-- name --}}
                <x-mary-input class="col-span-1" label="{{ __('Name') }}" wire:model="name" icon="o-user"
                    hint="Solo los dos nombres" />

                {{-- last_name --}}
                <x-mary-input class="col-span-1" label="{{ __('Last name') }}" wire:model="lastName" icon="o-user"
                    hint="Solo los dos apellidos" />

                {{-- identification --}}
                <x-mary-input class="col-span-1" label="{{ __('Identification') }}" wire:model="identification"
                    icon="o-user" hint="Número de identificación del estudiante" />

                {{-- mail --}}
                <x-mary-input class="col-span-1" label="{{ __('Email') }}" wire:model="email" icon="o-user" />

                {{-- phone_number --}}
                <x-mary-input class="col-span-1" label="{{ __('Phone number') }}" wire:model="phoneNumber"
                    icon="o-user" hint="Teléfono celular" />

                {{-- address --}}
                <div class="col-span-2">
                    <x-mary-input class="w-full" label="{{ __('Address') }}" wire:model="address" icon="o-user"
                        hint="Dirección completa" />
                </div>

                {{-- is_disabled --}}
                <div class="flex items-center content-center">
                    <x-mary-checkbox label="{{ __('Is disabled?') }}" wire:model="isDisabled"
                        hint="Debe poseer carnet de discapacidad" />
                </div>

                {{-- profile_picture_path --}}
                <x-mary-file class="col-span-1" wire:model='profilePicture' label="{{ __('Profile picture') }}"
                    hint="Only JPG" accept=".jpg" />
            </div>
        </div>

        <div class="mt-2 bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
            <div class="grid grid-cols-3 gap-4 p-6 text-gray-900 dark:text-gray-100">
                {{-- major_id --}}
                <x-mary-select class="col-span-1" label="Master user" icon="o-user" :options="$majors"
                    wire:model="majorId" />

                {{-- semester --}}
                <x-mary-input class="col-span-1" label="{{ __('Semester') }}" wire:model="semester" icon="o-eye"
                    type="number" min="0" />


                {{-- average_rating --}}
                <x-mary-input class="col-span-1" label="{{ __('Average rating') }}" wire:model="averageRating"
                    icon="o-eye" type="number" min="8" step="0.01" />

                {{-- average_incomes --}}
                <x-mary-input class="col-span-1" label="{{ __('Average incomes') }}" wire:model="averageIncomes"
                    icon="o-eye" type="number" min="8" step="0.01" />
            </div>
        </div>

        <x-slot:actions>
            {{-- <x-mary-button label="Cancelar" /> --}}
            <x-mary-button label="Guardar" class="btn-primary" type="submit" spinner="save" />
        </x-slot:actions>
    </x-mary-form>
</div>
