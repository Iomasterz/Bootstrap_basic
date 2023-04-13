<?php
$host="localhost";
$username="root";
$password="1234";
$db="employeedb";

$dsn="mysql:host=$host;dbname=$db";

try{
    $pdo = new PDO($dsn,$username,$password);
    //echo "เชื่อมต่อฐานข้อมูลสำเร็จ";

}catch(PDOException $e){
    echo $e->getMessage();

}
require_once "db/controller.php";
$controller = new Controller($pdo);
?>