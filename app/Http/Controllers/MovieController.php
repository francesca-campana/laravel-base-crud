<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $movies = Movie::all();

      return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'title' => 'required|max:255',
          'year' => 'required|integer|min:1895|max:2020',
          'description' => 'required|max:255',
          'rating' => 'required|integer|min:1|max:10',
        ]);

        $data_request = $request-> all();
        //dd($data_request);

        $new_movie = new Movie();
        // $new_movie->title= $request['title'];
        // $new_movie->year= $request['year'];
        // $new_movie->description= $request['description'];
        // $new_movie->rating= $request['rating'];

        //oppure possiamo far fare il lavoro a laravel:
        $new_movie->fill($data_request);

        $saved= $new_movie->save();
        if ($saved) {
          $saved_movie = Movie::orderBy('id', 'desc')->first();
          return redirect()->route('movies.index', $saved_movie);
        }

        dd($saved);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
