
	<?php
	include("header.php");
	?>
	<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js?ver=1.4.2'></script>
<!-- 	<script type="text/javascript">
$( document ).ready(function() {
    console.log( "ready!" );
	$('#tick1').css('display','none');
  $('#tick1').click(function() {
    $(this).css('display', 'block');
  });
});
	</script> -->
	<script src="JS/jquery-1.3.2.min.js"></script>
<script type="text/javascript"> //Added new `<script>` tag
   $(document).ready(function() {
     //added missing-v quotes 
     
     $('#tick1_r').click(function() {
        $('#tick1').css('display','block');
         $('#tick2').css('display','none');
         $('#tick3').css('display','none');
         $('#tick4').css('display','none');
         $('#tick5').css('display','none');
         $('#tick6').css('display','none');

     });    
   });   
   $(document).ready(function() {
     //added missing-v quotes 
     
     $('#tick2_r').click(function() {
        $('#tick2').css('display','block');
         $('#tick1').css('display','none');
         $('#tick3').css('display','none');
         $('#tick4').css('display','none');
         $('#tick5').css('display','none');
         $('#tick6').css('display','none');

     });    
   }); 
    $(document).ready(function() {
     //added missing-v quotes 
     
     $('#tick3_r').click(function() {
        $('#tick3').css('display','block');
         $('#tick1').css('display','none');
         $('#tick2').css('display','none');
         $('#tick4').css('display','none');
         $('#tick5').css('display','none');
         $('#tick6').css('display','none');

     });    
   }); 
    $(document).ready(function() {
     //added missing-v quotes 
     
     $('#tick4_r').click(function() {
        $('#tick4').css('display','block');
         $('#tick1').css('display','none');
         $('#tick2').css('display','none');
         $('#tick3').css('display','none');
         $('#tick5').css('display','none');
         $('#tick6').css('display','none');

     });    
   }); 
      $(document).ready(function() {
     //added missing-v quotes 
     
     $('#tick5_r').click(function() {
        $('#tick5').css('display','block');
         $('#tick1').css('display','none');
         $('#tick2').css('display','none');
         $('#tick3').css('display','none');
         $('#tick4').css('display','none');
         $('#tick6').css('display','none');

     });    
   }); 
        $(document).ready(function() {
     //added missing-v quotes 
     
     $('#tick6_r').click(function() {
        $('#tick6').css('display','block');
         $('#tick1').css('display','none');
         $('#tick2').css('display','none');
         $('#tick3').css('display','none');
         $('#tick4').css('display','none');
         $('#tick5').css('display','none');

     });    
   }); 
