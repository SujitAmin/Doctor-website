<?php
$link = mysqli_connect("localhost", "root", '',"contact");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 $password="admin";
$options = [
    'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
    'cost' => 12 
];
$hash = password_hash($password, PASSWORD_DEFAULT, $options);
$sql = "UPDATE login_detail SET password='$hash' WHERE user_name='admin';";
if(mysqli_query($link, $sql)){
 } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
if (password_needs_rehash($hash, PASSWORD_DEFAULT, ['cost' => 12])) {
    $hash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);
$sql = "UPDATE login_detail SET password='$hash' WHERE user_name='admin';";
if(mysqli_query($link, $sql)){
 } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

}
$pass=$_POST['password'];
if (password_verify('$pass', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
?>