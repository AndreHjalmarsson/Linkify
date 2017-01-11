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
	<div class="registerLink">
		<p>Not a member? Register below.</p>
		<a href="resources/lib/registerForm.php">Register</a>
	</div>
</div>
