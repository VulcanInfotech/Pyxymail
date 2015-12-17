<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,300italic,300,500,500italic,700,900">

 <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

        <link rel="stylesheet" href="css/bootstrap.css">
        
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/crazymimi-misc.css">
        <link rel="stylesheet" href="css/crazymimi-style.css">

         
      <link rel="stylesheet" type="text/css" href="login/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="login/css/style.css" />
         <link rel="stylesheet" type="text/css" href="login/css/animate-custom.css" />

  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<link rel="shortcut icon" type="image/x-icon" href="Pmail.ico" />
    <link rel="icon" type="image/x-icon" href="Pmail.ico" />


<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script type="text/javascript">
$(function() {
$('#btnClick').click(function() {
$(this).attr("disabled", true);
//$(this).val('Please wait Processing');
// Write your Code
})
$('#btnReset').click(function() {
$('#btnClick').attr("disabled", false);
$('#btnClick').val('Click');
})
})
</script>
<style>

.banner{
	
	background-size:cover;
	-webkit-background-size: cover;
	-o-background-size: cover;
	-ms-background-size: cover;
	-moz-background-size: cover;
	min-height:840px;
	}
.banner-info{
margin-top:-100px;
}
.banner-info h1{
	color: #000000;
	text-align: center;
	margin:0 0 12px 0;
	font-size: 48px;
	font-weight: 700;
	}
.banner-info p{
	margin:0;
	color: #000000;
	font-size: 32px;
	text-align: center;
	}
span.colon{
	color:#99cc33;
	font-size:68px;
	}
.view{
	text-align:center;
	margin-top:78px;
	}
.view a{
	color: black;
	padding: 12px 62px 12px 38px;
	text-decoration: none;
	background: url("./images/arrow.png") no-repeat 189px 17px #000000; ;
	border-radius: 5px;
	font-size: 20px;
	}
.view a:hover{
	border:3px solid #ffcc00;
	color:white;
	background: url("./images/2.png") no-repeat 186px 14px #000000;;
	text-decoration: none;
	}
.banner-grids {
	margin-top:10px;
	}
.banner-left ul li {
	display: inline-block;
	color: #000000;
	font-size: 16px;
	}
.banner-left ul li label{
	
	width: 33px;
	height: 39px;
	display: block;
	margin:0 15px 0 0;
	}
.banner-left ul{
	margin:0;
	padding:0;
	}
.banner-left ul li span{
	display:block;
	color:#000000;
	font-size:22px;
	text-align: left;
	}
.banner-middle {
	border-left: 1px solid #000000;
	border-right: 1px solid #000000;
	}
.banner-middle ul li {
	display: inline-block;
	color: #000000;
	font-size: 16px;
	text-align: left;
	}
.banner-middle ul li label{
	
	width: 36px;
	height: 39px;
	display: block;
	margin:0 15px 0 0;
	}
.banner-middle ul{
	margin:0;
	padding:0;
	}
.banner-middle ul li span{
	display:block;
	color:#000000;
	font-size:22px;
	}
.banner-right ul li {
	display: inline-block;
	color: #000000;
	font-size: 16px;
	}
.banner-right ul li span.a{
	color:#000000;
	}
.banner-right ul li label{
	
	width: 39px;
	height: 45px;
	display: block;
        margin-right:10px;
	margin:0 15px 0 0;
	}
.banner-right ul{
	margin:0;
	padding:0;
	}
.banner-right ul li span{
	display:block;
	color:#000000;
	font-size:22px;
	}
        
        
        
        
        
        .social-icons {
 float: right;
 }
.social-icons li a {
	height: 40px;
	width: 40px;
	display:block;
	text-indent: -9999px;
	background: transparent url(./images/social-icons.png);
}
.contact-info1 {
	font-family: Montserrat;
	font-weight: 700;
	color: #eee;
}
.social-icons li:first-child {
	border-left: 1px solid rgba(231, 231, 231, 0.73);
}
.social-icons ul li:first-child, ol li:first-child {
	margin-top: 0px;
}
.social-icons li {
	float: left;
	width: 40px;
	height: 40px;
	border-right: 1px solid rgba(231, 231, 231, 0.73);
	background: none;
	padding: 0px;
	margin: 0;
}
.social-icons a.facebook:hover {
	background-position: 0px bottom;
}
.social-icons a.facebook {
	background-position: 0px top;
}
.social-icons li a {
	height: 40px;
	width: 40px;
	display: block;
	text-indent: -9999px;
	background: transparent url(./images/social-icons.png);
}
.social-icons a.twitter {
	background-position: -40px top;
}
.social-icons a.twitter:hover {
	background-position: -40px bottom;
}
.social-icons a.googleplus {
	background-position: -440px top;
}
.social-icons a.googleplus:hover {
	background-position: -440px bottom;
}
.social-icons a.pinterest {
	background-position: -480px top;
}
.social-icons a.pinterest:hover {
	background-position: -480px bottom;
}
.social-icons a.dribbble {
	background-position: -160px top;
}
.social-icons a.dribbble:hover {
	background-position: -160px bottom;
}
.social-iconst a.dribbble:hover {
	background-position: -160px bottom;
}	
.social-icons a.vimeo {
	background-position: -120px top;
}
.social-icons a.vimeo:hover {
	background-position: -120px bottom;
}



