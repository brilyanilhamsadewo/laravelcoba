@extends('templates.default')

@section('title')
<title>Customer</title>
@endsection

@section('content')

<h1 class="mb-4">Data Customer</h1>
<hr>

<a href="/customer/insert"><button type="button" class="btn btn-primary mb-3">Tambah Customer</button></a>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Street</th>
        <th scope="col">City</th>
        <th scope="col">State</th>
        <th scope="col">Zip Code</th>
        <th scope="col">Action</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($customers as $cus)
        <tr>
          <td>{{ $cus->id }}</td>
          <td>{{ $cus->first_name }}</td>
          <td>{{ $cus->last_name }}</td>
          <td>{{ $cus->phone }}</td>
          <td>{{ $cus->email }}</td>
          <td>{{ $cus->street }}</td>
          <td>{{ $cus->city }}</td>
          <td>{{ $cus->state }}</td>
          <td>{{ $cus->zip_code }}</td>
          <td>@if ($cus->customer_status==0)
            Disable
          @else
            Enable
          @endif</td>
          <td>
            <a href="/customer/edit/{{ $cus->id }}" class="btn btn-warning">Edit</a>
            <a href="/customer/destroy/{{ $cus->id }}" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
      @endforeach
    </tbody>

  </table>

@endsection
