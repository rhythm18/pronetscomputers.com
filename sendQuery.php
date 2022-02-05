<?php  
if((isset($_POST["name"]) && !empty($_POST["name"])) && (!empty($_POST['email']) && isset($_POST["email"])))
{
	  $name=$_POST["name"];
	  $email=$_POST["email"];
	  $msg=$_POST["message"];
	  //$mobile=$_POST["mobile"];
	  $subject = $_POST['subject'];
	 // $gender=$_POST["gender"];
	  
	  $message = $name.'<br>';
	  //$message .= $gender.'<br/>';
	  $message .= $email.'<br>';
	  $message .= $msg.'<br/>';
	  
	  $to_email = 'arya_sanju@hotmail.com';

	  $from_email=$email;
	 /* $dt=date("Y-m-d");
	  $con = mysqli_connect("localhost","friend_user","Modi@2018","friend_db");
	  $sql="INSERT INTO users(name, email, mobile, gender,status, reg_date) values
	        ('$name','$email','$mobile','$gender','0','$dt')";
	  mysqli_query($con,$sql);	*/	
	  
	  $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	  $headers .= 'From: '.$email;
	  mail($to_email,$subject,$message,$headers);

	  echo "s";

	 // echo $message."- from-".$from_email."-to-".$to_email;
	
}

else{
	
	echo "n";
}
	
?>