<?php

	if (!empty($_POST))
	{
		//Get form imputs
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'From: no-reply@ENTER-YOUR-DOMAIN-HERE.com';
		$to = 'ENTER-YOUR-EMAIL-ADDRESS';
		$subject = 'New contact message from website';
		
		//construct email message
		$body = "Name: $name\n Email: $email\n Message: $message\n";
		
		//Send email messsage
		if(mail ($to, $subject, $body, $from)) {
		
			//Save Email to a txt file in the resutls folder.
			$myFile = 'results/email_'.date('d-m-Y_hia').'.txt';
			$fh = fopen($myFile, 'w+');
			fwrite($fh, $body);
			fclose($fh);
			
			//Save Email to a database
			$db_Name = 'ENTER DATABASE NAME';
			$db_Host = 'ENTER DATABASE HOST';
			$db_User = 'ENTER DATABASE USERNAME';
			$db_Pass = 'ENTER DATABASE PASSWORD';
			
			$sql_connection = mysqli_connect("$db_Host", "$db_User", "$db_Pass") or die("Cannot Connect to Database");
		    mysqli_select_db($sql_connection, $db_Name);
			
			//Make data save to insert into Database
			$name = mysqli_real_escape_string($sql_connection, $name);
			$email = mysqli_real_escape_string($sql_connection, $email);
			$message = mysqli_real_escape_string($sql_connection, $message);
			$dateReceived = date('d-m-Y_hia');
			
			//Insert into database
			$sql = "INSERT INTO contacts SET name='$name', `email`='$email', `message`='$message', `date`='$dateReceived'";
			
			mysqli_query($sql_connection, $sql);
			
			mysqli_close($sql_connection);
		
			// Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
		} else {
			// Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
		}
		
	}

?>