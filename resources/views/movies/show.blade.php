@extends ('layouts.app')
@section('main_content')

<h1>{{$movie->title}}</h1>

<h3>Titolo: {{$movie->title}}</h3>
<p>Anno: {{ $movie->year }}</p>
<p>Rating: {{ $movie->rating }}</p>
<p>
  <b>Description:</b> <br>
  {{$movie->description}}
</p>
<ul>
  <li>
    <a href="{{ route('movies.edit', $movie) }}">Modifica</a>
  </li>
  <li>
    <a href="{{ route('movies.index')}}">torna alla lista</a>
  </li>
</ul>
@endsection
