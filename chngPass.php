<?php
include_once('connection.php');
error_reporting(1);
$id=$_SESSION['sid'];
$op=$_POST['op'];
$np=$_POST['np'];
$cp=$_POST['cp'];
if(isset($_POST['chngP']))
{
	if($op=="" || $np=="" || $cp=="")
	{
	$err="Fill all the fields first";
	}
	else
	{
		$sql="select * from info where username ='$id'";
		$d=mysqli_query($con,$sql);
		list($a,$b,$c)=mysqli_fetch_array($d);
		if($c==$op)
		{
			if($np==$cp)
			{
			$sql="update info set pwd='$np' where username='$id'";
		$d=mysqli_query($con,$sql);
		echo "Password updated...";
			}
			
			else
			{
			echo "New password doesn't match to confirm password";
			}
		}
		else
		{
		echo "Wrong old password";
		}
	}
		
}
?>
<body>
<form method="post">
<table width="365" align='center' border="1">
  <tr>
  <?php echo $err; ?>
    <th width="173" scope="row">Old Password </th>
    <td width="176">
		<input type="password" name="op"/>
	</td>
  </tr>
  <tr>
    <th scope="row">New Password </th>
    <td>
			<input type="password" name="np"/>
	</td>
  </tr>
  <tr>
      <th scope="row">Confirm Password </th>
    <td><input type="password" name="cp"/></td>
  </tr>
<tr>
    <td colspan="2" align="center">
	<input type="submit" name="chngP" value="Change Password"/></td>
  </tr>
  
</table>
</form>
</body>
