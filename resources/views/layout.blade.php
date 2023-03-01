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
</head>

<aside>
    <div class="sidebar">
        <figure>
            <img class="picture-sidebar" src="https://thumbs.gfycat.com/ElaborateFlawlessBarb-size_restricted.gif"
                 alt="alinealijn">
        </figure>

        <p class="text-sidebar">
            <a class="link-school" target="_blank"
               href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/NL/5.-Onderwijs-examenregelingen/Onderwijs-en-examenregeling/OER-HZ-Bacheloropleiding-voltijd-2022-2023-DEF-13-juni.pdf"
               alt="HZ pagina">HBO-ICT CER</a>
        </p>

        <hr class="second-heading">

        <p class="text-sidebar">
            <a class="link-school" target="_blank"
               href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2022-2023/IR-CER-HZ-B-HBO-ICT-full-time-2022-2023-DEF.pdf"
               alt="implementation regulations">Implementation Regulations</a>
        </p>

        <hr class="second-heading">

        <p class="text-sidebar">
            <a class="link-school" target="_blank" href="https://learn.hz.nl/" alt="learn">Learn</a>
        </p>

        <hr class="second-heading">

        <p class="text-sidebar">
            <a class="link-school" target="_blank" href="https://www.microsoft.com/nl-nl/microsoft-teams/log-in"
               alt="teams">Teams</a>
        </p>

        <hr class="second-heading">

        <p class="text-sidebar">
            <a class="link-school" target="_blank" href="https://portal.hz.nl/" alt="study progress">Study Progress</a>
        </p>

        <hr class="second-heading">

        <p class="text-sidebar">
            <a class="link-school" target="_blank" href="https://github.com/HZ-HBO-ICT" alt="github">Github</a>

        <figure>
            <img class="hz-logo" src="https://www.mimir.nu/wp-content/uploads/2021/05/logo-hz-200x200-1.png" alt="hz logo">
            <img class="espeon"
                 src="https://64.media.tumblr.com/b0209c9ace36f0736dcba6e45baa541d/9d02af0a58dc2efd-9d/s250x400/dabcd06131c198ac3e0c1a400930501c7ea3bae0.gif"
                 alt="espeon"></p>
        </figure>
    </div>
</aside>


<nav>
    <div class="navigation">
        <ul>
            <li class="{{Request::path()=== '/' ? 'current_page_item' : ''}}"><a href="./">home</a></li>
            <li class="{{Request::path()=== 'profile' ? 'current_page_item' : ''}}"><a href="./profile">Profile</a></li>
            <li class="{{Request::path()=== 'dashboard' ? 'current_page_item' : ''}}"><a href="./dashboard">Dashboard</a></li>
            <li class="{{Request::path()=== 'faq' ? 'current_page_item' : ''}}"><a href="./faq">FAQ</a></li>
            <li class="{{Request::path()=== 'blog' ? 'current_page_item' : ''}}"><a href="./blog">Blog</a></li>
        </ul>
    </div>
</nav>
<body>
@yield('content');
</body>
</html>

