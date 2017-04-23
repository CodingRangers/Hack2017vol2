<?php
	include("header.php");
	if(!isset($_SESSION['username']))
	{
?>
	<form class="form-horizontal" method="post" id=form_in_login>
		  <div class="form-group">
		    <label for="username" class="col-sm-2 control-label">Username</label>
		    <div class="col-sm-10">
		      <input type="text" name=username class="form-control" id="username" placeholder="Username..." required>
		    </div>
		  </div>

		  <div class="form-group">
		    <label for="pass" class="col-sm-2 control-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" name=pass class="form-control" id="pass" placeholder="Password..." required>
		    </div>
		  </div>
		    <div class="form-group" id=register_button>
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" name=login class="btn btn-default">Sign Up</button>
		    </div>
		</div>
		</form>
<?php
	}
	else
	{
		?>
			<div style="position: absolute; right: 41%; top:25%; z-index: 10000; color: #C89322;">
				<h3>Hello, <span id=username_header><?php echo $_SESSION['username']?></span>! You are already in!</h3>
			</div>
		<?php
	}
		if(isset($_POST['login']))
		{
			$br = 1;
			$username = $_POST['username'];
			$pass = $_POST['pass'];
			$q = "SELECT * FROM `users`";		
			$res = mysqli_query($conn,$q);
			while ($row = mysqli_fetch_assoc($res)) 
				{
						if($row['user_name'] == $username && $row['user_pass'] == $pass) 
						{
							$_SESSION['username'] = $username;
							$br = 0;
							break;
						}
				}
						if($br>0)
						{
						?>
							<div class="alert alert-danger">
			  					<strong>Wrong username or password!</strong>
							</div>
						<?php
						}
						else
							 echo '<script>window.location.href = "Profile.php";</script>';
		}
 			include("footer.php");
	?>
