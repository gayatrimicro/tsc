<?php 
//var_dump($_POST);


$a = trim($_POST["name"]);
$b = trim($_POST["email"]);
$c = trim($_POST["phone"]);
$d = trim($_POST["message"]);


//if($a != "" OR $b != ""){
	if($a != NULL AND $b != NULL AND $c != NULL AND $d != NULL ){
 	 $name = $_POST["name"];
 	 $email = $_POST["email"];
	 $phone = $_POST["phone"];
	 $address = $_POST["address"];
	 $message2 = $_POST["message"];
	 
	 // $location = $_POST["location"];

	 $subject ="Request an appointment" . $name;
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "From:" . $name . '<'. $email .'>' ."\r\n";
	
	
	// $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
	// $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
	
	   	$message= "<table border='0' cellpadding='4' cellspacing='4' width='100%'>

	   			  <tr><td style='font-size:1.3em;' colspan='2'><strong>Form Details</strong></td></tr>
	   			   <tr>
	                   <td align='left' width='35%'><strong>Name :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $name ."</td>
	                 </tr>

	                  <tr>
	                   <td align='left' width='35%'><strong>Email :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $email ."</td>
	                 </tr>

	                 <tr>
	                   <td align='left' width='35%'><strong>Phone :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $phone ."</td>
					 </tr>
					 <tr>
	                   <td align='left' width='35%'><strong>Address :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $address ."</td>
	                 </tr>
	   			  	<tr>
	                   <td align='left' width='35%'><strong>Message :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $message2 ."</td>
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