.main-header2 {
  width: 100%;
  min-height: 96px;
  background-color: white;
  padding: 30px 60px;
  margin-top:31px;
}
@media screen and (min-width: 769px) and (max-width: 991px) {
  .main-header2 {
    padding: 20px;
    min-height: 76px;
  }
}
@media screen and (max-width: 768px) {
  .main-header2 {
    padding: 20px;
    min-height: 76px;
  }
}

.main-header2 .menu-wrapper {
  position: relative;
  z-index: 99;
  text-align: right;
  margin-top: -10px;
}

@media screen and (min-width: 769px) and (max-width: 991px) {
  .main-header {
   
    padding: 20px;
    min-height: 76px;
  }
}
@media screen and (max-width: 768px) {
  .main-header {
  
    padding: 20px;
    min-height: 76px;
  }
}
.main-header2 .menu-wrapper a.toggle-menu {
  display: none;
  background-color: #2c2c2c;
  color: white;
  border-color: #2c2c2c;
  position: absolute;
  right: 20px;
  overflow: hidden;
}
.main-header2 .menu-wrapper a.toggle-menu:hover {
  color: grey;
}
.main-header2 .menu-wrapper ul li {
  display: inline;
  margin-left: 7px;
  position: relative;
}
.main-header2 .menu-wrapper ul li:after {
  content: '';
  color: #d5d5d5;
  margin-left: 10px;
}
.main-header2 .menu-wrapper ul li:last-child:after {
  content: '';
  display: none;
}
.main-header2 .menu-wrapper ul li a {
  text-transform: uppercase;
  font-weight: 500;
  padding: 30px 0;
  color: black;
}
.main-header2 .menu-wrapper ul li a:hover {
  color: #f69730;
}
.main-header2 .menu-wrapper ul li.active a {
  color: #f69730;
}
.main-header2 .menu-wrapper ul li ul {
  position: absolute;
  width: 200px;
  z-index: 9999;
  top: 28px;
  left: 50%;
  margin-left: -115px;
  text-align: center;
  background-color: #efefef;
}
.main-header2 .menu-wrapper ul li ul:before {
  content: ' ';
  width: 0;
  height: 0;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid #efefef;
  position: absolute;
  top: -10px;
  margin-left: -10px;
  left: 50%;
}
.main-header2 .menu-wrapper ul li ul li {
  position: relative;
  display: block;
  text-align: center;
  margin: 0;
  border-bottom: 1px solid #efefef;
}
.main-header2 .menu-wrapper ul li ul li:last-child {
  border-bottom: 0;
}
.main-header2 .menu-wrapper ul li ul li a {
  display: block;
  padding: 10px;
  color: black; !important;
}
.main-header2 .menu-wrapper ul li ul li a:hover {
  color: #f69730 !important;
}
.main-header2 .menu-wrapper ul li ul li:after {
  display: none;
}
.main-header2 .menu-wrapper ul li ul li ul {
  left: 100% !important;
  margin-left: 1px;
  top: 0;
}
.main-header2 .menu-wrapper ul li ul li ul:before {
  display: none;
}







</style>


   

    </head>
    <body>


<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=1625276917695542";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

       <!-- <section id="pageloader">
            <div class="loader-item fa fa-spin colored-border"></div>
        </section>-->

 <!-- /#pageloader -->

        <header class="site-header container-fluid">
            <div class="top-header">
                <div class="logo col-md-6 col-sm-6">
                    <h1><a href="index.php"><img src="./images/pyxymail3.jpg"></img></h1>
 
               
                </div> <!-- /.logo -->
                
                 <div class="main-header2">
               <div  class="menu-wrapper">
                             
                             <a href="#" class="toggle-menu visible-sm visible-xs"></a>
                           <ul class="sf-menu hidden-xs hidden-sm">
                       <li><a ><i class="fa fa-user"></i></a> </li>
                         <li class="active"><a href="paid_login_form.php">Login</a></li>
                              <li><a href="paid_signup_form.php">Sign up</a></li>
                        
