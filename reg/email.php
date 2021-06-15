<?php 
  $sender =$_POST["toemail"] ;
			$recipient = "mdhabiburrahman442618@gmail.com";

			$subject =  $_POST["sub"];
			$message = $_POST["content"];

			$headers ="Content-type:text/html;charset= UTF-8";

			$headers = 'From:' . $sender;

			if (mail($recipient, $subject, $message, $headers))
			{
				echo "Message accepted";
			}
			else
			{
				echo "Error: Message not accepted";
			}

