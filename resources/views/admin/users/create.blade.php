<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Create new user') }}
        </h2>
    </x-slot>
    <div class="py-6" x-data="{ is_student: false }">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('users.store') }}" method="post">
                        @csrf
                        <div class="grid grid-cols-3 gap-4 ">
                            {{-- name --}}
                            <x-mary-input class="col-span-1" label="{{ __('Name') }}"
                                placeholder="{{ __('Type the user name') }}" icon="o-user" name="name" />

                            {{-- last_name --}}
                            <x-mary-input class="col-span-1" label="{{ __('Email') }}"
                                placeholder="{{ __('Type the user email') }}" icon="o-at-symbol" name="email" />

                            {{-- password --}}
                            <x-mary-input class="col-span-1" label="{{ __('Password') }}"
                                placeholder="{{ __('Type the user password') }}" icon="o-lock-closed" name="password"
                                type="password" />

                            <x-mary-toggle class="col-span-1" label="{{ __('Is student?') }}" right
                                hint="Si no se activa se creará el usuario de un profesor"
                                x-on:change="is_student = !is_student" name="is_student" />

                            {{-- userable --}}
                            <div x-show="is_student" class="col-span-2">
                                <x-mary-select class="w-full" label="{{ __('Student') }}" icon="o-user"
                                    :options="$students" option-value="id" name="student_id" />
                            </div>

                            <div x-show="!is_student" class="col-span-2">
                                <x-mary-select class="w-full" label="{{ __('Professor') }}" icon="o-user"
                                    :options="$professors" name="professor_id" />
                            </div>

                        </div>
                        <div class="mt-4 text-end">
                            <x-primary-button>Crear usuario</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
