@extends('templates.default')

@section('title')
<title>Product </title>
@endsection

@section('content')

<h1 class="mb-4">Data Product</h1>
<hr>

<a href="/product/insert"><button type="button" class="btn btn-primary mb-3">Tambah Product</button></a>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Category Id</th>
        <th scope="col">Product Name</th>
        <th scope="col">Product Price</th>
        <th scope="col">Product Stock</th>
        <th scope="col">Explanation</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
        <tr>
          <td>{{ $product->id }}</td>
          <td>{{ $product->category_id }}</td>
          <td>{{ $product->product_name }}</td>
          <td>{{ $product->product_price }}</td>
          <td>{{ $product->product_stock }}</td>
          <td>{{ $product->explanation }}</td>
          <td>
            <a href="/product/edit/{{ $product->id }}" class="btn btn-warning">Edit</a>
            <a href="/product/destroy/{{ $product->id }}" class="btn btn-danger">Hapus</a>
          </td>
        </tr> 
      @endforeach
    </tbody>
    
  </table>

@endsection

<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
  Launch demo modal
</button> --}}

