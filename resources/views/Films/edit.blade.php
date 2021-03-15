@extends("layouts.app")
@section("filmedit")
<div>
    <h4>Add a film to favourites!</h4>
    <form method="POST" action="/films/{{$user->id}}">
        @csrf
        @method("PUT")
        <div class="">
            <select name="favourites">
                @foreach($films as $film)
                    <option value="{{$film->id}}">{{$film->title}}</option>
                @endforeach
            </select>
            <div>
                <button type="submit">Submit</button>
            </div>
        </div>
@endsection
