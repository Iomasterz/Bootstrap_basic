<?php
$title = "หน้าแรกของเว็บไซส์";
require_once "layout/header.php";
require_once "db/connect.php";
require_once "db/controller.php";
$result = $controller->getEmployee();
?>

<h1 class="text-center">
  <?php echo "ข้อมูลพนักงาน"; ?>
</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ชื่อ</th>
      <th scope="col">นามสกุล</th>
      <th scope="col">เงินเดือน</th>
      <th scope="col">แผนก</th>
      <th scope="col">ดำเนินการ</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)) { ?>
      <tr>
        <td>
          <?php echo $row["fname"]; ?>
          </th>
        <td>
          <?php echo $row["lname"]; ?>
          </th>
        <td>
          <?php echo number_format($row["salary"]); ?>
          </th>
        <td>
          <?php echo $row["department_name"]; ?>
          </th>
        <td>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-danger" data-bs-toggle="modal"
            data-bs-target="#exampleModal">ลบข้อมูล</button>
          <a href="editForm.php?id=<?php echo $row["emp_id"]; ?>" class="btn btn-warning">แก้ไขข้อมูล</a>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">ลบข้อมูลพนักงาน</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  แน่ใจแล้วเหรอจ๊ะน้องสาว
                </div>
                <div class="modal-footer">
                  <a href="delete.php?id=<?php echo $row["emp_id"]; ?>" class="btn btn-danger">ยืนยัน</a>

                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                </div>
              </div>
            </div>
          </div>

        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>


</div>
</body>

</html>