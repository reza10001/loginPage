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
    <h1 class="mb-4">سلام <?php echo $_SESSION['username']?></h1>
    <form action="/logout" method="post">
        <button type="submit" class="btn btn-light" value="submit">خروج</button>
    </form>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 
  </body>
</html>

