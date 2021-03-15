@extends("layouts.app")
@section("filmcreate")
    <form method="POST" action="/films/">
        @csrf
        <p>Input imdbID of a film to add it</p>
        <input class="input" type="text" name="imdbID" id="name">
        <div>
            <button type="submit">Submit</button>
        </div>
@endsection
