<!DOCTYPE html>
<html>
<head>
    <title>Movie Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="d-flex justify-content-end">
                
            <form action="{{ route('movies.search') }}" method="GET">
                <div class="d-flex">
                <input class="form-control me-2" type="text" name="query" placeholder="Search movies...">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </div>
              </form>
            </div>
        </div>
      </nav>
      <div class="container">
    <h1>Movie Details</h1>
    <p><strong>Title:</strong> {{ $movie->title }}</p>
    <p><strong>Poster:</strong><br><img src="{{ asset('/storage/') . '/' . $movie->poster }}" alt="" width="200"></p>
    <p><strong>Intro:</strong> {{ $movie->intro }}</p>
    <p><strong>Release Date:</strong> {{ $movie->release_date }}</p>
    <p><strong>Genre:</strong> {{ $movie->genre->name }}</p>
    <a href="{{ route('movies.index') }}" class="btn btn-info">Back to Movies List</a>
</body>
</html>
