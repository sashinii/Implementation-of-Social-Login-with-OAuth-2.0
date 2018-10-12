<?php

session_start();

require_once "Facebook/autoload.php";

$FB = new \Facebook\Facebook([
  'app_id' => '2195264157463853',
  'app_secret' => 'dab5bae450c7629aae4538f5098fdd48',
  'default_graph_version' => 'v3.1',
  ]);

$helper = $FB->getRedirectLoginHelper();

?>