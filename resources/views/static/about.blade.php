<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About') }} {{ config('app.name', 'Laravel') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-8">

            <section class="border border-gray-100 grow h-full shadow-md rounded-lg space-y-2 overflow-hidden">
                <h2 class="text-xl text-gray-50 font-semibold bg-indigo-700 p-4 pb-6 mb-6 ">
                    The Team
                </h2>

                <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-3 xl:grid-cols-4">
                        <div class="shadow rounded-lg p-2 pb-3">
                            <img src="{{ asset('storage/undraw_programming_j1zw.svg') }}" alt=""
                                 class="aspect-video rounded-lg object-cover">

                            <div class="mt-4 flex items-center justify-between gap-4">
                                <div>
                                    <h3 class="text-lg/tight font-semibold text-gray-900">YOUR NAME</h3>

                                    <p class="mt-0.5 text-sm text-gray-700">Lead Developer</p>
                                </div>

                                <a href="https://github.com/YOURNAME" target="_blank" rel="noreferrer"
                                   class="text-[#0072b1] transition-opacity hover:opacity-70">
                                    <i class="fa-brands fa-github text-4xl"></i>
                                </a>
                            </div>
                            <p class="mt-0.5 text-sm text-gray-500">More details here</p>
                        </div>

                        <div class="shadow rounded-lg p-2 pb-3">
                            <img src="{{ asset('storage/undraw_dev-productivity_5wps.svg') }}" alt=""
                                 class="aspect-video rounded-lg object-cover">

                            <div class="mt-4 flex items-center justify-between gap-4">
                                <div>
                                    <h3 class="text-lg/tight font-semibold text-gray-900">Eric Johnson</h3>

                                    <p class="mt-0.5 text-sm text-gray-700">Product Designer</p>
                                </div>

                                <a href="#" target="_blank" rel="noreferrer"
                                   class="text-[#0072b1] transition-opacity hover:opacity-90">
                                    <i class="fa-brands fa-github text-4xl"></i>

                                </a>
                            </div>
                            <p class="mt-0.5 text-sm text-gray-500">More details here</p>
                        </div>

                        <div class="shadow rounded-lg p-2 pb-3">
                            <img src="{{ asset('storage/undraw_maintenance_4unj.svg') }}" alt=""
                                 class="aspect-video rounded-lg object-cover">

                            <div class="mt-4 flex items-center justify-between gap-4">
                                <div>
                                    <h3 class="text-lg/tight font-semibold text-gray-900">TEAM MEMBER_NAME</h3>

                                    <p class="mt-0.5 text-sm text-gray-700">CI/CD</p>
                                </div>

                                <a href="#" target="_blank" rel="noreferrer"
                                   class="text-[#0072b1] transition-opacity hover:opacity-90">
                                    <i class="fa-brands fa-github text-4xl"></i>

                                </a>
                            </div>
                            <p class="mt-0.5 text-sm text-gray-500">More details here</p>
                        </div>

                        <div class="shadow rounded-lg p-2 pb-3">
                            <img src="{{ asset('storage/undraw_dev-focus_dd7i.svg') }}" alt=""
                                 class="aspect-video rounded-lg object-cover">

                            <div class="mt-4 flex items-center justify-between gap-4">
                                <div>
                                    <h3 class="text-lg/tight font-semibold text-gray-900">TEAM MEMBER_NAME</h3>

                                    <p class="mt-0.5 text-sm text-gray-700">Developer</p>
                                </div>

                                <a href="#" target="_blank" rel="noreferrer"
                                   class="text-[#0072b1] transition-opacity hover:opacity-90">
                                    <i class="fa-brands fa-github text-4xl"></i>

                                </a>
                            </div>
                            <p class="mt-0.5 text-sm text-gray-500">More details here</p>
                        </div>

                        <div class="shadow rounded-lg p-2 pb-3">
                            <img src="{{ asset('storage/undraw_secure-server_lz9x.svg') }}" alt=""
                                 class="aspect-video rounded-lg object-cover">

                            <div class="mt-4 flex items-center justify-between gap-4">
                                <div>
                                    <h3 class="text-lg/tight font-semibold text-gray-900">TEAM MEMBER_NAME</h3>

                                    <p class="mt-0.5 text-sm text-gray-700">IT Support</p>
                                </div>

                                <a href="#" target="_blank" rel="noreferrer"
                                   class="text-[#0072b1] transition-opacity hover:opacity-90">
                                    <i class="fa-brands fa-github text-4xl"></i>

                                </a>
                            </div>
                            <p class="mt-0.5 text-sm text-gray-500">More details here</p>
                        </div>

                    </div>
                </div>

            </section>

            <section class=" border grow h-full shadow-md p-4 pb-8 rounded-lg space-y-2">
                <h2 class="text-xl text-gray-50 bg-black p-4 pb-6 mb-6 -mx-4 -mt-4 rounded-t">
                    Technologies & Products
                </h2>

                <div class="flex space-x-6 flex-wrap text-gray-600">
                    <p>
                        <a href="#" class="hover:text-gray-500">
                            <span class="min-w-8 h-6 mr-0.5">
                                <img src="{{ asset('storage/php.svg') }}" alt="" class="inline-block h-6">
                            </span>
                            <span>PHP</span>
                        </a>
                    </p>
                    <p>
                        <a href="#" class="hover:text-gray-500">
                                                        <span class="min-w-8 h-6 mr-0.5">
                                <img src="{{ asset('storage/laravel.svg') }}" alt="" class="inline-block h-6">
                            </span>
                            <span>Laravel</span>
                        </a>
                    </p>
                    <p>
                        <a href="#" class="hover:text-gray-500">
                            <span class="min-w-8 h-6 mr-0.5">
                                <img src="{{ asset('storage/livewire.svg') }}" alt="" class="inline-block h-6">
                            </span>
                            <span>Livewire</span>
                        </a>
                    </p>
                    <p>
                        <a href="#" class="hover:text-gray-500 ">
                            <span class="min-w-8 h-6 mr-0.5">
                                <img src="{{ asset('storage/spatie.svg') }}" alt="" class="inline-block h-6">
                            </span>
                            <span>Spatie Permissions</span>
                        </a>
                    </p>
                    <p>
                        <a href="#" class="hover:text-gray-500">
                            <span class="min-w-8 h-6 mr-0.5">
                                <img src="{{ asset('storage/phpstorm.svg') }}" alt="" class="inline-block h-6">
                            </span>
                            <span>PHP Storm</span>
                        </a>
                    </p>
                    <p>
                        <a href="#" class="hover:text-gray-500">
                            <span class="min-w-8 h-6 mr-0.5">
                                <img src="{{ asset('storage/tailwindcss.svg') }}" alt="" class="inline-block h-6">
                            </span>
                            <span>TailwindCSS</span>
                        </a>
                    </p>
                    <p>
                        <a href="#" class="hover:text-gray-500">
                            <span class="min-w-8 h-6 mr-0.5">
                                <img src="{{ asset('storage/fontawesome.svg') }}" alt="" class="inline-block h-6">
                            </span>
                            <span>FontAwesome</span>
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
