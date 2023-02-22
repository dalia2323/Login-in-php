<?php
session_start();
if(isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}

?>
<form action="handel.php" method="post">
        <label>email</label>
        <input type="email" name="email">
    </br>
    <label>password</label>
    <input type="password" name="password">
</br>
<input type="submit">
</form>