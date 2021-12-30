<?php
$mysqli = new mysqli("database-2.cncgeui5pzsg.us-east-1.rds.amazonaws.com","root","intel123","intel");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
