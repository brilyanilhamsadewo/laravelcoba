@extends('templates.default')

@section('title')
<title>User </title>
@endsection

@section('content')

<h1 class="mb-4">Data User</h1>
<hr>

<a href="/user/insert"><button type="button" class="btn btn-primary mb-3">Tambah User</button></a>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">First Name</th>
        <th scope="col">Last_Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Job Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->first_name }}</td>
          <td>{{ $user->last_name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->phone }}</td>
          <td>{{ $user->job_status }}</td>
          <td>
            <a href="/user/edit/{{ $user->id }}" class="btn btn-warning">Edit</a>
            <a href="/user/destroy/{{ $user->id }}" class="btn btn-danger">Hapus</a>
          </td>
        </tr> 
      @endforeach
    </tbody>
    
  </table>

@endsection