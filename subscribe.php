<?php 
//var_dump($_POST);



$b = trim($_POST["email"]);



//if($a != "" OR $b != ""){
	if($b != NULL){
 	 
 	 $email = $_POST["email"];
	
	 
	 // $location = $_POST["location"];

	 $subject ="Subscribe newsletter" . $email;
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "From:" . $email . '<'. $email .'>' ."\r\n";
	
	
	// $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
	// $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
	
	   	$message= "<table border='0' cellpadding='4' cellspacing='4' width='100%'>

	   			  <tr><td style='font-size:1.3em;' colspan='2'><strong>Form Details</strong></td></tr>
	   			   
	                  <tr>
	                   <td align='left' width='35%'><strong>Email :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $email ."</td>
	                 </tr>

	                 
	                 
	               </table>";  
                //    echo $message;
                //    exit();       
				mail("info@cmclancaster.com", $subject, $message, $headers);
				
			//	mail("testgmicro@cmclancaster.com", $subject, $message, $headers);
		// delete the cookie so it cannot sent again by refreshing this page
		setcookie('tntcon','');
		echo "Your enquiry has been sent successfully";
		
	  	//$msg = "Your enquiry has been sent successfully.";
	}
	else{
		echo "Submit fail";
		}
	
?>