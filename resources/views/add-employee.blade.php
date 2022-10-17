<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Employee') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="">

                        <!-- Nama Lengkap -->
                        <div>
                            <x-input-label for="name" :value="__('Nama Lengkap')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Alamat Email -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Alamat Email')" />

                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                required />

                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- No HP -->
                        <div class="mt-4">
                            <x-input-label for="nohp" :value="__('Nomor Telepon')" />

                            <x-text-input id="nohp" class="block mt-1 w-full" type="text" name="nohp"
                                required />

                            <x-input-error :messages="$errors->get('nohp')" class="mt-2" />
                        </div>

                        <!-- Domisili -->
                        <div class="mt-4">
                            <x-input-label for="domisili" :value="__('Domisili')" />

                            <x-text-input id="domisili" class="block mt-1 w-full" type="text" name="domisili"
                                required />

                            <x-input-error :messages="$errors->get('domisili')" class="mt-2" />
                        </div>

                        <x-primary-button type="submit" class="mt-4">
                            {{ __('Tambah data') }}
                        </x-primary-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
