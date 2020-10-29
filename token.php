<?php
function generateRandomString($length = 25) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function generateToken() {//génère le token
  return generateRandomString();
}

function verifyToken($token) { //verifie le token
  //echo "token : ".var_dump($token);
//  echo "session_token : ".var_dump($_SESSION['token']);
  if(!isset($_SESSION['token']))
    return false;
  if(!isset($token))
    return false;
  if(strcmp($_SESSION['token'], $token) == 0)
    return true;
  return false;
}

function attributeToken() {
  if(!isset($_SESSION['token'])) {
    $_SESSION['token']=generateToken();
  }
}

function SessionStop() {
  if(isset($_SESSION['token']))
    unset($_SESSION['token']);
}
