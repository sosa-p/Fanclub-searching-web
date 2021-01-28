<?php
			$con = mysqli_connect("localhost", "root", "", "fanclub") or die("MySQL 접속 실패 !!");
			$sql = "SELECT * FROM fanclubTBL WHERE Official='공식'";
			$ret = mysqli_query($con, $sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>공식 회원 정보창</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
  </head> 
  <div class="jumbotron text-center">
	  <h1>공식 회원의 리스트입니다. </h1> 
    </div>
	<div class="container">
			<table class="table">
				<thead>
					<tr>
						<th>이름</th>
						<th>카드번호</th>
						<th>기수</th>
					</tr>
				</thead>
	<?php   
  if($ret) {
      while($row=mysqli_fetch_array($ret)){
			 ?>
				<tbody>
					<tr>
						<th><?php echo $row["Name"];?></th>
						<th><?php echo $row["CardNum"];?></th>
						<th><?php
						$str=$row["bloom"];
					$array1=str_split($str);
					$str2=(string)$row["CardNum"];
					$array2=str_split($str2);  //밑에 array2체크 안하면 false positive때문에 값이 이상하게 나와유 이렇게 체크할거면 블룸필터 왜쓰는지 모르겠지만 ㅎ,,,
					if($array1[7]=="1" and $array2[5]=="1")
					{
						echo "1기";
					}
					if($array1[5]=="1" and $array2[5]=="2")
					{
						echo "2기";
					}
					if($array1[4]=="1" and $array2[5]=="3")
					{
						echo "3기";
					}
					if($array1[5]=="1" and $array2[5]=="4")
					{
						echo "4기";
					}
					
					
					
		}
						
						
						?>
						</th>
					</tr>				
				</tbody>
				<?php
				} 
      
    
	else{
	   ?>
	   <p>결과 실패</p>
	   <?php
	    }
		 mysqli_close($con);
	?>
			</table>
		</div>
		</html>