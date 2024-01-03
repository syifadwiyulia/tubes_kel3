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
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="{{asset('admin/assets/img/wallpaper2.png')}}" width="768px" height="730px" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
            <div class="col-sm-6 text-black">
              <div class="d-flex align-items-center">
                <div class="card signup-form" style="margin-top: 15%">
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="img text-center">
                        <img src="{{asset('admin/assets/img/lostfound.png')}}" alt="LostFound Logo" width="160px" height="65px">
                    </div>
                    <div class="card-title text-center mt-4">Sign Up</div>
                    <div class="card-subtitle text-muted mb-5 fw-bold text-center text-secondary">Register your account</div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="mb-4" >
                          <label for="exampleFirstName" class="form-label">Name</label>
                          <input type="name" name="name" class="form-control" id="exampleFirstName">
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputEmail1" class="form-label">Email</label>
                          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="mb-4">
                          <label for="exampleLastName" class="form-label">Phone Number</label>
                          <input type="phone" name="contact" class="form-control" id="examplePhoneNumber">
                        </div>
                        <div class="mb-4">
                          <label for="examplePhoneNumber" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="examplePassword">
                        </div>
                      </div>
                      </div>
                    <div class="d-grid mt-3 text-center">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                    <div class="mt-3 text-center">
                      <label>Already have an account? <a href="/login" class="link" style="text-decoration: none;">Sign In</a></label>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
    </html>
</body>
</html>

