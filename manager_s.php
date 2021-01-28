<!doctype html>
<html lang="en">
 <head>
 <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>정보 조회창</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
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
    font-size: 30px;
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
    width: 380px;
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
 </head>
 <body>
 <div class ="container">
	 <div class="row">
	 <div class="col-sm-4"></div>
	<div class="col-sm-4">
    <div id="mainLine" style="clear: both;" ></div>
   </div></div></div>
<br /><br />
	 <div class ="container">
	 <div class="row">
	<div class="col-sm-4"> </div>
			<div class="col-sm-4">
			 <p id="mainLogo"> <span id="loginTitle">정보 조회</span></p>
				<h4 class="text-center"><strong>어떤 정보를 조회하시겠습니까?</strong></h4>
				<p class="text-center"><strong>조회 가능한 정보</strong></p>
				<p class="text-center"> 1. 생일 &nbsp;&nbsp; 2.앨범 &nbsp;&nbsp; 3.공식여부</p>
				<form method="post" action="manager_s2.php">
			  <div id="main2Left" > 
			  <input type:"text" name="항목"/></div>
			 <input id="button" type="submit" value="조회"onclick="location.href='manager_s2.php'"/> 
               
    </div></div></div>

	<div class ="container">
	 <div class="row">
	 <div class="col-sm-4"></div>
	<div class="col-sm-4">
    <div id="mainLine" style="clear: both;"></div>
   </div></div></div>
   <center>
   <button style="color:#FFFEFF;  margin-top:20px; background-color:#AAAAAA "type="button" class="btn btn" onclick="location.href='button.php'">매니저창 이동</button>
	</center>
 </body>
</html>