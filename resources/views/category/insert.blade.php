@extends('templates.default')

@section('title')
<title>Category </title>
@endsection

@section('content')

<div class="container">
    <h1 class="mb-4">Insert Data Category</h1>
    <hr>

    
    <form class="col-sm-4" method="post" action="/category/store">
        @csrf
        <div class="form-group">
            <label for="category_id">Id Category</label>
            <input type="text" class="form-control" id="category_id" placeholder="Id Otomatis" disabled>
        </div>

        <div class="form-group">
            <label for="category_name">Nama Category</label>
            <input type="text" class="form-control" id="category_name" placeholder="Masukkan Nama Category" autofocus name="category_name">

            @if ($errors->has('category_name'))
                <div class="text-danger">
                    {{ $errors->first('category_name')}}
                </div>
            @endif
        </div>
    
        <button type="submit" class="btn btn-primary" value="submit">Submit</button>
    </form>
</div>

@endsection