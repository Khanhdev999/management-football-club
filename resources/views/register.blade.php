@extends('layout.layout')
@section('title', 'Register')
@section('content')
<form action="/register" method="post">
    @csrf
    <body>
        <div id="login">
            <h3 class="text-center text-white pt-5">Register form</h3>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="/login" method="post">
                                @csrf
                                <h3 class="text-center text-info">Register</h3>
                                <div class="form-group">
                                    <label for="username" class="text-info">Name User:</label><br>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="username" class="text-info">Email:</label><br>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-info">Password:</label><br>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-info">Confirm Password::</label><br>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-info btn-md" value="Login">
                                    @error('message')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
</form>
@endsection