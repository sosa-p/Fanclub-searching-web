<!doctype html>
<html lang="en">
  <head>
    <title>매니저</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
  </head>

 <body>
    <div class="container">
      <div class="row">
        <div class="page-header">
		<div class="jumbotron text-center">
          <h2 >매니저 창</h2>
        </div>
		</div>
        <div class="col-sm-4">
		
          <!--<div class="login-box well">-->
		 
        <form accept-charset="UTF-8" role="form" method="post" action="database6.php">
            
			<legend style="color:#F5A9BC; font-size:x-large ">회원 정보 조회</legend>
            <div class="form-group"></center>
                <label for="username-email" style="color:#F5A9BC; ">이름</label>
                <input name="Name" value='' id="username-email" placeholder="이름을 입력하세요" type="text" class="form-control" />
            </div>
           <div class="form-group">
                <label for="password" style="color:#F5A9BC; ">전화번호</label>
                <input name="Mobile" id="password" value='' placeholder="전화번호를 입력하세요" type="text" class="form-control" />
            </div>
            <div class="form-group">
                <input style="color:#F5A9BC; " type="submit" class="btn btn-default btn-login-submit btn-block m-t-md" value="조회" />
            </div>
            
        </form>
          </div>
		  </div>
        </div>
      </div>
    </div>
	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>