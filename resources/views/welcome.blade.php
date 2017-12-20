<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
        <title>
            {{-- Yield the title if it exists, otherwise default to 'Foobooks' --}} 
            Here@HKS
        </title>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        {{-- CSS --}}
        <link href="/css/app.css" type='text/css' rel='stylesheet'> 
        <link href="/css/foundation.min.css" type='text/css' rel='stylesheet'> 

        {{-- Javascript --}}
        <script defer src="/js/vendor/fontawesome-all.js"></script>

        {{-- Yield any page specific CSS files or anything else you might want in the <head> --}} 
           
    </head>
    <body>
        <div id="app_title_tag_container">
        <h1 id="app_title">Here<span class="at-sign">@</span>HKS</h1>
        <h2 id="tag_line">See what you can do</h2>


        <a id="hk_button" href="/verify" class="button">Login with Harvard Key</a>
    </body>
</html>
