<?php
$title="แบบฟอร์มแก้ไขข้อมูลพนักงาน";
require_once "layout/header.php";
require_once "db/connect.php";
$result=$controller->getEmployee();
if(!isset($_GET["id"])){
    header("location:index.php");
}else{
    $id=$_GET["id"];
    
}
$emp=$controller->getEmployeeDetail($id);

?>
<?php
$title="แบบฟอร์มแก้ไขข้อมูลข้อมูลพนักงาน";
require_once "layout/header.php";
require_once "db/connect.php";
$resutl=$controller->getDepartment();

if(isset($_POST["submit"])){
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $salary=$_POST["salary"];
    $department_id=$_POST["department_id"];
    $status=$controller->insert($fname,$lname,$salary,$department_id);
    if($status){
        $message="บันทึกข้อมูลเรียบร้อยแล้ว";
        require_once "layout/success_message.php";
    }else{
        require_once "layout/error_message.php";
    }
}
?>


<body>
    <h1 class="text-center"><?php echo "แบบฟอร์มข้อมูลพนักงาน";?></h1>
    <form method="POST" action="updateEmployee.php">
        <input type="hidden" name="emp_id"value="<?php echo $emp["emp_id"] ?>"/>
        <div class="form-group">
            <label for="fname">ชื่อ</label>
            <input type="text" name="fname" class="form-control"value="<?php echo $emp["fname"] ?>">
        </div>
        <div class="form-group">
            <label for="lname">นามสกุล</label>
            <input type="text" name="lname" class="form-control"value="<?php echo $emp["lname"] ?>">
        </div>
        <div class="form-group">
            <label for="salary">เงินเดือน</label>
            <input type="text" name="salary" class="form-control"value="<?php echo $emp["salary"] ?>">
        </div>
        <div class="form-group">
            <label for="department">แผนก</label>
            <select name="department_id" class="form-control"value="<?php echo $emp["department_id"] ?>">
                <?php while($row=$resutl->fetch(PDO::FETCH_ASSOC)){ ?>
                    <option 
                    <?php if($row["department_id"] == $emp["department_id"]) echo "selected"; ?>
                    value=<?php echo $row["department_id"];?>><?php echo $row["department_name"];?></option>
                    <?php } ?>
                    
                
        </div>
        <input type="submit" name="submit" value="อัพเดท" class="btn btn-primary">
    </form>


</div>
</body>
</html>