<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title> LOG IN </title>
    <link rel="stylesheet" href="/css/login.css">

</head>

    <body>
        <div class="container wrapper ">
        <div class="title"> Login Form</div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">

                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="col-md-6 field">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="col-md-6 field">
                                    <input id="password" type="password" class="form-control" name="password"  required>
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                </div>
                            </div>

                            <div class="form-group ">
                                <div class="col-md-6 col-md-offset-4 content ">
                                    <div class="checkbox">

                                    </div>

                                    <div class="content">
                                        <div class="checkbox">
                                            <label>
                                                <input id="remember-me" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>
                                        </div>

                               <!--         <div class="pass-link">
                                            <a class="btn btn-link " href="{{ route('password.request') }}">
                                                Forgot Password?
                                            </a>
                                        </div>


-->

                                    </div>


                                </div>
                            </div>

                            <div class="form-group">
                                <div class="field col-md-8 col-md-offset-4 ">
                                    <input type="submit" name="login" class="btn btn-primary" value="Login" />
                                </div>

                            </div>

                            <div class="signup-link">
                                Not a member? <a href="/register">Signup now</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>

</html>




