<?php
session_start();

$name = $_GET['name'] ?? '';
$_SESSION['name'] = $name;
$_SESSION['age'] = 12;