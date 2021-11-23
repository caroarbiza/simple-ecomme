<?php
$$DB_HOST = 'localhost';
$$DB_USER = 'root';
$$DB_PASSWORD = 'root';
$$DB_DATABASE = 'idukan';


$link = new mysqli($$DB_HOST,$$DB_USER,$$DB_PASSWORD,$$DB_DATABASE);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $link-> connect_error;
  exit();
}
?>