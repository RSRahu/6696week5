<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สร้างform bootstrap</title>
        <!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">


<style>
    body{
        font-family: "Kanit", serif;
  font-weight: 600;
  font-style: normal;
  margin-left: 100px;
  margin-right: 100px;
  margin-top: 100px;
  margin-bottom: 100px;
    }

</style>
</head>
<body>
    <h1>โปรแกรมคำนวณ และ เงื่อนไข</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2">คะแนนกลางภาค</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputEmail3" name="score1">
    </div>
    <label for="inputEmail3" class="col-sm-2">คะแนน</label>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2">คะแนนปลายภาค</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputPassword3" name="score2">
    </div>
    <label for="inputEmail3" class="col-sm-2">คะแนน</label>
  </div>
  <button type="submit" class="btn btn-primary">คำนวณคะแนนรวม</button>
  <button type="reset" class="btn btn-danger">ยกเลิก</button>
</form>

<!-- php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $s1 = $_POST["score1"];
    $s2 = $_POST["score2"];
    $sum =$s1+$s2;
    echo"<br><br> <h3>คุณได้รวมคะแนนเท่ากับ".$sum."</h3> <br><br>";
    if ($sum >= 80) {
        echo "<h1>คุณได้เกรดA</h1> <br>";
    } 
        elseif ($sum >= 70) {
            echo "<h1>คุณได้เกรดB</h1> <br>";
            }
                elseif ($sum >= 60) {
                    echo "<h1>คุณได้เกรดC</h1> <br>";
            } elseif ($sum >= 50) {
                echo "<h1>คุณได้เกรดD</h1> <br>";
            } 
            else {
        echo "<h1>เสียใจด้วยคุณติดE</h1> <br>";
    }
    
    echo"<div class='alert alert-info'>
  <strong>คำนวณเสร็จแล้ว! </strong>ผลคะแนนที่ได้ดังนี้
</div>";
}
?>

</body>
<!-- js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>