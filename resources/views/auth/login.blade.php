<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Include the above in your HEAD tag -->

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="/css/emplogin.css" rel="stylesheet" >
<div class="main">
    
    
    <div class="container">
<center>
<div class="middle">
      <div id="login">

        <form action="{{ route('login') }}" method="post">
 @csrf
          <fieldset class="clearfix">

            <p ><span class="fa fa-user"></span><input type="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" Placeholder="Username" required autofocus></p> <!-- JS because of IE support; better: placeholder="Username" -->
            @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
            <p><span class="fa fa-lock"></span><input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required Placeholder="Password" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
              @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
             <div>
                                <span style="width:48%; text-align:left;  display: inline-block;"> 
									 @if (Route::has('password.request'))
                                <a class="small-text" href="{{ route('password.request') }}">Forgot
                                password?
                                </a>
                                @endif</span>
                                <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" value="{{ __('Login') }}"></span>
                            </div>

          </fieldset>
<div class="clearfix"></div>
        </form>

        <div class="clearfix"></div>

      </div> <!-- end login -->
      <div class="logo">LOGO
          
          <div class="clearfix"></div>
      </div>
      
      </div>
</center>
    </div>

</div>
