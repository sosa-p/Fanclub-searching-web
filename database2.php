<?php
   $con=mysqli_connect("localhost","root","","fanclub")
   or die ("fanclub 접속 실패 !!");
   $sql="
      CREATE TABLE fanclubTBL
      ( 
         UserID char(15) NOT NULL Primary key,
         Password text(512) NOT NULL,
         Name varchar(10) NOT NULL,
         BirthYear int(11) NOT NULL,
         Mobile text(512) NOT NULL,
         CardNum int(12) DEFAULT NULL,
         Album char(1) NOT NULL,
         EventNum int(4) DEFAULT NULL,
         Official varchar(10) NOT NULL,
         B_Index int(4) NOT NULL,
		 bloom varchar(16) not null
      )";
      
   $ret=mysqli_query($con, $sql);
   if($ret)
   {
      echo "fanclubTBL이 성공적으로 생성됨.";
   }
   else
   {
      echo "table 생성 실패!!!"."<br>";
      echo "실패 원인 :".mysqli_error($con);
   }
   mysqli_close($con);
?>