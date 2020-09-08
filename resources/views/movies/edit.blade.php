@extends ('layouts.app')
@section('main_content')

<h1>Modifica movie: {{ $movie->title }}</h1>

<div>
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

</div>

<div>
  <form action="{{ route('movies.update', $movie) }}" method="post">
    @csrf
    @method('PUT')

    <div>
      <label>Title</label>
      <input type="text" name="title" value="{{ old('title') ?  old('title') : $movie->title }}"></input>
    </div>

    <div>
      <label>Year</label>
      <input type="text" name="year" value="{{ old('year') ?  old('year') : $movie->year }}"></input>
    </div>

    <div>
      <label>Description</label>
      <textarea type="text" name="description" rows="8" cols="80">{{ old('description') ?  old('description') : $movie->description }}</textarea>
    </div>

    <div>
      <label>Rating</label>
      <input type="text" name="rating" value="{{ old('rating') ?  old('rating') : $movie->rating }}"></input>
    </div>

    <div>
      <input type="submit" value="Save"></input>
    </div>
  </form>

</div>
@endsection
