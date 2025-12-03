<a {{ $attributes->merge([
    'class' => 'inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent
                rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest
                hover:bg-gray-400 hover:text-white focus:bg-gray-400 active:bg-gray-400 focus:outline-none
                dark:bg-gray-800 dark:text-gray-200
				focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
				transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>
