<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en"><head>
  <title><?=$title?></title>
  <meta name="robots" content="noindex,nofollow">
  <meta name="viewport" content="width=device-width">
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/portal.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/forms.css">
  <script src="https://use.fontawesome.com/d783775c0d.js"></script>
  
 </head>
 <body>
     <header>
     <h1><a href="index.php"><i class="logo fa <?=$logo?>"<?=$logo_color?>></i>Jonah's IT162 Website</a></h1>
     <nav class="topnav" id="myTopnav">
       <?=makeLinks($nav1)?>
       <!-- <a href="index.php" class="active">Welcome</a>
       <a href="big/index.php">BIG</a>
       <a href="aia.php">AIA</a>
       <a href="flowchart.php">Flowchart</a>
       <a href="fp/index.php">Final Project</a>
       <a href="contact.php">Contact Jonah</a> -->
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">☰</a>
     </nav>
     </header>
     
   <div class="wrapper">
      <h2 class="pageID"><?=$PageID?></h2>
       <!-- header ends here -->