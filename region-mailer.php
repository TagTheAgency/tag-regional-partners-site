<?php
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);
		    $recipient = 'tom.reidy@tagtheagency.com';
        $region = trim($_POST["region"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // Set the email subject.
        $subject = "New Regional Partner enquiry from $name - $region";

        // Build the email content.
        $email_content = "Name: <strong>$name</strong><br>\n";
        $email_content .= "Email: <strong>$email</strong><br>\n";
        $email_content .= "Region: <strong>$region</strong><br>\n";
        $email_content .= "Message: <strong>$message</strong>\n";

        // Build the email headers.
        $email_headers = "From: Regional Partners Enquiry <noreply@tagtheagency.com>";
        $email_headers = "Content-Type: text/html; charset=ISO-8859-1\r\n";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }
?>
