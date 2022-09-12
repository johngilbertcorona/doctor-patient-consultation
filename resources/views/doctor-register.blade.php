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
                    <img src="resources/reg_img.webp" class="img-fluid" alt="Registration Image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <h1 class="mb-3">Sign up</h1>
                    <form action="register" method="post" id="login" novalidate>
                        @csrf

                        {{-- Information Messages --}}

                        <span>
                            @if ($message = Session::get('info-sucess'))
                                <div class="alert alert-success p-1">{{ $message }}</div>
                            @endif

                            @if ($message = Session::get('info-danger'))
                                <div class="alert alert-danger p-1 mb-1">{{ $message }}</div>
                            @endif

                            @if ($message = Session::get('info-dark'))
                                <div class="alert alert-dark p-1">{{ $message }}</div>
                            @endif
                        </span>

                        {{-- Input Box Name --}}
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="signupName" name='name'
                                placeholder="Username" required>
                            <label for="signupUserName">Username</label>
                            {{-- Name Validation --}}
                            @if ($errors->has('username'))
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                            @endif
                        </div>

                        <!--First Name Input -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="signupFirstName" name='fname'
                                placeholder="First Name" required>
                            <label for="signupFirstName">First Name</label>
                            {{-- Name Validation --}}
                            @if ($errors->has('firstname'))
                                <span class="text-danger">{{ $errors->first('firstName') }}</span>
                            @endif
                        </div>
                        <!--Last Name Input-->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="signupLastName" name='lname'
                                placeholder="Last Name" required>
                            <label for="signupLastName">Last Name</label>
                            {{-- Name Validation --}}
                            @if ($errors->has('lastname'))
                                <span class="text-danger">{{ $errors->first('surname') }}</span>
                            @endif
                        </div>
                        <!-- Email input -->
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-3" id="signupEmail" name="email"
                                placeholder="name@example.com" required>
                            <label for="signupEmail">Email address</label>
                            @if ($errors->has('email'))
                                <span class="text text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <!-- Password input -->
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-3" id="signupPassword" name="password"
                                placeholder="Password" required>
                            <label for="signupPassword">Password</label>
                            @if ($errors->has('password'))
                                <span class="text text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <!-- Submit button -->
                        <p class="text-muted">By clicking Sign up, you agree to the terms of use.</p>
                        <button type="submit" class="btn btn-dark btn-lg btn-block btn-rounded ">Sign up</button>

                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
@endsection
