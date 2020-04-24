<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page|GloverLane CMS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/cmssite.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/grid.css"> 
    <link rel="shortcut icon" href="favicon01.png"/>
</head>
<body>
    <div class="wrapper container-fluid d-flex justify-content-center align-items-center">
        <form action="processLogin.php" method="POST" class="formData">
            <div class="formTitle">
                <h1>Sign In</h1>
            </div>
            <div class="formGroup">
                <label for="userName">User Name</label>
                <input type="text" id="userName" class="form-control" name="username" required autofocus>
            </div>
            <div class="formGroup">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" name="password" required autofocus>
            </div>
            <div class="cta">
                <input type="submit" value ="Sign In" class="btn btnPri">
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>