@extends('common.layout')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12"> {{-- These divs are needed for proper layout --}}
                    <form method="POST" action="{{route('forms.show', $form)}}">
                        @csrf
                        @method('PUT')
                        <div class="field">
                            <label class="label" for="name">Name</label>

                            <div class="control">
                                <input class="input" type="text" name="name" id="name" value="{{$form->name}}">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label" for="age">Age</label>

                            <div class="control">
                                <label for="age"></label><textarea class="textarea" name="age" id="age">{{$form->age}}</textarea>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label" for="points">E-mail</label>

                            <div class="control">
                                <label for="email"></label><textarea class="textarea" name="email" id="email">{{$form->email}}</textarea>
                            </div>
                        </div>


                        <div>
                            <div>
                                <button id="blogbutton" type="submit">Edit</button>
                            </div>
                        </div>
                    </form>

                    <form method="POST" action="{{ route('forms.destroy', $form) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection


