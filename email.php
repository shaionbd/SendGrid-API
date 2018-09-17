<?php
/*SendGrid Library*/
require_once ('vendor/autoload.php');

/*Post Data*/
//$name = $_POST['name'];
//$email = $_POST['email'];
//$message = $_POST['message'];

/*Content*/
$from = new SendGrid\Email("Shakil", "shakilahamedshaion@gmail.com");
$subject = "SUBJECT";
$to = new SendGrid\Email("Shaion", "shakil.shaion@gmail.com");
$content = new SendGrid\Content("text/html", "CONTENT_GOES_HERE");

/*Send the mail*/
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$apiKey = ('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');
$sg = new \SendGrid($apiKey);

/*Response*/
$response = $sg->client->mail()->send()->post($mail);
?>

<!--Print the response-->
<pre>
    <?php
    var_dump($response);
    ?>
</pre>
