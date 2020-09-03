<h1>Add new movie</h1>
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

<form action="{{ route('movies.store') }}" method="post">
  @csrf
  @method('POST')

  <div>
    <label>Title</label>
    <input type="text" name="title" value="{{ old('title') }}"></input>
  </div>

  <div>
    <label>Year</label>
    <input type="text" name="year" value="{{ old('year') }}"></input>
  </div>

  <div>
    <label>Description</label>
    <textarea type="text" name="description" rows="8" cols="80">{{ old('description') }}</textarea>
  </div>

  <div>
    <label>Rating</label>
    <input type="text" name="rating" value="{{ old('rating') }}"></input>
  </div>

  <div>
    <input type="submit" value="Save"></input>
  </div>

</form>
<a href="{{ route('movies.index')}}">torna alla lista</a>
