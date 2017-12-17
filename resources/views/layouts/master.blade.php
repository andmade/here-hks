<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>
        <title>
            {{-- Yield the title if it exists, otherwise default to 'Foobooks' --}} 
            @yield('title','Suggestions for You')
        </title>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        {{-- CSS --}}
        <link href="/css/app.css" type='text/css' rel='stylesheet'> 
        <link href="/css/foundation.min.css" type='text/css' rel='stylesheet'> 

        {{-- Javascript --}}
        <script defer src="/js/vendor/fontawesome-all.js"></script>

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
           <ul class="tabs" id="bottom_nav">
                <li @yield('home_active', 'class=tabs-title') ><a href="#panel1"><i class="fas fa-magic fa-lg" ></i><br>For You</a></li>
                <li @yield('search_active', 'class=tabs-title')><a data-tabs-target="panel2" href="#panel2"><i class="fas fa-search fa-lg" ></i><br>Search</a></li>
                <li @yield('user_active', 'class=tabs-title')><a data-tabs-target="panel2" href="#panel2"><i class="fas fa-user-circle fa-lg" ></i><br>Account</a></li>
            </ul>
        </footer>

        <script src="/js/vendor/jquery.js"></script>
        <script src="/js/vendor/what-input.js"></script>
        <script src="/js/vendor/foundation.min.js"></script>
        <script>$(document).foundation()</script>
        {{-- Yield any page specific JS files or anything else you might want at the end of the body --}} 
        @yield('body')
    </body>

</html>