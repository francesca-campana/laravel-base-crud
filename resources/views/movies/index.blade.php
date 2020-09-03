<h1>Movies list</h1>
@foreach ($movies as $movie)
  <div>
    <h2><a href="{{ route('movies.show', $movie->id) }}"> Titolo: {{ $movie->title }} </a></h2>
  </div>
@endforeach
<a href="{{ route('movies.create', $movie->id) }}">Add new movie</a>
