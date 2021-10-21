<!DOCTYPE html>
<html>
	<?php
		$host='localhost';
		$username='root';
		$paswd='';
		$dbName='wt_db';
		$con=mysql_connect($host,$username,$paswd);
		if(!$con)
		{
			echo "fail";die("Could not connect ".mysql_error());
		}
		$db=mysql_select_db($dbName,$con) or die(mysql_error());
		$res=mysql_query("INSERT INTO user_info VALUES ('$_POST[fname]','$_POST[lname]','$_POST[age]','$_POST[email]','$_POST[mob]','$_POST[sex]','$_POST[paswrd1]')");
		mysql_close($con);
	?>
	<script type="text/javascript">close();//open('index.html');</script>
</html>