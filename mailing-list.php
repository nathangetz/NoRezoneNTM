<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>No Rezone NTM Mailing Lists</title>
</head>
<?php
    $action = $_GET["action"];
    $email = $_POST["email-address"];
    echo $action;
    
    if ($action == null && $email == null) {
        header("HTTP/1.1 400 Bad Request");
        
    }
    
        function emailExists($email) {
            global $filename;
            $recipients = explode("\n", file_get_contents("recipients.txt"));
            return in_array($email, $recipients);
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
        switch($action) {
            case "unsubscribe":
                unsubscribe($email);
                break;
            case "subscribe":
                subscribe($email);
                break;
            case "retrieve":
                ?><a href="mailto:Undisclosed%20Recipients<weareNTM@gmail.com>?bcc=<?php echo implode(',', explode("\n", file_get_contents($filename))); ?>">Send</a><?
                break;
            default:
                echo "error";
                break;
        }
    
    ?>
</body>
</html>