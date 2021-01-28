<?php
   $con = mysqli_connect("localhost", "root", "", "fanclub") or die("MySQL 접속 실패 !!");

   $password = $_POST["PASSWORD"];
   $sql = "SELECT * FROM fanclubTBL";

   $ret = mysqli_query($con, $sql);
   
   ?>
   <!doctype html>
<html lang="en">
  <head>
    <title>회원 조회창</title>
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
         $token = hash('sha512',"$password");
         
         if($_POST["ID"]==$row['UserID'] and $row["Password"]==$token){
            if($row["Official"]=='매니저')
            {
                 header("Location: button.php");
            }
               if($row["Official"]=='공식' or $row["Official"]=='비공식')
            {   
         $ox=true;
         ?>
   <div class="jumbotron text-center">
     <h1>회원 정보</h1>
     <p><?php echo $row["Name"]."님 안녕하세요";?></p> 
     </div>
        <div class="container">
         <table class="table">
            <thead>
               <tr>
                  <th>이름</th>
                  <th>생년월일</th>
                  <th>공식/비공식</th>
                  <th>앨범 유무</th>
                  <th>카드번호</th>
               </tr>
            </thead>
            <div class="alert alert-default">
            
            </div>
            <tbody>
               <tr>
               <th><?php echo $row["Name"];?></th>
               <th><?php echo $row["BirthYear"];?></th>
               <th><?php echo $row["Official"];?></th>
               <th><?php echo $row["Album"];?></th>
               <th><?php echo $row["CardNum"];?></th>
               </tr>            
            </tbody>
            </table>
            <strong><< 이벤트 참여 가능 여부 >></strong>
            <?php
            if($row["B_Index"]!=33)
               {
                  if($row["Album"]=="X")
                  {
            ?>
            <div class="alert alert-danger">
            <strong>앨범을 구입하지 않으면 이벤트에 참여하실 수 없습니다.</strong>
            </div>
            <?php
            }
                  else 
                  {
                     ?>
            <div class="alert alert-success">
            <strong>이벤트 참여 가능</strong>
            <strong><?php echo "이벤트 번호는 ".$row["EventNum"]."번 입니다."; ?></strong>
            </div>
            <?php
            }
               }
               else
               {
                  ?>
                  <div class="alert alert-danger">
            <strong>15세 미만은 이벤트에 참여하실 수 없습니다</strong>
			
            </div>
            <?php
            }
            }            
         }

            ?>
            
            <?php
      }
       
   } if($ox==false){
      header("Content-Type: text/html; charset=UTF-8");
               echo "<script> alert('아이디 및 비밀번호가 잘못되었습니다.');";
               echo "window.location.replace('database4.php');</script>";
               exit;
      ?>
      
   <?php
   }
   
   mysqli_close($con);
?>
<button style="color:#FFFEFF; margin-top:0px; background-color:#AAAAAA "type="button" class="btn btn" onclick="location.href='database4.php'">로그아웃</button>
   </div>
   </html>