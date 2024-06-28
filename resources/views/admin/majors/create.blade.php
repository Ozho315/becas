<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Majors') }}
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
                        <x-input-label for="semesters">{{ __('Semesters') }}</x-input-label>
                        <x-text-input class="w-full" name="semesters" id="semesters" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

