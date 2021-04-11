
@extends('layouts.app')
@section('title','Login')
@section('content')

    <div class="wrapper">
      <section class="login-content">
         <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
               <div class="col-12">
                  <div class="row align-items-center">
                     <div class="col-lg-6">
                        <h2 class="mb-2">Sign In</h2>
                        <p>To Keep connected with us please login with your personal info.</p>
            <form class="login-form" action="{{ route('login') }}" method="POST" role="form">
               @csrf
                <div class="form-group">
                    <input class="form-control  @error('email') has-danger @enderror" type="email" id="email" name="email" placeholder="Email address" autofocus value="{{ old('email') }}" required>
                    @error('email')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">

                        <input class="form-control  @error('password') has-danger @enderror" type="password" id="password" name="password" placeholder="Password" required>
                        {{-- <span class="input-group-btn btn bd bd-l-0 bg-white tx-gray-600"><i onclick="togglePassword()" class="fa fa-eye"></i></span> --}}

                    @error('password')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                </div>

                <div class="form-group btn-container">
                <button type="submit" class="btn btn-primary btn-lg">Sign In</button>
                </div>
            </form>
        </div>
        <div class="col-lg-6 mb-lg-0 mb-4 mt-lg-0 mt-4">
                        <img src="../assets/images/login/01.png" class="img-fluid w-80" alt="">
                        </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>

@endsection
@push('custom_script')
<script>
    $(document).ready(function(){
        $('.login-form').parsley();
    });
</script>
@endpush
