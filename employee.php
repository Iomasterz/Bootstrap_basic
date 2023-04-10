<?php

class Employee{  // การสร้าง class
    public $name;     
    public $department;
    public $salary;

    protected $companyName = "บริษัทเรียนรู้ไม่ จำกัด";
    //การนิยาม
    function __construct($name, $department, $salary){
        $this->name = $name;
        $this->department = $department;
        $this->salary = $salary;
    }

    function __destruct(){
        //echo "เรียกใช้งาน Destructure<br/>";

    }

    public function setName($name){
        $this->name = $name;
    }
    public function setDepartment($department){
        $this->department = $department;
    }
    public function setSalary($salary){
        $this->salary = $salary;
    }

    public function showEmployee(){
        echo "ชื่อ = " .$this->name."<br/>";
        echo "ชื่อแผนก = " .$this->department."<br/>";
        echo "เงินเดือน = " .$this->salary."<br/>";
        
        //echo "<hr/>";
        
    }

}
?>