<?php
include_once('header.php');
// get user id
$username = $_SESSION['username'];
$qry = "SELECT *FROM users JOIN characters ON users.user_id = characters.user_id WHERE users.user_name = '$username'";
$result = mysqli_query($conn, $qry);
if (mysqli_num_rows($result) != 0) {
	$row = mysqli_fetch_array($result);
	$_SESSION['user_id'] = $row['user_id'];
	$_SESSION['class_id'] = $row['class_id'];

}
// end get user id	
?>
<div class="container profile">
	<h3>Profile</h3>
	<?php
	$user_id = $_SESSION['user_id'];
	$read_query = "SELECT * FROM `users`
	JOIN characters ON users.user_id = characters.user_id
	JOIN class on characters.class_id = class.class_id
	JOIN race ON class.race_id = race.race_id
	WHERE users.user_id = $user_id ";
	$read_result = mysqli_query($conn, $read_query);
	if (mysqli_num_rows($read_result) != 0) {
		while ($row = mysqli_fetch_assoc($read_result)) {
			echo '
			<div class="profile_box avatar">
				<img src="' . $row['class_avatar'] . '" alt="' . $row['class_name'] . '">
			</div>
			<div class="profile_box my_info">

				<div class="my_row"><strong>name: </strong>' . $row['char_name'] . '</div>
				<div class="my_row"><strong>lvl: </strong>' . $row['char_lv'] . '</div>
				<div class="my_row"><strong>xp: </strong>' . $row['char_xp'] . '</div>
				<div class="my_row"><strong>race: </strong>' . $row['race_name'] . '</div>
				<div class="my_row"><strong>class: </strong>' . $row['class_name'] . '</div>
				<div class="my_row"><h4>Acquired skills</h4></div>
				';

				//Show MAGICS
				$read_query1 = "SELECT * FROM `characters` 
				JOIN class ON characters.class_id = class.class_id
				JOIN magics ON class.class_id = magics.class_id
				WHERE characters.char_id = " . $_SESSION['user_id'] . " AND magics.magic_req_lv = characters.char_lv";
				$read_result1 = mysqli_query($conn, $read_query1);
				if (mysqli_num_rows($read_result1) != 0) {
					while ($row1 = mysqli_fetch_assoc($read_result1)) {
						echo '
						<div class="my_row"><img src="' . $row1['magic_avatar'] . '" alt="' . $row1['magic_name'] . '"><span>' . $row1['magic_name'] . '</span></div>
						';

					}

				}
			// End MAGICS
				echo "</div>";

			}
		}
		$stats_query = "SELECT * FROM `standings` 
		JOIN characters ON standings.char_id = characters.char_id
		WHERE characters.user_id = " . $_SESSION['user_id'] . "";
		$stats_result = mysqli_query($conn, $stats_query);
		$stats = mysqli_fetch_assoc($stats_result);
		?>
		<div class="profile_box my_stats">
			<div class="my_row"><h4>Stats</h4></div>
			<div class="my_row"><span>Games Won: </span><?= $stats['games_won']?></div>
			<div class="my_row"><span>Games Cost: </span><?= $stats['games_lost']?></div>

		</div>
	</div>


	<?php
	include_once('footer.php')

	?>