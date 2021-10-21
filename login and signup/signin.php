<!DOCTYPE html>
<html>
	<?php
		$dbName='wt_db';
		$con=mysql_connect('localhost','root','');
		if(!$con)
		{
			die("Could not connect ".mysql_error());
		}
		$em=$_GET['email'];
		//echo $em;
		$pswd=$_GET['password'];
		$db=mysql_select_db($dbName,$con) or die(mysql_error());
		$res=mysql_query('SELECT * FROM user_info 
			WHERE EMail="'.$em.'"');
		while($row=mysql_fetch_array($res))
		{
			if($row['Password']==$pswd)
			{
				echo "Welcome ".$row['FName'];
				$user=$row['FName'];
				break;
			}
		}
		mysql_close($con);
	?>
	<script type="text/javascript">
	localstorage.setItem("user",<?php echo $user ?>)
	close();
	//open('index.html');</script>
</html>