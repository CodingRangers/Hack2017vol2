<?php
include_once('header.php');

?>

<!-- banner -->
	<div class="banner">
			<!--Slider-->
		<div style="margin-bottom: 50px;" class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="slider-img">
							<img src="images/banner1.jpg" class="img-responsive" alt="Fantasy World">
						</div>
						<div class="slider-info">
							
							<h4>Human</h4>
							  <p>The power of mind</p>
							<a href="#projects" class="hvr-shutter-in-horizontal scroll">Read More</a>
						</div>
					</li>
					<li>
						<div class="slider-img">
							<img src="images/banner2.jpg" class="img-responsive" alt="Fantasy World">
						</div>
						<div class="slider-info">
						 
							<h4>Creatures</h4>
							   <p>The big boys</p>
					<a href="#projects" class="hvr-shutter-in-horizontal scroll">Read More</a>
						</div>
					</li>
					<li>
						<div class="slider-img">
							<img src="images/banner3.jpg" class="img-responsive" alt="Fantasy World">
						</div>
						<div class="slider-info">
							
							<h4>Mage</h4>
						   <p>Powerful and unstoppable</p>
						<a href="#projects" class="hvr-shutter-in-horizontal scroll">Read More</a>
						</div>
					</li>


				</ul>
				
			</div>
			<div class="clearfix"></div>
		</div>
		<!--//Slider-->
	</div>
<!-- //banner -->
<!-- services -->
<div class="services" id="services">
		 <h3 class="w3l_head w3l_head1">How to do</h3>
			         <p class="w3ls_head_para w3ls_head_para1" style="margin-left: 0%;" >Read slowly</p>
		<div class="services-agile-w3l">
		<div class="col-md-3 services-gd text-center">
			<?php
			if(!isset($_SESSION['username']))
			{
			?>
			<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
				<a href="Register.php" class="hi-icon"><img src="images/s1.png" alt=" " /></a>
			</div>
			<h4>Register</h4>
		</div>
			<?php
			}
			else
			{
				?>
				<div class="col-md-3 services-gd text-center">
				<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
					<a href="#" class="hi-icon"><img src="images/s1.png" alt=" " /></a>
				</div>
				</div>
				<?php
			}
			?>
			<h4 style="position: absolute; bottom: -37%;">You are in! :)</h4>
		</div>

       <div class="col-md-3 services-gd text-center">
			<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
				<a href="Login.php" class="hi-icon"><img src="images/s2.png" alt=" " /></a>
			</div>
			<h4>Login</h4>
		</div>
		<div class="col-md-3 services-gd text-center">
			<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
				<a href="#" class="hi-icon"><img src="images/s3.png" alt=" " /></a>
			</div>
			<h4>Create character</h4>
		</div>
		<div class="col-md-3 services-gd text-center">
			<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
				<a href="Arena.php" class="hi-icon"><img src="images/s4.png" alt=" " /></a>
			</div>
			<h4>Play and fight</h4>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //services -->
<!-- projects -->
	<div class="projects" id="projects">
		<div class="container">
			<div class="port-head">
					 <h3 class="w3l_head w3l_head1">Our classes</h3>
			         <p style=" margin-left: 1px;" class="w3ls_head_para w3ls_head_para1">More...coming soon</p>
			</div>
		</div>
		<div class="projects-grids">
				<div class="sreen-gallery-cursual">

			<div id="owl-demo" class="owl-carousel owl-theme">
					<div class="item">
						<div class="projects-agile-grid-info">
							<img src="img/class-knight.jpg" alt="" />
							<div class="projects-grid-caption"> 
								
							<h4>Knight</h4>
							<p>from the past</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="projects-agile-grid-info">
							<img src="img/class-programmer.jpg" alt="" />
							<div class="projects-grid-caption"> 
								
									<h4>Programmer</h4>
									<p>from the future</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="projects-agile-grid-info">
							<img src="img/class-orc.jpg" alt="" />
							<div class="projects-grid-caption"> 
								
								<h4>Orc</h4>
								<p>from nowhere</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="projects-agile-grid-info">
							<img src="img/class-goblin.jpg" alt="" />
							<div class="projects-grid-caption"> 
							
								<h4>Goblin</h4>
								<p>form the center of the earth</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="projects-agile-grid-info">
							<img src="img/class-fire.jpg" alt="" />
							<div class="projects-grid-caption"> 
							
									<h4>Fire mage</h4>
								<p>The master of fire</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="projects-agile-grid-info">
							<img src="img/class-frost.jpg" alt="" />
							<div class="projects-grid-caption"> 
									<h4>Frost mage</h4>
								<p>The master of frost</p>
							</div>
						</div>	
					</div>
			</div>
		</div>
	</div>
	</div>
	<!-- //projects -->
<?php
include_once('footer.php')
?>