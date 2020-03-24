@extends('templates.default')

@section('title')
<title>User</title>
@endsection

@section('content')
<div class="container">
    <h1 class="mb-4">Data User</h1>
    <hr>
    
    <div class="card mt-5">
        <div class="card-header text-center">
            CRUD Data User - <strong>EDIT DATA</strong>
        </div>
        <div class="card-body">
            <a href="/user" class="btn btn-primary">Kembali</a>
            <br/>
            <br/>
            

            <form method="post" action="/user/update/{{ $users->id }}">

                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control" placeholder="first_name .." value=" {{ $users->first_name }}">

                    @if($errors->has('first_name'))
                        <div class="text-danger">
                            {{ $errors->first('first_name')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="last_name" class="form-control" placeholder="last_name .." value=" {{ $users->last_name }}">

                    @if($errors->has('last_name'))
                        <div class="text-danger">
                            {{ $errors->first('last_name')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="email .." value=" {{ $users->email }}">

                    @if($errors->has('email'))
                        <div class="text-danger">
                            {{ $errors->first('email')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="phone .." value=" {{ $users->phone }}">

                    @if($errors->has('phone'))
                        <div class="text-danger">
                            {{ $errors->first('phone')}}
                        </div>
                    @endif

                </div>


                <div class="form-group">
                    <label>Job Status</label>
                    <input type="text" name="job_status" class="form-control" placeholder="job_status .." value=" {{ $users->job_status }}">

                    @if($errors->has('job_status'))
                        <div class="text-danger">
                            {{ $errors->first('job_status')}}
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