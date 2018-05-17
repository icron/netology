<?php
session_start();

if(!empty($_SESSION['user_name'])) {
    echo $_SESSION['user_name'];
}