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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=2015488292094397&autoLogAppEvents=1"></script>
</head>
<body>
    <div id="app">
        <div class="header1">
            <menu-components></menu-components>
            <div class="container-fluid">
                <div class="row" style="background: #6c757d">
                    <div class="col-md-3">
                        <barleft></barleft>
                    </div>
                    <div class="col-md-6">
                        <sell></sell>
                    </div>
                    <div class="col-md-3">
                        <barright></barright>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background: #b9bbbe">
                @yield('content')
        </div>
        <div class="footer">
           <footercpt></footercpt>
        </div>
        <button onclick="topFunction()" id="myBtntop" title="Go to top">Top</button>
        <div id="fb-root"></div>
    </div>
</body>
<style>
    #myBtntop:hover {
        background-color: #555;
    }
    #myBtntop {
        display: block;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: red;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
    }
    body{
        overflow-x: hidden;
        overflow-y: scroll;
        background: #9561e2;
    }
</style>
<script>

    var mybutton = document.getElementById("myBtntop");
    window.onscroll = function() {
        scrollFunction()
    };
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

</script>
</html>
