<nav class="uk-navbar-container">
    <div class="uk-container">
        <div data-uk-navbar>
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo uk-visible@m" href="{{ url('/') }}">Questions</a>
            </div>
            <div class="uk-navbar-center uk-hidden@m">
                <a class="uk-navbar-item uk-logo" href="{{ url('/') }}">Guia</a>
            </div>

            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav uk-visible@m">
                    <!-- Authentication Links -->
                    @guest

                        <li>
                            <div class="uk-navbar-item">
                                <a class="uk-button uk-button-small uk-button-primary-outline" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </div>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <div class="uk-navbar-item">
                                    <a class="uk-button uk-button-small uk-button-primary-outline" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </div>
                            </li>
                        @endif

                    @else
                        <li>
                            <a href="#">{{ Auth::user()->name }}</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-navbar-dropdown-nav uk-nav-parent-icon" data-uk-nav>

                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>

        </div>
    </div>
</nav>


