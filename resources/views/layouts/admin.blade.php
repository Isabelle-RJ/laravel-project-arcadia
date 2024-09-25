<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>@yield('title', 'Welcome') - Zoo Arcadia</title>
    @vite(['resources/css/admin/app.scss', 'resources/js/app.js'])
</head>
<body>
<header>
    <div class="logo-header">
        <a href="{{ route('auth.login') }}">
            <img alt="logo arcadia mobile"
                 class="logo-header"
                 src="/asset/logos/admin-logo.svg"/>
        </a>
    </div>

    <div class="nav-header">
        <nav>
            <a href="#">
                <img alt="Menu burger"
                     class="menu-burger"
                     src="/asset/icons/white-menu-burger.svg">
            </a>
        </nav>
        <div class="nav-links">
            <ul id="nav-link">
                <li><a href="{{ route('create-form')}}">Admin Zoo</a></li>
                <li><a href="{{ route('habitats.createForm')}}">Admin Habitats</a></li>
                <li><a href="{{ route('animals.createForm')}}">Admin Animaux</a></li>
                <li><a href="{{ route('services.createForm')}}">Admin Services</a></li>
            </ul>
        </div>
    </div>
</header>
<main>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~ Section background header title ~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <section id="bg-header">
        @yield('header')
    </section>

    @yield('content')


</main>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~ FOOTER ~~~~~~~~~~~~~~~~~~~~~~~~ -->
<footer>
    <section class="bg-logo-footer">
            <img
                src="/asset/logos/logo-header.svg"
                alt="Le logo arcadia"
            >
        <div class="title-footer">
            <h4>&copy; Zooparc Arcadia</h4>
        </div>
    </section>
    <section class="bg-footer"></section>
</footer>
</body>
</html>
