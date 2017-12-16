<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>
        <title>
            {{-- Yield the title if it exists, otherwise default to 'Foobooks' --}} 
            @yield('title','Suggestions for You')
        </title>
        <meta charset='utf-8'>

        {{-- CSS --}}
        <link href="/css/app.css" type='text/css' rel='stylesheet'> 
        <link href="/css/foundation.min.css" type='text/css' rel='stylesheet'> 

        {{-- Yield any page specific CSS files or anything else you might want in the <head> --}} 
            @yield('head')
    </head>

    <body>
        <header id="top_banner">
            <h1>@yield('top_banner', 'Here@HKS')</h1>
        </header>
        <section>
            {{-- Main page content will be yielded here --}} 
            @yield('content')
        </section>
        <footer>
           
        </footer>
        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.min.js"></script>
        <script>$(document).foundation()</script>
        {{-- Yield any page specific JS files or anything else you might want at the end of the body --}} 
        @yield('body')
    </body>

</html>