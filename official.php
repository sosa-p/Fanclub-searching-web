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
            <h4 class="text-center"><strong>어떤 회원을 조회하시겠습니까?</strong></h4>
            <div class="container">
         <div class="radio-inline">

         <center>
         <div class="radio-inline">
            <label style=" margin-top:20px;">
<?php
echo "<br>";
?>
            <input  type="radio" name="radiogroup1" id="Radios1" value="option1" onclick="location.href='official_o.php'">
               공식
            </label>
            </div>
         <div class="radio-inline">
            <label style=" margin-top:20px;">
			
<?php
echo "<br>";
?>
   
               
               <input  type="radio" name="radiogroup1" id="Radios1" value="option2" onclick="location.href='official_x.php'">
               비공식
  
            </label>
  </div></center>
            <form method="post" action="manager_s2.php">
           <div id="main2Left" > 
                  </div>
</div></div>
<center>
    <div id="mainLine" style="clear: both;"></div></center>
   <div class ="container">
    <div class="row">
    <div class="col-sm-4"></div>
   <div class="col-sm-4">
   
   </div></div></div>

 </body>
</html>