</ul>
               </div>

               </div>     




            </div> <!-- /.top-header -->
            <div class="main-header">
                <div class="row">
                    <div class="main-header-left col-md-3 col-sm-6 col-xs-8">
                        
                        
                        
                        
                    </div> <!-- /.main-header-left -->
                    <div class="menu-wrapper col-md-9 col-sm-6 col-xs-4">
                        <a href="#" class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></a>
                        <ul class="sf-menu hidden-xs hidden-sm">
                            <li ><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="pricing_signup.php">Pricing</a>   </li>
                            
                            <li><a href="example.php">Examples</a>       </li>
                            <li><a href="help.php">Help</a > </li>
                             
                        </ul>
                    </div> <!-- /.menu-wrapper -->
                </div> <!-- /.row -->
            </div> <!-- /.main-header -->
            
             <div id="responsive-menu">
                <ul>
                    <li ><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="pricing_signup.php">Pricing</a>   </li>
                           
                            <li><a href="example.php">Examples</a>      </li>
                           <li><a href="paid_login_form.php">Login</a></li>
                              <li><a href="paid_signup_form.php">Sign up</a></li>
                </ul>
            </div>
            
        </header> <!-- /.site-header -->

        <div class="content-wrapper">
            <div class="inner-container container">
                  
                        <div class="row">
                 
          
 <div class="col-md-6 col-sm-6">
				
                <div id="container_demo" >
                   
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="login.php" autocomplete="on" method="post"> 
                                <h2 style="font-size: 48px;
	color: orange ;
	padding: 2px 0 10px 0;
	font-family: 'FranchiseRegular','Arial Narrow',Arial,sans-serif;
	font-weight: bold;
	text-align: center;
	padding-bottom: 0px;">Guest-Log in</h2>
       
        <hr>
                                <p> 
                                    <label for="username" class="uname"  > Your email </label>
                                    <input type="email" placeholder="mymail@mail.com"  id="username"  name="useremail"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" > Your password </label>
                                  <input type="password" placeholder="eg. X8df!90EO" id="password" name="password"/>
                                </p>
                                
								</p><p><a href="forgotpassword.html">forgot password</a></p>

                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                               
                            </form>
                        </div>


 
                      <div id="register" class="animate form">
                            <form  action="paidlogin.php" autocomplete="on" method="post"> 
                                <h2 style="font-size: 48px;
	color: darkorange ;
	padding: 2px 0 10px 0;
	font-family: 'FranchiseRegular','Arial Narrow',Arial,sans-serif;
	font-weight: bold;
	text-align: center;
	padding-bottom: 0px;">Premium Log In</h2> 
          
        <hr>
                                <p> 
                                    <label for="username" class="uname"  > Your email </label>
                                    <input type="email" placeholder="mymail@mail.com"  id="username"  name="useremail"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" > Your password </label>
                                  <input type="password" placeholder="eg. X8df!90EO" id="password" name="password"/>
                                </p>
                                
								</p><p><a href="forgotpassword.html">forgot password</a></p>

                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link"> 
									<b>Back To free Login </b>
									<a href="#tologin" class="to_register"> click Here</a>
								</p>
                            </form>
                        </div>
						
                    </div>
                 </div>
        
 </div>
<div class="col-md-6 col-sm-6">
<h2 class="grid-heading" style="margin-top:150px;font-size:22px;">Now You Are Ready To Use Premium Services..</h2>
                                                               
</div>

            
            

<div class="row">
<br><br>
</div>


<div class="col-md-12"  >
                
         <hr>
         
         <div class="social-icons">
			             
   <ul>

			                    
<li><div class="fb-like" data-href="https://www.facebook.com/pages/PyxyMail/952542731452333" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div></li>
	
			                 
   
			              
  </ul>
					
</div>

<p style="float:left; ">&copy; Copyright PyxyMail - 2015.</p>





</div>





             
                            
                        </div> <!-- /.row -->
                        
                    
            </div> <!-- /.inner-content -->
        </div> <!-- /.content-wrapper -->

        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <!--<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>-->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Preloader -->
      <!--  <script type="text/javascript">
            //<![CDATA[
            $(window).load(function() { 
                $('.loader-item').fadeOut(); 
                    $('#pageloader').delay(350).fadeOut('slow');
                $('body').delay(350).css({'overflow-y':'visible'});
            })
            //]]>
        </script>-->

    </body>
</html>