<?php

function generateToken() {//génère le token
  return md5(uniqid(microtime(),true) time());
}

function verifyToken($token) { //verifie le token
  if(!isset($_SESSION['token']))
    return false;
  if(!isset($_POST['token']))
    return false;
  if($_SESSION['token']!==$token)
    return false;
  return true;
}

function SessionStart() {
  if(!session_id()) {
    @session_start();
    $_SESSION['tokenID']=generateToken();
  }
}

function SessionStop() {
  if(isset($_SESSION['tokenID']))
    unset($_SESSION['tokenID']);
  if(isset($_SESSION['melChamps']))
    unset($_SESSION['melChamps']);
}
