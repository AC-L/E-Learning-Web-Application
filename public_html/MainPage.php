<!DOCTYPE html>
<html>
<head>
  <title>White Castle</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="MainPageCss.css">
</head>

<?php

//require "connection.php";
$servername = "mysql.cs.nott.ac.uk";
$dbusername = "eaxac3";
$dbpassword = "databasepassword1";
$dbname = "eaxac3";
    // Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    // Check connection
if (mysqli_connect_errno()) echo "Failed to connect to MySQL, error codes: " . mysqli_connect_errno();
  
//echo "Connected successfully";
?> 

<body>
  <div class="container">
    <ul>
  	  <li><a href="MainPage.php">My Details</a></li>
  	  <li><a href="Module.php">My Modules</a></li>
      <li><a href="OtherPage.php">Moodle</a></li>
      <li><a href="OtherPage.php">Email</a></li>
      <li><a href="OtherPage.php">My Awards</a></li>
      <li><a href="OtherPage.php">My Progression</a></li>
      <li><a href="OtherPage.php">My Surveys</a></li>
      <li>

      <form action="Logout.php" method="post">
      
      <Button type="submit" class="logoffbutton">Log off</Button>
      
      </form>
      </li>
    </ul>
  	<div class="main">
  		<h1>White Castle</h1>
      <h4>Welcome to White Castle, UoN's number 1 student interface</h2>
  		<p>White Castle aims to assist you in your everyday needs during your time here at the University of Nottingham.</p>
      <h4>The table below allows you to view and edit your personal details, please ensure these are accurate.</h2>  
      
<?php
        echo '<table id ="table" align="left" cellspacing="5" cellpadding="8">
            <tr>
            <th align="left"><b>StudentID</b></td>
            <th align="left"><b>FirstName</b></td>
            <th align="left"><b>LastName</b></td>
            </tr>';
        
         session_start();
         $StudentID = $_SESSION['StudentID'];
         $sql = "SELECT * FROM Student WHERE StudentID = '$StudentID'";
         $result =  mysqli_query($conn, $sql);
         while($row = mysqli_fetch_array($result)){
                          
          echo '<tr>
                <td>' .$row['StudentID'] . '</td>
                <td align="left">' .$row['FirstName'] . '</td>
                <td align="left">' .$row['LastName'] . '</td>
                <tr align="left">';
         }

         session_close();
?>  

    <button type="button" class="edit">edit</button>
    </div> 
  </div>
   
</body>
</html>


