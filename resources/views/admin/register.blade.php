<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>RegistrationForm_v2 by Colorlib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="{{ asset('fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>

<div class="wrapper">
    <div class="inner">

        <form action="{{ route('admin.register') }}" method="post">
            {{ csrf_field() }}
            <h3>Registration Form</h3>
            <div class="form-group">
                <div class="form-wrapper{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="">First Name</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" required>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-wrapper{{ $errors->has('lastname') ? ' has-error' : '' }}">
                    <label for="">Last Name</label>
                    <input type="text" name="lastname" value="{{old('lastname')}}" class="form-control">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('lastname') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-wrapper{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="">Email</label>
                <input type="text" name="email" value="{{old('email')}}" class="form-control">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-wrapper{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="">Password</label>
                <input type="password" name="password" value="{{old('password')}}" class="form-control">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-wrapper">
                <label for="">Confirm Password</label>
                <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" class="form-control">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> I caccept the Terms of Use & Privacy Policy.
                    <span class="checkmark"></span>
                </label>
            </div>
            <button type="submit">Register Now</button>
        </form>
    </div>
</div>

</body>
</html>