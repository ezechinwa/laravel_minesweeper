<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Minesweeper') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/css/style.css','resources/js/app.js','resources/js/minesweeper.js','resources/js/script.js'])
    </head>
    <body class="font-sans text-gray-900 bg-gray-background text-sm">
       <header class="flex items-center justify-between px-8 py-4">
           <a href="https://l.linklyhq.com/l/1WHhO" class="w-10 h-10 rounded-full"><img src={{URL::asset('img/devlogo.jpg')}} alt="" class="w-10 h-10 rounded-full"></a>

           <div class="flex">
               @if (Route::has('login'))
                   <div class="  top-0 right-0 px-6 py-4">
                       @auth
                           <!-- Authentication -->
                           <form method="POST" action="{{ route('logout') }}">
                               @csrf

                               <a :href="route('logout')"
                                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                   {{ __('Log Out') }}
                               </a>
                           </form>
                       @else
                           <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                           @if (Route::has('register'))
                               <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                           @endif
                       @endauth
                   </div>
               @endif
               <img src="http://www.gravatar.com/avatar/000000000000000?d=mp"  class="w-10 h-10 rounded-full"></img>
           </div>

       </header>

    <main class="container mx-auto flex space-x-6 max-w-custom" >
        <div class="w-175"> {{ $slot }}</div>
    </main>


    </body>
</html>
