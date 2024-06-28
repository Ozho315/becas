<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Students') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="grid grid-cols-3 gap-4 p-6 text-gray-900 dark:text-gray-100">
                    {{-- name --}}
                    <div class="col-span-1">
                        <x-input-label for="name">{{ __('Name') }}</x-input-label>
                        <x-text-input class="w-full" name="name" id="name"
                            placeholder="{{ __('Type the name') }}" />
                    </div>

                    {{-- last_name --}}
                    <div class="col-span-1">
                        <x-input-label for="last_name">{{ __('Last name') }}</x-input-label>
                        <x-text-input class="w-full" name="last_name" id="last_name" />
                    </div>

                    {{-- identification --}}
                    <div class="col-span-1">
                        <x-input-label for="identification">{{ __('Identification') }}</x-input-label>
                        <x-text-input class="w-full" name="identification" id="identification" />
                    </div>

                    {{-- average_rating --}}
                    <div class="col-span-1">
                        <x-input-label for="average_rating">{{ __('Average rating') }}</x-input-label>
                        <x-text-input class="w-full" name="average_rating" id="average_rating" />
                    </div>

                    {{-- average_incomes --}}
                    <div class="col-span-1">
                        <x-input-label for="average_incomes">{{ __('Average incomes') }}</x-input-label>
                        <x-text-input class="w-full" name="average_incomes" id="average_incomes" />
                    </div>

                    {{-- is_disabled --}}
                    <div class="col-span-1">
                        <x-input-label for="is_disabled">{{ __('Is disabled?') }}</x-input-label>
                        <x-text-input class="w-full" name="is_disabled" id="is_disabled" />
                    </div>

                    {{-- phone_number --}}
                    <div class="col-span-1">
                        <x-input-label for="phone_number">{{ __('Phone number') }}</x-input-label>
                        <x-text-input class="w-full" name="phone_number" id="phone_number" />
                    </div>

                    {{-- address --}}
                    <div class="col-span-1">
                        <x-input-label for="address">{{ __('Address') }}</x-input-label>
                        <x-text-input class="w-full" name="address" id="address" />
                    </div>

                    {{-- profile_picture_path --}}
                    <div class="col-span-1">
                        <x-input-label for="profile_picture_path">{{ __('Profile picture') }}</x-input-label>
                        <x-text-input class="w-full" name="profile_picture_path" id="profile_picture_path" />
                    </div>

                    {{-- semester --}}
                    <div class="col-span-1">
                        <x-input-label for="semester">{{ __('Semester') }}</x-input-label>
                        <x-text-input class="w-full" name="semester" id="semester" />
                    </div>

                    {{-- major_id --}}
                    <div class="col-span-1">
                        <x-input-label for="major_id">{{ __('Major') }}</x-input-label>
                        <x-text-input class="w-full" name="major_id" id="major_id" />
                    </div>

                    {{-- user_id --}}
                    <div class="col-span-1">
                        <x-input-label for="user_id">{{ __('User') }}</x-input-label>
                        <x-text-input class="w-full" name="user_id" id="user_id" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
