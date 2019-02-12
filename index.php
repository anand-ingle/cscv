<?php 
	//start the session
	session_start();
	$error = "";
	//if logged out unset the session and cookies

	if(array_key_exists("logout",$_GET)){
		session_destroy();

		setcookie("id","", time()-60*60);
		$_COOKIE["id"]="";


	}else if((array_key_exists("id", $_SESSION) AND $_SESSION['id']) OR  (array_key_exists("id", $_COOKIE) AND $_COOKIE['id'])){

		//not logging out and tries to access sign page

		 header("Location: app_login.php");
	}

	if(array_key_exists("submit", $_POST)){

		// link to database

		$link= mysqli_connect("fdb18.awardspace.net","2668776_ccvs","sih2018@","2668776_ccvs");

		if(mysqli_connect_error()){

			die("database connection error");
		}



		$username=$_POST['uid'];
		
		//check if uid is empty
		if(!$_POST['uid']){

			$error.="An user id is required<br>";
		}

		//check if password is empty
		if(!$_POST['password']){

			$error.="A password is required<br>";
		}

		//errors are there
		if($error!=""){
			$error="<p>There were error(s) in your form:</p>".$error;

		}
		else{

			//if the user want to sign up 

		if($_POST['signUp']=='1'){

				// there is no error ,check if uid is already present in database

				$query="SELECT id FROM users WHERE uid='".mysqli_real_escape_string($link,$_POST['uid'])."' LIMIT 1";

				$result=mysqli_query($link,$query);

				if(mysqli_num_rows($result)>0){

					$error="That uid is already taken";
				}
				else{

					$query="INSERT INTO users (uid,password) VALUES ('".mysqli_real_escape_string($link,$_POST['uid'])."','".mysqli_real_escape_string($link,$_POST['password'])."')";	

					//if Above query fails
					if(!mysqli_query($link,$query)){
						$error="<p>Could not sign you up, Please try again later.</p>";
					}
					else{

						// Store password in hash encryption

						//need id of recently signed up account using mysqli_insert_id();

						$query="UPDATE users SET password ='".md5(md5(mysqli_insert_id($link)).$_POST['password'])."' WHERE id=".mysqli_insert_id($link)." LIMIT 1";

						mysqli_query($link,$query);

						// set session id as user id
						$_SESSION['id'] = mysqli_insert_id($link);
            $_SESSION['username'] = $username;

						echo "<p>sessionid is.</p>".mysqli_insert_id($link);
						// now check if user has checked the check box	
						if($_POST['stayLoggedIn']==1){
							// if yes set the  cookies
							setcookie("id",mysqli_insert_id($link), time() + 60*60*24);
              setcookie("username",$username,time() + 60*60*24);

						}

						 //echo "Signed up successfully";
						//redirect to logged in page
            $_SESSION['id'] = mysqli_insert_id($link);
            $_SESSION['username'] = $username;
              setcookie("id",mysqli_insert_id($link), time() + 60*60*24);
              setcookie("username",$username,time() + 60*60*24);
              
             
						header("Location: app_login.php"); 

					}
				}

		}else{

			//user want to log in
			//check if the uid and password correct or not

			$query="SELECT * FROM users WHERE uid = '".mysqli_real_escape_string($link,$_POST['uid'])."' ";

			$result = mysqli_query($link,$query);

			$row = mysqli_fetch_array($result);

			if(isset($row)){
				//i.e uid exists

				$hashedPassword == md5(md5($row['id']).$_POST['password']);
                                
                              

				if(md5(md5($row['id']).$_POST['password']) == $row['password']){

					$_SESSION['id']=$row['id'];
          $_SESSION['username'] = $row['uid'];
            
             

					if($_POST['stayLoggedIn']==1){
							// if yes set the  cookies
							setcookie("id",$row['id'], time() + 60*60*24);
               setcookie("username",$username,time() + 60*60*24);

						}
                                                
                                                //admin
                                                
                                                $query="SELECT status FROM users WHERE uid = '".mysqli_real_escape_string($link,$_POST['uid'])."' ";

                                                $result = mysqli_query($link,$query);
                                                
                                                $row = mysqli_fetch_array($result);
                                                
                                                //print_r ($row);
                                                
                                                if($row['status']=="admin"){
                                                  header("Location: admin.php");      
                                                }
                                                
                                                else{
                                                
                                                header("Location: app_login.php");
                                                }

						 //echo "Signed up successfully";
						//redirect to logged in page
						//header("Location: app_login.php");
				}else{
					$error="Incorrect user id/password";
				}


			}else{
				$error="Incorrect user id/password";
			}


		}


		}
	}
 ?>

 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Slide Down Box Menu with jQuery and CSS3" />
        <meta name="keywords" content="jquery, css3, sliding, box, menu, cube, navigation, portfolio, thumbnails"/>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="/assets/css/ready.css">
  <link rel="stylesheet" href="/assets/css/demo.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <script type="text/javascript" src="jquery.min.js"></script>


    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <style type="text/css">

    span.reference{
        position:fixed;
        left:10px;
        bottom:10px;
        font-size:12px;
      }
      span.reference a{
        color:#aaa;
        text-transform:uppercase;
        text-decoration:none;
        text-shadow:1px 1px 1px #000;
        margin-right:30px;
      }
      span.reference a:hover{
        color:#ddd;
      }
      ul.sdt_menu{
        /*margin-top:50px;*/
      }

      h1.title{
        text-indent:-9000px;
        font-family:Arial;
        width:633px;
        height:69px;
      }

		.style-9::-webkit-scrollbar-track
		{
			-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
			border-radius: 10px;
			background-color: ##718095;
		}

		.style-9::-webkit-scrollbar
		{
			width: 12px;
			background-color: ##718095;
		}

		.style-9::-webkit-scrollbar-thumb
		{
			border-radius: 10px;
			-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
			background-color: #555;
		}



      .header{
        height: 35px;
        background-color: rgba(37,106,163,0.7);
      }

      #secondHeader{
       min-height: 84px;
        
        background-color: rgba(37,106,163,0.7);
      }
      ::-moz-placeholder{
        color: white;
      }

      /*#logo{
        float: left;

      }*/

      .mahalogopng{
          /*width: 50px;
          height: 50px;*/
          float: left;
      }

      .mhnamepng{
        float: left;
        margin-top: 10px;
        max-width: 40%;

      }

      #title1{
        /*float: left;
        margin-left: 50px;
        margin-top: 25px;*/
        /*font-family: "Times New Roman";
        font-weight:900;*/
        font-size: 80%;
        text-align: center;
        overflow: hidden;
        font-family:  'Hoefler Text', Georgia, 'Times New Roman', serif;
         /*white-space: nowrap;*/
      }



      #cmTitle{
        
        font-size: 80%;
        margin-top: 20px;
        
      }
      #cmDesc{
        font-size: 60%;
        text-align: right;
      

      }

      #section{
        float: right;
        margin-left: 38px;
        margin-top:15px;
      }

      #cmlogo{
        float: right;
        
      }

      #navbk{
        background-color: #FCF5E5;
      }

      .nav{
        /*background-color: #222222;*/

        background-image: url("bg.jpg");
        /*margin-bottom: 25px;*/
      }

      .navbar{
        padding-left: 50px;
        font-size: 150%;
        background-color: rgba(42,121,186,1);

      }

      #highlighted{
      	/*padding-top: 150px;
      	padding-bottom: 150px;*/
      	/*background-color: cyan;*/
      	padding-right: 0px;


      	
      	
      }

     /* .highImage{
      	padding: 10px;
      	opacity: 0.7;
      	animation-duration: 4s;
      	
      }

      .highImage:hover{
      	 transform: scale(1.2, 1.2); 
          opacity: 1;

      }

      .highDiv{
      	margin-top: 50px;
        float: right;
      }*/

      #myCarousel{
      	padding-top: 20px;
      	padding-bottom: 20px;
      	/*margin-left: 10px;*/
      	padding-left: 10px;
      	
      }
      
      .jumbotron{

        background-image: url(bg.jpeg);
        /*background-color: #CCC0D2;*/
        background-size: 100% 100%;
        border-radius: 0px;
        /*padding-left: 100px;
        padding-right: 80px;*/
        
        
      }

      .innerJumbo{

      	
      }
      .scrollBox{
      
        /*height: 413px;*/
        background-image: url("backgroundCard.png");
        background: rgba(53, 74, 105, 0.7);
        
        
        align-self: center; 
        text-align: center;
        margin: 5px;
        margin-top: 50px;
        border-radius: 10px;
      }

      .scrollme{
        overflow-y: scroll;
        height: 413px;
        padding: 15px;
      }

      .departments{
        min-height: 45px;
        background: rgba(26, 37, 52, 0.8);
        margin-bottom: 10px;
        padding-top: 10px;
      }

      #notice{
      	/*margin-left: 15px;*/
      	/*padding-right: 80px;*/

      }

      .menu{
      	min-height:513px;
        /*background-color: rgba(50,97,170,0.5);*/
        /*padding:15px;*/
        margin: 5px;
        margin-top: 40px;
        border-radius: 10px;
        text-align: center;
      }

      #myMenu{

      	padding-bottom: 20px;

      }
      
      #signUpBox{
        height:20%;
        background-color: rgba(50,97,170,1);
        padding:15px;
        border-radius: 10px;
        

      }

      #regBox{
        border:1px solid #93d8b1;
        min-height: 35%;
        padding:10px;
      }

      #loginBox{
        border:1px solid #93d8b1;
        min-height: 60%;
        margin-top: 15px;
        padding: 5px;
      }

      #regdesc{
        padding:10px;
        font-size: 95%;
      }
      #loginText{
        padding:10px;
        padding-bottom: none;
        font-size: 95%;

      }

      #user{
        padding:15px;
        padding-top: 2px;
        
      }

      .floatLeft{
        float: left;
      }
      .myCards{
        align-content: center;
        margin-left: 100px;
        margin-right: 100px;
        background-color: wheat;
      }

      h3{
        text-align: center;
        background-color: #138496;
      }

      a:hover {
        text-decoration:none;
      }

      

      /*.nav-item:hover{
        background-color: #FB9E41;
      }*/

      .carousel{
      	height: 50%;
      }

      .myFooter{

        background-color: #494949;

      }

      #copyright{
        font-size: 80%;
        text-align: left;
        width: 100%;
      }
      #footerLogo{
        float: right;
      }
    </style>

    <title>Home Page</title>
  </head>
  <body>

      <div class="header">
      
      <div id="google_translate_element"></div><script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'mr', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
               
      </div>

      
      <div class="container-fluid"> 
       <div id="secondHeader" class="row"> 

            <div id="logo" class="col-lg-4">
               <div class="mahalogopng">
                <img src="maharashtrashasanlogo.png"> 
              </div>
              <div class="mhnamepng">
                <img src="mhName.png">
              </div>
            </div>


            <div id="title1" class="col-lg col-md-12 col-sm-12 col-xs-12"> <h2 class="text-white">Caste Certificate And Validity System</h2></div>

            <div class="col-lg-4 ">
              <div>
              <div id="cmlogo"><img src="fadanvis.png"></div>
              <div id="section">
                  <div id="cmTitle"><strong>Shri Devendra Fadnavis</strong></div>
                  <div id="cmDesc">Hon’ble Chief Minister</div>
              </div>
            </div>
          </div>
        </div>
      </div>


      
        <nav class="navbar navbar-expand-md navbar-light ">
		  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link text-white"  href="index.php"><i class="fas fa-home"></i> Home<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link text-white" href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle text-white"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          <i class="fas fa-phone-volume"></i> Team 
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">E-mail</a>
		          <a class="dropdown-item" href="#">Phone</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">Social Media</a>
		        </div>
		      </li>
  </ul>
		     
		    
		  </div>
		</nav>

        
          <div class="row blue p-3 container-fluid">
        		<div id="myMenu" class=" col-lg-2 col-md-2">
		        	<div class="card bg-info ">
					  <div class="card-body" style="text-align: center; font-size: 150%;">
					    <strong>Menu</strong>
					  </div>
					  <div class="style-9">
						  <a href="#" class="nav-item text-white btn-outline-danger list-group-item">Track Your Application</a>
						  <a href="#" class="nav-item text-white btn-outline-danger list-group-item">Verify Your Certificate</a>
						  <a href="#" class="nav-item text-white btn-outline-danger list-group-item">Documents</a>
						  <a href="#" class="nav-item text-white btn-outline-danger list-group-item">Downloads</a>
						  <a href="#" class="nav-item text-white btn-outline-danger list-group-item">BARTI</a>
						  <a href="#" class="nav-item text-white btn-outline-danger list-group-item">MAHAONLINE</a>
						
					</div> 
          </div>  
          </div>            	
        
				 <div id="carouselExampleIndicators" class="carousel slide col-lg-6 col-md-6" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-100" src="digital.png" alt="First slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="digital.png" alt="Second slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="digital.png" alt="Third slide">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>

         <div class="col-md-4 bg-info container">
                  <div class="col-md-4">
                    <div ><a href="register.php" class="btn btn-info btn-raised">New User ? Register Here..</a></div>
                   </div>
                             <div class="clearfix"></div>

               

              <div id="loginBox">
                <div id="loginText">
                  <p class="text-white" >Already Registered? Login Here</p>
                </div>
                <form method="POST">
                            <?php
                      if($error!=""){
                      echo '<div style="margin-top: 5px;" class="alert alert-danger alert-dismissible fade show" role="alert">'
            .$error.
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
          }

          ?>

                <div id="user" class="container-fluid text-white">
                   <label for="uid"  class="input-text text-white">Username</label>
                  <div class="input-group mb-2 mr-sm-2">
                   
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>&nbsp;&nbsp;
                  </div>
                   <input class="form-control  form-control-sm" type="text" name="uid" placeholder="User ID" style="color:white;" required>
                </div>
                <label for="password" class="input-text text-white">Password</label>
                <div class="input-group-text mb-2 mr-sm-2">
                  
                   <i class="fas fa-lock-open"></i>&nbsp;&nbsp;
                     <input class="form-control form-control-sm" type="password" name="password" placeholder="Password"  style="color:white" required>
                 </label>
                 </div>
               </div>
                </div>

                 <div class="form-check">
                  <input type="checkbox" name="stayLoggedIn" value="1">
                  <span class="form-check-sign">
                  <label class="form-check-label text-white" for="exampleCheck1"> Stay Logged in</label></span>
                </div>

           <span class="notranslate"><input type="submit" name="submit" value="Login" class="btn btn-raised btn-sm btn-primary"></span>
                    <!-- <a class="btn btn-primary" href="#" role="button">Login</a> -->
          <input type="hidden" name="signUp" value="0">
                    <a class="text-white" href="#" role="button">Forgot Password?</a>
                    <a class=" text-white" href="#" role="button">Forgot UserName</a>
           


    </form>


              
              </div>  
          </div>
		</div>
    

             

     <div class="text-center Footer">
        <div class="">
          <div id="card-body copyright" class="">
            <h6>Copyright © 2018 Caste Certificate & Validity System  Ltd.,, All Rights Reserved  <span class="notranslate">The Team Saviour</span> </h6>
          </div>
	    <div id="error">

		 
		 	
		 </div>
          <div id="footerLogo">
            <img src="">
            
           </div>
        </div>
        
      </div>

    
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
      <script type="text/javascript" src="jquery.easing.1.3.js"></script>

    <script type="text/javascript">
            $(function() {
       
                $('#sdt_menu > li').bind('mouseenter',function(){
                  var $elem = $(this);
                  $elem.find('.sdt_wrap')
                       .stop(true)
                     .animate({'top':'140px'},500,'easeOutBack')
                     .andSelf()
                     .find('.sdt_active')
                       .stop(true)
                     .animate({'height':'170px'},300,function(){
                    var $sub_menu = $elem.find('.sdt_box');
                    if($sub_menu.length){
                      var left = '170px';
                      if($elem.parent().children().length == $elem.index()+1)
                        left = '-170px';
                      $sub_menu.show().animate({'left':left},200);
                    } 
                  });
                  }).bind('mouseleave',function(){
                    var $elem = $(this);
                    var $sub_menu = $elem.find('.sdt_box');
                    if($sub_menu.length)
                      $sub_menu.hide().css('left','0px');
          
          $elem.find('.sdt_active')
             .stop(true)
             .animate({'height':'0px'},300)
             .andSelf().find('img')
             .stop(true)
             .animate({
              'width':'0px',
              'height':'0px',
              'left':'85px'},400)
             .andSelf()
             .find('.sdt_wrap')
             .stop(true)
             .animate({'top':'25px'},500);
        });
            });

            $(document).ready(function () {
          if (!$.browser.webkit) {
              $('.wrapper').html('<p>Sorry! Non webkit users. :(</p>');
          }
      });

            
           

           
        </script>
        <script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/ready.min.js"></script>
<script src="assets/js/demo.js"></script>
  </body>
</html>