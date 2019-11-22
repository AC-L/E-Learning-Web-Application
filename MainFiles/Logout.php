<?php
    session_destroy();
?>
<style>
h1 {
  font-size: 60px;
}

.submit {
  width: 200px;
  right: 400px;
  background-color: blue;
  font-size: 24px;
  color: white;
  border-radius: 10px;
  border: 1px solid black;
}

.container {
    position: absolute;
    top: 20%;
    right: 60%
}

.submit:hover {
  opacity: 0.7; 
}

</style>
<!DOCTYPE html>
<html>
<title>White Castle</title>
    <h1>White Castle</h1>
    <form action="Login.php" method="post">
        <div class="container">
            <h2>You have been logged out</h2>
            <button type="submit" class="submit">Back to the login page</button>
        </div>
    </form>
</html>