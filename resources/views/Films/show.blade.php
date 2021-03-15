@extends("layouts.app")
@section("filmshow")
<div>
    <form method="POST">
        @csrf
        @foreach($user -> films as $film)
            <p>{{$film->title}}</p>
                <button type="submit">Remove from favourites :(</button>
        @endforeach

    </form>

</div>
@endsection
