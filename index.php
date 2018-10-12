<?php

session_start();

if(!isset($_SESSION['access_token'])){
    header('Location: login.php');
    exit();
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="icon.png">

    <title>Index</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <link href="signin.css" rel="stylesheet">
</head>

<body>
    <div class="container" style="margin-top: 100px">
        <div class="col-md-3">
            <img src="<?php echo $_SESSION['userData']['picture']['url'] ?>">
        </div>
        <div class="col-md-9">
            <table class="table table-hover table-bordered">
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td><?php echo $_SESSION['userData']['id'] ?></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><?php echo $_SESSION['userData']['name'] ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $_SESSION['userData']['email'] ?></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td><?php echo $_SESSION['userData']['gender'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

