<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
body {
    font-family: "Lato", sans-serif;
}

.main-head{
    height: 150px;
    background: #FFF;
}

.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}

.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 50%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 30%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
</style>

<div class="sidenav">
         <div class="login-main-text">
            <h2>Board Content<br></h2>
            <p>보안컨설팅트랙 유머게시판</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
	       <form action ='login.php' method ='POST'>
                  <div class="form-group">
                     <label><h2><strong>Board Content</strong></h2></label>
			<br>
			<?php
 
			 $board_num=$_GET['BOARD_NUM'];
			 $conn=mysqli_connect('localhost', 'song', '0507','BoB9DB');
			 $result=mysqli_query($conn,"select BOARD_CONTENT from BOARD_INFO where BOARD_NUM =".$board_num.";");
			 $row = $result->fetch_row();
			 if($row[0])
			 {       echo($row[0]);
			 }
 
			 ?>

                  </div>
                  <button type="button" onClick="location.href='board.php'" class="btn btn-secondary">back</button>
               </form>
            </div>
         </div>
      </div>
