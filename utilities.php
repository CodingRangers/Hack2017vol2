<?php
	function eligable_for_level($xp,$level)
	{
		$a = $level*100+50;
			return $xp>$a;
	}
?>