@extends('common.layout')
@section('content')
    <div class ="heading">
        <hr class="second-heading">
        <h1><a href="{{ url('/' . rand(1,50)) }}">Click here to see how many shiba's you get!</a></h1>
        <img src="https://media.tenor.com/JV2nzJWkgqMAAAAM/shiba-cute.gif" alt="shiba"  class="shiba">
    </div>
    <div class="profile">
        <p id="random-number"></p>
    </div>
    <script>
        let currentURL = window.location.href;
        let parts = currentURL.split("/");
        let randomNumber = parseInt(parts[parts.length - 1]);
        document.addEventListener("DOMContentLoaded", function() {
            if (!isNaN(randomNumber)) {
                document.getElementById("random-number").textContent = "The amount of shiba's you've got: " + randomNumber ;
                }
        });
        shibaCount = randomNumber;
    </script>

@endsection

