<?php
session_start();

if (!empty($_GET['name'])) {
    $_SESSION['user_name'] = $_GET['name'];
}