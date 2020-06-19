<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>No Rezone NTM Mailing List</title>
    </head>
    <?php
        $action = $_GET["action"];
        $email = $_POST["email-address"];
        echo $action;

        if ($action == null && $email == null) {
            header("HTTP/1.1 400 Bad Request");

        }

        function emailExists($email) {
            if ($email == null) {
                return false;
            }
            else{
                global $filename;
                $recipients = explode("\n", file_get_contents("recipients.txt"));
                return in_array($email, $recipients, true);
            }
        }


        function subscribe($email) {
            global $filename;
            if (emailExists($email)) {
                echo "This email address is already subscribed.";
            }
            else {
                $file = fopen("recipients.txt", "a");
                fwrite($file, "\n" . $email);
                fclose($file);
                echo "Success! " . $email . " has been added to the No Rezone North Table Mountain Mailing List!";
            }
        }

        function unsubscribe($email) {
            global $filename;
            if (emailExists($email)) {   
                $file = file_get_contents('recipients.txt'); 
                $updated = preg_replace("/$email\n/", '', $file); 
                file_put_contents("recipients.txt", $updated);
                echo "We're sorry to see you go. " . $email . " has been removed from the No Rezone North Table Mountain Mailing List.";
            }
            else {
                echo "This email address isn't subscribed.";
            }
        }
    ?>
    <body>
        <?php
        echo emailExists($email);
        switch($action) {
            case "unsubscribe":
                unsubscribe($email);
                break;
            case "subscribe":
                subscribe($email);
                break;
            case "retrieve":
                ?><a href="mailto:Undisclosed%20Recipients<weareNTM@gmail.com>?bcc=<?php echo implode(',', explode("\n", file_get_contents($filename))); ?>">Send</a><?php
                break;
            default:
                echo "error";
                break;
        }
        $to = 'bob@example.com';

        $subject = 'Subscription Request';

        $headers = "From: " . strip_tags($_POST['req-email']) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $adminLink = "https://admin.google.com/u/1/ac/groups/02grqrue0w1xn1b/members"
        $msg = "A user has requested their email, $email, to be added to the mailing list. Click here to go to the members list: $adminLink";
        $msg = wordwrap($msg,70);
        mail("superflygetz@gmail.com",$subject,$msg);
    ?>
    </body>
</html>