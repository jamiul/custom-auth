<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>RegistrationForm_v2 by Colorlib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="{{ asset('fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<div class="wrapper">
    <div class="inner">
        <form action="{{ route('admin.login') }}" method="post">
            {{ csrf_field() }}
            <h3>Login </h3>
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
            <button type="submit">Login</button>
        </form>
    </div>
</div>

</body>
</html>