<!DOCTYPE html>
<html lang="en">
<body>
<head>
  <title style="color:blue;">Apartment Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
   .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
   .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
	    
	body {
		padding-bottom:50px;   /* Height of the footer */
	}
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
	@font-face {
	font-family: luxury-platinum; 
	src: url('Images/luxury-platinum.otf');
	} 
  </style>
  
</head>
</body>

<?php
include_once('session.php');
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                   
      </button>
      <a class="navbar-brand" href="userLogin.php"><font face="luxury-platinum">Luxe Properties Atlanta</font></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
   
      </ul>
      <ul class="nav navbar-nav navbar-right">
	 
        <li><a href="userLogin.php"> Welcome back, <?php echo $login_firstName;  ?>!</a></li>
		 <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
      </ul>
    </div>
  </div>
</nav>