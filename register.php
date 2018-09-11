
<?php 
	// ************Begin Configure***************
	//Put where you want the email to go
    //ACTUAL
    //$mailto = "brainwaveprograms@rogers.com";
	// FOR TESTING
	$mailto = "a.romero032@gmail.com";
	//Put your subject in here
	$subject = "Information Request";
	//Put where to redirect to after sending the email
	// $redirect = "index.html";
	$redirect = "http://thebrainwaveprograms.com/ThankYou.html";
	// ************End Configure****************


	foreach ($_POST as $param_name => $param_val) {

              $updated = str_replace("_"," ", $param_name);

	      $message .= $updated . ' : ' . $param_val; 
	      $message .= "\n"; 
	}
	#@mail($mailto, $subject, $message)
        echo '<script type="text/javascript">';
	echo 'alert("';
     	echo 'Your message was successfully sent.';
     	echo '");';	
	header('Location: ThankYou.html');        
	echo '</script>';
?>
