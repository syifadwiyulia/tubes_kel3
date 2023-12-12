<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" href="{{asset('admin/assets/img/lostfound.png')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet"href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" />
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/animate/animate.css')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/css-hamburgers/hamburgers.min.css')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/animsition/css/animsition.min.css')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/select2/select2.min.css')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/daterangepicker/daterangepicker.css')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{asset('admin/assets/css/util.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}" />
    <!--===============================================================================================-->
  </head>
  <body style="background-color: #666666">
    <div class="limiter">
      <div class="container-login100">
        <img src="" alt="" />
        <div class="wrap-login100">
        <div class="login100-more" style="background-image: url('{{asset('admin/assets/img/wallpaper.png')}}') "></div> 
          <form class="login100-form validate-form">
            <div style="display: flex; justify-content: center; margin-bottom: 20px"><img src="{{asset('admin/assets/img/lostfound.png')}}" alt="LostFound Logo" width="190" height="80"></div>

            <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
              <input class="input100" type="text" name="email" />
              <span class="focus-input100"></span>
              <span class="label-input100">Email</span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Password is required">
              <input class="input100" type="password" name="pass" />
              <span class="focus-input100"></span>
              <span class="label-input100">Password</span>
            </div>

            <div class="flex-sb-m w-full p-t-3 p-b-32">
              <div class="contact100-form-checkbox">
                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" />
                <label class="label-checkbox100" for="ckb1"> Remember me </label>
              </div>

              <div>
                <a href="#" class="txt1"> Forgot Password? </a>
              </div>
            </div>

            <div class="container-login100-form-btn">
              <button class="login100-form-btn">Login</button>
            </div>

            </div>
          </form>
        </div>
      </div>
    </div>

    <!--===============================================================================================-->
    <script src="{{asset('admin/assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('admin/assets/vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('admin/assets/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('admin/assets/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('admin/assets/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('admin/assets/vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('admin/assets/js/main.js')}}"></script>
  </body>
</html>
