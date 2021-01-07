<?php
require_once('connection.php');
session_start();

if (isset($_GET['c'])) {
  $controller = $_GET['c'];
  if (isset($_GET['a'])) {
    $action = $_GET['a'];
  } else {
    $action = 'index';
  }
} else {
  $controller = 'dashboard';
  $action = 'index';
}
require_once('routes.php');