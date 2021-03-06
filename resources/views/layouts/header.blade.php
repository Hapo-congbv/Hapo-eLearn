<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Hapo Learn" content="Hapo Learn"/>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="shortcut icon" type="img/png" href="{{ asset('storage/images/favicon.png') }}">
        <title>@yield('title')</title>
    </head>
    <body>
        <header class="container-fluid no-gutters-custom">
            <div class="row no-gutters-custom">
                <nav class="navbar no-gutters navbar-expand-sm d-flex justify-content-md-center flex-md-column flex-xl-row pl-xl-5 pr-xl-5 pt-xl-3 pb-xl-3">
                    <button class="navbar-toggler hapolearn-header-button col-1" id="icon-navbar" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="fa fa-bars" id="span-btn"></span>
                    </button>
                    <img src="{{ asset('storage/images/logo.png') }}" class="col-7 col-md-6 col-xl-3 ml-xl-1 m-auto">
                    <div class="collapse navbar-collapse col-md-12 col-xl-8 justify-content-xl-end no-gutters-custom justify-content-md-center" id="collapsibleNavbar">
                        <ul class="navbar-nav hapolearn-lists">
                            <li class="nav-item">
                                <a class="nav-link {{ Route::is('home') ? 'active' : ''}}" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::is('courses.index') ? 'active' : ''}}" href="{{ route('courses.index') }}">ALL COURSES</a>
                            </li>
                            @if (Auth::check())
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::is('profile.show') ? 'active' : ''}}" href="{{ route('profile.show', Auth::id()) }}">PROFILE</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle"
                                        href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#loginRegister">LOGIN/REGISTER</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
@include('layouts.login')
