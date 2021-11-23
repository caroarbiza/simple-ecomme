<?php
$DB_HOST = 'localhost';
$DB_USER = 'obl';
$DB_PASSWORD = 'obli1234';
$DB_DATABASE = 'idukan';
$PORT = 3306;


$link = new mysqli($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_DATABASE,$PORT);

// Check connection
if ($link -> connect_errno) {
  echo "Failed to connect to MySQL: " . $link-> connect_error;
  exit();
}
?>