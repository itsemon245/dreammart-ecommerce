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
                <x-backend.form.input type="text" name="username" label="username" placeholder="johndoe23" note='' />
                <x-backend.form.input type="password" name="password" label="password" placeholder="Password" note='' />
                
                <button type="submit" class="btn btn-primary">Log in</button>
            </form>
            </div>
        </div>

    </body>
</html>