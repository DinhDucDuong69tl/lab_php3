<!DOCTYPE html>
<html>
<head>
    <title>Movies</title>
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
    <h1>Movies</h1>
    <div class="d-flex justify-content-end">
        <a class="btn btn-success" href="{{ route('movies.create') }}">Create</a>
    </div>
  
    <table class="table">
        <tr>
            <th>Title</th>
            <th>Poster</th>
            <th>Intro</th>
            <th>Release Date</th>
            <th>Genre</th>
            <th>Actions</th>
        </tr>
        @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie->title }}</td>
                <td><img src="{{ asset('/storage/') . '/' . $movie->poster }}" width="100"></td>
                <td>{{ $movie->intro }}</td>
                <td>{{ $movie->release_date }}</td>
                <td>{{ $movie->genre->name }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('movies.show', $movie->id) }}">Details</a>
                    <a class="btn btn-warning" href="{{ route('movies.edit', $movie->id) }}">Edit</a>
                    <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    
</div>
</body>
</html>
