@extends('templates.default')

@section('title')
<title>Category</title>
@endsection

@section('content')
<div class="container">
    <h1 class="mb-4">Data Category</h1>
    <hr>
    
    <div class="card mt-5">
        <div class="card-header text-center">
            CRUD Data Category - <strong>EDIT DATA</strong>
        </div>
        <div class="card-body">
            <a href="/category" class="btn btn-primary">Kembali</a>
            <br/>
            <br/>
            

            <form method="post" action="/category/update/{{ $categories->id }}">

                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" name="category_name" class="form-control" placeholder="category_name .." value=" {{ $categories->category_name }}">

                    @if($errors->has('category_name'))
                        <div class="text-danger">
                            {{ $errors->first('category_name')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>

            </form>

        </div>
    </div>
</div>


@endsection