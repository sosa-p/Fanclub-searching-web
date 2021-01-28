
<!doctype html>
<html lang="en">
  <head>
    <title>생일</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
  </head>
  <body>
    <div class="jumbotron text-center">
 
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
	
	 <style>


  #mainLogo{                        

      display: flex;
      align-items: center;
      justify-content: center;
     
  }

  #loginTitle{
    color: #F5A9BC; 
    font-size: 35px;
    font-weight: bold;
   
  }

  </style>
  </body>
</html>


<?php
	$con = mysqli_connect("localhost", "root", "", "fanclub") or die("MySQL 접속 실패 !!");
	$sql = "SELECT * FROM fanclubTBL";
	$ret = mysqli_query($con, $sql);
?>
<HTML>
	<HEAD>
		<p id="mainLogo"> <span id="loginTitle"> 6월 생일 정보창 </span></p>
	</HEAD>
	<BODY>
	<div class="container">
			<table class="table">
				<thead>
					<tr>
						<th>이름</th>
						<th>카드번호</th>
						<th>생년월일</th>
						
					</tr>
				</thead><tbody>
		<?php
			
						
	if($ret) {
      while($row=mysqli_fetch_array($ret))
	  {
		$str=$row["bloom"];
		$array1=str_split($str);
		$str2=(string)$row["BirthYear"];
		$array2=str_split($str2);
		if($array1[3]=="1" )
		{
			if ($array2[5]=="6" and $array2[4]=="0"){
			?>
				
				
					<tr>
						<td><?php echo $row["Name"];?></td>
						<td><?php echo $row["CardNum"];?></td>
						<td><?php echo $row["BirthYear"];?></td>
				
					</tr>				
				
				
				<?php
			}
		}
	}
}
?>
	 
	 </tbody>
				
				</div>
				
	</table>

	<div>
	<p style="color:#000000; font-size:large "id="mainLogo">6월 생일자 축하드립니다~!</p>
				<p style="color:#000000; font-size:large " id="mainLogo">이번 생일 특전으로 포토카드를 드립니다.</p></div>
				<div style="text-align:center"><img  src="shj.jpg" ></div>
	<?php
	 mysqli_close($con);
	?>
			</tbody>
	</BODY>
</HTML>