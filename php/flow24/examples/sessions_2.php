<?php
session_start();
echo $_SESSION['name'];
//unset($_SESSION['name']);
session_destroy();