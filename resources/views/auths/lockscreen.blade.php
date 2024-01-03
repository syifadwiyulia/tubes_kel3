<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign In</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" href="{{asset('admin/assets/img/lostfound.png')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet"href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" />
    <!--===============================================================================================-->

    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}" />
    <!--===============================================================================================-->
  </head>
  <body>
    <section class="vh-100">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 text-black d-flex align-items-center justify-content-center">
              <div class="card login-form">
                <form>
                  <div class="img text-center">
                    <img src="{{asset('admin/assets/img/lostfound.png')}}" alt="LostFound Logo" width="160px" height="65px">
                  </div>
                  <div class="pic mt-5 text-center">
                    <img src="{{asset('admin/assets/img/user.jpg')}}"  width="80px" height="80px" alt="user" style="border-radius: 50%;">
                  </div>
                  <div class="card-title text-center mt-4 fs-4">Hi! Jonathan Saputra</div>
                  <div class="card-subtitle text-muted mb-5 fs-6 text-center text-secondary">Enter your password to access the admin.</div>
                  <div class="mt-1">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="mt-4 text-center">
                    <a href="/lostandfound" class="btn btn-primary">Login</a>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="{{asset('admin/assets/img/wallpaper.png')}}" width="768px" height="730px" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
          </div>
        </div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>  
</body>
</html>
