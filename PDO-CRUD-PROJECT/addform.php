<?php
$title="แบบฟอร์มกรอกข้อมูลพนักงาน";
require_once "layout/header.php";

?>


<body>
    <h1 class="text-center"><?php echo "แบบฟอร์มข้อมูลพนักงาน";?></h1>
    <form method="POST" action="showData.php">
        <div class="form-group">
            <label for="fname">ชื่อ</label>
            <input type="text" name="fname" class="form-control">
        </div>
        <div class="form-group">
            <label for="lname">นามสกุล</label>
            <input type="text" name="lname" class="form-control">
        </div>
        <div class="form-group">
            <label for="salary">เงินเดือน</label>
            <input type="text" name="salary" class="form-control">
        </div>
        <div class="form-group">
            <label for="department">แผนก</label>
            <select name="department" class="form-control">
                <option value="ฝ่ายไอที">ฝ่ายไอที</option>
                <option value="บัญชี">บัญชี</option>
                <option value="ฝ่ายการตลาด">ฝ่ายการตลาด</option>
        </div>
        <input type="submit" name="บันทึก" class="btn btn-primary">
    </form>


</div>
</body>
</html>