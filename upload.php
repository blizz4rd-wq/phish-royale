<?php
	if (isset($_POST['submit'])) {
		$file = $_FILES['userfile'];
		if (!empty($file)) {
			$filename = $file['name'];
			$fileerror = $file['error'];
			$filetmp = $file['tmp_name'];
			$fileext = explode('.', $filename);
			$filecheck = strtolower(end($fileext));
			$fileextstored = array('odt');
			if (in_array($filecheck, $fileextstored)) {
				$destination = "uploads/" . $filename;
				move_uploaded_file($filetmp, $destination);
			}
		}
	}
	?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>upload</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<form class="form" action="" method="post" enctype="multipart/form-data">
		<h3>Send reports</h3>
		<Label>Upload a file:</Label>
		<input type="file" name="userfile" accept=".odt">
		<br>
		<br>
		<input type="submit" name="submit">
	</form>
</body>

</html>