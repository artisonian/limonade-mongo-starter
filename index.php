<?php
require_once 'lib/limonade.php';

/* Configuration
----------------------------------------------------------------------------------------- */
function configure()
{
  $localhost = preg_match('/\.local$/', $_SERVER['HTTP_HOST']);
  $env = $localhost ? ENV_DEVELOPMENT : ENV_PRODUCTION;
  option('env', $env);
  option('lib_dir', dirname(__FILE__) . '/lib');

  try {
    $connection = new Mongo();
  } catch (MongoConnectionException $e) {
    halt("<p><strong>Could not connect to database:</strong> $e</p>");
  }
  option('mongo', $connection);
}

/* Pre-controller hook function
----------------------------------------------------------------------------------------- */
function before()
{
  set('site_title', 'Limonade + MongoDB Starter');
  layout('layouts/default.html.php');
}

/* Routes
----------------------------------------------------------------------------------------- */
dispatch('/', 'home');
function home()
{
  // $mongo = option('mongo');
  return html('index.html.php');
}

/* Run the application
----------------------------------------------------------------------------------------- */
run();
