<?php
	if(!is_user_logged_in())
	{
		echo '<META HTTP-EQUIV="Refresh" Content="2; URL=localhost/wordpress2/login">';  
	} else {
		if(!empty($_POST))
		{
			// process request
			$DB_HOST = "localhost";
			$DB_USER = "root";
			$DB_PASS = "123456789";
			$DB_NAME = "registrations";

			$db = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

			if($db->connect_errno > 0)
			{
				die("Unable to connect to database [" . $db->connect_error . "]");
			}

			$date = date('Y-m-d H:i:s');

			$doubles = ($_POST["doubles"] == "true")? "TRUE": "FALSE";
			$doublesmix = ($_POST["doublesmix"] == "true")? "TRUE": "FALSE";

			$sql = "INSERT INTO d_17_08_05_badminton (userID, doubles, doubles_partner, doublesmix, doublesmix_partner, skill, register_time)" . 
				   " VALUES (" . get_current_user_id() . ", " . $doubles . ", '" . $_POST["doubles_partner"] . 
				   "', " . $doublesmix . ", '" . $_POST["doublesmix_partner"] . "', " . $_POST["skill_level"] . ", '" . $date . "')";

			if(!$db->query($sql))
			{
				die("Unable to insert data [" . $sql . "]<br>[" . $db->connect_error . "]");
			}
		} else {
			// print form
			?>
<html>
	<body>
		<form action="" method="POST">
			ลงแข่งขันประเภทคู่เพศเดียวกัน<input type="checkbox" name="doubles" value="true"><br>
			<p>ชื่อของคู่แข่งขัน<input type="text" name="doubles_partner"></p>
			ลงแข่งขันประเภทคู่ผสม<input type="checkbox" name="doublesmix" value="true"><br>
			ชื่อของคู่แข่งขัน<input type="text" name="doublesmix_partner">

			ความสามารถในการเล่น (1 ดีสุด, 5 แย่สุด)<select name="skill_level">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			<input type="submit" value="ลงทะเบียน">
		</form>
	</body>
</html>
			<?php
		}
	}
?>