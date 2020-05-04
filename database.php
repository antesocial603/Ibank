<?php
$connect=mysqli_connect('localhost', 'root', '', 'ibank');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 
?>
