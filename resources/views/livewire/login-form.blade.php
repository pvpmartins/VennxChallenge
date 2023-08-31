<div>
    <h2 class="text-xl font-semibold mb-4">{{ __('Log In') }}</h2>
    
    <form wire:submit.prevent="login">
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
            <input wire:model="email" id="email" type="email" class="mt-1 p-2 w-full border rounded-md" required autofocus>
            @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
            <input wire:model="password" id="password" type="password" class="mt-1 p-2 w-full border rounded-md" required>
            @error('password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <!-- <div class="flex items-center justify-between">
            <label for="remember_me" class="flex items-center">
                <input wire:model="remember" id="remember_me" type="checkbox" class="mr-1">
                <span class="text-sm text-gray-700">{{ __('Remember me') }}</span>
            </label>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">{{ __('Log in') }}</button>
        </div> -->
        <button>Login</button>
    </form>
</div>