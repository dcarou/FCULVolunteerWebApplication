<html>
<body>

<h1>Registo</h1>
<form action="registo" method="post" accept-charset="utf-8">

<p>
	Username: <input type="text" name="username" value="" id="username" size="30"  /> 
	<?php echo form_error('username'); ?>
</p>
<p>
	Password: <input type="password" name="password" value="" id="password" size="30"  /> 
	<?php echo form_error('password'); ?>
</p>
<p>
	Confirmar Password: <input type="password" name="confirm_password" value="" id="confirm_password" size="30"  />
	<?php echo form_error('confirm_password'); ?>
</p>
<p>
	Email: <input type="text" name="email" value="" id="email" maxlength="80" size="30"  />
	<?php echo form_error('email'); ?>
</p>
<p><input type="submit" name="register" value="Registar"  /></p>
</form>

<p>Já está registado? Faça login <a href="login"> aqui </a>.</p>


</body>
</html>