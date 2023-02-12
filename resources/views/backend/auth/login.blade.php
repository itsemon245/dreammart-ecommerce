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
            <h5 class="mb-0">Log in</h5>
            </div>
            <div class="card-body">
            <form action="{{route('user.login')}}" method="post">
                @csrf
                <x-backend.form.input type="email" name="email" label="email" placeholder="example@email.com" note='' />
                <x-backend.form.input type="password" name="password" label="password" placeholder="Password" note='' />
                <div class="form-check mb-3">
                    <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="true" id="defaultCheck1" name="remember_me">
                    Remember me</label>
                </div>
                
                <button type="submit" class="btn btn-primary">Log in</button>
                <a href="{{route('register')}}" class="text-primary ms-3"><strong>Register</strong></a>
            </form>
            </div>
        </div>


        <x-backend.scripts />
    </body>
</html>