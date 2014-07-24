<?php 
// MINIFY HTML
function sanitize_output($buffer)
{
    $search = array(
        '/ {2,}/',
        '/<!--.*?-->|\t|(?:\r?\n[ \t]*)+/s'
    );
    $replace = array(
        ' ',
        ''
    );
  $buffer = preg_replace($search, $replace, $buffer);
    return $buffer;
}
ob_start("sanitize_output");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Online IP checker by @gojigeje">
    <meta name="author" content="Ghozy Arif Fajri - gojigeje@gmail.com">
    <link rel="icon" href="css/favicon.png">

    <title>What is My IP Address? ~ app by @gojigeje</title>

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/cosmo/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <p class="lead">Your local IP address:</p>
        <h1 id="list">-</h1>
      </div>
      <p class="lead">User Agent: <?=$_SERVER['HTTP_USER_AGENT']?></p>
      <br>
      <p><a href="./">View your public IP address</a>.</p>
    </div>

    <div class="footer">
      <div class="container">
        <p class="text-muted">made by <a href="http://twitter.com/gojigeje" target="_blank">@gojigeje</a></p>
      </div>
    </div>

    <script src="js/local.js"></script>

  </body>

</html>
