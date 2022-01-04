<?php 

	/*$post = $_POST;
	var_dump($post);*/
	
	/*echo $_POST;*/
	$get = $_GET;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <title>Ma présentation</title>
</head>

<body>
	<h1>test</h1>
	<p style="color:red;">
<?php
	/*var_dump($get);	*/
	echo $get["fname"];
	echo("<br>");
	echo $get["lname"];
	echo("<br>");
	echo $get["mail"];
	echo("<br>");
	echo("<a href='contact.html'>Cliquez ici pour revenir à la page précédente</a>")
?>

</p>
</body>



</html>

