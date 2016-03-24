<?php
	/*
		author: Belal Khan 
		website: https://www.simplifiedcoding.net
		
		My Database is androiddb 
		you need to change the database name rest the things are default if you are using wamp or xampp server
		You may need to change the host user name or password if you have changed the defaults in your server
		
		http://192.168.1.201/Android/CRUD/dbConnect.php
	*/
	
	//Defining Constants
	define('HOST','us-cdbr-azure-east-a.cloudapp.net');
	define('USER','b397f6ac809d08');
	define('PASS','4131b78e89f4fa9');
	define('DB','test');
	
	//Connecting to Database
	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
	if(mysqli_query($con)){
			echo 'Person Added Successfully';
		}else{
			echo 'Could Not Add Person';
		}x`