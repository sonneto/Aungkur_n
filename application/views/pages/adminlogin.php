<!DOCTYPE html>
<html>
<title><?php echo $title?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>


<div class="w3-container w3-padding-64" style="width: 600px;margin-left: 400px">
	<div class="w3-card-2">			
		<div>
			<h1 class="w3-center w3-light-green">LOGIN</h1>
		</div>		
		
		<form class="w3-container" action="submitlogin" method="post">
		  <p><label><b>Username</b></label>
		  <input class="w3-input w3-border w3-round " name="username" type="text" style="background-color:#b3ffb3"></p>

		  <p><label><b>Password</b></label>
		  <input class="w3-input w3-border w3-round" name="password" type="password" style="background-color:#b3ffb3"></p>

		  <p class="w3-center"><button class="w3-btn w3-light-green">Login</button></p>
		  <p class="w3-text-red w3-center"><?php echo $loginErr?></p>
		</form> 
		
	</div>
		
</div>

</body>
</html>