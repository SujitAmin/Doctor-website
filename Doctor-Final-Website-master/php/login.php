<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/col.css">
    <link rel="stylesheet" href="../css/3cols.css">
    <link rel="stylesheet" href="../css/4cols.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/main.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-color:green;">
    <?php
    session_start();
    const login = 'admin';
    const password='password';
	$link = mysqli_connect("localhost", "root", '',"contact");
	if($link === false){  	die("ERROR: Could not connect. " . mysqli_connect_error());}
	 $pword="password";
	$options = [
    		'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
    		'cost' => 12
			];
	$hash = password_hash($pword, PASSWORD_DEFAULT, $options);
		$sql = "UPDATE login_detail SET password='$hash' WHERE user_name='admin';";
			if(mysqli_query($link, $sql)){}
         else{echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);}
		if (password_needs_rehash($hash, PASSWORD_DEFAULT, ['cost' => 12]))
    {  $hash = password_hash($pword, PASSWORD_DEFAULT, ['cost' => 12]);
			$sql = "UPDATE login_detail SET password='$hash' WHERE user_name='admin';";
		if(mysqli_query($link, $sql)){}	 else{echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);}
							}

	  if (isset($_POST['login']) && isset($_POST['password'])) //when form submitted
    {if (password_verify($_POST['password'], $hash)) {
      		echo 'Password is valid!';
      if ($_POST['login'] === login && $_POST['password'] === password)
      {
        $_SESSION['login'] = $_POST['login']; //write login to server storage
        header('Location: /doctor-final-master/php/index1.php'); //redirect to main
      }}
      else
      {
        echo "<script>alert('Wrong login or password');</script>";
        echo "<noscript>Wrong login or password</noscript>";
      }
    }

	 else {
    		}



    ?>

    <form method="post" enctype="multipart/form-data" class="card" style="width: 55%; margin: 64px auto;">
    <h1>Admin Login</h1>
      <div class="section group">
        <div class="col span_1_of_3"></div>
        <div class="col span_1_of_3">
          <label>Login</label>
          <input name="login" required>
        </div>
        <div class="col span_1_of_3"></div>
      </div>
      <div class="section group">
        <div class="col span_1_of_3"></div>
        <div class="col span_1_of_3">
          <label>Password</label>
          <input name="password" type="password" required>
        </div>
        <div class="col span_1_of_3"></div>
      </div>
      <div class="section group">
        <div class="col span_1_of_3"></div>
        <div class="col span_1_of_3">
              <input type="submit">
        </div>
        <div class="col span_1_of_3"></div>
      </div>



    </form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
