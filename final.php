<?php
    if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['message'];
		$to='livexcellence1@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Prestige waterford';
		$message="Project_name :".$subject."\n"."Name :".$name."\n"."Phone :".$phone."\n"."email :".$email."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;
		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
		
	}
?>