<<<<<<< HEAD
<?php
$host = "173.201.186.254";
$dbName = "planorize";
$userName = "caytlin";
$password = "Sherlock321!";
try
{
	$con = new PDO("mysql:host={$host};dbname={$dbName}",$userName, $password);
	#echo "Connection Successful";
}

catch (Exception $e)
{
	echo "Connection Error:". $e -> getMessage();
}
?>