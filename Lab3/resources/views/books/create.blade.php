@extends('books.layout')

@section('title', 'Trang Thêm Mới')

@section('content')
<h1>Thêm Mới Sách</h1>
    <form action="{{ route('book.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">URL thumbnail</label>
            <input type="text" name="thumbnail" class="form-control" id="">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Author</label>
            <input type="text" name="author" class="form-control" id="">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">publisher</label>
            <input type="text" name="publisher" class="form-control" id="">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Publication</label>
            <input type="date" name="publication" class="form-control" id="">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input type="number" step="0.1" name="price" class="form-control" id="">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Quantity</label>
            <input type="text" name="quantity" class="form-control" id="">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Category Name</label>
            <select name="category_id" id="" class="form-control">
                    @foreach ($categories as $cate)
                        <option value="{{ $cate->id }}">
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
