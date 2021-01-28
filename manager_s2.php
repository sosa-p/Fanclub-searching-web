<HTML>
<?php
   $con = mysqli_connect("localhost", "root", "", "fanclub") or die("MySQL 접속 실패 !!");

   $contents = $_POST["항목"];
   
   if($contents=="생일")
   {
      header("Location: birthday.php");
   }
   else if($contents=="앨범")
   {
      header("Location: album.php");
   }
   else if($contents=="카드번호")
   {
      header("Location: cardnum.php");
   }
   else if($contents=="공식여부")
   {
      header("Location: official.php");
   }
   else 
   {
       header("Content-Type: text/html; charset=UTF-8");
               echo "<script> alert('입력이 잘못되었습니다.');";
               echo "window.location.replace('manager_s.php');</script>";
               exit;
   }
   
   
   mysqli_close($con);
?>
</html>