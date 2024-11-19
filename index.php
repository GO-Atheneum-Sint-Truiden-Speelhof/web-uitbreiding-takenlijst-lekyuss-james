<!doctype html>
<html lang=nl>

<?php 
    include("includes/head.php");
    include("scripts/function.php");
?>

<body>
<?php
if(isset($_POST['username']) && !empty($_POST['username'])){
		login();
	} else {
?>
    <h1>Login</h1>
    <form action="index.php" method="POST">
        <label for="username">Username:</label>
        <input name="username" id="username" type="text">
        <label for="pwd">Passwoord:</label>
        <input name="pwd" id="pwd" type="password">
        <button type="submit">Login</button>
    </form>
<?php } ?>
</body>
</html>