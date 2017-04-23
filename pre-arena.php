
<?php
	include_once('header.php');
	include_once('conn.php');
?>

<script
			  src="https://code.jquery.com/jquery-3.2.1.js"
			  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
			  crossorigin="anonymous"></script>
<div id="wrapper">			  
	<div id="container">
	<?php
		$user_id = $_SESSION['user_id'];
		/*if (strlen($_SESSION['error']) > 1) {
			echo '<div class="alert alert-warning">
		  <strong>'.$_SESSION['error'].'</strong>
				</div>';
		}  */

	$read_query = "SELECT *
		FROM  characters
		JOIN users ON `users`.`user_id` = `characters`.`user_id`
		JOIN class ON `characters`.`class_id` = `class`.`class_id`
		JOIN race ON `class`.`race_id` = `race`.`race_id`
		WHERE `characters`.`user_id` = $user_id
	";

	$read_result = mysqli_query($conn, $read_query);
	
	if (mysqli_num_rows($read_result) > 0) {	
		$res = mysqli_query($conn, $read_query);		
		if (mysqli_num_rows($res) > 0) { 
			while ($row = mysqli_fetch_assoc($read_result)) {
				$row1= mysqli_fetch_assoc($res);
				// var_dump($row1);
				echo "<h2>info:</h2>  <br>";
				echo "<p id='first'>User : <span class='data'>".$row['user_name']."</span></p> <p id='second'>Char name :  <span class='data'>".$row['char_name']."</span></p> <p id='third'>Race :
				 <span class='data'>".$row['race_name']."</span></p><p id='fourth'>Class : <span class='data'>".$row['class_name']."</span></p> <p id='fifth'>LVL: <br><span class='data'>".$row['char_lv']."</span></p>";
				// var_dump($row);
				 $char_lvl = $row['char_lv'];
				 $char_class = $row['class_id'];
			}
		}
	}

	$magicsQuery = "SELECT *
		FROM magics
		 JOIN magic_type ON `magic_type`.`type_id` = `magics`.`magic_type`
		 JOIN race ON `race`.`race_id` = `magics`.`class_id` WHERE `magics`.`magic_req_lv` <=  $char_lvl AND `magics`.`class_id` = $char_class";
	$magics = mysqli_query($conn, $magicsQuery);
?>

<?php if (mysqli_num_rows($magics) > 0) : ?>
<form action="arena.php" method="GET">
	<p id="choose">Choose magic for the battle!</p>
	<div id="magics">
		<?php
		$magics = mysqli_query($conn, $magicsQuery);
		$magicsCounter = 0;	
		$magicSpacer = false;
		if (mysqli_num_rows($magics) > 0) : 
			while ($magic = mysqli_fetch_assoc($magics)) : ?>
			<?php if (($magicsCounter % 2) == 0) : $magicSpacer = false; ?>
				<div class="row">
			<?php endif; ?>
			<?php  if (($magicsCounter % 2) == 0) : ?> 
			<div class="magic-item col-md-5 text-right">
				<label class="text" for="<?php echo $magic['magic_name']; ?>">
					<?php echo $magic['magic_name']; ?>
				</label>
				<input id="<?php echo $magic['magic_name']; ?>" type="checkbox" name="chosen_magics[]" value="<?php echo $magic['magic_id']; ?>">
				<label for="<?php echo $magic['magic_name']; ?>">
					<img src="<?php echo $magic['magic_avatar']; ?>">
				</label>
			</div>
			<?php else :?>
			<div class="magic-item col-md-5 text-left">
				<label for="<?php echo $magic['magic_name']; ?>">
					<img src="<?php echo $magic['magic_avatar']; ?>">
				</label>
				<input id="<?php echo $magic['magic_name']; ?>" type="checkbox" name="chosen_magics[]" value="<?php echo $magic['magic_id']; ?>">
				<label class="text" for="<?php echo $magic['magic_name']; ?>">
					<?php echo $magic['magic_name']; ?>
				</label>
			</div>
			<?php endif; ?>
			<?php if (!$magicSpacer) : $magicSpacer = true; ?>
				<div class="col-md-2"></div>
			<?php endif; ?>
			<?php if (($magicsCounter % 2) != 0) : ?>
				</div><!-- end of row -->
			<?php endif; ?>
			<?php $magicsCounter++; endwhile; ?>
		<?php endif; ?>
		</div>
		<p id='dificulty'>Dificulty:</p>
		<p id="radio">
			<input type="radio" name="dificulty" value="easy" checked> Easy<br>
			<input type="radio" name="dificulty" value="medium"> Medium<br>
			<input type="radio" name="dificulty" value="hard"> Hard <br>
		</p>

		<input type="hidden" class="start_button" name="start" value="start">
		<button type="submit" style="background:url(img/start_button.png);height:42px;width:129px; border: none; margin-left: 46%;"></button>';

	</div>
 
</form>
<?php endif; ?>

<script type="text/javascript">

$('input[type=checkbox]').on('change', function (e) {
    if ($('input[type=checkbox]:checked').length > 4) {
        $(this).prop('checked', false);
    }
});
</script>
	</div> <!-- END OF wrapper-->
 <!--  END OF WRAPPER  -->	

<?php
	include_once('footer.php')
?>