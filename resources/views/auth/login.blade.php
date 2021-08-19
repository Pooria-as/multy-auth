@extends('layouts.app')
@section('content')
<div class="preloader">
    <img src="panel/assets/images/preloader.gif" alt="">
</div>
<!-- wrapper -->
  <div class="wrapper without_header_sidebar">
    <!-- contnet wrapper -->
    <div class="content_wrapper">
            <!-- page content -->
            <div class="login_page center_container">
                <div class="center_content">
                    <div class="logo">
                        <img src="/panel/assets/images/logo.png" alt="" class="img-fluid">
                    </div>
                    <form action="{{route("login") }}" class="d-block" method="post">
                        @csrf
                        <div class="form-group icon_parent">
                             <label for="password">Email</label>
 <input id="email" name="email" type="email" class="form-control  name="email" value=" " required autocomplete="email" autofocus placeholder="Email Address">
      <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>
      @error("email")
          <br/>
          <span class="badge badge-danger">{{ $message }}</span>
      @enderror

                        </div>
                        <div class="form-group icon_parent">
                            <label for="password">Password</label>
<input id="password" name="password" type="password" class="form-control   name="password" required autocomplete="current-password" placeholder="Password">
<span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                            @error("password")
                            <br/>
                            <span class="badge badge-danger">{{ $message }}</span>

                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="chech_container">Remember me
                                <input type="checkbox" name="remember" id="remember" >
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="form-group">
                            <a class="registration" href="{{ route("register") }}">Create new account</a><br>

                            <button type="submit" class="btn btn-blue">Login</button>
                        </div>
                    </form>
                    <div class="footer">
                       <p>Copyright &copy; 2020 <a href="https://easylearningbd.com/">easy Learning</a>. All rights reserved.</p>
                    </div>

                </div>
            </div>
    </div><!--/ content wrapper -->
</div><!--/ wrapper -->


@endsection
