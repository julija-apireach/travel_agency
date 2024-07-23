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

    <style>
        .range-slider {
          -webkit-appearance: none;
          width: 100%;
          height: 1px;
          background: #fbbf24; /* Tailwind yellow-500 */
          outline: none;
          opacity: 0.9;
          transition: opacity .15s ease-in-out;
          position: absolute;
          pointer-events: none;
        }
    
        .range-slider::-webkit-slider-thumb {
          -webkit-appearance: none;
          appearance: none;
          width: 15px;
          height: 15px;
          background: #fbbf24; /* Tailwind yellow-500 */
          cursor: pointer;
          border-radius: 50%;
          pointer-events: all;
          position: relative;
        }
    
        .range-slider::-moz-range-thumb {
            width: 15px;
            height: 15px;
          background: #fbbf24; /* Tailwind yellow-500 */
          cursor: pointer;
          border-radius: 50%;
          pointer-events: all;
          position: relative;
        }
      </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body>
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>

    <!--Layout-->
    <div class="bg-yellow-100">
        <livewire:top-bar />
        <livewire:navbar />
    </div>
    <div class="bg-gradient-to-b from-yellow-100 to-white">
        @yield('hero')
    </div>

    @yield('content')

    <livewire:footer />
     <!--End Layout-->

    @livewireScripts
</body>

</html>
