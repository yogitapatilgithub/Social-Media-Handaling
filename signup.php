<?php
    include("classes/connect.php");
    include("classes/signup.php");
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$signup = new Signup();
		$result = $signup->evaluate($_POST);
		echo $result;
		//echo"<pre>";
		//print_r();
		//echo"</pre>";
	}
?> 
<html>
	<head>
	<title> MyBook | Signup
	</title>
	</head>
	<style>
	 #bar{height: 100px;
		 background-color: #3c5a99; 
		 color: #d9dfeb;
		 padding: 4px;
		 }
	#signup_button{
			background-color: #42b72a;
			width:70px;
			text-align:center;
			padding:4px; 
			border-radius:4px;
			float:right;}
	#bar2{
			background-color: white; 
			width:800px; 
			margin:auto; 
			margin-top:50px;
			padding:10px;
			text-align:center;
			font-weight:bold;
			}
	#text{ height:40px;
			width:300px;
			border-radius: 4px;
			border:solid 1px #ccc;
			padding:4px;
			font-size: 14px;}
			
 	#button{
			width:300px;
			height:40px;
			border-radius:4px;
			font-weight:bold;
			border:none;
			background-color: #3c5a99;
			color:white;  
			}		
		 
		 
	</style>
	<body style="font-family: tahoma; background-color:#e9ebee;">
		<div id = "bar">
			<div style="font-size: 40px;">Mybook</div>
			<div id="signup_button">Login</div>
		</div>
		<div id = "bar2">
			Signup to MyBook<br><br>
			
			<form method="post" action="">
				<input type="text" name="first_name" id="text" placeholder="First name"><br><br>
				<input type="text" name="last_name" id="text" placeholder="Last name"><br><br>
				
				<span style="font-weight:normal";>Gender:</span><br>
				<select id="text" name="gender" >
					<option>Female</option>
					<option>Male</option>
					<option>Transgender</option>
				</select>
				
				<input type="text" name="email"  id="text" placeholder="Email"><br><br>
				
				<input type="password" id="text" name="password" placeholder="Password"><br><br>
				<input type="password" id="text" name="password2" placeholder="Re-type Password"><br><br>
				<input type="submit" id="button" value="Login">
				<br><br><br> 
			</form>
		</div>
	</body>
</html>