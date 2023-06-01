<?php require "connect.php";?>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>
    Management Panel
  </title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/assets/img/apple-touch-icon.png">

  <link id="pagestyle" href="<?php  if($_SERVER['REQUEST_URI']!=='/admin_panel/index.php')
  {echo('../assets/css/material-dashboard.css?v=3.0.0');}else{echo('./assets/css/material-dashboard.css?v=3.0.0');} ?>" rel="stylesheet" />

 
