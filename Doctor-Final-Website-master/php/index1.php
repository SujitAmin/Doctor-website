<<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <!-- Bootstrap -->
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

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
  <body>
    <?php

    session_start(); //gets session id from cookies, or prepa

    if (session_id() == '' || !isset($_SESSION['login'])) { //if sid exists and login for sid exists


header( "Refresh:0; url=http://localhost:8080/doctor-final-master/", true, 303);
?>
    <?php } else {?>
    <nav>
                <li class="logo" style="background-color:#ADD8E6;">Dr. Sudha's Homeopathy</li>
                <a class="bars drop-target" onclick="showMenu();">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </a>
                <ul class="mobile-nav">
                    <li class="nav-link"><a href="../faq.html">Edit FAQ page</a></li>
                    <li class="nav-link"><a href="selectall.php">See the Online Consultation list</a></li>
                    <li class="nav-link"><a href="logout.php">Logout</a></li>
                </ul>
                <ul class="big-nav">
                    <li class="nav-link"><a href="../faq.html">Edit FAQ page</a></li>
                    <li class="nav-link"><a href="selectall.php">See the Online Consultation list</a></li>
                    <li class="nav-link"><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
            <video poster="../img/Clouds_Fly_By.jpg" playsinline autoplay muted loop>
          <source src="../img/Clouds_Fly_By.webm" type="video/webm"/>
          <source src="../img/Clouds_Fly_By.mp4" type="video/mp4"/>
          <source src="../img/Clouds_Fly_By.ogg" type="video/ogg"/>
      </video>
    <a href="/logout.php">Logout</a>
    <a href="/selectall.php">See the Online Consultation list</a>
    <a href="../faq.html">Edit FAQ page</a>
    <div class="section group" style="margin-top: 64px;">
        <div class="col span_3_of_3"><h1><center>Welcome to the dasboard</center></h1></div>
    </div>
    <div class="section group ">
      <div class="col span_3_of_3">
        <h2><center>Select a task</center></h2>
      </div>

    </div>
    <div class="section group card" style="margin:auto;width:50%;">
      <div class="col span_3_of_3">
  <center>      <ul>
          <li class="nav-link"><a href="../faq.html">Edit FAQ page</a></li>
          <li class="nav-link"><a href="selectall.php">See the Online Consultation list</a></li>
          <li class="nav-link"><a href="logout.php">Logout</a></li></center>
        </ul>
      </div>
    </div>
  </body>
</html>


    <?php    }?>
