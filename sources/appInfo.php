<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard |GloverLane CMS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/cmssite.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/grid.css"> 
    <link rel="shortcut icon" href="favicon01.png"/>
</head>
<body>
    <nav class="navbar navbar-expand-lg mainNav navbardark sticky-top bg-dark">
        <div class="container">
            <h1 id ="logo">
                <a class="navbar-brand" title="home" href="index.php">GloverLane Solutions</a>
            </h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#gloverNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""><i data-feather="menu"></i></span>Menu
            </button>

            <div class="collapse navbar-collapse" id="gloverNav">
                <ul class="navbar-nav ml-auto navComp">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php
    include('Classes/DbCon.php');
    include('Classes/Applicants.php');
    include('Classes/Applicant.php');

?>
    <div class="container">
        <div class="row rest pt-4">
            <div class="head">
                <h2 class="ml-3 mb-3">Applicant details</h2>
            </div>
            <?php 
            
                $appDetail = Applicant::getAppById($_GET['id']);
                
            ?>
            <div class="appDetail">
                <input type="hidden" name="id" value="<?=$appDetail->id?>"/>
                <p>Full Name: <span><?=$appDetail->fullName?></span></p>
                <p>Email Address: <span></span></p>
                <p>Portfolio Link: <span></span></p>
                <p>Resume File: <span></span></p>
                <p>Message: <span></span></p>
                </div>
            </div>    
        </div>
    </div>
</body>
</html>