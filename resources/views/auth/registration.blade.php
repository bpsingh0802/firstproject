@extends('layout')

@section('content')

<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


                  
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        <form action="{{ route('register.post') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                <div class="col-md-6">
                                    <input type="text" id="name" class="form-control" name="name" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">
                                            {{ $errors->first('name') }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail
                                    Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="email" required>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">
                                            {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">
                                            {{ $errors->first('password') }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                <div class="col-md-6">
                                    <input type="text" id="phone" class="form-control" name="phone" required>
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">
                                            {{ $errors->first('phone') }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="address" class="form-control" name="address" required>
                                    @if ($errors->has('address'))
                                        <span class="text-danger">
                                            {{ $errors->first('address') }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pincode" class="col-md-4 col-form-label text-md-right">Pincode</label>
                                <div class="col-md-6">
                                    <input type="text" id="pincode" class="form-control" name="pincode" required>
                                    @if ($errors->has('pincode'))
                                        <span class="text-danger">
                                            {{ $errors->first('pincode') }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">City</label>
                                <div class="col-md-6">
                                    <input type="text" id="city" class="form-control" name="city" required>
                                    @if ($errors->has('city'))
                                        <span class="text-danger">
                                            {{ $errors->first('city') }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="state" class="col-md-4 col-form-label text-md-right">State</label>
                                <div class="col-md-6">
                                    <input type="text" id="state" class="form-control" name="state" required>
                                    @if ($errors->has('state'))
                                        <span class="text-danger">
                                            {{ $errors->first('state') }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection