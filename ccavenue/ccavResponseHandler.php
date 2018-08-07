<?php include('Crypto.php')?>
<?php
    // ob_start();
	error_reporting(0);
	
	$workingKey='97ED0A304546EFA4A6E9B367AAA79C45';		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	//echo "<center>";

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==3)	$order_status=$information[1];
	}

	if($order_status==="Success")
	{
	//	echo "<br>Thank you for shopping with us. Your credit card has been charged and your transaction is successful. We will be shipping your order to you soon.";
	
		
	}
	else if($order_status==="Aborted")
	{
	//	echo "<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
	
	}
	else if($order_status==="Failure")
	{
	//	echo "<br>Thank you for shopping with us.However,the transaction has been declined.";
	}
	else
	{
	//	echo "<br>Security Error. Illegal access detected";
	
	}

//	echo "<br><br>";
	
	

//	echo "<table cellspacing=4 cellpadding=4>";
	
		$status=explode('=',$decryptValues[3]);
	    //echo $status[0];
    	//echo $status[1];
	    session_start();
	    $_SESSION["status"]=$status[1];
		//include("../saveticket.php");
	
	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
	    //	echo '<tr><td>'.$information[0].'</td><td>'.urldecode($information[1]).'</td></tr>';
	    
	    
	        
	}
		
	    
	

	////echo "</table><br>";
//	echo $_SESSION["status"];
	
//	echo "</center>";
	if(isset($_SESSION["status"])){
          //header("Location:../saveticket.php");
          include("../saveticket.php");
          //echo"i am here";
         // header("Location:../success.html");
          //echo "<script type='text/javascript'>window.location.href = 'http://koacon2019.com/proxima2/success.html';</script>";
        //  echo "i am here too";
          //exit();
        }
?>
