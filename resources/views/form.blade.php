@extends('layout')

@section('container')

    <form method="POST" action="">
        <div>
            <label for="name">Enter your name:</label>
            <input id="name" name='name' type="text"/>
        </div>
        <div>
            <label for="message">Your message:</label>
            <textarea id="message" name="message" type="text" rows="5" > </textarea>
        </div>

        <button type="submit">Send</button>


    </form>
@endsection
