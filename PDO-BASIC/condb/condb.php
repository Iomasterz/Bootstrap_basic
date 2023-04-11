<?php

$dsn = "mysql:host=localhost;dbname=bobo";
$username = "root";
$password = "1234";
//เตรียมข้อมูล
$fnameEdit ="โอและโบว์";
$ageEdit =4;
$departmentEdit="banna";
$id=11;

try {
    $obj = new PDO($dsn, $username, $password);
    $sql= "UPDATE employee SET fname=?,age=?,department=? WHERE id=?";
    $stmt=$obj->prepare($sql);
    $stmt->bindParam(1,$fnameEdit);
    $stmt->bindParam(2,$ageEdit);
    $stmt->bindParam(3,$departmentEdit);
    $stmt->bindParam(4,$id);
    $stmt->execute();
    echo "อัพเดทแล้ว";


} catch (PDOException $e) {
    echo $e->getMessage();

}

?>