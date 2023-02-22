<?php
session_start();
$username=$_SESSION['uname'];
echo "welcome $username";

?>
</br>
<a href="logout.php">logout</a>
