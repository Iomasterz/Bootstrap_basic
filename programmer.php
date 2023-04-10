<?php
require_once "Employee.php";
require_once "Office.php";
require_once "Company.php";
class Programmer extends Employee implements Office,Company{
    private $exp;
    function __construct($name,$salary,$exp ){
        $this->exp=$exp;
        parent::__construct($name,"โปรแกรมเมอร์",$salary);
        //echo "ทำงานที่ = " .$this->companyName. "<br>";
    }
    function description(){
        echo "บทบาท : ทำงานเขียนโปรแกรม<br>";
    }
    function getbonus():string{
        return "10%<br><hr>";
    }
    // function skill($args){
    //     echo "ภาษาที่เขียนได้ = ".$args. "<br>";  //ไม่สามารถ ทำ ได้ถ้าใช้ชื่อซ้ำกัน ต้องมีสวิชเคสมาช่วย
    // }
    // function skill($args1,$args2 ){
    //     echo "ภาษาที่เขียนได้ = ".$args1. ",".$args2;
    // }
    function __call($name,$args){
        if($name=="skill"){
            $countargs = count($args);
            switch($countargs){
                case 1:
                    echo "ภาษาที่เขียนได้ = ".$args[0]. "<br>";
                    break;
                case 2:
                    echo "ภาษาที่เขียนได้ = ".$args[0].",".$args[1]."<br>";
                    break;
                case 3:
                    echo "ภาษาที่เขียนได้ = ".$args[0].",".$args[1].",".$args[2]."<br>";
                    break;
                default :
                echo "ไม่มีข้อมูล<br>";
                break;
            }
        }
    }
    function __toString():string{
        return "โปรแกรมเมอร์ชื่อว่า = ".$this->name. " เงินเดือน".$this->salary."<br>";
    }
    public function Showdata(){
        echo "ชื่อ = " .$this->name."<br/>";
        echo "ชื่อแผนก = " .$this->department."<br/>";
        echo "เงินเดือน = " .$this->salary."<br/>";
        echo "ประสบการณ์ทำงาน = " .$this->exp."<br/>";
        //echo "<hr/>";
        
    }
    public function officeName ($name){
        echo "สำนักงาน".$name."<br>";
    }
    public function setWorking ($work){
        echo "รูปแบบการทำงาน".$work."<br>";
    }
    public function setCompanyName($name){

    }
}



?>