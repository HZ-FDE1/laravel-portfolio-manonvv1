@extends('common.layout')
@section('content')
    <div class ="heading">
        <h1>Click on the button below and see how many shiba's you get!</h1>
        <hr class="second-heading">
        <a href="#" class="random" id="random-link">Click here!</a>
    </div>
    <div class="profile">
        <p id="random-number"></p>
    </div>
@foreach($shiba as $picture)
    <div class="profile">
    <img src="{{ $picture }}" class="portfolio">
    </div>

    <script>
    document.getElementById("random-link").addEventListener("click", function(event) {
    event.preventDefault();

    let randomNumber = Math.floor(Math.random() * 50) + 1;
    let updatedURL = "/" + randomNumber;
    window.location.href = updatedURL;
    });

    document.addEventListener("DOMContentLoaded", function() {
        let currentURL = window.location.href;
        let parts = currentURL.split("/");
        let randomNumber = parseInt(parts[parts.length - 1]);

        if (!isNaN(randomNumber)) {
            document.getElementById("random-number").textContent = "The amount of shiba's you've got: " + randomNumber ;
            }
        });
    </script>

@endforeach
@endsection

