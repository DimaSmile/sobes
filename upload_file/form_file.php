<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>форма для отправки файла</title>
</head>
<body>
	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="uploadfile">
		<input type="submit" value="Загрузить">
	</form>
</body>
</html>