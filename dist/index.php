<html lang="en">
	<head>
        <title>Simple project GULP+Nunjucks+SASS</title>
		<link href="../css/style.css" rel="stylesheet">
	</head>
	<body>
		<div class="container" id="container">
			
             <div class="container__form container__sign-up">
	<form action="#" method="POST">
        <h1>Register</h1><br /><br />

        <input type="text" name="loginRegister" placeholder="Login..." />
        <input type="password" name="password" placeholder="Password..." />
        <button class="pointer" name="sendReg">Register</button>
	</form>
</div>

			 <div class="container__form container__sign-in">
	<form action="#" method="POST">
		<h1>Log in</h1><br /><br />

		<input type="text" name="login" placeholder="Login..." />
		<input type="password" name="passwordLog" placeholder="Password..." /><br />
		<button class="pointer" name="sendLog">Log in</button>
	</form>
</div>

             <div class="container__overlay">
	<div class="container__overlay-class">
		<div class="container__overlay-panel container__overlay-left">
			<h1>Log in</h1>
			<p>If you want to login, you have to click the button below.u</p>
			<button class="ghost pointer" id="signIn">Log in</button>
		</div>
		<div class="container__overlay-panel container__overlay-right">
			<h1>Simple project GULP+Nunjucks+SASS</h1><br />
			<p>This is a simple login/register theme in
				
					GULP,
				
					Nunjucks,
				
					SASS,
				
					ES6,
				
			</p>
			<button class="ghost pointer" id="signUp">Register</button>
		</div>
	</div>
</div>
			
		</div>

		 <script>alert("Welcome on this page!");</script>

	</body>
</html>