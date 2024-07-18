@extends('books.layout')

@section('title', 'Trang Thêm Mới')

@section('content')
<h1>Cập Nhật Sách</h1>
    <form action="{{ route('book.update', $book->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $book->id}}">
        <div class="mb-3">
            <label for="" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="" value="{{ $book->title }}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">URL thumbnail</label>
            <input type="text" name="thumbnail" class="form-control" id="" value="{{ $book->thumbnail }}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Author</label>
            <input type="text" name="author" class="form-control" id="" value="{{ $book->author }}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">publisher</label>
            <input type="text" name="publisher" class="form-control" id="" value="{{ $book->publisher }}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Publication</label>
            <input type="date" name="Publication" class="form-control" id="" value="{{ $book->Publication }}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input type="number" step="0.1" name="price" class="form-control" id="" value="{{ $book->price }}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Quantity</label>
            <input type="text" name="quantity" class="form-control" id="" value="{{ $book->Quantity }}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Category Name</label>
            <select name="category_id" id="" class="form-control">
                    @foreach ($categories as $cate)
                        <option value="{{ $cate->id }}"
                            @if ($cate->id === $book->Category_id)
                                selected
                            @endif>
                            {{  $cate->name }}
                        </option>
                    @endforeach
            </select>
          </div>
          <div class="mb-3">
                <button type="submit" class="btn btn-success">Add New</button>
                <a href="{{ route('book.index') }}" class="btn btn-warning">List</a>
          </div>
    </form>
@endsection
