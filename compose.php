<html>
<?php

include_once('connection.php');
error_reporting(1);
@$to=$_POST['to'];
@$sub=$_POST['sub'];
@$msg=$_POST['msg'];
$file=$_FILES['file']['name'];

$id=$_SESSION['sid'];

if(@$_REQUEST['send'])
{
	if($to=="" || $sub=="" || $msg=="")
	{
	$err= "fill the related data first";
	}
	
	else
	{
	$d=mysqli_query($con,"SELECT * FROM info where username='$to'");
	$row=mysqli_num_rows($d);
	if($row==1)
		{
		mysqli_query($con,"INSERT INTO usermail values(NULL,'$to','$id','$sub','$msg','',sysdate())");

		$err= "Message Sent...";
		}
	else
		{
		$sub=$sub."--"."msg failed";
		mysqli_query($con,"INSERT INTO usermail values(NULL,'$id','$id','$sub','$msg','',sysdate())");
		$err= "Message failed...";

		}	
	}
}	


if(@$_REQUEST['save'])
{
	if($sub=="" || $msg=="")
	{
	$err= "<font color='red'>Fill subject and message first</font>";
	}
	
	else
	{
	$query="INSERT INTO draft VALUES(NULL,'$id','$sub','$file','$msg',sysdate())";
	mysqli_query($con,$query);

	}	
}	
?>


<head>
	<style>
	input[type=text]
	{
	width:200px;
	height:35px;
	}
	</style>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<table align="center" width="506" border="1">
  <?php echo @$err; ?>
  <tr>
    <th width="213" height="35" scope="row">To</th>
    <td width="277">
	<input type="text" name="to"  />	</td>
  </tr>
  <tr>
    <th height="36" scope="row">Cc</th>
    <td><input type="text" name="cc"/></td>
  </tr>
  <tr>
    <th height="36" scope="row">Subject</th>
    <td><input type="text" name="sub" /></td>
  </tr>
  <tr>
    <th height="36" scope="row">Upload your file</th>
    <td><font color="orange"><input type="file" name="file" id="file"/></font></td>
  </tr>
  <tr>
    <th height="52" scope="row">Message</th>
    <td><textarea rows="8" cols="40" name="msg"></textarea></td>
  </tr>
  <tr>
    <th height="35" colspan="2" scope="row">
	<input type="submit" name="send" value="Send"/>
	<input type="submit" name="save" value="Save"/>
	<input type="reset" value="Cancel"/>
	</th>
  </tr>
</table>
</body>
</form>
</html>