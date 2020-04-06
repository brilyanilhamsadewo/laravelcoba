@extends('templates.default')

@section('title')
<title>Category </title>
@endsection

@section('content')

<h1 class="mb-4">Data Category</h1>
<hr>

<a href="/category/insert"><button type="button" class="btn btn-primary mb-3">Tambah Category</button></a>


<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Category Name</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $cat)
        <tr>
          <td>{{ $cat->id }}</td>
          <td>{{ $cat->category_name }}</td>
          <td>
            @if ($cat->category_status==0)
            Disable
          @else
            Enable
          @endif</td>
          <td>
            <a href="/category/edit/{{ $cat->id }}" class="btn btn-warning">Edit</a>
            <a href="/category/destroy/{{ $cat->id }}" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
      @endforeach
    </tbody>

  </table>

@endsection
