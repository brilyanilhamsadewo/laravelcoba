@extends('templates.default')

@section('title')
<title>Customer </title>
@endsection

@section('content')

<div class="container">
    <h1 class="mb-5">Insert Data Customer</h1>
    <hr>

    <div class="row">
        <form method="post" action="/customer/store">
            @csrf
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="customer_id">Id Customer</label>
                    <input type="text" class="form-control" id="customer_id" placeholder="Id Otomatis" disabled>
                </div>

                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" autofocus name="first_name">

                    @if ($errors->has('first_name'))
                        <div class="text-danger">
                            {{ $errors->first('first_name')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" autofocus name="last_name">

                    @if ($errors->has('last_name'))
                        <div class="text-danger">
                            {{ $errors->first('last_name')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" autofocus name="phone">

                    @if ($errors->has('phone'))
                        <div class="text-danger">
                            {{ $errors->first('phone')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" autofocus name="email">

                    @if ($errors->has('email'))
                        <div class="text-danger">
                            {{ $errors->first('email')}}
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="street">Street</label>
                    <input type="text" class="form-control" id="street" autofocus name="street">

                    @if ($errors->has('street'))
                        <div class="text-danger">
                            {{ $errors->first('street')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" autofocus name="city">

                    @if ($errors->has('city'))
                        <div class="text-danger">
                            {{ $errors->first('city')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" class="form-control" id="state" autofocus name="state">

                    @if ($errors->has('state'))
                        <div class="text-danger">
                            {{ $errors->first('state')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="zip_code">Zip Code</label>
                    <input type="text" class="form-control" id="zip_code" autofocus name="zip_code">

                    @if ($errors->has('zip_code'))
                        <div class="text-danger">
                            {{ $errors->first('zip_code')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="customer_status">Status</label>
                    <input type="text" class="form-control" id="customer_status" name="customer_status" placeholder="Auto aktif" disabled>

                    @if ($errors->has('customer_status'))
                        <div class="text-danger">
                            {{ $errors->first('customer_status')}}
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
