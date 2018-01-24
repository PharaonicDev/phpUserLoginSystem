<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylesheets/normalize.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css">
	<script src="javascripts/html5shiv.js"></script>
</head>
<body>
  <header>
  	  <nav>
    	<div class="main-wrapper">
    		<ul>
    			<li><a href="index.php">Home</li>
    		</ul><!--main-wrapper-->
    	</div>
    	<div class="nav-login">
            <?php
 if (isset($_SESSION['u_id'])) {
     echo "<form action='includes/login.inc.php' method='POST'>
                <button type='submit' name='submit'> LogOut </button>
            </form>" ;

 }else {
    echo "<form action='includes/login.inc.php' method='POST'>
                <button type='submit' name='submit'>LogOut</button>
            </form>
            <form action='includes/login.inc.php' method='POST'>
                <input type='text' name='uid' placeholder='Username/e-mail'>
                <input type='password' name='pwd' placeholder='password'>
                <button type='submit' name='submit'>Login</button>
            </form>
            <a href='signup.php' class='signup'>Sign Up</a>";
         }

            ?>
            
    	</div>
    </nav>
  </header>