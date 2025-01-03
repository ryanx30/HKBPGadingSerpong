<!-- resources/views/auth/login.blade.php -->
<x-guest-layout>
    <div class="text-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Welcome back!</h2>
        <p class="text-sm text-gray-600">Enter your Email and Password</p>
    </div>

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <!-- Email -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Submit -->
        <div>
            <x-primary-button class="w-full">
                {{ __('Login') }}
            </x-primary-button>
        </div>

        <!-- Remember me -->
        <div class="flex items-center justify-between">
            <label for="remember_me" class="flex items-center">
                <input id="remember_me" type="checkbox" name="remember" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
            <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">
                {{ __('Forgot your password?') }}
            </a>
        </div>

        <div class="text-center text-sm text-gray-600">
            Don’t have an account? <a href="{{ route('register') }}" class="text-indigo-600 hover:underline">Sign Up</a>
        </div>
    </form>
</x-guest-layout>
