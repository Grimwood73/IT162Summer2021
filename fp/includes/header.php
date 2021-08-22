<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en"><head>
  <title><?=$title?></title>
  <meta name="viewport" content="width=device-width">
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/forms.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;900&display=swap" rel="stylesheet">

  <!-- <script src="https://use.fontawesome.com/d783775c0d.js"></script> -->
  
 </head>
 <body>
     <header>
     <h1><a href="index.php">Ground Control Studios</a></h1>
     <nav class="topnav" id="myTopnav">
        <?=makeLinks($nav1)?>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">☰</a>
     </nav>
     </header>
     
   <div class="wrapper">
      <h2 class="pageID"><?=$PageID?></h2>
       <!-- header ends here -->