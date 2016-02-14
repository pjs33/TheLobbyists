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
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 100%;
        margin: auto;
        height: 300px;
    }

    #bodyContent {
      width: 960px;
      margin-left: auto;
      margin-right: auto;
      box-shadow: 0 0 10px #888888;
      border-radius: 0px 0px 10px 10px;
      background: white;
      text-align: center;
      padding-top: 30px;
    }

    body {
      background: #f2f2f2;
    }

    #issue-name {
      margin-top: 20px;
      margin-bottom: 15px;
      text-decoration: underline;
      font-weight: 550;
      font-size: 30pt;
    } 

    #topInfo, .progress {
      width: 900px;
    }
    #textInfo {
      overflow: auto;
    }
    #youtubeVid {
      width: 100%;
      height: 330px;
      background-color: black;
      border-radius: 8px;
    }
    
   #descriptionText{
   		width:48%;
   		padding: 10px;
      float:left;
   }
   #picture{
   		width:48%;
      float:right;
   }


  </style>

  </head>
  <body>
    <?php
      require_once("view_components/navbar.php");
    ?>

    <div id="bodyContent">
        
        <h1 id="issue-name">How It Works</h1>

          <div id="textInfo">
            
              <div id="descriptionText"> 
                <p>
  	              The Lobbyist is a dynamic and exciting new venture dedicated to giving you, 
  	              as a citizen, a voice. Imagine if you could vote and choose topics relevant 
  	              to your local or even state community. It doesn't stop there however, 
  	              imagine if you could also choose and vote for country-wide reforms. The way Lobbyist works is simple:
  	              through voting and crowdfunding, particular issues can be addressed through Lobbying. Through crowdfunding,
  	              professional lobbyists can be hired to speak for you in Washington, rather than waiting for the political machine to address the issue
  	              in question (which could take years). The Lobbyist is meant to switch the power of legislation back to the people
  	              by reaffirming what is important to us as residents of the United States.
                </p>
                <p>
  	              Getting started: go ahead and vote on issues! If there is something you are particularly intrigued by
  	              or want to make an issue of they can also be submitted! Create an account to keep track of your submissions! Submit away!
                </p>
	           </div>
	           
	           <div id="picture">
	           		<img src="https://lh5.ggpht.com/-y_80LZ2D6hbQrnhDyLjMYocM4ZDr0H06IFj5QPiof39wovHPASWp3oUnXMgZw0X5vo=w300" style="width:404px;height:390px;">
	           
	           </div>
        
        </div> <!--topInfo end-->

        <div id="youtubeVid">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/aTbtKRdYbYo" frameborder="0" allowfullscreen></iframe>
        </div>

      </div> <!--bodyContent end-->
       <?php
      require_once("view_components/footbar.php");
    ?>
      

  </body>
</html>