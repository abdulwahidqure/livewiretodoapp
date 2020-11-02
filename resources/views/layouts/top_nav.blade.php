<div class="grid grid-cols-8 w-full mt-0 h-16  bg-gray-700 shadow-lg">
    <a href="#" class="col-span-1 text-center
                        font-medium text-white focus:text-yellow-100 focus:bg-gray-600 hover:text-yellow-100 
                        focus:outline-none focus:underline 
                        transition ease-in-out duration-150 
                        hover:bg-gray-600">
        <p class="mt-5">Home</p>
    </a>
    <a href="#" class="col-span-1 text-center font-medium text-white hover:text-yellow-100 focus:outline-none focus:underline transition ease-in-out duration-150 hover:bg-gray-600 ">
        <p class="mt-5">Todos</p>
    </a>
    @auth
        <a
            href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class="col-span-1 col-end-9 text-center 
            font-medium text-white hover:text-yellow-100 
            focus:outline-none focus:underline transition 
            ease-in-out duration-150 hover:bg-gray-600 "
        >
        <p class="mt-5">Log Out</p>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @else
            <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Log in</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Register</a>
            @endif
    @endauth
    
</div>