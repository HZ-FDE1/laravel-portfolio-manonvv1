@extends('common.layout')

@section('content')
    <section class="hero  is-large  is-bold is-primary"  style="background: url('{{$form->img_url}}') no-repeat center center; background-size: cover;" >
        <div class="heading">
            <h1>~ Here's your data ~</h1>
            <head>
                <link rel="stylesheet" href="../../css/style.css">
            </head>
        </div>
        <div class="profile">
            <h3>The name: </h3>
            <hr class="second-heading">
            <p>{{$form->name}}</p>
            <p class="subtitle is-3"></p>

            </div>
    </section>

    <section class="section">
        <div class="profile">
            <h3>The age: </h3>
            <hr class="second-heading">
            <p>{{ $form->age }}</p>
        </div>

            <div class="profile">
                <h3>The e-mail address: </h3>
                <hr class="second-heading">
                <p> {!! $form->email !!} </p>
                    </div>

                </div>
        </div>
    </section>
@endsection
