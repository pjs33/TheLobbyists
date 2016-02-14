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
      height: 448px;
      box-shadow: 0 0 10px #888888;
      border-radius: 0px 0px 10px 10px;
      background: white;
      text-align: center;
      padding-top: 30px;
      padding-left: 30px;
      padding-right: 30px;
    }

    body {
      background: #f2f2f2;
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

    #textInfo {
      margin-top: 15px;
    }
    #peopleDonating, #moneyRaised, #remainingGoal {
      font-size: 30pt;
      color: #5cb85c;
      width: 380px;
      margin-left: auto;
      margin-right: auto;
    }
    #start_donation {
      margin: 30px 50px 20px 50px;
      width: 250px;
      height: 50px;
    }
    #facebookButton, #twitterButton {
      width: 200px;
    }
    #facebookButton {
      margin-left: 10px;
    }
    
    .textInfo {
     	width:100%
    
    }
    
   #text-para{
   		width:100%;
   		float:center;
   		padding: 10px;
   }
   #picture{
   		width:50%;
   		/*float:right;*/
   		padding-top: 50px;
   		
   }

   #box {
      width:450px;
      margin:5px auto 20px auto;
      padding:0px 0px 20px 0px;
      padding-top:20px;
   }

   #box input {
      margin-top:10px;
   }

  </style>

  </head>
  <body>
    <?php
      require_once("view_components/navbar.php");
    ?>

    <div id="bodyContent">
      <h2 id="issue-name">Career Opportunities</h2>
 

          <div class="textInfo">
            
              <div id="text-para"> 
              
              <h2>Oops!</h2>
              		
              <h4>There doesn't seem to be anything here. (._.)</h4>
              <h4>Please try again later!</h4>

	           </div>
	           
	           <div id="picture">
	           		
	           
	           </div>
            <br>
        
        </div> <!--topInfo end-->
      </div> <!--bodyContent end-->
       <?php
      require_once("view_components/footbar.php");
    ?>
      

  </body>
</html>