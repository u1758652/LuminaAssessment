@extends("layouts.app")
@section("filmindex")
    <form action="/films/search" method="GET">
        @csrf
        <input type="text" name="search" />
        <input type="submit" class="btn btn-sm btn-primary"/>
    </form>
<p><a href="/films/{{Auth::user()->id}}">My favourites</a></p>
    <p><a href="/films/create">Add Films</a></p>

<div>
    @foreach($films as $film)
        <p>Title: {{$film->title}}</p>
        <p>Plot: {{$film->plot}}</p>
        <img src="{{$film->poster}}">
    @endforeach
</div>
@endsection
