<?php
	include("header.php");
?>
<?php
		$username = $_SESSION['username'];
		$q = "SELECT `user_id` FROM `users` WHERE `user_name` = '$username' ";
		$res = mysqli_query($conn,$q);
		while ($row = mysqli_fetch_assoc($res)) 
		{
			$user_id = $row['user_id'];
		}
		$q = "SELECT `char_xp`,`char_lv`,`char_id` FROM `characters` WHERE `user_id` = $user_id";
		$res = mysqli_query($conn,$q);
		while ($row = mysqli_fetch_assoc($res)) 
		{
			$char_id = $row['char_id'];
			$_SESSION['xp']  = $row['char_xp'];
			$_SESSION['lv']  = $row['char_lv'];
		}
		$q = "SELECT `class_id` FROM `characters` WHERE `user_id` = $user_id";
		$res = mysqli_query($conn,$q);
		while ($row = mysqli_fetch_assoc($res)) 
		{
			$class_id  = $row['class_id'];
		}
		$q = "SELECT `class_avatar` FROM `class` WHERE `class_id` = $class_id";
		$res = mysqli_query($conn,$q);
		while ($row = mysqli_fetch_assoc($res)) 
		{
			$class_avatar  = $row['class_avatar'];
		}
	$_SESSION['xp']+= $_POST['xp'];
	$wins = $_POST['win'];
	if(eligable_for_level($_SESSION['xp'],$_SESSION['lv']))
		$_SESSION['lv']++;
	$char_xp = $_SESSION['xp'];
	$char_lv = $_SESSION['lv'];
	$q = "UPDATE `characters` SET `char_xp`= $char_xp , `char_lv` = $char_lv WHERE `user_id`= $user_id";
		mysqli_query($conn,$q);
	if($wins==1)
	{
	$q = "UPDATE `standings` SET `games_won` = `games_won`+1 WHERE `char_id`= $char_id";
	mysqli_query($conn,$q);
	}
	else
	{
		$q = "UPDATE `standings` SET `games_lost` = `games_lost`+1 WHERE `char_id`= $char_id";
	mysqli_query($conn,$q);
	}
	?>
	<div id=arena2_end>
	<?php
	/*echo $_POST['xp']."<br>";
	echo $_POST['win']."<br>";*/
	echo "<h2>Hello, ";
	echo $_SESSION['username'];
	echo "</h2>";
	if($wins==1)
	{
		echo "<h2>";
		echo "Congratulations, you have won!";
		echo "Rewards:" . $_POST['xp'] . "xp";
		echo "</h2>";
	}
	else
	{
		echo "<h2>";
		echo "Don't give up! <br>";
		echo "Rewards:" . $_POST['xp'] . "xp";
		echo "</h2>";
	}
	?>
	</div>
	<?php
	echo '
			<div class="profile_box avatar" id="arena2_avatar">
				<img src="' . $class_avatar . '" alt="' . $row['class_name'] . '">
			</div>
			';
?>
<?php
 	include("footer.php");
?>