<?php
require_once "employee.php";
class Sale extends Employee{
    function __construct($name,$salary ){
        parent::__construct($name,"ฝ่ายขาย",$salary);
        echo "ทำงานที่ = " .$this->companyName. "<br>";
    }
    function description(){
        echo "บทบาท : ขายสินค้าของบริษัท<br>";
    }
    function getbonus():string{
        return "20%<br><hr>";
    }
}

?>