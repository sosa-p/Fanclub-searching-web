
<!doctype html>
<html lang="en">
  <head>
    <title>팬클럽</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
  </head>
  <body>
    <div class="jumbotron text-center">
     <h1>팬클럽 페이지</h1>
     <p></p> 
     </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>
<html>
      <div class="container">
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
               </ol>

            <div class="carousel-inner">
               <div class="item active">
                  <img src="kyukyu.png" alt="Los Angeles">
                  <div class="carousel-caption">
                     <h3>팬클럽 공지</h3>
                     <p>공개방송에는 본인을 확인 후 입장하실 수 있습니다.</p> 
					 <p>15세 이상의 앨범을 소유한 팬만 입장 가능합니다.</p>
                  </div>
               </div>
               <div class="item"><img src="yuyu.png" alt="Chicago">
					
			   </div>
               <div class="item"><img src="hwan.jpg" alt="New York"></div
            </div>      
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left"></span>
               <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right"></span>
               <span class="sr-only">Next</span>
            </a>
         </div>
      </div>

</html>

<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
 
  <title>로그인</title>
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
    width: 180px;
    height: 40px;
    
    display: flex;
    font-size: 20px;
    justify-content: left;
    vertical-align: middle;
   
  }
  

  #mainLogo{                        
      width: 550px;
      height: 100px;
     
      display: flex;
      align-items: center;
      justify-content: center;
     
  }
  #main2Left{                       
      padding-left: 100px;
      width: 400px;
      height: 100%;
     
      display: inline-block;
      vertical-align:middle;
    
  }
  #main2Right{                      
      width: 200px;
      height: 140px;
     
      display: flex;
    

  }
  #loginTitle{
    color: #F5A9BC; 
    font-size: 35px;
    font-weight: bold;
   
  }
  #button{      
    width: 80px;
    height: 80px;
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
    width: 700px;
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
 <div class="container">
 <div class="col-sm-3"></div>
 <div class="col-sm-8">
   <div class="btn-group">
 
     <div id="mainLogo"> <span id="loginTitle">팬클럽 로그인</span> </div>
  
   <div style="text-align: center;">

     <div id="main2Left" style="float: left;" >
            <!-- 로그인 입력 부분-->
         <form method="post"  action="database5.php">
            <div style="float:left" id="leftText">
                <span>아이디  </span>
            </div>
            <div style="float: left;" id="inputText">
                <input type="text" name="ID"/>
            </div>
            <div style="clear: both; float: left; height: 5px;"></div>
         
            <div style="clear: both;float: left;" id="leftText">
                <span>비밀번호  </span>
            </div>
            <div style="float: left;" id="inputText">
                <input type="PASSWORD" name="PASSWORD"/>
            </div>
            <div style="clear: both;float: left;" id="leftText">
            
            </div>
           
    </div>
<div style = "padding :55px 0px 0px 0px;">
     <div id="main2Right" style="float:left;"> <input id="button" type="submit" value="로그인"onclick="location.href='database5.php'"/> 
     </div> </form>
    
    <div>
     <div id="mainLine" style="clear: both;"></div>
    </div>
   </div>
   </div>
   </div>
   <div class="col-sm-3"></div>
   
   
   

 </body>
</html>