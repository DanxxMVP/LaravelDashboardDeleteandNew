<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
               <form class="rounded px-8 pt-6 pb-8 mb-4" action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Nombre')" />

                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    </div>
                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />

                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    </div>
                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
                    </div>
                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-blue-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Listo para crear?') }}
                    </a>

                    <x-primary-button class="ml-4">
                        {{ __('Crear Usuario') }}
                    </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
