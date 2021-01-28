
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
 </head>
 <body>
 <div class="jumbotron text-center">
    </div>
    <div class ="container">
    <div class="row">
   <div class="col-sm-4"> </div>
         <div class="col-sm-4">
          <p id="mainLogo"> <span id="loginTitle">생일 조회</span></p>
           
            <form method="post" action="manager_s2.php">
           <div id="main2Left" > 
  
   


<div class="container">
         <div class="radio">
            <label>
            <input type="radio" name="radiogroup1" id="Radios1" value="option1" onclick="location.href='birthday1.php'">
               1월
            </label>
            </div>
         <div class="radio">
            <label>
               <input type="radio" name="radiogroup1" id="Radios1" value="option2" onclick="location.href='birthday2.php'">
               2월
            </label>
         </div>   
         <div class="radio">
            <label>
               <input type="radio" name="radiogroup1" id="Radios1" value="option3" onclick="location.href='birthday3.php'">
               3월 
            </label>
         </div>   
         <div class="radio">
            <label>
               <input type="radio" name="radiogroup1" id="Radios2" value="option4" onclick="location.href='birthday4.php'">
               4월
            </label>
         </div>            
         <div class="radio">
            <label>
               <input type="radio" name="radiogroup1" id="Radios3" value="option5" onclick="location.href='birthday5.php'">
               5월
            </label>
         </div>
         <div class="radio">
            <label>
               <input type="radio" name="radiogroup1" id="Radios3" value="option6" onclick="location.href='birthday6.php'">
               6월
            </label>
         </div>            
         <div class="radio">
            <label>
               <input type="radio" name="radiogroup1" id="Radios3" value="option7" onclick="location.href='birthday7.php'"onclick="location.href='birthday1.php'">
               7월
            </label>
         </div>
            <div class="radio">
            <label>
               <input type="radio" name="radiogroup1" id="Radios3" value="option8" onclick="location.href='birthday8.php'">
               8월
            </label>
         </div>
         <div class="radio">
            <label>
               <input type="radio" name="radiogroup1" id="Radios3" value="option9" onclick="location.href='birthday9.php'">
               9월
            </label>
         </div>
            <div class="radio">
            <label>
               <input type="radio" name="radiogroup1" id="Radios3" value="option10" onclick="location.href='birthday10.php'">
               10월
            </label>
         </div>
         <div class="radio">
            <label>
               <input type="radio" name="radiogroup1" id="Radios3" value="option11" onclick="location.href='birthday11.php'">
               11월
            </label>
         </div>
         <div class="radio">
            <label>
               <input type="radio" name="radiogroup1" id="Radios3" value="option12" onclick="location.href='birthday12.php'">
               12월
            </label>
         </div>
      
         
    </div>
    </div>
   </div>
   <div class="col-sm-4"></div>
     <div id="mainLine" style="clear: both;"></div>
    </div>
</body>
</html>
