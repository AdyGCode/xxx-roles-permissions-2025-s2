<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts/Styles -->
@vite(['resources/css/app.css', 'resources/js/app.js'])

@livewireStyles

<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">

    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">


        <section class="bg-white lg:grid lg:h-screen lg:place-content-center dark:bg-gray-900">

            <x-application-logo class="w-24 h-24 mx-auto mb-16"/>
            <div
                class=" mx-auto pl-4 pb-16 sm:pl-6 sm:pb-24 gap-4 lg:pl-8 lg:pb-32 md:flex md:flex-row">
                <div class="max-w-prose text-left">
                    <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl dark:text-white mb-8">
                        <span class="text-red-500 text-6xl">OOPS!</span><br>We seem to have a <br>small problem...
                    </h1>

                    <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
                        <div class="flex items-center pt-8 sm:justify-start sm:pt-0">

                            <div class="px-4 text-6xl text-gray-500 border-r border-gray-400 tracking-wider">
                                @yield('code')
                            </div>

                            <div class="ml-4 text-lg text-gray-500 uppercase tracking-wider">
                                @yield('message')
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 flex gap-4 sm:mt-6">

                        <x-primary-link-button href="{{route('home')}}" class="shadow">Home</x-primary-link-button>

                        @auth()
                            <x-secondary-link-button href="{{route('dashboard')}}">Dashboard</x-secondary-link-button>

                            @hasrole('admin')
                            |
                            @endhasrole

                            @hasanyrole('admin|super-admin|staff')
                            <x-secondary-link-button href="{{route('admin.index')}}">Admin</x-secondary-link-button>
                            @endhasanyrole

                        @elseauth()
                            <x-secondary-link-button href="{{route('login')}}">Login</x-secondary-link-button>

                            <x-secondary-link-button href="{{route('register')}}">Register</x-secondary-link-button>
                        @endauth

                    </div>
                </div>

                <x-error-image viewBox="0 0 700 700"
                               class="mx-auto hidden max-w-96 md:block"/>

            </div>
        </section>

    </div>
</div>
</body>
</html>
