<?php
const HOST = '13.233.101.56'; // e.g., '172.31.XX.XX' or 'ec2-XX-XX-XX-XX.compute.amazonaws.com'
const USERNAME = 'todo_user';
const PASSWORD = 'admin';
const DBNAME   = 'todo';

$dbcon = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);

if ($dbcon->connect_error) {
    die("Connection failed: " . $dbcon->connect_error);
}

// Optional: echo success
echo "Connected successfully";
?>
