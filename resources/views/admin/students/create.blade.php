<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Students') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 ">
            <div class="bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-2 text-sm text-gray-900 dark:text-gray-100">
                    <p>Se creará automáticamente un usuario y se enviarán las credenciales al estudiante registrado</p>
                </div>
            </div>
            <livewire:admin.student.create-form />
        </div>
    </div>
</x-app-layout>
