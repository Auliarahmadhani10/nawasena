<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- nis Address -->
        <div class="mt-4">
            <x-input-label for="nis" :value="__('Nis')" />
            <x-text-input id="nis" class="block mt-1 w-full" type="number" name="nis" :value="old('nis')" required autocomplete="nis" />
            <x-input-error :messages="$errors->get('nis')" class="mt-2" />
        </div>

        <!-- no.telp -->
        <div class="mt-4">
            <x-input-label for="no_telp" :value="__('No. Telp')" />

            <x-text-input id="no_telp" class="block mt-1 w-full"
                            type="number"
                            name="no_telp"
                            required autocomplete="new-no-telp" />

            <x-input-error :messages="$errors->get('no_telp')" class="mt-2" />
        </div>

        <!-- Alamat Address -->
        <div class="mt-4">
            <x-input-label for="alamat" :value="__('Alamat')" />
            <x-text-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="role" :value="__('Role')" />
            {{-- <x-text-input id="role" class="block mt-1 w-full" type="text" name="role" :value="old('role')" required autocomplete="username" /> --}}
            <select id="role" name="role" :value="old('role')" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <option value="">Pilih Role</option>
                <option value="suplier">Suplier</option>
                <option value="pembeli">Pembeli</option>
            </select>
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
