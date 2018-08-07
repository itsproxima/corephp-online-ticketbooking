<?php
session_start();
session_destroy();
session_start();


 //print_r($_POST);
//print_r($_SESSION);

include("connectdb.php");
//print_r($_POST);


    if ( isset( $_POST['submit'] ) ) {

                         
                         //$Category=$_POST["membership-category"];
                          $package=$_POST["package"];
                          $checkAccompany=$_POST["checkAccompanyRes"];
                          $noOfperson=$_POST["noOfperson"];
                          $secondApersonname=$_POST["2ndApersonname"];
                          $firtstApersonname=$_POST["1stApersonname"];
                          $checkWorkshop=$_POST["checkWorkshop"];
                          $workshopName=$_POST["workshop"];
                          $twinApersonname=$_POST["twinApersonname"];
                          $tripple_1stApersonname =$_POST["tripple_1stApersonname"];
                          $tripple_2ndApersonname =$_POST["tripple_2ndApersonname"];
                        // $packagetype =$_POST["packagetype"];


         //echo $packagetype;
                   
         }
         else{

          //echo "error sending  data";
         }

         // successfullyArray ( [date] => 06/04/2018 [membership-category] => KOA Members [package-nonres] => KOA Members [package-res] => KOA Members [submit] => Submit )

          $DOfRes=date("Y-m-d H:i:s");
         
          $duration1="2018-08-31 00:00:00";
          $duration2="2018-12-31 00:00:00";
          $duration3="2019-01-21 00:00:00";
          $last_date="2019-01-20 00:00:00";


          
          switch($DOfRes){

            case($DOfRes<=$duration1):
                $date="1st-duration";
                break;
            case($DOfRes<=$duration2 && $DOfRes>$duration1):
                $date="2nd-duration";
                break;
            case($DOfRes>$duration2 && $DOfRes<=$duration1):
                $date="3rd-duration";
                break;
            case($DOfRes>$duration3):
                $date="4th-duration";
                break;
              
            case($DOfRes==$last_date):
                $date="last-date";
                break;
              }

   //echo $date;
   //echo $package;
       $query="SELECT price FROM `price_tbl` WHERE (package_id='$package' AND date='$date')";
          
          $result = $conn->query($query);
         
 
           if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) 
                  {
                       $price=$row["price"] ; 
                       //echo $price;  
                  } 
           }

          else {
                echo "Error: " . $query . "<br>" . $conn->error;
              }

       $query2="SELECT price FROM `price_tbl` WHERE (package_id='K08' AND date='$date')";

              $result = $conn->query($query2);
          if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) 
                  {
                       $AcPerPrice=$row["price"] ; 
                       //echo $price;  
                  } 
           }

          else {
                echo "Error: " . $query2 . "<br>" . $conn->error;
              }
          
  $ticketprice=(int)$price;

             if ( isset( $_POST['checkWorkshop'] ) ){

                              $ticketprice=$ticketprice+2000;
                               $_SESSION["workshopName"] =  $workshopName ;
           
                } 
      
      //echo $ticketprice;

        if (empty($checkAccompany)){

          $AcPerPrice=0;

        }
        else{

            if($noOfperson==1){
                  $AcPerPrice=$AcPerPrice;
                   $_SESSION["firstAcPerson"] =  $firtstApersonname ;


                }
                else{

                  $AcPerPrice=$AcPerPrice*2;
                   $_SESSION["firstAcPerson"] =  $firtstApersonname ;
                  $_SESSION["secondAcPerson"] =  $secondApersonname ;

                }

           }
          if($package=="K06"){
               $_SESSION["firstAcPerson"] = $twinApersonname;
              
          }  
        if($package=="K07"){
            
             
             $_SESSION["firstAcPerson"] =  $tripple_1stApersonname ;
             $_SESSION["secondAcPerson"] =  $tripple_2ndApersonname ;
        }
           
   
        

    $finalprice=$ticketprice+$AcPerPrice;
   // echo "ac price".$AcPerPrice;
   // echo "ticket".$ticketprice;
   // echo "finalprice".$finalprice;




         $_SESSION["ticket_price"] = $finalprice ;
    $_SESSION["date"] = $date ;
    $_SESSION["package"] = $package ;

    if(isset($_SESSION["ticket_price"])){
          header("Location:form2.php");
        }
         $conn->close();


?>