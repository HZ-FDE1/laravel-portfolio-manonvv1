@extends('common.layout')
@section('content')
    <div class ="heading">
        <h1>Refresh and see how much shiba's there are!</h1>
    </div>
@foreach($shiba as $picture)
    <div class="profile">
    <img src="{{ $picture }}" class="portfolio">
    </div>
@endforeach
@endsection

