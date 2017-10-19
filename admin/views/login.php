<?php
require_once 'core/init.php';

if(Input::exists()){
	if(Token::check(Input::get('token'))){
		$validate = new Validate();

		$validation = $validate->check($_POST, array(
			'username' => array('required' => true),
			'password' => array('required' => true)
		));

		if ($validation->passed()) {
			$user = new User();
			
			$remember = (Input::get('rememberme') === 'on') ? true : false;
			$login = $user->login(Input::get('username'), Input::get('password'), $remember);

			if ($login) {
				Redirect::to('index.php');
			}else{
				echo 'Login failed';
			}
		}else{
			foreach($validation->errors() as $error){
				echo $error, '<br>';
			}
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="admin-panel/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico&subset=latin-ext,vietnamese" rel="stylesheet">
		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="form1.css">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=latin-ext" rel="stylesheet">

		<title>MegaMenu Design</title>
	</head>
	<body>
		<div class="container">
	    
		<div class="col-sm-8 col-sm-offset-2 main">
		<div class="col-sm-6 left-side">
		<h1>Hello<br>World.</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tristique justo eget nibh convallis pharetra.</p>
		<br>
		<p>Login with social media</p>
		<a class="fb" href="http://deepak646.blogspot.in/" target="_blank">Login With Facebook</a>
		<a class="tw" href="http://deepak646.blogspot.in/" target="_blank">Login With Twitter</a>

		</div><!--col-sm-6-->
		
		<div class="col-sm-6 right-side">
		<h1>Login</h1>
		<p>Don't have an account? Create your account, it takes less than a minute</p>
		


<!--Form with header-->
<div class="form">
<form action="" method="POST">
        <div class="form-group">
		    <label for="username">Your Username</label>
            <input type="text" name="username" id="username" class="form-control">
            
        </div>

        <div class="form-group">
		    <label for="password">Your password</label>
            <input type="password" name="password" id="password" class="form-control">
           
        </div>

		<div class="form-group">
			<label for="rememberme">
				<input type="checkbox" name="rememberme" id="rememberme">  Remember Me
			</label>
		</div>

		<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">

        <div class="text-xs-center">
			<input type="submit" value="Login" class="btn btn-deep-purple">
        </div>

</form>
</div>
<!--/Form with header-->

		</div><!--col-sm-6-->
		
		
        </div><!--col-sm-8-->
        
        </div><!--container-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="form1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>
<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=latin-ext');


#playground-container {
    height: 500px;
    overflow: hidden !important;
    
}
.main{margin-top:70px;
-webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
-moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
padding:0px;
}
.fb:focus, .fb:hover{color:FFF !important;}
body{
background-image:url(https://i.ytimg.com/vi/Q3_fuZVyFtY/maxresdefault.jpg);
font-family: 'Raleway', sans-serif;
}

.left-side{
	padding:0px 0px 100px;
	background:#9100ff;
	background-size:cover;
}
.left-side h1{
	font-size: 70px;
    font-weight: 900;
	color:#FFF;
	padding: 50px 10px 00px 26px;
	}
	
	.left-side p{
    font-weight:600;
	color:#FFF;
	padding:10px 10px 10px 26px;
	}

	
	.fb{background: #2d6bb7;
    color: #FFF;
    padding: 10px 15px;
    border-radius: 18px;
    font-size: 12px;
    font-weight: 600;
    margin-right: 15px;
	margin-left:26px;-webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
-moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);}
	.tw{background: #20c1ed;
    color: #FFF;
    padding: 10px 15px;
    border-radius: 18px;
    font-size: 12px;
    font-weight: 600;
    margin-right: 15px;-webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
-moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);}
	
	.right-side{
	padding:30px 0px 100px;
	background:#FFF;
	background-size:cover;
	min-height:514px;
}
	.right-side h1{
	font-size: 30px;
    font-weight: 700;
	color:#000;
	padding: 50px 10px 00px 50px;
	}
	.right-side p{
    font-weight:600;
	color:#000;
	padding:10px 50px 10px 50px;
	}
	.form{padding:10px 50px 10px 50px;}
    .form-control{box-shadow: none !important;
    border-radius: 0px !important;
    border-bottom: 1px solid #9100ff !important;
    border-top: none !important;
    border-left: none !important;
    border-right: none !important;}
	.btn-deep-purple {
    background: #84d14e;
    border-radius: 18px;
    padding: 5px 19px;
    color: #FFF;
    font-weight: 600;
    float: right;
	-webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
-moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
}
</style>