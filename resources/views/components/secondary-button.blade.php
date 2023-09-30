<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-lime-200 dark:bg-gray-800 border border-yellow-300 dark:border-yellow-500 rounded-md font-semibold text-xs text-slate-700 dark:text-slate-300 uppercase tracking-widest shadow-sm hover:bg-lime-300 dark:hover:bg-lime-700 focus:outline-none focus:ring-1 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-green-800 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
