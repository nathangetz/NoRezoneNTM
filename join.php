<!doctype html>
<html class="h-100">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>No Rezone North Table Mountain</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/theme.css">
    </head>
    <body class="d-flex w-100 flex-column h-100 user-select-none cursor-default">
            <header class="mb-auto py-3 px-lg-4 px-2 navbar bg-dark">
                <div class="container-lg my-0">
                    <span class="px-lg-3 text-nowrap">
                        <h5 class="pagehead-brand">No Rezone North Table Mountain</h5></span>
                </div>
            </header>
            <main role="main" class="flex-shrink-0 my-3 py-5 mx-auto">
                <div class="container-lg my-auto">
                    <?php if($_POST["email-address"] != null) {?>
                        <h1 class="text-center font-weight-light text-muted">Success! <span class="font-weight-normal text-dark"><?= $_POST["email-address"] ?></span> has been added to the No Rezone North Table Mountain Mailing List!</h1>
                    <?php
                    } else {?>
                        <h1 class="text-center font-weight-light display-4">Oh no! Something went wrong.</h1>
                    <?php
                    }
                    ?>
                    <a href="/" class="btn btn-lg btn-outline-primary w-100 mt-5">Go back</a>
                </div>
            </main>
            <footer class="pagefoot mt-auto footer pt-3 text-center bg-dark">
                <div class="container-lg">
                    <p class="py-3">Web application designed and programmed by Nathan Getz.</p>
                </div>
            </footer>
    </body>
</html>