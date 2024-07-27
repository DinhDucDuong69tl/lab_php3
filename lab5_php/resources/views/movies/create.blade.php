<!DOCTYPE html>
<html>

<head>
    <title>Add Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
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
        <h1>Add Movie</h1>
        <form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input class="form-control" type="text" name="title" id="title">
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Nhập ảnh</label>
                <input class="form-control" type="file" id="formFile" name="poster" id="poster"
                    onchange="loadFile(event)" accept="image/*">
                <img class="mt-2" id="output" width="100" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="intro">Intro:</label>
                <input class="form-control" type="text" name="intro" id="intro" required>
            </div>

            <div class="mb-3">
                <label for="release_date" class="form-label">Release Date:</label>
                <input class="form-control" type="date" name="release_date" id="release_date" required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="genre_id">Genre:</label>
                <select class="form-select" name="genre_id" id="genre_id" required>
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success">Add Movie</button>
            </div>
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
