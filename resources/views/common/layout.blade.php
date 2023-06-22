<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Manon van Vliet">
    <meta name="keywords" content="Blog, Dashboard, Faq, First Feedback, FOW, Index, Profile, Study Choice, SWOT">
    <meta name="description" content="Een overzicht van de geplaatste blogs.">
    <title>Homepagina</title>
    <link rel="stylesheet" href="./css/style.css">
    <script type="text/javascript" src="/js/shiba.js"></script>
</head>

<aside>
    <div class="sidebar">
        <figure>
            <img class="espeon" src="https://raw.githubusercontent.com/gist/Chuncheonian/0b458eb00f72d648e65d69ab08ca16b8/raw/91dfc8ec23b03cae760d6635d397aaf879f51c16/shiba.gif"
                 alt="alinealijn">
        </figure>

        <p class="text-sidebar">
        <li class="{{Request::path()=== '/' ? 'current_page_item' : ''}}"><a href="./">home</a></li>
        </p>

        <hr class="second-heading">

        <p class="text-sidebar">
        <li class="{{Request::path()=== 'forms' ? 'current_page_item' : ''}}"><a href="./forms">forms</a></li>
        </p>

        <hr class="second-heading">

        <p class="text-sidebar">
        <li class="{{Request::path()=== 'forms' ? 'current_page_item' : ''}}"><a href="./dashboard">dashboard</a></li>
        </p>

        <hr class="second-heading">

        <p class="text-sidebar">

{{--        <figure>--}}
{{--            <img class="espeon"--}}
{{--                 src="https://raw.githubusercontent.com/gist/Chuncheonian/0b458eb00f72d648e65d69ab08ca16b8/raw/91dfc8ec23b03cae760d6635d397aaf879f51c16/shiba.gif"--}}
{{--                 alt="shiba"></p>--}}
{{--        </figure>--}}
    </div>
</aside>

<body>
@yield('content')
</body>
</html>
