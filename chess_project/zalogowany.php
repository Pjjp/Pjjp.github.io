<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
if(isset($_SESSION['blad'])) unset($_SESSION['blad']);
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>zalogowany</title>
</head>

<body>
	
	Jesteś zalogowany!<br /><br />
	
	<a href="index.php">strona główna!</a>
	<br /><br />

</body>
</html>


