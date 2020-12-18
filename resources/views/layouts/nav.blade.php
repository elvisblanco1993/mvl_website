@guest
{{-- Pre-nav --}}

<nav class="navbar navbar-light navbar-expand-md text-center text-md-right text-lg-right text-xl-right border-bottom">
    <div class="container">
        <a class="navbar-brand mx-auto" href="{{ route('home') }}">
            <img src="{{ asset('img/logo.png') }}" loading="eager" height="72px">
        </a>
        <ul class="nav navbar-nav justify-content-md-end w-100">
            <li class="nav-item">
                <span class="d-none d-md-block" style="color: rgba(28,36,60,0.56);">{{ __('Call for a Consultation') }}</span>
                <a class="nav-link p-0" href="#" style="font-family: Montserrat, sans-serif;font-weight: 900;font-size: 1.4rem;color: #eaac23;">+1 (786) 410-5853</a>
            </li>
        </ul>
    </div>
</nav>

{{-- Navbar --}}

<nav class="navbar navbar-light navbar-expand-md py-md-0" style="background: rgb(44,53,76);">
    <div class="container">
        <span class="d-md-none"></span>

        <button style="color: #eaac23" data-toggle="collapse" class="navbar-toggler border-0" data-target="#navcol-1">
            <span class="sr-only">Toggle navigation</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
              </svg>
        </button>

        <div class="collapse navbar-collapse text-uppercase" id="navcol-1" style="color: #2c344c;font-weight: 600;">
            <ul class="nav navbar-nav d-flex justify-content-between" id="links">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}" style="color: #f2f5f8; @if( request()->routeIs('home') ) color: #eaac23; border-bottom: 2px solid #eaac23; background-color: #ffd4760c  @endif">{{ __('Home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}" style="color: #f2f5f8; @if( request()->routeIs('about') ) color: #eaac23; border-bottom: 2px solid #eaac23; background-color: #ffd4760c  @endif">{{ __('About us') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home').'?#services' }}" style="color: #f2f5f8; @if( request()->routeIs('services') ) color: #eaac23; border-bottom: 2px solid #eaac23; background-color: #ffd4760c  @endif">{{ __('Services') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('resources') }}" style="color: #f2f5f8; @if( request()->routeIs('resources') ) color: #eaac23; border-bottom: 2px solid #eaac23; background-color: #ffd4760c  @endif">{{ __('Resources') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}" style="color: #f2f5f8; @if( request()->routeIs('contact') ) color: #eaac23; border-bottom: 2px solid #eaac23; background-color: #ffd4760c  @endif">{{ __('Contact Us') }}</a>
                </li>ffd4760c
            </ul>
        </div>
    </div>
</nav>



@else

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
            <svg class="" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-down-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M9.636 2.5a.5.5 0 0 0-.5-.5H2.5A1.5 1.5 0 0 0 1 3.5v10A1.5 1.5 0 0 0 2.5 15h10a1.5 1.5 0 0 0 1.5-1.5V6.864a.5.5 0 0 0-1 0V13.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                <path fill-rule="evenodd" d="M5 10.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1H6.707l8.147-8.146a.5.5 0 0 0-.708-.708L6 9.293V5.5a.5.5 0 0 0-1 0v5z"/>
            </svg>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link rounded @if(Route::currentRouteName() == 'dashboard') bg-light border-bottom   @endif" href="{{ route('dashboard') }}" >{{ __('Dashboard') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link rounded @if(Route::currentRouteName() == 'messages' || Route::currentRouteName() == 'message' ) bg-light border-bottom   @endif" href="{{ route('messages') }}" >{{ __('Messages') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link rounded @if(Route::currentRouteName() == 'settings' || Route::currentRouteName() == 'settings' ) bg-light border-bottom   @endif" href="{{ route('settings') }}" >{{ __('Settings') }}</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

@endguest


