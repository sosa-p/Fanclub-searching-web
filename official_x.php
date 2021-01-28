<?php
			$con = mysqli_connect("localhost", "root", "", "fanclub") or die("MySQL 접속 실패 !!");
			$sql = "SELECT * FROM fanclubTBL WHERE Official='비공식'";
			$ret = mysqli_query($con, $sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>비공식 회원 정보창</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
  </head> 
  <div class="jumbotron text-center">
	  <h1>비공식 회원의 리스트입니다. </h1> 
    </div>
	<div class="container">
			<table class="table">
				<thead>
					<tr>
						<th>이름</th>
						<th>카드번호</th>
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
					</tr>				
				</tbody>
				<?php
				} 
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