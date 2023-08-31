<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
            
               
            @if(session()->has('success'))
            <style>
                .custom-success-message {
                    width: 50%;
                    position: fixed;
                    bottom: 10%;
                    left: 5%;
                    gap: 3rem;
                    background-color: #c6e9bd;
                }
            </style>
                <div style="width: 50%;" x-data="{ show: true }"
                    x-show="show"
                    x-transition:enter="transition ease-out duration-300 transform opacity-0 scale-90"
                    x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300 transform opacity-100 scale-100"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-90"
                    class="bg-green-500 text-black p-3 rounded-lg shadow-md flex justify-center gap-3 items-center mb-4 custom-success-message"
                >
                    <span>{{ session('success') }}</span>
                    <button @click="show = false" class="text-lg">&times;</button>
                </div>
            @endif



                <main>
                    {{ $slot }}
                </main>
                
            </div>
            @livewireScripts
    </body>
    <script>
        document.addEventListener('livewire:load', function () {
            Livewire.hook('message.processed', (message, component) => {
                if (message.updateQueue && message.updateQueue.includes('successMessage')) {
                    const delay = message.data.delay || 3000; // Default delay of 3 seconds
                    setTimeout(() => {
                        component.set('successMessage', '');
                    }, delay);
                }
            });
        });
    </script>
</html>

