<?php

    $servername = "mysql.cs.nott.ac.uk";
    $dbusername = "eaxac3_sheep";
    $dbpassword = "ERWOSJ";
    $dbname = "eaxac3_sheep";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
 
    if (isset($_POST['name']) and isset($_POST['typeName']) ) {
		$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
		$typeName = filter_var(trim($_POST['typeName']), FILTER_SANITIZE_STRING);

		$sql = "select name from Sheep where name = $name";
		$result = $conn -> query($sql);
		
		}
	
?>

<!DOCTYPE html>

<html>
<head>
    <title>Sheep Database</title>
</head>
<body>
    <table>
        <tr>
            <th>SheepName</th>
            <th>TypeName</th>
        </tr>
        
        <tr>
            <form action="Question5.php" method="post">
                <td><input type="text" name="name"</td>
                <td><input type="text" name="typeName"</td>
                <td><input type="button" value="submit"</td>
            </form>
        </tr>
        
    </table>

</body>
</html>

