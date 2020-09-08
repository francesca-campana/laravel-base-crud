@extends ('layouts.app')
@section('main_content')
<div>
  <h1>Movies list</h1>
  <ul>
    @foreach ($movies as $movie)
      <li>{{ $movie->title }}
        <a href="{{ route('movies.show', $movie) }}">Dettagli</a>
        <a href="{{ route('movies.edit', $movie) }}"> Modifica</a>

        <form action="{{ route('movies.destroy', $movie) }}" method="post">
          @csrf
          @method('DELETE')
          <input type="submit" value="Elimina">

        </form>
      </li>

    @endforeach
  </ul>

  <ul>
    <li>
      <a href="{{ route('movies.create', $movie) }}">Add new movie</a>
    </li>
  </ul>

</div>
@endsection
