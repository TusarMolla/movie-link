@extends('elements.master')

@section('content')


    <div class="card col-4 offset-4 p-4 mt-5">
        <h1>Login Page</h1>
        <form method="POST" action="user-store">
            @csrf
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Registration</button>
            <p>Already have account? Login<a href="{{url('/login')}}"> here</a>.</p>
        </form>

    </div>
@endsection
