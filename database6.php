<?php
   $con = mysqli_connect("localhost", "root", "", "fanclub") or die("MySQL 접속 실패 !!");

   $Mobile = $_POST["Mobile"];
   $sql = "SELECT AES_DECRYPT(UNHEX(Mobile),'cybersecurity') as mobile,Name,EventNum,Album from fanclub.fanclubTBL WHERE Name='".$_POST["Name"]."'";
  

   
   $ret = mysqli_query($con, $sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>회원 정보창</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
  </head>
  <?php   
     $ox=false;
  if($ret) {
      while($row=mysqli_fetch_array($ret)){
         if($row["mobile"]==$Mobile){
      $ox=true;

          ?>
      <div class="jumbotron text-center">
     <h1>회원 정보</h1>
     <p><?php echo $row["Name"]."님의 정보입니다";?></p> 
    </div>
        <div class="container">
         <table class="table">
            <thead>
               <tr>
                  <th>이름</th>
                  <th>전화번호</th>
                  <th>앨범</th>
                  <th>이벤트 순번</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <th><?php echo $row["Name"];?></th>
                  <th><?php echo $row["mobile"];?></th>
                  <th><?php echo $row["Album"];?></th>
                  <?php if ($row["EventNum"]!=0){?>
                  <th><?php echo $row["EventNum"];}?></th>
                  <?php if ($row["EventNum"]==0){?>
                  <th>이벤트 참여 불가</th>
               </tr>            
            </tbody>
            
            <?php
                  }} else{
               ?>
            <p>회원님의 정보가 올바르지 않습니다</p>
            <?php
                     }
      }
   } if($ox==false){
      header("Content-Type: text/html; charset=UTF-8");
               echo "<script> alert('이름 및 전화번호가 잘못되었습니다.');";
               echo "window.location.replace('manager.php');</script>";
               exit;
   
      ?>
      <?php
       }
   
   mysqli_close($con);
?>
   
         </table>
         <button style="color:#FFFEFF; margin-top:20px; background-color:#AAAAAA "type="button" class="btn btn" onclick="location.href='button.php'">매니저창 이동</button>
      </div>
      </html>