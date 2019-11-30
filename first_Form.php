<?php
    if(isset($_POST['submit'])){
		$name=$_POST['firstN'];
		$email=$_POST['firstE'];
		$phone=$_POST['firstP'];
		
		$to='livexcellence1@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Prestege Waterford';
		$message="Project_name :".$subject."\n"."Name :".$name."\n"."Phone :".$phone."\n"."email :".$email."\n";
		$headers="From: ".$email;
		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
			
	}
?>