<!doctype html>
<html class="h-100">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>No Rezone North Table Mountain | Mailing List</title>
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
                    <?php
                    $email = $_POST["email-address"];
                    $to = 'Nathan Getz <webmaster@norezonentm.com>';
                    $subject = 'Subscription Request';
                    $headers = 'From: No Rezone NTM Mailing List <mailbot@norezonentm.com>' . "\r\n";
                    $headers .= 'Organization: No Rezone North Table Mountain' . "\r\n";
                    $headers .= 'Return-Path: Nathan Getz <webmaster@norezonentm.com>' . "\r\n";
                    $headers .= 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers .= 'X-Mailer: PHP/' . phpversion();
                    $message = '<html style="height: 100% !important; background-image: linear-gradient(white, white) !important;">
                        <body style=\'height: 100% !important; width: 100% !important; box-sizing: border-box; margin: 0 !important; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; background-color: #FFFFFF !important;\' bgcolor="#000000">
                            <div style="background-color: #343a40 !important; margin-bottom: auto !important; width: 100%; padding: 1rem 4rem !important; box-sizing: border-box !important;">
                                        <h2 style="font-weight: 400; letter-spacing: 0.05rem; border-bottom: .25rem solid #AD8C57; color: #AD8C57; white-space: nowrap !important; margin: 0 !important;">No Rezone North Table Mountain</h2>
                            </div>
                            <div style="margin-left: auto !important; margin-right: auto !important; padding: 4rem 6rem;">
                                <h1 style="color: #6c757d !important; font-weight: 300 !important;">' . $email . ', has requested to be added to the No Rezone NTM Mailing List.</h1>
                                <a href="https://admin.google.com/u/1/ac/groups/02grqrue0w1xn1b/members" target="_blank" style="margin-left: auto !important; margin-right: auto !important; margin-top: 1rem !important;padding: 0.5rem 1rem; font-size: 1.25rem; line-height: 1.5; border-radius: 0.3rem;color: #fff; background-color: #007bff; border-color: #007bff;display: inline-block; font-weight: 400; vertical-align: middle; border: 1px solid transparent; text-decoration: none; user-select: none; box-sizing: border-box;">Click to open Google Admin Console</a>
                            </div>
                            <p style="background-color: #343a40 !important; color: rgba(144, 163, 193, .75) !important; margin-top: auto !important; padding: 1rem 5rem !important; text-decoration: none !important;">This is an automated message from norezonentm.com.</p>
                        </body>
                    </html>';
                    if($email != null) {
                    if(mail($to, $subject, $message, $headers)) {?>
                        <h1 class="text-center font-weight-light text-muted">Success! <span class="font-weight-normal text-dark"><?=$email?></span> will be added to the mailing list shortly!</h1>
                    <?php
                    } else {?>
                        <h1 class="text-center font-weight-light">Nooo! Something went wrong, and your request didn't make it to its destination.</h1>
                    <?php
                    }
                    } else {?>
                        <h1 class="text-center font-weight-light">Uh oh... This is awkward. Something bad happened, and your email address was lost in transit.<br>:&#40;</h1>
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