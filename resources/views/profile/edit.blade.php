<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-pastel-blue leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-pastel-light">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Profile Information Update -->
            <div class="p-6 sm:p-8 bg-white shadow rounded-lg border border-pastel-blue">
                <div class="max-w-xl">
                    <h3 class="text-lg font-semibold text-pastel-blue mb-4">
                        Update Profile Information
                    </h3>
                    <!-- Form Update Profile Information -->
                    <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf
                        @method('patch')

                        <!-- Nama -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <!-- Email -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>

                        <!-- Foto Profil -->
                        <div class="mb-4">
                            <x-input-label for="profile_photo" :value="__('Profile Photo')" />
                            <div class="flex items-center">
                                @if ($user->profile_photo)
                                    <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="Profile Photo" class="w-16 h-16 rounded-full object-cover mr-4">
                                @else
                                    <img src="{{ asset('default-profile.png') }}" alt="Default Profile" class="w-16 h-16 rounded-full object-cover mr-4">
                                @endif
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    {{ __('Upload a new profile photo if you want.') }}
                                </p>
                            </div>
                        </div>

                        <div>
                            <x-input-label for="profile_photo" :value="__('Upload New Photo')" />
                            <x-text-input id="profile_photo" name="profile_photo" type="file" class="mt-1 block w-full" />
                            <x-input-error class="mt-2" :messages="$errors->get('profile_photo')" />
                        </div>

                        <!-- Simpan -->
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>

                            @if (session('status') === 'profile-updated')
                                <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>

            <!-- Password Update -->
            <div class="p-6 sm:p-8 bg-white shadow rounded-lg border border-pastel-blue">
                <div class="max-w-xl">
                    <h3 class="text-lg font-semibold text-pastel-blue mb-4">
                        Update Password
                    </h3>
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete Account -->
            <div class="p-6 sm:p-8 bg-white shadow rounded-lg border border-pastel-blue">
                <div class="max-w-xl">
                    <h3 class="text-lg font-semibold text-pastel-red mb-4">
                        Delete Account
                    </h3>
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
