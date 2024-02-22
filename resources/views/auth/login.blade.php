@extends('_template_login.layout')

@section('content')
<!-- page -->
<div class="page">

    <!-- main-signin-wrapper -->
    <div class="my-auto page page-h">
        <div class="main-signin-wrapper">
            <div class="main-card-signin d-md-auto" >
                <div class="sign-up-body wd-md-auto">
                    <div class="main-signin-header">
                        <h2>WELCOME</h2>
                        <div class="px-0 col-12 mb-2">
                        @include('componen.pesan')
                        </div>
                        <h6>Form Input Login</h6>
                        <form method="POST" action="{{ route('auth') }}">
                            @csrf
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" class="form-control" placeholder="Enter your email" type="email" value="{{ old('email') }}" >
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" class="form-control" placeholder="Enter your password" type="password" value="{{ old('password') }}">
                            </div>
                           
                            <button style="margin-left: auto" type="submit" class="btn btn-primary"><i class="fe fe-log-in"></i> Login </button>
                            

                        </form>
                    </div>
                     <div class="main-signin-footer mt-3 mg-t-5">
						
						<p>Don't have an account? <a href="{{ route('registrasi') }}" > Create an Account</a></p>
					</div> 
                </div>
            </div>
        </div>
    </div>


</div>
<!-- End page -->
@endsection