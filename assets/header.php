<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Peter Kariuki Mutuura ">
    <link rel="icon" href="../images/code.png">

    <title>Simple Time Management System</title>
    <link href="<?php echo empty($path)?'':$path; ?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo empty($path)?'':$path; ?>css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Ceviche+One" rel="stylesheet">

  </head>

  <body>

    <div class="container">
        <h1 style=" margin-left: 30px; font-size:40px;">Simple Time Management System</h1>
        <h1 style=" margin-left: 30px;margin-top: 0px;color: #415d08; font-size: 25px;">
            <?php echo $page ?> 
        </h1>
        <div id="displayresponse" class="alert" 
            style="width: 52%;text-align: center;font-weight: bold; display:none;">
            
        </div>