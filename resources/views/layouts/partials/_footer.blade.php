<footer>
    <p class="text-gray-400">&copy; Copyright {{ date('Y')}} 
        @if(!Route::is('about'))
        &middot; <a class="text-indigo-500 hover:text-indigo-600 underline" href={{ route('about') }}>About us</a>
        @endif
    </p>
</footer>