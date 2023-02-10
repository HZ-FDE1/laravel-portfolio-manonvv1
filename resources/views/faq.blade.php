<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Manon van Vliet">
    <meta name="keywords" content="Blog, Dashboard, Faq, First Feedback, FOW, Index, Profile, Study Choice, SWOT">
    <meta name="description" content="Een overzicht van de geplaatste blogs.">
    <title>Faq</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<!--sidebar-->
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

<body>
<nav>
    <div class="navigation">
        <a class="link-sidebar" href="./">Home</a>
        <a class="link-sidebar" href="./profile">Profile</a>
        <a class="link-sidebar" href="./dashboard">Dashboard</a>
        <a class="link-page" href="./faq">Faq</a>
        <a class="link-sidebar" href="./blog">Blog</a>
    </div>
</nav>

<!--veelgestelde vragen-->
<main>
    <div class="heading">
        <h1>~ Faq ~</h1>
    </div>

    <div class="profile">
        <h2>Veel gestelde vragen!</h2>
        <figure>
            <img class="heart" src="https://i.pinimg.com/originals/bd/d3/36/bdd3360a05b0c02cc9cc766a73bc75fc.gif"
                 alt="heart">
        </figure>
            @foreach($faqs as $faq)
                <p><strong>{{ $faq->question }}</p></strong>
                <p>{{ $faq->answer }}</p>
            @endforeach

        <figure>
            <img class="content" src="https://i.pinimg.com/originals/16/97/a2/1697a249f70bfb55a7fc49b0175807d8.gif" alt="vraagteken">
        </figure>
    </div>
</main>
</body>

</html>
