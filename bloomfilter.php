<?php
$con=mysqli_connect("localhost","root","","fanclub")or die("MYSQL 접속 실패!!");

$sql="
select CardNum, Name from fanclub.fanclubtbl";
$ret = mysqli_query($con, $sql);
$j=1;
if($ret) {
      while($row=mysqli_fetch_array($ret)){
		  
		echo $j;
		
		$j=$j+1;
		$sibal=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
		
		echo $row["Name"];
		
		$nuumber=substr($row["CardNum"],0,2);
	 $num=haha($nuumber);
	  $sibal[$num]=1;
	  
	  if(substr($row["CardNum"],2,1)=='1'){
	  
	  $nuumber=substr($row["CardNum"],2,2);
	 $num=haha($nuumber);
	  $sibal[$num]=1;
	  }
	  else{
		  $nuumber=substr($row["CardNum"],3,1);
	 $num=haha($nuumber);
	  $sibal[$num]=1;
	  }
	  
	  $nuumber=substr($row["CardNum"],4,2);
	 $num=haha($nuumber);
	  $sibal[$num]=1;
	  
	  
	  $nuumber=substr($row["CardNum"],6,2);
	 $num=haha($nuumber);
	  $sibal[$num]=1;
	  
	
	  
	
	  
	  for($i=0;$i<16;$i++)
		  echo $sibal[$i];
	  echo "<br>";
	  }
	  }
	  
	  function haha($number){
	 $token=hash('sha512',$number);
	 $token=(string)$token;
	 $result=hexdec(substr($token,0,1));
	 return (string)$result;
	 }
	 
	  mysqli_close($con);
 
	?>