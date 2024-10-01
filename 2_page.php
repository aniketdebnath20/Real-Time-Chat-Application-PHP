<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="text-bg-light">

    <main class="container m-auto col-md-4 mt-5">
        <form action="3_page.php" method="post">
            <h3 class="mb-3">Please Enter Valid Name</h3>

            <div class="form-floating">
                <input type="text" name="room" class="form-control" id="room" placeholder="name@example.com">
                <label for="floatingInput">Enter Room Name</label>
            </div>

            <div class="form-check text-start my-1">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                </label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Create</button>
          <a href="1_page.php" class="btn btn-primary w-100 py-2 mt-3"> Back </a>
        </form>
    </main>

    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>