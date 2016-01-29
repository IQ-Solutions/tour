<?php
/**
 * Created by PhpStorm.
 * User: msnyder
 * Date: 1/29/2016
 * Time: 11:35 AM
 */

ini_set('display_errors', 'on');
error_reporting(E_ALL);

require 'vendor/mustache/mustache/src/Mustache/Autoloader.php';

Mustache_Autoloader::register();
spl_autoload_register(function ($class) {
  include './classes/' . $class . '.class.php';
});

if (file_exists('config.php')) {
  $config = include('config.php');
}
else {
  echo 'Create config.php from config.example.php';
  exit;
}