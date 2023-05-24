@extends('common.layout')
@section('content')
                    <form method="POST" action="{{ route('forms.store') }}">
                        @csrf
                        <head>
                            <link rel="stylesheet" href="../../css/style.css">
                        </head>
                        <div class="heading">
                            <header>
                                <h1>~ Add your data! ~</h1>
                        </div>

                            <div class="card-content">
                                <div class="profile">
                                    <p>Your name:</p>
                                    <div class="control">
                                            <textarea name="name"
                                                      class="textarea @error('name') is-danger @enderror"
                                                      type="text" placeholder="What's your name?"></textarea>
                                        <img class="heart" src="https://i.pinimg.com/originals/15/22/ed/1522ed7c30c0bb27e4c57b651815db6c.gif"
                                             alt="heart">
                                    </div>
                                    @error('name')
                                    <p class="help-is-danger"> <b>WARNING</b>: You did not fill in your name, please fill it in. :)</p>
                                    @enderror
                                    </div>

                                    <div class="profile">
                                        <p>Age:</p>
                                        <div class="control">
                                            <textarea name="age"
                                                      class="textarea @error('age') is-danger @enderror"
                                                      type="text" placeholder="Tell me your age!"></textarea>
                                            <img class="heart" src="https://i.pinimg.com/originals/15/22/ed/1522ed7c30c0bb27e4c57b651815db6c.gif"
                                                 alt="heart">
                                        </div>
                                        @error('age')
                                        <p class="help-is-danger"> <b>WARNING</b>: You did not fill in your age, please fill it in. :)" </p>
                                        @enderror
                                    </div>

                                    <div class="profile">
                                        <p>Your e-mail address:</p>
                                        <div class="control">
                                            <textarea name="email" class="textarea @error('email') is-danger @enderror"
                                                      rows="15" placeholder="What is your e-mail address?"></textarea>
                                            <img class="heart" src="https://i.pinimg.com/originals/15/22/ed/1522ed7c30c0bb27e4c57b651815db6c.gif"
                                                 alt="heart">
                                        </div>
                                        @error('email')
                                        <p class="help-is-danger"> <b>WARNING</b>: You did not fill in your email, please fill it in. :)</p>
                                        @enderror
                                    </div>

                                </div>
                                <div class="profile">
                                    <div class="control">
                                        <button type="submit" class="button is-primary">Save</button>
                                    </div>
                                    <div class="control">
                                        <button type="reset" class="button is-warning">Reset</button>
                                    </div>
                                    <div class="control">
                                        <a type="button" href="/forms" class="button is-light">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
