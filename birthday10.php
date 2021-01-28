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
  #leftText{                        
    width: 150px;
    height: 40px;
      
    display: flex;                  
    justify-content: left;         
    align-items: center;            
    font-size: 15px;                
    font-weight: bold;
   
    
  }
  #inputText{                      
    width: 140px;
    height: 40px;
    
    display: flex;
    font-size: 15px;
    justify-content: left;
    vertical-align: middle;
   
  }
  

  #mainLogo{                        

      display: flex;
      align-items: center;
      justify-content: center;
     
  }
  #main2Left{                       
      padding-left: 100px;
      width: 280px;
      height: 100%;
     
      display: inline-block;
      vertical-align:middle;
    
  }
  #main2Right{                      
      width: 100px;
      height: 30px;
     
      display: flex;
    

  }
  #loginTitle{
    color: #F5A9BC; 
    font-size: 35px;
    font-weight: bold;
   
  }
  #button{                            
    width: 50px;
    height: 30px;
    text-align: center;
    background-color: #F5A9BC;
    color: white;
    border: 1px solid #F5a9Bc;
   
  }
  #button:hover{                      
    background-color: white;
    color: #F5A9BC;
    cursor: pointer;
   
  }
 
 
  #mainLine{
    width: 7000px;
    height: 50px;
    border-bottom: 1px solid #F5a9Bc;
   
   
  }
  #background{
     width:700px;
     height:400px;
     background-color:#F2F2F2
  }
  
  #center{
  position:absolute;
  top:50%;
  left:50%;
  width:100px;
  height:100px;
 
  margin:-50px 0 0 -50px;
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
		<p id="mainLogo"> <span id="loginTitle"> 10월 생일 정보창 </span></p>
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
				</thead>
<tbody>
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
			if ($array2[5]=="0" and $array2[4]=="1"){
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
	 
	 mysqli_close($con);
	?>
			
	<tbody></BODY>
</HTML>


