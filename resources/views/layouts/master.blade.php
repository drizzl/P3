<!DOCTYPE html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Foobooks' --}}
        @yield('title','P3')
    </title>

    <meta charset='utf-8'>
    <a href="/">
        <img src="https://lh3.ggpht.com/A0x3jzuH1qRkE10HcTiT4qQr_6iAqVg-CTsoIqxnoIFyv92V91WI3KqiVlOvLtfoMRg=w300" alt="Back Home" width="100" height="22">
    </a>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

<header>
    @yield('img')
</header>

<section>
    @yield('content')
</section>

<footer>
    &copy; {{ date('Y') }}
</footer>

@yield('body')

</body>
</html>