<?php
include("connect.php");
$sql="UPDATE media set delete_status='1' where id='".$_GET['id']."'";
header('location:media.php');
echo 'Deleted successfully.';
if($conn->query($sql))
{
	echo "Record Deleted";
}else
{
	echo "Not Deleted";
}
