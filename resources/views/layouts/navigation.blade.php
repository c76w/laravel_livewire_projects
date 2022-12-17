<div class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
            <div class="container">
                <ul class="navbar-nav">
                    
                    <li class="nav-item @if(request()->routeIs('home')) active @endif">
                        <a class="nav-link" href="{{ route('home') }}" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                            </span>
                            <span class="nav-link-title">
                                {{ __('Dashboard') }}
                            </span>
                        </a>
                    </li>

                    <li class="nav-item @if(request()->routeIs('counter')) active @endif">
                        <a class="nav-link" href="{{ route('counter') }}" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-days-counter" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M20.779 10.007a9 9 0 1 0 -10.77 10.772"></path>
                                    <path d="M13 21h8v-7"></path>
                                    <path d="M12 8v4l3 3"></path>
                                 </svg>
                            </span>
                            <span class="nav-link-title">
                                {{ __('Counter') }}
                            </span>
                        </a>
                    </li>

                    <li class="nav-item @if(request()->routeIs('calculator')) active @endif">
                        <a class="nav-link" href="{{ route('calculator') }}" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calculator" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="3" width="16" height="18" rx="2"></rect>
                                    <rect x="8" y="7" width="8" height="3" rx="1"></rect>
                                    <line x1="8" y1="14" x2="8" y2="14.01"></line>
                                    <line x1="12" y1="14" x2="12" y2="14.01"></line>
                                    <line x1="16" y1="14" x2="16" y2="14.01"></line>
                                    <line x1="8" y1="17" x2="8" y2="17.01"></line>
                                    <line x1="12" y1="17" x2="12" y2="17.01"></line>
                                    <line x1="16" y1="17" x2="16" y2="17.01"></line>
                                 </svg>
                            </span>
                            <span class="nav-link-title">
                                {{ __('Calculator') }}
                            </span>
                        </a>
                    </li>

                    <li class="nav-item @if(request()->routeIs('todo-list')) active @endif">
                        <a class="nav-link" href="{{ route('todo-list') }}" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M3.5 5.5l1.5 1.5l2.5 -2.5"></path>
                                    <path d="M3.5 11.5l1.5 1.5l2.5 -2.5"></path>
                                    <path d="M3.5 17.5l1.5 1.5l2.5 -2.5"></path>
                                    <line x1="11" y1="6" x2="20" y2="6"></line>
                                    <line x1="11" y1="12" x2="20" y2="12"></line>
                                    <line x1="11" y1="18" x2="20" y2="18"></line>
                                 </svg>
                            </span>
                            <span class="nav-link-title">
                                {{ __('To-Do List') }}
                            </span>
                        </a>
                    </li>

                    <li class="nav-item @if(request()->routeIs('products')) active @endif">
                        <a class="nav-link" href="{{ route('products') }}" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="15" cy="15" r="4"></circle>
                                    <path d="M18.5 18.5l2.5 2.5"></path>
                                    <path d="M4 6h16"></path>
                                    <path d="M4 12h4"></path>
                                    <path d="M4 18h4"></path>
                                 </svg>
                            </span>
                            <span class="nav-link-title">
                                {{ __('Product Search') }}
                            </span>
                        </a>
                    </li>

                    <li class="nav-item @if(request()->routeIs('users.index')) active @endif">
                        <a class="nav-link" href="{{ route('users.index') }}" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/file-text -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                {{ __('Users') }}
                            </span>
                        </a>
                    </li>

                    <li class="nav-item @if(request()->routeIs('about')) active @endif">
                        <a class="nav-link" href="{{ route('about') }}" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/file-text -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-info-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="9"></circle>
                                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                        <polyline points="11 12 12 12 12 16 13 16"></polyline>
                                    </svg>
                            </span>
                            <span class="nav-link-title">
                                {{ __('About') }}
                            </span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>