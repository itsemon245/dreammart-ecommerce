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
            <form action="" method="post">
                <x-backend.form.input type="text" name="name" label="Full Name" placeholder="Full Name" note='' />
                <x-backend.form.input type="text" name="username" label="username" placeholder="johndoe23" note='' />
                
                <div class="d-flex gap-5">
                    <x-backend.form.input type="password" name="password" label="password" placeholder="Password" note='Password must include letters, numbers & symbols' />
                    <x-backend.form.input type="password" name="confirm_password" label="confirm password" placeholder="Confirm Password" note='Password must include letters, numbers & symbols' />
                </div>
                
                <x-backend.form.input type="file" name="avatar" label="Select Profile Picture" />
                
                <button type="submit" class="btn btn-primary">Register</button>
                <a href="{{route('admin.login')}}" class="btn ms-2 text-primary text-bold">Login</a>
            </form>
            </div>
        </div>

    </body>
</html>