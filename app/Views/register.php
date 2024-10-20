<!doctype html>
<html dir="rtl" lang="fa">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/main.css">
    <title>Hello, world!</title>

  </head>
  <body>
    <main class=" text-center text-white d-flex justify-content-center align-items-center flex-column">
     <div class="div-1 row p-4 rounded-3">
      <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="white" class="bi bi-1-circle" viewBox="0 0 16 16">
        <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383z"/>
      </svg>
      <h1 class="h3 mt-3">عضویت</h1>
      <form class="" action="/register" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="username"></label>
          <input type="text" class="form-control my-rounded" id="username" name="username" placeholder="نام کاربری">
        </div>
        <div class="form-group">
          <label for="avatar"></label>
          <input type="file" class="form-control my-rounded" id="avatar" name="avatar" placeholder="" >
        </div>
        <div class="form-group">
          <label for="password"></label>
          <input type="password" class="form-control my-rounded" id="password" name="password" placeholder=" گذرواژه">
          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group">
          <label for="confirm_password"></label>
          <input type="password" class="form-control my-rounded" id="confirm_password" name="confirm_password" placeholder="تکرار گذرواژه">
          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="checkbox my-3 ">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>             

        <button type="submit" class="btn btn-outline-light">Submit</button>
      </form>
    </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 
  </body>
</html>