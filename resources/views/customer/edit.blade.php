@extends('templates.default')

@section('title')
<title>Customer</title>
@endsection

@section('content')
<div class="container">
    <h1 class="mb-4">Data Customer</h1>
    <hr>

    <div class="card mt-5">
        <div class="card-header text-center">
            CRUD Data Customer - <strong>EDIT DATA</strong>
        </div>
        <div class="card-body">
            <a href="/customer" class="btn btn-primary">Kembali</a>
            <br/>
            <br/>


            <form method="post" action="/customer/update/{{ $customers->id }}">

                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control" placeholder="first_name .." value=" {{ $customers->first_name }}">

                    @if($errors->has('first_name'))
                        <div class="text-danger">
                            {{ $errors->first('first_name')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="last_name" class="form-control" placeholder="last_name .." value=" {{ $customers->last_name }}">

                    @if($errors->has('last_name'))
                        <div class="text-danger">
                            {{ $errors->first('last_name')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="phone .." value=" {{ $customers->phone }}">

                    @if($errors->has('phone'))
                        <div class="text-danger">
                            {{ $errors->first('phone')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="email .." value=" {{ $customers->email }}">

                    @if($errors->has('email'))
                        <div class="text-danger">
                            {{ $errors->first('email')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Street</label>
                    <input type="text" name="street" class="form-control" placeholder="street .." value=" {{ $customers->street }}">

                    @if($errors->has('street'))
                        <div class="text-danger">
                            {{ $errors->first('street')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>City</label>
                    <input type="text" name="city" class="form-control" placeholder="city .." value=" {{ $customers->city }}">

                    @if($errors->has('city'))
                        <div class="text-danger">
                            {{ $errors->first('city')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>State</label>
                    <input type="text" name="state" class="form-control" placeholder="state .." value=" {{ $customers->state }}">

                    @if($errors->has('state'))
                        <div class="text-danger">
                            {{ $errors->first('state')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Zip Code</label>
                    <input type="text" name="zip_code" class="form-control" placeholder="zip_code .." value=" {{ $customers->zip_code }}">

                    @if($errors->has('zip_code'))
                        <div class="text-danger">
                            {{ $errors->first('zip_code')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="customer_status" class="form-control">
                        <option value="0" <?php if($customers->customer_status=='0') ?> selected='selected'>Disable</option>
                        <option value="1" <?php if($customers->customer_status=='1') ?> selected='selected'>Enable</option>
                    </select>

                    @if($errors->has('customer_status'))
                        <div class="text-danger">
                            {{ $errors->first('customer_status')}}
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
