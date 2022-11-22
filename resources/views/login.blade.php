@extends('layouts.master')
@section('title','Admin Login')
@section('content')
<h1 class="text-center text-info my-5">Ecommerce Webiste</h1>
<div class="col-md-6 offset-md-3">
    <form action="" method="POST">
        <div class="mb-3">
            <label for="exampleInputPhone" class="form-label">Phone</label>
            <input type="number" name="phone" class="form-control is-invalid" id="exampleInputPhone"
                aria-describedby="phoneHelp">
            <div id="phoneHelp" class="form-text text-danger">We'll never share your phone number with anyone else.
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password " class="form-control is-invalid" id="exampleInputPassword1">
            <div id="passwordHelp" class="form-text text-danger">We'll never share your password number with anyone
                else.
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <div class="mb-3 form-check">
                <input type="checkbox" name="rememberMe" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remeber Me</label>
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Login</button>
        </div>
    </form>
</div>
@endsection
