@extends('templates.default')

@section('title')
<title>Product </title>
@endsection

@section('content')

<div class="container">
    <h1 class="mb-5">Insert Data Product</h1>
    <hr>

    <div class="row">
        <form method="post" action="/product/store">
            @csrf
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="product_id">Id Product</label>
                    <input type="text" class="form-control" id="product_id" placeholder="Id Otomatis" disabled>
                </div>
        
                <div class="form-group">
                    <label for="category_name">Category Name</label>
                    <input type="text" class="form-control" id="category_name" autofocus name="category_name">
        
                    @if ($errors->has('category_name'))
                        <div class="text-danger">
                            {{ $errors->first('category_name')}}
                        </div>
                    @endif
                </div>
        
                <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="text" class="form-control" id="product_name" autofocus name="product_name">
        
                    @if ($errors->has('product_name'))
                        <div class="text-danger">
                            {{ $errors->first('product_name')}}
                        </div>
                    @endif
                </div>
        
                <div class="form-group">
                    <label for="product_price">product_price</label>
                    <input type="text" class="form-control" id="product_price" autofocus name="product_price">
        
                    @if ($errors->has('product_price'))
                        <div class="text-danger">
                            {{ $errors->first('product_price')}}
                        </div>
                    @endif
                </div>
        
                <div class="form-group">
                    <label for="product_stock">product_stock</label>
                    <input type="text" class="form-control" id="product_stock" autofocus name="product_stock">
        
                    @if ($errors->has('product_stock'))
                        <div class="text-danger">
                            {{ $errors->first('product_stock')}}
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="explanation">explanation</label>
                    <input type="text" class="form-control" id="explanation" autofocus name="explanation">
        
                    @if ($errors->has('explanation'))
                        <div class="text-danger">
                            {{ $errors->first('explanation')}}
                        </div>
                    @endif
                </div>
            </div>       
            
    </div>

    <div class="row">
            <button type="submit" class="btn btn-primary ml-2" value="submit">Submit</button>
        </form>
    </div>
   
</div>

@endsection