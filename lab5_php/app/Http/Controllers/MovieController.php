<?php
namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('genre')->get();
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('movies.create', compact('genres'));
    }

    public function store(Request $request)
    {

        $data = $request->except('poster');
        $data['poster'] = "";

        if($request->hasFile('poster')){
            $path_image = $request->file('poster')->store('images', 'public');
            $data['poster'] = $path_image;
        }

        Movie::create($data);

        return redirect()->route('movies.index')->with('success', 'Movie created successfully.');
    }

    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        $genres = Genre::all();
        return view('movies.edit', compact('movie', 'genres'));
    }

    public function update(Request $request, Movie $movie)
    {
        $data = $request->except('poster');
        $old_image = $movie->image;

        $data['poster'] = $old_image;
        if($request->hasFile('poster')){
            $path_image = $request->file('poster')->store('images');
            $data['poster'] = $path_image;
        }

        $movie->update($data);
        if($request->hasFile('poster')){
            if(file_exists('storage/'.$old_image)){
                unlink('storage/'.$old_image);
            }
        
        }
        return redirect()->back()->with('message', 'Cập Nhật dữ liệu thành công!');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index')->with('success', 'Movie deleted successfully.');
    }
}
