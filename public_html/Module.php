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

<!DOCTYPE html>
<html>
<head>
  <title>White Castle</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="ModuleCss.css">
</head>
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
      <h4>Your Modules are displayed below</h2>
      
<?php
        echo '<table id = "table" align="left"
                cellspacing="5" cellpadding="8">
                <tr>
                <th align="left"><b>Code</b></th>
                <th align="left"><b>Title</b></th>
                <th align="left"><b>Marks</b></th>
                </tr>';

        session_start();
        $StudentID = $_SESSION['StudentID'];
        $sql = "SELECT * FROM StudentModule WHERE StudentID = '$StudentID'";
        $result =  mysqli_query($conn, $sql);
        
        while($row = mysqli_fetch_array($result)){
                $ModuleID = $row['ModuleID'];
                
                $sql2 = "SELECT * FROM Modules WHERE ModuleID = '$ModuleID'";
                $result2 = mysqli_query($conn,$sql2);
                $marks = $row['Marks'];
                while($row = mysqli_fetch_array($result2)){
        
                  echo '<tr>
                        <td>' .$row['ModuleID'] . '</td> 
                        <td>' .$row['ModuleName'] . '</td> 
                        <td>' .$marks . '</td> 
                        </tr>';
                        }
                      
               }

              session_close();
                        
?>   
    </div>
</div>

</body>
</html>
