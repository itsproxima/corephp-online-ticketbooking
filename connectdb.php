<?php


  $servername = "localhost";
		$username = "hosanavi_proxima";
		$password = "Koacon@19";
          $db="hosanavi_koacon19";
			$conn = new mysqli($servername, $username, $password ,$db);

		if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
          } 
         //echo "Connected successfully";
         

    /*        $servername = "localhost";
		$username = "root";
		$password = "HelloDude";
          $db="koacon";
			$conn = new mysqli($servername, $username, $password ,$db);

		if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
          } 
         //echo "Connected successfully";


    */
          
?>