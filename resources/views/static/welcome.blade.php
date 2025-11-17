<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome to ...') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <section class="overflow-hidden bg-gray-50 sm:grid sm:grid-cols-3">
                    <div class="p-8  col-span-1">
                        <div class="mx-auto max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
                            <h2 class="text-2xl font-bold text-gray-900 md:text-3xl">
                                Join the amazing community!
                            </h2>

                            <p class="hidden text-gray-500 md:mt-4 md:block">
                                {!! $inspireMe !!}
                            </p>

                            <div class="mt-4 md:mt-8">
                                <x-primary-link-button
                                    href="{{ route('register') }}"
                                    class="inline-block px-5 py-1.5 inline-block rounded-sm bg-emerald-600! px-12 py-3 text-sm
                        font-medium text-white! transition hover:bg-emerald-700! focus:ring-2 focus:ring-yellow-400!
                        focus:outline-hidden rounded-sm text-sm leading-normal"
                                >
                                    Join us today!
                                </x-primary-link-button>
                            </div>
                        </div>
                    </div>
                    <img alt="image: Roles & Permissions Banner"
                         src="{{ asset('storage/Roles-and-Permissions.svg') }}"
                         class="col-span-2 w-full object-cover">
                </section>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <h2 class="text-xl p-6 bg-black text-white">Users</h2>

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