</script>
	
	<div id=form_change>
	<form class="form-horizontal" method="post">
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

		  <div class="form-group">
		    <label for="char_name" class="col-sm-2 control-label">Character name</label>
		    <div class="col-sm-10">
		      <input type="text" name=char_name class="form-control" id="char_name" placeholder="Character name..." required>
		    </div>
		  </div>
			 </div>
			 
		</div>
		  <!--classes choose start-->
		  <div class="projects" id="register_class">
		<div class="container">
			<div class="port-head">
					 <h3 class="w3l_head w3l_head1">Our classes</h3>
			         <p class="w3ls_head_para w3ls_head_para1">More...coming soon</p>
			</div>
		</div>
		<div class="projects-grids">
				<div class="sreen-gallery-cursual">

			<div id="owl-demo" class="owl-carousel owl-theme">
					<div class="item">
					
						<div class="projects-agile-grid-info">
						<div id="tick1" style="display:none">
							<img id="tick1_img" src="img/tick.png" style="position:absolute;margin-left: -45%;">
						</div>
							<label for=tick1_r><img src="img/class-knight.jpg" alt="knight" />
							<div class="projects-grid-caption"> 
								
							<h4>Knight</h4>
							<p>from the past</p>
							</div></label>
						</div>	
					</div>
					<div class="item">
					
						<div class="projects-agile-grid-info">
						<div id="tick2" style="display:none">
							<img id="tick2_img" src="img/tick.png" style="position:absolute;margin-left: -45%;">
						</div>
							<label for=tick2_r><img src="img/class-orc.jpg" alt="orc" />
							<div class="projects-grid-caption"> 
								
							<h4>Orc</h4>
							<p>The big boy</p>
							</div></label>
						</div>	
					</div>
					<div class="item">
					
						<div class="projects-agile-grid-info">
						<div id="tick3" style="display:none">
							<img id="tick3_img" src="img/tick.png" style="position:absolute;margin-left: -45%;">
						</div>
							<label for=tick3_r><img src="img/class-goblin.jpg" alt="goblin" />
							<div class="projects-grid-caption"> 
								
							<h4>Goblin</h4>
							<p>The little scumbag</p>
							</div></label>
						</div>	
					</div>
					<div class="item">
						<div class="projects-agile-grid-info">
						<div id="tick4" style="display:none">
							<img id="tick4_img" src="img/tick.png" style="position:absolute;margin-left: -45%;">
						</div>
							<label for=tick4_r><img src="img/class-programmer.jpg" alt="programmer" />
							<div class="projects-grid-caption"> 
								
							<h4>Programmer</h4>
							<p>from the future</p>
							</div></label>
						</div>	
					</div>
					<div class="item">
					
						<div class="projects-agile-grid-info">
						<div id="tick5" style="display:none">
							<img id="tick5_img" src="img/tick.png" style="position:absolute;margin-left: -45%;">
						</div>
							<label for=tick5_r><img src="img/class-fire.jpg" alt="fire_mage" />
							<div class="projects-grid-caption"> 
								
							<h4>Fire Mage</h4>
							<p>the master of fire</p>
							</div></label>
						</div>	
					</div>
					<div class="item">
						<div class="projects-agile-grid-info">
						<div id="tick6" style="display:none">
							<img id="tick6_img" src="img/tick.png" style="position:absolute;margin-left: -45%;">
						</div>
							<label for=tick6_r><img src="img/class-frost.jpg" alt="frost_mage" />
							<div class="projects-grid-caption"> 
								
							<h4>Frost Mage</h4>
							<p>the master of ice</p>
							</div></label>
						</div>	
					</div>
			</div>
		</div>
	</div>
	</div>
		<!--classes choose end-->
	  <div class="form-group" id=register_button>
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" name=register class="btn btn-default" id="button77">Sign Up</button>
		    </div>
		</div>
		<input name="class" id="tick6_r" type="radio" style="display:none" value="3">
		<input name="class" id="tick5_r" type="radio" style="display:none" value="4">
		<input name="class" id="tick4_r" type="radio" style="display:none" value="2">
		<input name="class" id="tick3_r" type="radio" style="display:none" value="6">
		<input name="class" id="tick2_r" type="radio" style="display:none" value="5">
		<input name="class" id="tick1_r" type="radio" style="display:none" value="1">
	</form>
	 <div style="position: absolute; right: 20%; top: 20%;">
			  <?php
		if(isset($_POST['register']))
		{
			if(empty($_POST['class']))
			{
						?>
				<div class="alert alert-danger">
  					<strong>You need to choose class!</strong>
				</div>
					<?php
			}
			else
			{
				$br=0;
				$br2 = 0;
				$class = $_POST['class'];
				if($class==(1||2))
					$race = 1;
				elseif($class==(3||4))
					$race = 2;
				elseif($class==(5||6))
					$race =  3;
							$q = "SELECT * FROM `users`";		
							$res = mysqli_query($conn,$q);
							if(mysqli_num_rows($res) > 0 )
							{
								while ($row = mysqli_fetch_assoc($res)) 
								{
										if($row['user_name'] == $_POST['username']) 
										{
											echo "<h4>There is a user with this username:" . $row['user_name'];
											break;
										}
										else
											$br = 1;
								}	
							}
							else 
								$br = 1;
							$q = "SELECT `char_name` FROM `characters`";		
							$res = mysqli_query($conn,$q);
							if(mysqli_num_rows($res) > 0 )
							{
								while ($row = mysqli_fetch_assoc($res)) 
								{
										if($row['char_name'] == $_POST['char_name']) 
										{
											echo "<h4>There is a user with this character:" . $row['char_name'];
											break;
										}
										else
											$br2 = 1;
								}	
							}
							else
								$br2 = 1;
							if($br==1 && $br2==1)
								{
										$user_id = 0;
										$race = 0;
										$xp = 100;
										$lv = 1;
										$pass = $_POST['pass'];
										$username = $_POST['username'];
										$char_name = $_POST['char_name'];
										$q = "INSERT INTO `users`(`user_name`,`user_pass`) VALUES ('$username','$pass')";
										mysqli_query($conn,$q);
										$q = "SELECT * FROM `users` WHERE `user_name` = '$username'";
										$res = mysqli_query($conn,$q);
										while ($row = mysqli_fetch_assoc($res)) 
										{
											$user_id = $row['user_id'];
										}
										$q = "INSERT INTO `characters`(`user_id`, `char_name`, `class_id`, `char_xp`, `char_lv`) VALUES ($user_id,'$char_name',$class,$xp,$lv)";
										mysqli_query($conn,$q);
										$success = 1;
										$q = "INSERT INTO `standings`(`games_won`, `games_lost`) VALUES (0,0)";
										mysqli_query($conn,$q);
								}
								if($success=1)
								{
									?>
										<div class="alert alert-success">
		  									<strong>Success!</strong>
										</div>
									<?php
									$_SESSION['username'] = $username;
									 echo '<script>window.location.href = "Home.php";</script>';
								}
							/*echo " <br> race = $race <br>";
							echo "class = $class <br>";
							echo "xp = $xp <br>";
							echo "level = $lv <br>";
							echo "username = $username <br>";
							echo "pass = $pass <br>";
							echo "char_name = $char_name <br>";*/

				}
			}
		?>
		</div>
	<?php

 	include("footer.php");
	?>


