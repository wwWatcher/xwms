<?php
  // Ensure we have session
  if(session_id() === ""){ session_start(); }
  // the config file path
  $path = ROOT . DS . 'config' . DS . 'config.php';
  
  // include the config settings
  require_once ($path);
  require_once (ROOT.DS.'app'.DS.'auth.class.php');
?>
