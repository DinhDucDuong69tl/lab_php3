@extends('books.layout')

@section('title', 'Trang hiển thị sách')

@section('content')
<h1>Danh Sách</h1>
    <div class="d-flex justify-content-end">
        <a href="{{ route('book.create') }}" class="btn btn-success">Create NEW</a>
    </div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#Id</th>
        <th scope="col">title</th>
        <th scope="col">thumbnail</th>
        <th scope="col">author</th>
        <th  scope="col">publisher</th>
        <th  scope="col">publication</th>
        <th  scope="col">price</th>
        <th  scope="col">quantity</th>
        <th  scope="col">category_id</th>
        <th>Thao Tác</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
            <th scope="row">{{ $book->id }}</th>
            <td>{{ $book->title }}</td>
            <td>
                <img src="{{ $book->thumbnail }}" alt="" width="70px" height="70px">
            </td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->publisher }}</td>
            <td>{{ $book->Publication }}</td>
            <td>{{ $book->price }}</td>
            <td>{{ $book->Quantity }}</td>
            <td>{{ $book->Category_id }}</td>
            <td>
                <a href="{{ route('book.edit', $book->id) }}" class="btn btn-warning">Edit</a> | 
                <form action="{{ route('book.destroy', $book->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không?')">Delete</button>
                </form>
             
            </td>
          </tr>
        @endforeach
    
      
    </tbody>
  </table>
@endsection
