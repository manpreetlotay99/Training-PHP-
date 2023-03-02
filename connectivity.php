<?php
  
  $servername = 'localhost:3307';
  $username = "root";
  $password = "";
  $databasename = "students";
  
  // CREATE CONNECTION
  $conn = mysqli_connect($servername, $username, $password, $databasename);
  
  // // GET CONNECTION ERRORS
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  //else{
	//  echo "connected";
  //}
  ?>