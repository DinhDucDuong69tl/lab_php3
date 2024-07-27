<!DOCTYPE html>
<html>
<head>
    <title>Edit Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="d-flex justify-content-end">
                
            <form action="{{ route('movies.search') }}" method="GET" enctype="multipart/form-data">
                <div class="d-flex">
                <input class="form-control me-2" type="text" name="query" placeholder="Search movies...">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </div>
              </form>
            </div>
        </div>
      </nav>
      <div class="container">
    <h1>Edit Movie</h1>
    <form action="{{ route('movies.update', $movie->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ $movie->title }}" required>
        </div>

        <div class="mb-3">
            <div class="mb-3">
                <label for="formFile" class="form-label">Nhập ảnh</label>
                <input class="form-control" type="file" id="poster" name="poster" onchange="loadFile(event)" accept="image/*">
                <br>
                <div class="d-flex">
                    <img src="{{ asset('/storage/' . $movie->image )}}" alt="" width="100">
                    <p>NEW --></p>
                    <img id="output" width="100"/>
                </div>

            </div>

        </div>
        <div class="mb-3">
            <label class="form-label" for="intro">Intro:</label>
            <input class="form-control" type="text" name="intro" id="intro" value="{{ $movie->intro }}" required>

        </div>
        <div class="mb-3">
            <label class="form-label" for="release_date">Release Date:</label>
            <input class="form-control" type="date" name="release_date" id="release_date" value="{{ $movie->release_date }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="genre_id">Genre:</label>
            <select class="form-select" name="genre_id" id="genre_id" required>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}" {{ $genre->id == $movie->genre_id ? 'selected' : '' }}>{{ $genre->name }}</option>
                @endforeach
            </select>

        </div>

        <button type="submit" class="btn btn-success">Update Movie</button>
    </form>
    <a href="{{ route('movies.index') }}" class="btn btn-info">Back to Movies List</a>
      </div>
</body>
<script>
    var loadFile = function(event) {
      var output = document.getElementById('output');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src)
      }
    };
  </script>
</html>
