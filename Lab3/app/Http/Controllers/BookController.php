<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    
    public function index(){
        $books = DB::table('books')
        ->join('categories' , 'category_id','=','categories.id')
        ->select('books.*', 'name')
        ->orderByDesc('id')
        ->get();
        return view('books.index', compact('books'));
    }

    public function create(){
            $categories = DB::table('categories')->get();

        return view('books.create', compact('categories'));
    }

    public function store(Request $request){

        // $data = $request->except('_token');

        $data = [
            'title' =>$request['title'],
            'thumbnail' =>$request['thumbnail'],
            'author' =>$request['author'],
            'publisher' =>$request['publisher'],
            'Publication' =>$request['Publication'],
            'price' =>$request['price'],
            'Quantity' =>$request['quantity'],
            'Category_id' =>$request['category_id'],
        ];


        DB::table('books')->insert(($data));
        return redirect()->route('book.index');

    }

    public function destroy($id) {

        DB::table('books')->delete($id);
        return redirect()->route('book.index');

    }

    public function edit($id){

        $categories = DB::table('categories')->get();
        
        $book = DB::table('books')
        ->where('id',$id)
        ->first();

        // dd($book);

        return view('books.edit', compact('book','categories'));
    }

    public  function update(Request $request){
        $data = [
            'title' =>$request['title'],
            'thumbnail' =>$request['thumbnail'],
            'author' =>$request['author'],
            'publisher' =>$request['publisher'],
            'Publication' =>$request['Publication'],
            'price' =>$request['price'],
            'Quantity' =>$request['quantity'],
            'Category_id' =>$request['category_id'],
        ];

        DB::table('books')->where('id',$request['id'])->update($data);

        return redirect()->route('book.index');
        
    }
}
