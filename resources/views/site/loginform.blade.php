<form class="zm-signin-form text-left" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <input type="email" id="email" name="email" value="{{ old('email') }}" class="zm-form-control username" {{ $errors->has('email') ? ' has-error' : '' }} placeholder="Email" >

            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        <input type="password" id="password"  name="password"{{ $errors->has('password') ? ' has-error' : '' }} required class="zm-form-control password" placeholder="Password">
        @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
         @endif

        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="remember"> &nbsp;Remember Me<br>


        <div class="zm-submit-box clearfix  mt-20">
            <input type="submit" value="Login">
            <a href="registration.html">Register</a>
        </div>
        <a href="{{ route('home') }}" class="zm-forget">Forget username/password?</a>
        <div class="zm-login-social-box">
            <a href="#" class="social-btn bg-facebook block"><span class="btn_text"><i class="fa fa-facebook"></i>Login with Facebook</span></a>
            <a href="#" class="social-btn bg-twitter block"><span class="btn_text"><i class="fa fa-twitter"></i>Login with Twitter</span></a>
        </div>
    </form>
