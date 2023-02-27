@extends('layout')
@section('content')
    <main>
        <div class="heading">
            <h1>~Blog~</h1>
        </div>

            @forelse($articles as $post)
                <h2>{{ $post->Title }}</h2>
                <p>{{ Str::limit($post->Content, 200) }}</p>
            @empty
                <p style="centered">Geen posts gevonden...</p>
            @endforelse

        <div class="profile">
            <section>
                <h2>ICT field of work</h2>
                <figure>
                    <img class="heart" src="https://i.pinimg.com/originals/bd/d3/36/bdd3360a05b0c02cc9cc766a73bc75fc.gif"
                         alt="heart">
                </figure>

                <hr>

                <p>Welk bedrijf heb ik gekozen? <a href="fow.html"><em>read more</em></a></p>

            </section>
        </div>

        <div class="hobbys">
            <section>
                <h2>First feedback</h2>
                <figure>
                    <img class="heart" src="https://i.pinimg.com/originals/bd/d3/36/bdd3360a05b0c02cc9cc766a73bc75fc.gif"
                         alt="heart">
                </figure>

                <hr>

                <p>Nadenken over welke ene zin ik mezelf kan vertellen op die momenten dat het toch meer uitdagend
                    lijkt te zijn dan bedacht. Met andere woorden..<a href="first-feedback.html"><em>read more</em></a></p>
            </section>
        </div>

        <div class="profile">
            <section>
                <h2>Programming experience</h2>
                <figure>
                    <img="heart" src="https://i.pinimg.com/originals/bd/d3/36/bdd3360a05b0c02cc9cc766a73bc75fc.gif" alt="heart">
                </figure>

                <hr>

                <p>Ik heb geen eerder progammeer ervaring.</p>
            </section>
        </div>

        <div class="hobbys">
            <section>
                <h2>Personal SWOT analysis</h2>
                <figure>
                    <img class="heart" src="https://i.pinimg.com/originals/bd/d3/36/bdd3360a05b0c02cc9cc766a73bc75fc.gif"
                         alt="heart">
                </figure>

                <hr>

                <p>Hier kun je mijn SWOT Analysis vinden.<a href="swot.html"><em>read more</em></a></p>
            </section>
        </div>

        <div class="profile">
            <section>
                <h2>Study Choice</h2>
                <figure>
                    <img class="heart" src="https://i.pinimg.com/originals/bd/d3/36/bdd3360a05b0c02cc9cc766a73bc75fc.gif"
                         alt="heart">
                </figure>

                <hr>

                <p>Deze studie kwam als eerste in mij op omdat technische en creatieve dingen mij liggen, sinds dat ik jong was
                    ben ik geïnteresseerd en nieuwsgierig in hoe computers en software in elkaar steken. <a href="study-choice.html">
                        <em>read more</em></a></p>
            </section>
        </div>
    </main>

@endsection
