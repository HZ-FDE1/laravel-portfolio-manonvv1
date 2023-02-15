@extends('layout');
@section('content');

<div class="heading">
    <header>
        <h1>~ My Profile ~ </h1>
</div>

<!--mijn profiel-->
<main>
    <div class="profile">
        <section>
            <h2>About me!</h2>

            <figure>
                <img class="heart" src="https://i.pinimg.com/originals/bd/d3/36/bdd3360a05b0c02cc9cc766a73bc75fc.gif"
                     alt="heart">
            </figure>

            <hr>

            <article class="item">
                <p class="question"><strong>Naam:</strong></p><p class="answer">Manon van Vliet</p>
            </article>

            <article class="item">
                <p class="question"><strong>Leeftijd:</strong></p><p class="answer">23 jaar, 02-12-1998</p>
            </article>

            <article class="item">
                <p class="question"><strong>Woonplaats:</strong></p><p class="answer">Hoek, Zeeland</p>
            </article>

            <article class="item">
                <p class="question"><strong>Vooropleiding:</strong></p><p class="answer">Middenkaderfunctionaris-Infra</p>
            </article>

            <p>
                <input id="MBO" type="checkbox" name="scholing" checked> MBO
                <input id="HBO" type="checkbox" name="scholing"> HBO
                <input id="WO" type="checkbox" name="scholing"> WO
            </p>

            <figure>
                <img class="content" src="https://www.plaatsengids.nl/files/fotos/Hoek.JPG" alt="hoek">
            </figure>
        </section>
    </div>

    <div class="hobbys">
        <section>
            <h2>Things about me</h2>
            <figure>
                <img class="heart" src="https://i.pinimg.com/originals/bd/d3/36/bdd3360a05b0c02cc9cc766a73bc75fc.gif"
                     alt="heart">
            </figure>

            <hr>

            <h3 class="Characteristics">Hobbys:</h3>
            <ul>
                <li>Gaming: Ik heb een lijstje hieronder gemaakt met de games die ik leuk vind.</li>
                <li>Lezen: In mijn vrije tijd vind ik het ook leuk om boeken te lezen.</li>
                <li>Tekenen: Ik teken niet veel meer maar het zal altijd me hobby blijven.</li>
                <li>Slapen: Nothing compares to sleeping. </li>
            </ul>

            <hr class="second-heading">

            <h3>Top 5 games I like to play now:</h3>
            <ol>
                <li><strong>Overwatch</strong></li>
                <li>League of Legends</li>
                <li>Valorant</li>
                <li>CSGO</li>
                <li>Dead By Daylight</li>
            </ol>
            <figure>
                <img class="pink-mercy"
                     src="https://data.whicdn.com/images/312718708/original.gif"
                     alt="pink-mercy"></a>
            </figure>
        </section>

        <hr>
        <h3 class="Characteristics">Goede en slechte eigenschappen:</h3>
        <figure>
            <img class="heart" src="https://i.pinimg.com/originals/bd/d3/36/bdd3360a05b0c02cc9cc766a73bc75fc.gif"
                 alt="heart">
        </figure>

        <article class="item">
            <p class="good"><strong><u>Strengths:</u></strong></p><p class="bad"><strong><u>Weaknesses:</u></strong></p>
        </article>

        <article class="item">
            <p class="good">Zelfstandig</p><p class="bad">Besluiteloos</p>
        </article>

        <article class="item">
            <p class="good">Flexibel</p><p class="bad">Ongeduldig</p>
        </article>

        <article class="item">
            <p class="good">Doorzettingsvermogen</p><p class="bad">Onzekerheid</p>
        </article>

        <article class="item">
            <p class="good">Nieuwschierig</p><p class="bad">Moeite met nee zeggen</p>
        </article>

        <figure>
            <img class="characteristics-picture"
                 src="http://www0.sun.ac.za/flourish/ubasuccessfulstudent2/assets/images/sukses-1466x560.png" alt="eigenschappen">
        </figure>
    </div>
</main>

@endsection
