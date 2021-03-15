<?php

namespace App\Http\Controllers;

use App\Models\Films;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FilmController extends Controller
{
    public function index(){

        $films = Films::all();

        return view("films.index", compact("films"));

    }

    public function show(User $user)
    {
        return view("films.show",compact("user"));
    }

    public function create(){

        return view("films.create");
    }

    public function store(Request $request){

        $imdbId = $request->input("imdbID");

        $film = new Films();

        $client = new Client();
        $request = $client->get("http://www.omdbapi.com/?i=$imdbId&apikey=98f65451");
        $response = json_decode($request->getBody()->getContents(),true);

        $film->imdbID = $imdbId;
        $film->title = $response["Title"];
        $film->plot = $response["Plot"];
        $film->poster= $response["Poster"];
        $film->save();

       return redirect("/films/");
    }

    public function edit(User $user)
    {
        $films = Films::all();

        return view("films.edit",compact("user"),["films"=>Films::all()]);
    }

    public function update(User $user)
    {
        $user->films()->attach(\request("favourites"));
        $user->update();

        return redirect("/films");
    }

    public function detachFilmFromUser(User $user)
    {
        $user->films()->detach();

        return redirect("/films");
    }

    public function search(Request $request)
    {
        $nameReq = $request->input("search");

        $films = Films::query()
            ->where("title","LIKE","%$nameReq%")
            ->get();

        return view("films.search", compact("films"));
    }
}
