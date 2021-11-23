<?php
$DB_HOST = 'localhost';
$DB_USER = 'obl';
$DB_PASSWORD = 'obli1234';
$DB_DATABASE = 'idukan';


$link = new mysqli($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_DATABASE);

// Check connection
if ($link -> connect_errno) {
  echo "Failed to connect to MySQL: " . $link-> connect_error;
  exit();
}
?>