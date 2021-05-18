<?php
// header("Content-Type: application/json; charset=UTF-8");
require_once 'functions.php';
$resp = generateSandboxToken();

echo $resp;