@extends('main')
@section('mainContent')
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
    </style>

    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="resources/img/scope-img.jpg" class="img-fluid" alt="Login Image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <h1 class="mb-3">Sign in</h1>
                    <form action="login" method="post" id="login" novalidate>
                        @csrf

                        {{-- Information Messages --}}

                        <span>
                            @if ($message = Session::get('info-sucess'))
                                <div class="alert alert-success p-1 mb-3">{{ $message }}</div>
                            @endif

                            @if ($message = Session::get('info-danger'))
                                <div class="alert alert-danger p-1 mb-3">{{ $message }}</div>
                            @endif

                            @if ($message = Session::get('info-dark'))
                                <div class="alert alert-dark p-1 mb-3">{{ $message }}</div>
                            @endif
                        </span>

                        <!-- Email input -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="username" name="username"
                                placeholder="name@example.com" required>
                            <label for="userName">Username</label>
                            @if ($errors->has('username'))
                                <span class="text text-danger">{{ $errors->first('username') }}</span>
                            @endif
                        </div>

                        <!-- Password input -->
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-3" id="loginPassword" name="password"
                                placeholder="Password" required>
                            <label for="loginPassword">Password</label>
                            @if ($errors->has('password'))
                                <span class="text text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-dark btn-lg btn-block btn-rounded ">Submit</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/register"
                                class="link-danger">Register</a></p>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
@endsection
