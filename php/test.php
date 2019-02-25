<?php
include 'db.php';
$results = $c->query("SELECT * FROM drivers");
while ($row = $results->fetch_assoc()) {
	echo $row["email"] . "<br/>";
}