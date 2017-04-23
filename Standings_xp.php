<?php
	include("header.php");
?>
	<a class=sort href="Standings_xp.php">Sort by XP</a>
	<a class=sort href="Standings_wins.php">Sort by wins</a>
	<table class="container_table">
	<tr>
		<th>Position</th>
		<th>Avatar</th>
		<th>Username</th>
		<th>Hero Name</th>
		<th>Class Name</th>
		<th>XP</th>
		<th>Level</th>
		<th>Games won</th>
		<th>Games lost</th>
	</tr>
	<?php
		$q = "SELECT *
			FROM  `characters`
			JOIN `users` ON `users`.`user_id` = `characters`.`user_id`
			JOIN `class` ON `class`.`class_id` = `characters`.`class_id`
			JOIN `race` ON `class`.`race_id` = `race`.`race_id`
			JOIN `standings` ON `standings`.`char_id` = `characters`.`char_id`
			ORDER BY char_xp DESC";
		$res = mysqli_query($conn,$q);
		$rows = mysqli_num_rows($res);
		for ($i=1; $i < 11; $i++) 
		{ 
			$row = mysqli_fetch_assoc($res);
			?>
				<tr>
					<td class=hover><?php echo $i?></td>
					<td id=img_standings_td><?php echo "<img id=img_standings src='". $row['class_avatar'] . "'>"?></td>
					<td class=hover><?php echo $row['user_name'] ?></td>
					<td class=hover><?php echo $row['char_name'] ?></td>
					<td class=hover><?php echo $row['class_name'] ?></td>
					<td class=hover><?php echo $row['char_xp'] ?></td>
					<td class=hover><?php echo $row['char_lv'] ?></td>
					<td class=hover><?php echo $row['games_won'] ?></td>
					<td class=hover><?php echo $row['games_lost'] ?></td>
				</tr>
			<?php
		}
	?>
	</table>
<?php
	

		/*echo "<pre>";
		var_dump($res);
		echo "</pre>";*/

	include("footer.php");
?>