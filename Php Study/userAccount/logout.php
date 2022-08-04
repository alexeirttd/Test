<?php
require_once dirname(__DIR__) . '/logic/logic.php';
unset($_SESSION['signInUser']);
header('Location: home.php');
exit;