@extends('layouts.layout')

@section('content')
    <div class="column is-half">
        <div class="column">
            <h1>Konto Admina</h1>
        </div>

        <div class="column">
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item" href="https://bulma.io">
                        <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
                    </a>

                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
                       data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item">

                        </a>
                    </div>
                </div>
            </nav>
        </div>
        @yield('recrut')
    </div>

@endsection