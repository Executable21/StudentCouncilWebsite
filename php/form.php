<?php
		
		
			if(isset($_REQUEST["submit"]))
			{
				$to = "brittainmr@usd231.com";
				$subject = $_REQUEST["subject"];
				$message = $_REQUEST["message"];
				$email = $_REQUEST["email"];
				$name = $_REQUEST["name"];
				$from = $name." ".$email;
				mail($to, $subject, $message, $from, $name);
                header("Location: ../contact.html");
			}
?>