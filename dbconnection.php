<?php
$mysqli = new mysqli("project.cncgeui5pzsg.us-east-1.rds.amazonaws.com","admin","intel123","intel");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
