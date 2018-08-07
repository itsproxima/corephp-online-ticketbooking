<?php
session_start();
include("connectdb.php");

   
     //echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
  if ( isset( $_POST['submit'] ) ) {

                   $Aname=$_POST["acompany-per-name"];
                    $relationship=$_POST["relationship"];
                    $Aemail=$_POST["acompany-per-email"];
                    $Aphone=$_POST["acompany-per-phone"];
                    $name=$_POST["name"];
                    $surname=$_POST["surname"];
                    $email=$_POST["email"];
                    $phonenumber=$_POST["phonenumber"];
                    $office=$_POST["office"];
                    $kmcR_no=$_POST["kmcR-no"];
                    $koaMembership_no=$_POST["koaMembership-no"];
                    //$date=$_POST["date"];
                    $address=$_POST["address"];
                    $city=$_POST["city"];
                    $zip=$_POST["zip-code"];
                    $state=$_POST["state"];
                    $country=$_POST["country"];
                    
                    
                 
                    
   }
   
     else{

          echo "error sending data";
         }
           $x=$_SESSION["package"];
          $query2= "SELECT  `package_name` FROM `packages_tbl` WHERE `package_id`='$x' ";
         $result = $conn->query($query2);
           if ($result->num_rows > 0) {
               
               while($row = $result->fetch_assoc()) 
                  {
                       $packagename=$row["package_name"] ; 
                       
                  } 
           }
           else {
                echo  $query . "<br>" . $conn->error;
              }
        unset($_SESSION["package"]);
        unset($_SESSION["ticket_id"]);
        
        $_SESSION["package"]=$packagename;
       // $ticketId=uniqid(KOA);
           $ticketId=generateOid();
        $_SESSION["ticket_id"]=$ticketId;
         $y=$_SESSION["package"];
       $z= $_SESSION["workshopName"];
       $m= $_SESSION["firstAcPerson"];
        $n=$_SESSION["secondAcPerson"];
        // echo "after ".($_SESSION["ticket_id"]);
        
        //echo $ticketId;
      
     $query="insert into tickets_tbl(ticket_id,acompany_per_name,relationship,acompany_per_email,acompany_per_phone,name,surname,email,phonenumber,office,kmcR_no,koaMembership_no,address,city,zip_code,state,country,packagename,workshopname,acperson1,acperson2) values ('$ticketId','$Aname','$relationship','$Aemail','$Aphone','$name','$surname','$email','$phonenumber','$office','$kmcR_no','$koaMembership_no','$address','$city','$zip','$state','$country','$y','$z','$m','$n')";
         
            if ($conn->query($query) === TRUE) {
             // echo "New record created successfully";
              // echo $_SESSION["ticket_id"];
               
              // addtocart();
            
              
          } else {
               echo "Error: " . $query . "<br>" . $conn->error;
          }
          
           //echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
           
          
          
         

  /*function addtocart(){
      
          //echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';  
         header("Location:http://koacon2019.com/onlineregistration/ccavenue/dataFrom.php");
         exit();
         return;

  }*/
  
  function generateOid($digits = 4){
    $i = 0; //counter
    $id = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $id .= mt_rand(0, 9);
        $i++;
    }
     $id="KOA201900".$id;
     return $id;
}
echo $pin;
  if(isset($_SESSION["ticket_price"])){
          header("Location:ccavenue/dataFrom.php");
        }


         

          
          $conn->close();
          



?>