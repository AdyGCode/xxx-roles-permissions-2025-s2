<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome to ...') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <h2 class="text-3xl p-6 bg-black text-white">It's quite random really</h2>

                <div class="p-6 text-gray-900">
                    RANDOM JOKE HERE
                </div>

            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <section class="overflow-hidden bg-gray-50 sm:grid sm:grid-cols-2">
                    <div class="p-8 md:p-12 lg:px-16 lg:py-24">
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

                    <img alt=""
                         src="https://images.unsplash.com/photo-1485981133625-f1a03c887f0a?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=2070"
                         class="h-56 w-full object-cover sm:h-full">
                </section>
            </div>

        </div>
    </div>
</x-app-layout>
