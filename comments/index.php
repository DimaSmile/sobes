<?php include 'includes/db.php'; ?>

<form action="handle.php" method="POST">
	<input type="text" name="login" placeholder="Ваш логин">
	<input type="text" name="password" placeholder="Ваш пароль">
	<hr>
	<input type="submit" value="Отправить">
</form>