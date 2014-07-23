<?php 
  function getRealIpAddr()
  {
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
  }
  $getip = getRealIpAddr();
  $ipmu = explode(",", $getip);

  $json = array('ip' => "$ipmu[0]", 'ua' => $_SERVER['HTTP_USER_AGENT']);
  echo json_encode($json);
?>
