<?php include 'database.php'; ?>
<?php
$name=$_POST['name'];
$add=$_POST['add'];
$mob=$_POST['mob'];
$age=$_POST['age'];
$email=$_POST['email'];
$date=$_POST['date'];
$time=$_POST['time'];
$gender=$_POST['gender'];
if($time=='1')
{$time1='9 to 10';}
if($time=='2')
{$time1='10 to 2';}
if($time=='3')
{$time1='2 to 4';}
if($gender=='1')
{$gender1='male';}
if($gender=='2')
{$gender1='female';}
if($gender=='3')
{$gender1='other';}

if(mysqli_query($connect,"INSERT INTO online_cons (name,address,gender,mob,email,age,date,time)
		        VALUES ('$name','$add','$gender1','$mob','$email','$age','$date','$time1')"))
{$message = "Booking confirmed";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else{echo"Booking failed";}
header( "Refresh:1; url=http://localhost:8080/doctor-final-master/", true, 303);


 