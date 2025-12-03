<?php
// secondary-link-button.blade.php
?>
<a
    {{ $attributes->merge([
        'class' => 'inline-flex items-center
                    px-4 py-2
                    bg-white
                    dark:bg-gray-700 dark:text-gray-300 dark:border-gray-700
                    border border-gray-300
                    rounded-md font-semibold
                    text-xs text-gray-700 uppercase tracking-widest
                    shadow-sm
                    hover:bg-gray-100 hover:dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                    disabled:opacity-25
                    transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>
