<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite('resources/sass/app.scss')

    <!-- Custom styles for this Page-->
    @yield('custom_styles')
	<!-- Livewire styles-->
	@livewireStyles

</head>
<body class="theme-dark">
    <div class="page">
		<!-- Main header navigation -->
        <div class="sticky-top">
			<header class="navbar navbar-expand-md navbar-light sticky-top d-print-none">
				<div class="container">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
						<span class="navbar-toggler-icon"></span>
					</button>
					<h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
						<a href=".">
						Livewire Projects
						</a>
					</h1>
					<div class="flex-row navbar-nav order-md-last">
						<!-- Check if the user is logged in then show the user menu-->
						@auth
						<div class="nav-item dropdown">
							<a href="#" class="p-0 nav-link d-flex lh-1 text-reset" data-bs-toggle="dropdown" aria-label="Open user menu">
								<span class="avatar avatar-sm" style="background-image: url(https://eu.ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }})"></span>
								<div class="d-none d-xl-block ps-2">
									{{ auth()->user()->name ?? null }}
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
								<a href="{{ route('profile.show') }}" class="dropdown-item">{{ __('Profile') }}</a>
								<div class="dropdown-divider"></div>
								<form method="POST" action="{{ route('logout') }}">
									@csrf
									<a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">
										{{ __('Log Out') }}
									</a>
								</form>
							</div>
						</div>
						@endauth

					</div>
				</div>
			</header>

			<!-- Include the navigation -->
         	 @include('layouts.navigation')

			</div>
			<div class="page-wrapper">
				<!-- Yield the content for blade or the slot for Livewire-->
				@yield('content', $slot ?? '')

				<!-- Footer -->
				<footer class="footer footer-transparent d-print-none">
					<div class="container-xl">
						<div class="flex-row-reverse text-center row align-items-center">
							<div class="mt-3 col-12 col-lg-auto mt-lg-0">
								<ul class="mb-0 list-inline list-inline-dots">
									<li class="list-inline-item">
										&copy; {{ date('Y') }}
										<a href="{{ config('app.url') }}" class="link-secondary">{{ config('app.name') }}</a>
									</li>
									<li class="list-inline-item">
										Version 1.0.0
									</li>
								</ul>
							</div>
						</div>
					</div>
				</footer>
        	</div>
      	</div>
    </div>

    <!-- Core plugin JavaScript-->
    @vite('resources/js/app.js')

    <!-- Page level custom scripts -->
    @yield('custom_scripts')

	<!-- Livewire scripts-->
	@livewireScripts

</body>
</html>
