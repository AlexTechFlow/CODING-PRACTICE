<?php
  // 1. Create a database connection
  $dbhost = "localhost";
  $dbuser = "kouzaevi_user";
  $dbpass = "WebAssignment7";
  $dbname = "kouzaevi_assignmentdb";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); // database connection variable
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Databases</title>
	</head>
	<body>
		
		<ul>
	
		</ul>
		
	
	</body>
</html>

<?php
  // 5. Close database connection
  mysqli_close($connection);
?>