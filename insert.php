<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BOOKING RUK MAGIC HAIR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1>BOOKING</h1>

    <div style="margin-top:80px;"></div>
                <div class="container marketing" style="width:70%;">
    <div class="container-fluid px-4" style="background-color:#dfdfdf; border: 2px solid back; border-radius:15px;" >
    <form action="sendinfo.php" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSe0PVy53RVU1XTkR8h1KzL525vcIimt6FdOeNpAVG1jmUQDEQ/formResponse"  method="POST">
      <?php
        if (isset($_SESSION['success'])) {
        ?>
        <div class="alert alert-success" role="alert">
         <?php  echo $_SESSION['success']; 
                unset($_SESSION['success'])?>
         </div>
         
         <?php  }?>
         <?php
        if (isset($_SESSION['success'])) {
        ?>
        <div class="alert alert-success" role="alert">
         <?php  echo $_SESSION['error']; 
                unset($_SESSION['error'])?>
         </div>
         
         <?php  }?>




  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text"  name="email" name="entry.886530838" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require >
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">ชื่อผู้จอง</label>
    <input type="text"  name="name" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">เบอร์โทรศัพท์</label>
    <input type="text" name="phone" class="form-control" id="exampleInputPassword1" >
  </div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <label for="name" class="form-label">วันที่จอง
  <input type="date" name="mydate" class="form-control"  name="date" min="<?php echo date('Y-m-d');?>">
  <BR>

   <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" name="time">
    เวลา <input type="time" name="time">
    

</form>
<br>
<br>
  <label for="name" class="form-label">เพศ</label>
  <input type="radio" name="sex"  value="ชาย">ชาย
  <?php echo"              "; ?>
  <input type="radio" name="sex"  value="หญิง">หญิง
  <br>
  <label for="name" class="form-label">รายละเอียด</label>

  <select name="position" class="form-select form-select-sm" aria-label="Small select example">
  <option selected><=ลายละเอียด==></option>
  <option value="ตัดผม">ตัดผม</option>
  <option value="สระไดร์">สระไดร์</option>
  <option value="ดัดผม">ดัดผม</option>
  <option value="ยืดผม">ยืดผม</option>
  <option value="ย้อมผมแฟชั่น">ย้อมผมแฟชั่น</option>
  <option value="ทรีทเมนท์">ทรีทเมนท์</option>
  
</select>

           
  <br/>
  <button   type="submit" name="submit" class="btn btn-primary" >จองคิว</button>

  <button   type="reset" name="submit" class="btn btn-primary" >รีเซ็ท</button>
 
 
<HR>





<!-- <Button onClick={handleClick}>Clear</Button> -->
<div>
    <br>
    <div class="container-fluid px-4">
        <button type="button" class="btn btn-outline-secondary " onclick="history.back()">
            <svg xmlns="http://www.w3.org/2000/svg" width="60 " height="20" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M 12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
            </svg>
        </button>
    </div>
</div>
<BR>
</div ></div >

<br/>

  
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>