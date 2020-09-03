<div>
  <h1>Movies list</h1>
  <ul>
    @foreach ($movies as $movie)
      <li>{{ $movie->title }}
        <a href="{{ route('movies.show', $movie->id) }}">Dettagli</a>
        <a href="{{ route('movies.edit', $movie->id) }}"> Modifica</a>

        <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
          @csrf
          @method('DELETE')
          <input type="submit" value="Elimina">

        </form>
      </li>

    @endforeach
  </ul>

  <ul>
    <li>
      <a href="{{ route('movies.create', $movie->id) }}">Add new movie</a>
    </li>
  </ul>

</div>
