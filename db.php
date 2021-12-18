<?php

try {
	$pdo = new PDO("mysql:host=localhost; dbname=new_db", "admin", "mysql");
} catch (PDOException $e) {
	die($e->getMessage());
}
