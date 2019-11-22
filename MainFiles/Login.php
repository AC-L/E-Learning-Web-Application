<?php
if(isset($_POST['Username']) and isset($_POST['Password']))
	{
			$username = filter_var(trim($_POST['Username']));
			$password = ($_POST['Password']);
			$servername = "mysql.cs.nott.ac.uk";
			$dbusername = "eaxac3";
			$dbpassword = "databasepassword1";
			$dbname = "eaxac3";
			// Create connection
		$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		//echo "Connected successfully";
		$sql = "SELECT * from Student where Username = '$username' and Password = '$password'"; 
		if ($result = $conn->query($sql))
		{
			if($result ->num_rows > 0) {
					echo "Succesful Login";
					$row = $result->fetch_assoc();
					$StudentID = $row["StudentID"];
					echo $StudentID;
				  session_start();
					$_SESSION["StudentID"] = $StudentID;
					header("location: MainPage.php");
					}	
			else { 
				echo "Wrong Password or Username";  
			}
		}
		else {
			die("Query failed: " . $conn->error);
		}
		$conn->close();
	}
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
  <link rel="stylesheet" type="text/css" href="LoginCss.css">
</head>

<body>
<div class="title">
  <h1>White Castle</h1>
  <h2>Students please login</h2>
</div>

<form action="Login.php" method="POST">
  <div class="container"style="background-color:#f1f1f1">
    <label for="Username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="Username" required>

    <label for="Password"><b>Password</b></label>
    <input type="Password" placeholder="Enter Password" name="Password" required>
        
    <button type="Submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
		<span class="password"> <a href="#">Forgot password?</a></span>
  </div>
    
</form>

</body>
</html>
