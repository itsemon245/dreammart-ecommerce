<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
    <x-backend.head />

    <body class="d-flex justify-content-center p-5">

        <div class="card mb-4" style="width: 50%">

            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Register</h5>
            </div>
            <div class="card-body">
              <div class="text-center try">
                <strong>Using</strong>
              </div>
              
              <div class="d-flex justify-content-center gap-5 mb-3 socials">
                  <a href={{route('google.login')}}><i style="scale:2; transition: all 250ms ease-in;" class="bx bxl-google form-text"></i>
                  </a>
                  <a href={{route('google.login')}}><i style="scale:2; transition: all 250ms ease-in;" class="bx bxl-facebook form-text"></i>
                  </a>
                  <a href={{route('google.login')}}><i style="scale:2; transition: all 250ms ease-in;" class="bx bxl-twitter form-text"></i>
                  </a>
              </div>
              <div class="row justify-content-center align-items-center mb-3">
                <div class="col-lg-3">
                  <div class="bg-secondary" style="width: 100%; height:2px; border-radius: 50px"></div>
                </div>
                <div class="col-lg-1">OR</div>
                <div class="col-lg-3">
                  <div class="bg-secondary" style="width: 100%; height:2px; border-radius: 50px"></div>
                </div>
              </div>
            <form action="{{route('user.create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-lg-6"><x-backend.form.input type="text" name="name" label="Full Name" placeholder="Full Name" note='' />
                    </div>
                    <div class="col-lg-6">
                      <x-backend.form.input type="text" name="username" label="username" placeholder="johndoe23" note='' />
                    </div>
                  </div>
                  <x-backend.form.input type="email" name="email" label="email" placeholder="example@gmail.com" note='' />


                <div class="row">
                   <div class="col-lg-6">
                    <x-backend.form.input type="password" name="password" label="password" placeholder="Password" note='Password must include letters, numbers & symbols' />
                   </div>
                    <div class="col-lg-6">
                      <x-backend.form.input type="password" name="confirm_password" label="confirm password" placeholder="Confirm Password" note='Password must include letters, numbers & symbols' />
                    </div>
                </div>

                <div class="d-flex gap-3 align-items-center">
                    <x-backend.form.input type="file" name="profile_image" label="Select Profile Picture" />
                    <div class="mx-3 mt-3">OR</div>
                      <x-backend.form.select-avater />
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
                <a href="{{route('login')}}" class="btn ms-2 text-primary text-bold">Login</a>
            </form>
            </div>
        </div>

        <x-backend.scripts />
    </body>
</html>
