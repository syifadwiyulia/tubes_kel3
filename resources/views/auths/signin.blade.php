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
        <div class="col-sm-6 text-black">
          <div class="d-flex align-items-center justify-content-center">
            <div class="card signin-form mt-4">
              <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="img text-center mt-4">
                  <img src="{{asset('admin/assets/img/lostfound.png')}}" alt="LostFound Logo" width="160px" height="65px">
                </div>
                <div class="card-title text-center mt-4 fs-3">Sign In</div>
                <div class="card-subtitle text-muted mb-5 fw-bold text-center fs-6 text-secondary">Sign in to stay connected</div>
            
                <div class="mb-4">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"/>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input name="password" type="password" class="form-control" id="exampleInputPassword1"/>
                </div>
                <!--
                <div class="mb-3">
                  <label for="role" class="form-label">Log In as</label>
                  <select class="form-select form-control" name="role" id="role">
                    <option value="" disabled selected>Select</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                  </select>
                </div>-->
                <div class="mt-3 text-center">
                  <button type="submit" class="btn btn-primary">Sign In</button>
                  <!--<a href="/lostandfound" class="btn btn-primary">Sign In</a>-->
                </div>
              </form>
                <div class="mt-3 text-center">
                  <label>Don't have an account yet? <a href="/signup" class="link" style="text-decoration: none;">Click here to sign</a></label>
                </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="{{asset('admin/assets/img/wallpaper.png')}}" width="768px" height="730px" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
