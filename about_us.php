<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>The Lobbyists</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <style>

    #bodyContent {
      width: 960px;
      height:100%;
      margin-left: auto;
      margin-right: auto;
      box-shadow: 0 0 10px #888888;
      border-radius: 0px 0px 10px 10px;
      background: white;
      text-align: center;
      padding-top: 30px;
      overflow: auto;
    }

    body, html {
      background: #f2f2f2;
      height: 89.2%;
    }

    #issue-name {
      margin: 0px;
      margin-bottom: 20px;
    } 

    #topInfo, .progress {
      width: 900px;
    }
    #mainInfo {
      overflow: auto;
      font-size: 16pt;
    }
    #pictureContainer, #image_main {
      width: 450px;
      float: left;
      margin-left: 10px;
    }

    #donationContainer {
      width: 430px;
      float: right;
    }
    
   #theTeam{
   		width:50%;
   		float:left;
   		padding: 10px;

   }
   #teamTitle {
    text-decoration: underline;
   }
   #teamPic{
   		float:right;
   		padding-top: 50px;
      padding-right:25px;
   		
   }


  </style>

  </head>
  <body>
    <?php
      require_once("view_components/navbar.php");
    ?>

    <div id="bodyContent">
      <h1 id="issue-name">About Us</h1>
            
        <div id="theTeam"> 
          <h2 id="teamTitle"> Our Team </h2>
          Peter Siqueiros
          <br>
          <br>
          Rubi Ballesteros 
          <br>
          <br>
          Michael Lewelling
          <br>
          <br>
          Daniel Situ
          <br>
          <br>
          Michel Sanchez
          <br>
          <br>
          Andre Takagi      
        </div>

        <img id="teamPic" src="./img/HappyPicture.jpg" width="480" height="290" >
      </div> <!--bodyContent end-->
    <?php
    require_once("view_components/footbar.php");
    ?>
  </body>
   
</html>