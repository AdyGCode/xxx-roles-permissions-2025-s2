<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About') }} {{ config('app.name', 'Laravel') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-8">

            <section class="border grow h-full shadow-md rounded-lg space-y-2">
                <h2 class="text-xl text-gray-50 font-semibold bg-black p-4 pb-6 mb-6 rounded-t">
                    The Team
                </h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-8 p-4">
                    <section class="border border-2 rounded-lg  p-2 text-gray-500 space-y-2">
                        <header class="-mt-2 -mx-2 mb-4 flex space-x-2 bg-black text-white  items-center">
                            <h4 class="p-2 py-3 text-xl font-semibold w-2/3">
                                YOUR NAME
                            </h4>
                            <p class="px-2 text-sm font-medium text-right grow">
                                Lead Developer
                            </p>
                        </header>

                        <p>More details here</p>

                    </section>

                    <section class="border border-2 rounded-lg  p-2 text-gray-500 space-y-2">
                        <header class="-mt-2 -mx-2 mb-4 flex space-x-2 bg-black text-white  items-center">
                            <h4 class="p-2 py-3 text-xl font-semibold w-2/3">
                                LECTURER'S NAME
                            </h4>
                            <p class="px-2 text-sm font-medium text-right grow">
                                Development Supervisor
                            </p>
                        </header>

                        <p>More details here</p>

                    </section>

                    <section class="border border-2 rounded-lg  p-2 text-gray-500 space-y-2">
                        <header class="-mt-2 -mx-2 mb-4 flex space-x-2 bg-black text-white  items-center">
                            <h4 class="p-2 py-3 text-xl font-semibold w-2/3">
                                TEAM MEMBER NAME
                            </h4>
                            <p class="px-2 text-sm font-medium text-right grow">
                                Developer
                            </p>
                        </header>

                        <p>More details here</p>

                    </section>

                </div>
            </section>

            <section class=" border grow h-full shadow-md p-4 pb-8 rounded-lg space-y-2">
                <h2 class="text-xl text-gray-50 bg-black p-4 pb-6 mb-6 -mx-4 -mt-4 rounded-t">
                    Technologies & Products
                </h2>

                <div class="flex space-x-6 flex-wrap text-gray-600">
                    <p>
                        <a href="#" class="hover:text-gray-500 underline underline-offset-4">
                            <i class="fa-brands fa-php pr-1"></i>
                            PHP
                        </a>
                    </p>
                    <p>
                        <a href="#" class="hover:text-gray-500 underline underline-offset-4">
                            <i class="fa-brands fa-laravel pr-1"></i>
                            Laravel
                        </a>
                    </p>
                    <p>
                        <a href="#" class="hover:text-gray-500 underline underline-offset-4">
                            <i class="fa-brands fa-laravel pr-1"></i>
                            Livewire
                        </a>
                    </p>
                    <p>
                        <a href="#" class="hover:text-gray-500 underline underline-offset-4">
                            <i class="fa-brands fa-laravel pr-1"></i>
                            Spatie Permissions
                        </a>
                    </p>
                    <p>
                        <a href="#" class="hover:text-gray-500 underline underline-offset-4">
                            <i class="fa-solid fa-jet-fighter-up pr-1"></i>
                            PHP Storm
                        </a>
                    </p>
                    <p>
                        <a href="#" class="hover:text-gray-500 underline underline-offset-4">
                            <i class="fa-brands fa-css3 pr-1"></i>
                            TailwindCSS
                        </a>
                    </p>
                    <p>
                        <a href="#" class="hover:text-gray-500 underline underline-offset-4">
                            <i class="fa-brands fa-font-awesome pr-1"></i>
                            FontAwesome
                        </a>
                    </p>
                </div>

            </section>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


                <h2 class="text-xl p-6 font-semibold bg-black text-white">Users</h2>

                <div class="p-6 ">
                    <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                        <div class="col-span-1 space-y-6">
                            <div class="flex items-start gap-4">
                                <div
                                    class="shrink-0 rounded-lg bg-gray-100 p-3 text-gray-700 dark:bg-gray-800 dark:text-gray-200 ">
                                    <i class="fa-solid fa-user-secret"></i>
                                </div>

                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        supervisor@example.com
                                    </h3>

                                    <p class="mt-1 text-gray-700 dark:text-gray-200">
                                        Password1
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div
                                    class="shrink-0 rounded-lg bg-gray-100 p-3 text-gray-700 dark:bg-gray-800 dark:text-gray-200 ">
                                    <i class="fa-solid fa-user-shield"></i>
                                </div>

                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        admin@example.com
                                    </h3>

                                    <p class="mt-1 text-gray-700 dark:text-gray-200">
                                        Password1
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div
                                    class="shrink-0 rounded-lg bg-gray-100 p-3 text-gray-700 dark:bg-gray-800 dark:text-gray-200 ">
                                    <i class="fa-solid fa-user-tie"></i>
                                </div>

                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        staff@example.com
                                    </h3>

                                    <p class="mt-1 text-gray-700 dark:text-gray-200">
                                        Password1
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-1 space-y-6">
                            <div class="flex items-start gap-4">
                                <div
                                    class="shrink-0 rounded-lg bg-gray-100 p-3 text-gray-700 dark:bg-gray-800 dark:text-gray-200 ">
                                    <i class="fa-solid fa-user"></i>
                                </div>

                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        client@example.com
                                    </h3>

                                    <p class="mt-1 text-gray-700 dark:text-gray-200">
                                        Password1
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div
                                    class="shrink-0 rounded-lg bg-gray-100 p-3 text-gray-700 dark:bg-gray-800 dark:text-gray-200 ">
                                    <i class="fa-solid fa-user"></i>
                                </div>

                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        client2@example.com
                                    </h3>

                                    <p class="mt-1 text-gray-700 dark:text-gray-200">
                                        Password1
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div
                                    class="shrink-0 rounded-lg bg-gray-100 p-3 text-gray-700 dark:bg-gray-800 dark:text-gray-200 ">
                                    <i class="fa-solid fa-user"></i>
                                </div>

                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        client3@example.com
                                    </h3>

                                    <p class="mt-1 text-gray-700 dark:text-gray-200">
                                        Password1
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
