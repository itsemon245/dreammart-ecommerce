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
              <h5 class="mb-0 text-primary"><strong>Register</strong></h5>
              <a href="/" class="btn btn-primary" >Go Back</a>
            </div>
            <div class="card-body">
              <div class="text-center try">
                <h5><strong>Using</strong></h5>
              </div>
                  <div class="mb-3 d-flex gap-3 align-items-center justify-content-center">
                    <a href={{route('login.social', 'google')}} class="btn btn-outline-secondary">
                      <div class="d-flex gap-1 align-items-center justify-content-cetner">
                        <img style="scale:90%;"
                        src="{{asset('assets/img/icons/brands/google.png')}}" alt="">
                        <strong>Google</strong>
                      </div>
                    </a>
                    <a href={{route('login.social', 'facebook')}} class="btn btn-outline-secondary">
                      <div class="d-flex gap-1 align-items-center justify-content-cetner">
                        <img
                        src="{{asset('assets/img/icons/brands/facebook.png')}}" alt="">
                        <strong>Facebook</strong>
                      </div>
                    </a>
                  </div>
              <div class="d-flex justify-content-center align-items-center mb-3">
                
                <div>OR</div>
                
              </div>
            <form action="{{route('user.create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-lg-6">

                    {{-- input field for name --}}
                      <div class="mb-3">
                        <label class="form-label" for="{{"name"}}">Full Name</label>
                        <input 
                        type="text"
                        class="form-control"
                        name="name"
                        value="{{old("name")}}"
                        id="name" 
                        placeholder="Your name"/>
                        @error("name")
                        <div id="{{"name-error"}}" class="text-danger form-text ms-1">
                          {{$message}}
                        </div>
                        @enderror 
                      </div>
                    </div>
                    <div class="col-lg-6">
                       {{-- input field for profile --}}
                      <div class="mb-3">
                        <label class="form-label" for="{{"profile_image"}}">Select Profile</label>
                        <input 
                        type="file"
                        class="form-control"
                        name="profile_image"
                        id="profile_image" />
                        @error("profile_image")
                        <div id="{{"name-error"}}" class="text-danger form-text ms-1">
                          {{$message}}
                        </div>
                        @enderror 
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      {{-- input field for email --}}
                      <div class="mb-3">
                        <label class="form-label" for="{{"email"}}">Email</label>
                        <input 
                        type="email"
                        class="form-control"
                        name="email"
                        value="{{old("email")}}"
                        id="email" 
                        placeholder="Your eamil"/>
                        @error("email")
                        <div id="{{"email-error"}}" class="text-danger form-text ms-1">
                          {{$message}}
                        </div>
                        @enderror 
                      </div>
                    </div>

                    <div class="col-lg-6">
                      {{-- input field for username --}}
                      <div class="mb-3">
                        <label class="form-label" for="{{"username"}}">Username</label>
                        <input 
                        type="text"
                        class="form-control"
                        name="username"
                        value="{{old("username")}}"
                        id="username" 
                        placeholder="johndoe23"/>
                        @error("username")
                        <div id="{{"username-error"}}" class="text-danger form-text ms-1">
                          {{$message}}
                        </div>
                        @enderror 
                      </div>
                    </div>
                  </div>


                <div class="row">
                   <div class="col-lg-6">
                   
                    {{-- input field for password --}}
                    <div class="mb-3">
                      <label class="form-label" for="{{"password"}}">Password</label>
                      <input 
                      type="password"
                      class="form-control"
                      name="password"
                      value="{{old("password")}}"
                      id="password" 
                      placeholder="min 8, numbers, mixed-case & symbol"/>
                      @error("password")
                      <div id="{{"password-error"}}" class="text-danger form-text ms-1">
                        {{$message}}
                      </div>
                      @enderror 
                    </div>
                   </div>
                    <div class="col-lg-6">
                      {{-- <x-backend.form.input type="password" name="confirm_password" label="confirm password" placeholder="Confirm Password" note='Password must include letters, numbers & symbols' /> --}}

                      {{-- input field for password --}}
                      <div class="mb-3">
                        <label class="form-label" for="{{"password_confirmation"}}">Confirm Password</label>
                        <input 
                        type="password"
                        class="form-control"
                        name="password_confirmation"
                        value="{{old("password_confirmation")}}"
                        id="password_confirmation" 
                        placeholder="Confirm Password"/>
                        @error("password_confirmation")
                        <div id="{{"confirm-error"}}" class="text-danger form-text ms-1">
                          {{$message}}
                        </div>
                        @enderror 
                      </div>
                    </div>
                  </div>

                <button type="submit" class="btn btn-primary">Register</button>
                <a href="{{route('login')}}" class="btn ms-2 text-primary text-bold">Login</a>
            </form>
            </div>
        </div>

        <x-backend.scripts />
    </body>
</html>
