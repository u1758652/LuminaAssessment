@extends("layouts.app")
@section("filmssearch")

    <h4>Search Results</h4>
    <div>
        @foreach($films as $film)
            <p>Title: {{$film->title}}</p>
            <p>Plot: {{$film->plot}}</p>
            <img src="{{$film->poster}}">
        @endforeach
    </div>
@endsection
