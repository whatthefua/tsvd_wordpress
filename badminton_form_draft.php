<?php
	if(!empty($_POST))
	{
		// process request
		require_once("badminton_db_config.php");

		$con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
	} else {
		// print form
		?>
		<form action="" method="POST">
			<input type="checkbox" name="double" value="true"><input type="text" name="double_partner">
			<input type="checkbox" name="double_mix" value="true"><input type="text" name="double_mix_partner">
			<select name="skill_level">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
		</form>
		<?php
	}
?>