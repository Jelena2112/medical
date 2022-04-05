<nav>

   @auth

        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>

        <a href="{{route('userAllInfo.get')}}">Moj karton</a>
       @if(\Illuminate\Support\Facades\Auth::user()->type != "user")
           {{dd(\Illuminate\Support\Facades\Auth::user()->userType->user_type)}}
        @endif

    @elseauth

        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>

    @endauth
</nav>
