<!-- for connecting to database -->
<?php
//DEV Purpose
$host = 'localhost';
$db = 'attendance-Db';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
//remote
// $host = 'localhost';
// $db = 'id17382732_crud';
// $user = 'id17382732_cryso';
// $pass = '~N[Y2{U7MoxK$-y]';
// $charset = 'utf8mb4';
// $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
	$pdo = new PDO($dsn, $user, $pass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "db errror";
	echo $e->getMessage();
	
	throw new PDOException($e->getMessage());//blocks the whole program	
}
require_once 'crud.php';
$crud=new crud($pdo);	

?>