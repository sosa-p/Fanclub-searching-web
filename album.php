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
    width: 1000px;
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
 <div class="jumbotron text-center">
    </div>
    <div class ="container">
    <div class="row">
   <div class="col-sm-4"> </div>
         <div class="col-sm-4">
          <p id="mainLogo"> <span id="loginTitle">앨범 구매 여부 조회</span></p>
<h4 class="text-center"><strong>어떤 회원을 조회하시겠습니까?</strong></h4>
  <?php
echo "<br>";
?>
   <div class="container">
   <div class="btn-group">
   <button style="margin-right:40px" type="button" class="btn btn" onclick="location.href='album_o.php'">이번 앨범을 구매한 회원</button>
<?php
echo "<br><br>";
?>
   <button style="margin-right:40px" type="button" class="btn btn" onclick="location.href='album_x.php'">이번 앨범을 구매하지 않은 회원</button>
            
         </div>
     
   
   

 </body>
</html>
      </div>