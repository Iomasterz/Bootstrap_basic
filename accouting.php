<?php
require_once "Employee.php";
class Accounting extends Employee{
    function __construct($name,$salary ){
        parent::__construct($name,"ฝ่ายบัญชี",$salary);
        echo "ทำงานที่ = " .$this->companyName. "<br>";
    }
    function description(){
        echo "บทบาท : คำนวนบัญชีบริษัท<br>";
    }
    function getbonus():string{
        return "15%<br><hr>";
    }
}


?>