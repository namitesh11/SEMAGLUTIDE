<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST["name"];
		$email = $_POST["email"];
        $phone = $_POST["phonenumber"];
		$message = $_POST["message"];

		$to = "rdigininja@gmail.com";
		$subject = "New Contact Form Submission";
		$body = "Name: $name\nEmail: $email\nPhone: $phone\nLoan: $loan\nCity: $city";

		$headers = "From: $email\r\n";
		$headers .= "Reply-To: $email\r\n";
		$headers .= "Content-type: text/plain; charset=utf-8\r\n";

		mail($to, $subject, $body, $headers);

        header('Location: success.html');
        exit;
       
	}
?>