
<!-- Login-Registration Form  -->

<div class="registration-login-form">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">
                <svg class="olymp-register-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-register-icon"></use></svg>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#home" role="tab">
                <svg class="olymp-login-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-login-icon"></use></svg>
            </a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane" id="home" role="tabpanel" data-mh="log-tab">
            <div class="title h6">Register</div>
            <form class="content" action="{{url('register')}}" method="post">
            {{ csrf_field() }}
                <div class="row">
                    <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">First Name</label>
                            <input class="form-control" placeholder="" type="text" name="firstname">
                            @if ($errors->has('firstname'))
                                <p>{{$errors->first('firstname')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Last Name</label>
                            <input class="form-control" placeholder="" type="text" name="lastname">
                            @if ($errors->has('lastname'))
                                <p>{{$errors->first('lastname')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Your Email</label>
                            <input class="form-control" placeholder="" type="email" name="registerEmail">
                            @if ($errors->has('registerEmail'))
                                <p>{{$errors->first('registerEmail')}}</p>
                            @endif
                        </div>
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Your Password</label>
                            <input class="form-control" placeholder="" type="password" name="registerPassword">
                            @if ($errors->has('registerPassword'))
                                <p>{{$errors->first('registerPassword')}}</p>
                            @endif
                        </div>

                        <div class="form-group date-time-picker label-floating">
                            <label class="control-label">Your Birthday</label>
                            <input name="datetimepicker" value="10/24/1984" />
                            <span class="input-group-addon">
                                <svg class="olymp-calendar-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
                            </span>
                        </div>

                        <div class="form-group label-floating is-select">
                            <label class="control-label">Your Gender</label>
                            <select class="selectpicker form-control" name="gender">
                                <option value="MA">Male</option>
                                <option value="FE">Female</option>
                            </select>
                        </div>

                        <div class="remember">
                            <div class="checkbox">
                                <label>
                                    <input name="optionsCheckboxes" type="checkbox" checked>
                                    I accept the <a href="#">Terms and Conditions</a> of the website
                                </label>
                            </div>
                        </div>
                        <input type="submit" value="Complete Registration!" class="btn btn-purple btn-lg full-width">
                    </div>
                </div>
            </form>
        </div>

        <div class="tab-pane active" id="profile" role="tabpanel" data-mh="log-tab">
            <div class="title h6">Login to your Account</div>
            @if($errors->has('errorlogin'))
            <div class="alert alert-danger" role="alert">
                {{$errors->first('errorlogin')}}
            </div>
            @endif
            <form class="content" action="{{url('login')}}" method="post">
            {{ csrf_field() }}
                <div class="row">
                    <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Your Email</label>
                            <input class="form-control" placeholder="" type="email" name="email" value="{{old('email')}}">
                            @if ($errors->has('email'))
                                <p>{{$errors->first('email')}}</p>
                            @endif
                        </div>
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Your Password</label>
                            <input class="form-control" placeholder="" type="password" name="password">
                            @if ($errors->has('password'))
                                <p>{{$errors->first('password')}}</p>
                            @endif
                        </div>

                        <div class="remember">

                            <div class="checkbox">
                                <label>
                                    <input name="optionsCheckboxes" type="checkbox" checked>
                                    Remember Me
                                </label>
                            </div>
                            <a href="#" class="forgot">Forgot my Password</a>
                        </div>
                        <input type="submit" value="Login" class="btn btn-lg btn-primary full-width">
                        <p>Don’t you have an account? <a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ... end Login-Registration Form  -->