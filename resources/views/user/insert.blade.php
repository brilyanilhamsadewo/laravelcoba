@extends('templates.default')

@section('title')
<title>User </title>
@endsection

@section('content')

<div class="container">
    <h1 class="mb-5">Insert Data User</h1>
    <hr>

    <div class="row">
        <form method="post" action="/user/store">
            @csrf
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="user-id">Id User</label>
                    <input type="text" class="form-control" id="user-id" placeholder="Id Otomatis" disabled>
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
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" autofocus name="phone">
        
                    @if ($errors->has('phone'))
                        <div class="text-danger">
                            {{ $errors->first('phone')}}
                        </div>
                    @endif
                </div>
        
                <div class="form-group">
                    <label for="job_status">Job Status</label>
                    <input type="text" class="form-control" id="job_status" autofocus name="job_status">
        
                    @if ($errors->has('job_status'))
                        <div class="text-danger">
                            {{ $errors->first('job_status')}}
                        </div>
                    @endif
                </div>
    </div>

    <div class="row">
            <button type="submit" class="btn btn-primary ml-2" value="submit">Submit</button>
        </form>
    </div>
   
</div>

@endsection