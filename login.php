<?php

require_once "config.php";
$redirectURL = "https://localhost/SSS/fb-callback.php";
$permissions = ['email'];
$loginURL = $helper->getLoginUrl($redirectURL, $permissions);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="icon.png">

    <title>Login</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin">

      <img class="mb-4" src="facebook.png" alt="" width="100" height="100" onclick="window.location = '<?php echo $loginURL ?>';">
	  <div>
          <p>Click Facebook icon to Login with Facebook</p>
      </div>


    </form>
  </body>
</html>
