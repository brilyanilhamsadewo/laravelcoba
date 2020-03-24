@extends('templates.default')

@section('title')
<title>Product</title>
@endsection

@section('content')
<div class="container">
    <h1 class="mb-4">Data product</h1>
    <hr>
    
    <div class="card mt-5">
        <div class="card-header text-center">
            CRUD Data Product - <strong>EDIT DATA</strong>
        </div>
        <div class="card-body">
            <a href="/product" class="btn btn-primary">Kembali</a>
            <br/>
            <br/>
            

            <form method="post" action="/product/update/{{ $products->id }}">

                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label>Category id</label>
                    <input type="text" name="category_id" class="form-control" placeholder="category_id .." value=" {{ $products->category_id }}">

                    @if($errors->has('category_id'))
                        <div class="text-danger">
                            {{ $errors->first('category_id')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="product_name" class="form-control" placeholder="product_name .." value=" {{ $products->product_name }}">

                    @if($errors->has('product_name'))
                        <div class="text-danger">
                            {{ $errors->first('product_name')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Product Price</label>
                    <input type="number" name="product_price" class="form-control" placeholder="product_price .." value=" {{ $products->product_price }}">

                    @if($errors->has('product_price'))
                        <div class="text-danger">
                            {{ $errors->first('product_price')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Product Stock</label>
                    <input type="number" name="product_stock" class="form-control" placeholder="product_stock .." value=" {{ $products->product_stock }}">

                    @if($errors->has('product_stock'))
                        <div class="text-danger">
                            {{ $errors->first('product_stock')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Explanation</label>
                    <input type="text" name="explanation" class="form-control" placeholder="explanation .." value=" {{ $products->explanation }}">

                    @if($errors->has('explanation'))
                        <div class="text-danger">
                            {{ $errors->first('explanation')}}
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