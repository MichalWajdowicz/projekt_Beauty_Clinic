    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->name}} {{Auth::user()->surname}} </a>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                            <li>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                    <x-responsive-nav-link :href="route('logout')"
                                                            onclick="event.preventDefault();
                                                                        this.closest('form').submit();" class="dropdown-item">
                                                        Log Out
                                                    </x-responsive-nav-link>
                                                </form>
                                                {{-- <---<a class="dropdown-item" href="{{route('dashboard')}}">Log Out --}}
                                            </a></li>
                                            <li><a class="dropdown-item" href="{{ route('visitsUser.show',Auth::id()) }}">Twoje wizyty</a></li>
                                            <li><a class="dropdown-item" href="{{ route('cart.show',Auth::id()) }}">Koszyk</a></li>
                                            <li><a class="dropdown-item" href="{{ route('surgerysUser.index',Auth::id()) }}">Oferty</a></li>
                                            @if(Auth::user()->role_id == 1)<ul >Admin
                                            <li><a class="dropdown-item" href="{{ route('doctors.index') }}">Doktorzy</a></li>
                                            <li><a class="dropdown-item" href="{{ route('surgerys.index') }}">Zabiegi</a></li>
                                            <li><a class="dropdown-item" href="{{ route('visits.index') }}">Wizyty</a></li>
                                            <li><a class="dropdown-item" href="{{ route('users.index') }}">Użytkownicy</a></li></ul>
                                            @endif
                                        </ul>
                                    </li>
                                </ul>





            @else
                <a class="navbar-brand"  href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
            @endauth
        </div>
    @endif

