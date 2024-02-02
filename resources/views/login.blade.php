@extends('master')

@section('main')

<div class="container mt-3">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-4 col-sm-offset-4 ">
            <h2>Login</h2>
            <form action="" method="POST">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="mb-3">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection