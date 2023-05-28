@extends('common.layout')
@section('content')
                    <form method="POST" action="{{ route('forms.store') }}">
                        @csrf
                        <head>
                            <link rel="stylesheet" href="../../css/style.css">
                        </head>
                        <div class="heading">
                                <h1>~ Add your data! ~</h1>
                        </div>
                            <div class="card-content">
                                <div class="profile">
                                    <p>Your name:</p>
                                    <div class="control">
                                            <textarea name="name"
                                                      class="textarea @error('name') is-danger @enderror"
                                                      type="text" placeholder="Manon van Vliet"></textarea>
                                    </div>
                                    @if ($errors->has('name'))
                                        <p class="help-is-danger">{{ $errors->first('name') }}</p>
                                    @endif
                                    <img class="heart" src="https://i.pinimg.com/originals/15/22/ed/1522ed7c30c0bb27e4c57b651815db6c.gif"
                                         alt="heart">
                                    </div>

                                    <div class="profile">
                                        <p class ="form-font">Age:</p>
                                        <div class="control">
                                            <textarea name="age"
                                                      class="textarea @error('age') is-danger @enderror"
                                                      type="text" placeholder="24"></textarea>
                                        </div>
                                        @if ($errors->has('age'))
                                            <p class="help-is-danger">{{ $errors->first('age') }}</p>
                                        @endif
                                        <img class="heart" src="https://i.pinimg.com/originals/15/22/ed/1522ed7c30c0bb27e4c57b651815db6c.gif"
                                             alt="heart">
                                    </div>

                                    <div class="profile">
                                        <p>Your e-mail address:</p>
                                        <div class="control">
                                            <textarea name="email" class="textarea @error('email') is-danger @enderror"
                                                      placeholder="user@gmail.com"></textarea>
                                        </div>
                                        @if ($errors->has('email'))
                                            <p class="help-is-danger">{{ $errors->first('email') }}</p>
                                        @endif
                                        <img class="heart" src="https://i.pinimg.com/originals/15/22/ed/1522ed7c30c0bb27e4c57b651815db6c.gif"
                                             alt="heart">
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
