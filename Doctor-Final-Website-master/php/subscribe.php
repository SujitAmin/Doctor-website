<?php include 'database.php'; ?>
<?php
$name=$_POST['name'];
$email=$_POST['email'];

if(mysqli_query($connect,"INSERT INTO subscription (name,email)
		        VALUES ('$name','$email')"))

 {$message = "Thank You for subscribing";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else{echo"Please re-enter details";}

header( "Refresh:1; url=http://localhost:8080/doctor-final-master/", true, 303);

 