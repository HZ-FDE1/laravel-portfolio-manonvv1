@extends('layout');
@section('content');

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
            <a>{{ $faq->link }}</a>
        @endforeach

        <figure>
            <img class="content" src="https://i.pinimg.com/originals/16/97/a2/1697a249f70bfb55a7fc49b0175807d8.gif" alt="vraagteken">
        </figure>
    </div>
</main>


@endsection
