<!-- Log in form -->
<div class="auth">
	<div class="login">
		<form action="/resources/lib/login.php" method="POST">
			<input type="text" name="username" placeholder="Email or username">
			<input type="password" name="password" placeholder="Password">
			<br><br>
			<input type="checkbox" name="remember" checked>
         <label for="rememberCheckbox">Remember me</label>
			<button type="submit" class="login">Log in</button>
		</form>
	</div>

	<!-- Register form -->
	<div class="register">
		<form action="/resources/lib/register.php" method="POST">
			<input type="text" name="fullname" placeholder="Full name"><br>
			<input type="text" name="username" placeholder="Username"><br>
			<input type="email" name="email" placeholder="Email"><br>
			<input type="password" name="password" placeholder="Password"><br>
			<button type="submit" class="register">Register for Linkify</button>
		</form>
	</div>
</div>
