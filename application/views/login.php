
	
<body>
	

	<div  class="text-center  py-5"  style="font-size: 22px; font-family: Verdana;">Certificate Management</div>

	<div id="container">

		
		<?= form_open('c_responsable/signin'); ?>

		<div  class="text-danger"  style="padding-left: 18px"><?= $error ; ?></div>
		<label for="name">Username</label>
		  
		<input type="name"  name="text_login"  autofocus  required  />
		
		<label for="username">Password</label>
		
		<p><a   href="		<?= site_url('c_responsable/reset_pw'); ?>">Forgot your password ?</a>
		
		<input type="password"  name="password"  required  />
		
		<div id="lower">
		
		<input disabled type="checkbox"><label class="check" for="checkbox">Keep me logged in</label>
		
		<input type="submit" value="Login">
		
		</div>
		
		</form>
		
	</div>
	<div  style="position: fixed; top : 90%; left : 42%" class="text-center my-3 small">2018 &copy; School Certificate | AbdellWeb</div>
</div>


	
	
	
	
	
		
	