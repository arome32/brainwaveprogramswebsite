
<?php 
	// ************Begin Configure***************
	//Put where you want the email to go
	$mailto = "a.romero032@gmail.com";
	//Put your subject in here
	$subject = "Information Request";
	//Put where to redirect to after sending the email
	$redirect = "index.html";
	$redirect = "contact_us.html";
	// ************End Configure****************


	foreach ($_POST as $param_name => $param_val) {

              $updated = str_replace("_"," ", $param_name);

	      $message .= $updated . ' : ' . $param_val; 
	      $message .= "\n"; 
	}
	
	if (@mail($mailto, $subject, $message)) {
	  
	  header("Location: $redirect");
	} else {
	  // This echo's the error message if the email did not send.  
	  // You could change  the text in between the <p> tags.
	  header("Location: $redirect");
}
?>
