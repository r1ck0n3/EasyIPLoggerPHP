
<?php
	//Created by r1ck0n3

	//Create or open a file in append mode, to add the new data 
	$file = fopen("ip.txt", "a");
	
	// Capture the IP of the person visiting the web 
	$ip = $_SERVER['REMOTE_ADDR'];

	//Add the IP to the txt file
	echo fwrite($file,$ip);

	//Close the txt file
	fclose($file);

	//Redirects to any website, Youtube for example
	echo "<script>window.location.href='https://www.youtube.com/';</script>";
?>

