<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
body{background: #000;}
.banner{position: absolute; text-align: center; top:50%; left:50%; transform:translate(-50%,-50%);}
.banner span{color: #fff; text-transform: uppercase; display: block; font-family:open sans;}
.banner .text_0{font-size: 30px; font-weight: 700; letter-spacing:8px; margin-bottom: 20px; backgrou    nd: #000; position: relative; animation: text 3s 1;     z-index: 999;}
.banner .text_1{font-size: 60px; font-weight: 700; letter-spacing:8px; margin-bottom: 20px; background: #000; position: relative; animation: text 3s 1;     z-index: 999;}
.banner .text_2{ 
    font-size: 30px;
    color: #ff8d00;
    position: relative;
    border-top: 2px solid #fff;
    border-bottom: 2px solid #fff;
	cursor: pointer;    
}
.text_2::before{ position: absolute;  content: ''; top:0;left: 0;width: 0;height: 100%;background-color: white; transform-origin:left;  transition:width 1s cubic-bezier(0.46, 0.03, 0.52, 0.96);  z-index:-1; overflow: hidden;}
.text_2:hover::before{width: 100%;}
.banner .text_2:hover{font-style: italic; color:#000; transition: ease 2s;}


@keyframes text{
    0%{
        color: black;
        margin-bottom: -40px;
        
    }
    30%{
        letter-spacing: 25px;
        margin-bottom: -40px;
    }
    80%{
        letter-spacing: 8px;
        margin-bottom: -40px;
    }
}
</style>
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<section class="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
   		<span class="text_0"><?php echo $_GET['id']; ?>님<br></span>
		<span class="text_1">BoB 9기<br>보안컨설팅</span>  
                <span onClick="location.href='board.php'" class="text_2">유머 게시판
                <div class="bg_hover">
                </div>
                </span>
            
            </div>
        </div>
    </div>
</section>
