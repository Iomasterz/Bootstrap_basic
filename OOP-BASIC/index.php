<?php
require_once "employee.php";

$emp1 = new Employee("โอ","ประธานบริษัท",50000);
$emp2 = new Employee("บัส","สตีมเมอร์",30000);
$emp3 = new Employee("กัส","กราฟฟิก",18000);
showEmployee($emp1);
showEmployee($emp2);
showEmployee($emp3);

function showEmployee(Employee $obj){
    echo "-----ข้อมูลพนักงาน-----<br>";
    echo "<hr>";
    echo "ชื่อ = ".$obj->name."<br>";
    echo "แผนก / ตำแหน่ง = ".$obj->department."<br>";
    echo "เงินเดือน = ".$obj->salary."<br>";
}
?>