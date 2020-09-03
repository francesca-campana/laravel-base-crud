<h1>Movies list</h1>
@foreach ($movies as $movie)
  <div>
    <h2>
      <a href="{{ route('movies.show', $movie->id) }}"> Titolo: {{ $movie->title }}
        <span>
          <a href="{{ route('movies.edit', $movie->id) }}"> - Modifica</a>
        </span>
      </a>
    </h2>
  </div>
@endforeach
<ul>
  <li>
    <a href="{{ route('movies.create', $movie->id) }}">Add new movie</a>
  </li>
</ul>
