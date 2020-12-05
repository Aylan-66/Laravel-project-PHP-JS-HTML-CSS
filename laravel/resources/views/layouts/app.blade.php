<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/cookie.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
 	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="/css/style.css" rel="stylesheet">
	
</head>
<body>
<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <div id="app">
	<style>
	.appp {
	    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;}
	</style>
        <nav class="appp">
            <div class="container">
				<ul>
                	
                	<li id="li1"><a id="a1" href="{{ route('home') }}">Catalog</a></li>
                	<li id="li1"><a id="a1" href="{{ route('panier.panier') }}">Cart<span class="badge">{{ Session::has('panier') ? Session::get('panier')->totalqty : '' }}</span></a></li>
					
					@if(auth()->check() && auth()->user()->is_admin == 1)
					<li id="li1"><a id="a1" href="{{ route('index') }}">Admin</a></li>
					@endif
            	</ul>	
             
           
				@guest
				
				
				
                    @if (Route::has('login'))
					<div class="dropdown">
                	<button class="boutonmenuprincipal">utiliateur</button>
					
					
					<div class="dropdown-child">
						<li class="nav-item">
                        	<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                     	</li>
					</div>
					@endif
					@if (Route::has('register'))
                    <div class="dropdown-child"> 
						<li class="nav-item">
                        	<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
					</div>
					@endif 
					@else
					<div class="dropdown">
                		<button class="boutonmenuprincipal">{{ Auth::user()->name }}</button>
					
					
						<div class="dropdown-child">
							<li class="nav-item">
                        		<a class="dropdown-item" href="{{ route('login') }}"
								onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                           		{{ __('Logout') }}
                           	</a>
                  			<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        		@csrf
                       		</form>
                     		</li>
						</div>
		
				@endguest 
            	</div>
                
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
	<script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
    @if(\Illuminate\Support\Facades\Cookie::get('consent') === null)
        @include('layouts.cookiescript')
		<div id="cookies">
    <div class="cookie2" >
    <table>
    <tr>
        <h1 style="color:white" >We use cookies.</h1>
        </tr>
        <tr>
        <p style="font-weight: bold;color:white">We use cookies to ensure the proper functioning of the site in order to offer you a better browsing experience.</p>
        </tr>
            <tr>
                <td><button class="btn btn-info" onclick="accept()">I accept</button></td>
                <td><button class="btn btn-danger" onclick="refuse()">I do not accept</button></td>
            </tr>
        </table>
    </div>
	</div>
    @endif
    @if(\Illuminate\Support\Facades\Cookie::get('consent') != null)
        <script>console.log('Google analytics cookies created.')</script>
    @endif

</html>
