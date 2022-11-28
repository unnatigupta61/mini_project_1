<?php
session_start();
?>



<!DOCTYPE html>
<html>
<style>
	/*set border to the form*/
	
	form {
		border: 3px solid #f1f1f1;
	}
	/*assign full width inputs*/
	
	input[type=email],
	input[type=password] {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
	}
	/*set a style for the buttons*/
	
	button {
		background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 100%;
	}
	/* set a hover effect for the button*/
	
	button:hover {
		opacity: 0.8;
	}
	/*set extra style for the cancel button*/
	
	/* .cancelbtn {
		width: auto;
		padding: 10px 18px;
		background-color: #f44336;
	} */
	/*centre the display image inside the container*/
	
	.imgcontainer {
		text-align: center;
		margin: 24px 0 12px 0;
	}
	/*set image properties*/
	
	/* img.avatar {
		width: 40%;
		border-radius: 50%;
	} */
	/*set padding to the container*/
	
	.container {
		padding: 16px;
	}
	/*set the forgot password text*/
	
	span.psw {
		float: right;
		padding-top: 16px;
	}
	/*set styles for span and cancel button on small screens*/
	
	@media screen and (max-width: 300px) {
		span.psw {
			display: block;
			float: none;
		}
		.cancelbtn {
			width: 100%;
		}
	}
</style>

<body>

	<h2>LOGIN</h2>
	<?php
		 if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
		 {
			 echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
			 unset($_SESSION['status']);
		 }
	?>
	<!--Step 1 : Adding HTML-->
	<form  action="code.php" method="POST">
		<!-- <div class="imgcontainer">
            <img src="assets/images/white-logo.svg" alt="Logo" class="avatar" />
		</div> -->

		<div class="container">
			<label><b>Useremail</b></label>
			<input type="email" placeholder="Enter Email" name="email" required>

			<label><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" required>

			<button type="submit" href="admin/index.html" name='login_btn'>Login</button>
			
		</div>
	</form>

</body>

</html>
