@extends('common.layout')

@section('content')
    <section class="hero  is-medium  is-bold is-primary">
        <div class="hero-body">
            <div class="heading">
                <h1>Shiba enjoyers</h1>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="profile">
            <div class="columns">
                <div class="column is-full">
                    <div class="content">

                            <h1><a href="/forms/create" class="button is-primary">Join shiba lovers community.</a></h1>
                        </div>
                    <hr class="second-heading">
                    <div class="column is-12">
                            @foreach($forms as $form)
                                <div class="panel">
                                    <a class="panel-block" href="{{ route('forms.show', $form) }}">
                                        <article class="media">
                                            <figure class="media-left">
                                                <p class="image is-128x128">
                                                    <img src="{{$form->img_url}}" alt="form picture">
                                                </p>
                                            </figure>
                                            <div class="media-content">
                                                <div class="heading">
                                                    <p>
                                                        <h3>Name:</h3><small>{{ $form->name }}</small>
                                                        <br>
                                                        <h3>Age:</h3><small>{{ $form->age }}</small>
                                                        <br>
                                                        <h3>E-mail:</h3><small>{{ $form->email}}</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
    </section>
@endsection
