<?php
session_start();

require "../app/core/init.php";

$app = New App;
$app->loadController();