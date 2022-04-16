<?php
define('DB_SERVER','3.132.234.157');
define('DB_USER','long34');
define('DB_PASS' ,'123@123a');
define('DB_NAME', 'shopping');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
