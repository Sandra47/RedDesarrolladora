<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2  bg-purple-700 text-white font-semibold rounded-lg shadow-md hover:bg-purple-400 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75']) }}>
    {{ $slot }}
</button>
