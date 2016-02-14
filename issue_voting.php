<?php 
  require_once("./scripts/php/session_management.php");
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
        height: 700px;
    }

    #bodyContent {
      width: 960px;
      margin-left: auto;
      margin-right: auto;
      height: 1000px;
      box-shadow: 0 0 10px #888888;
      border-radius: 0px 0px 10px 10px;
      background: white;
      text-align: center;
      padding-top: 10px;
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
      margin-top: 50px;
      width: 200px;
      height: 50px;
    }

    #votingHeader {
      margin-bottom: 20px;
    }

    #buttonContainer {
      margin-bottom: 20px;
      padding-left: 20px;
      padding-right: 20px;
    }

    #listOfIssues {
      margin-left: 20px;
      margin-right: 20px;
    }


  </style>

  </head>
  <body>
    <?php
      require_once("view_components/navbar.php");
    ?>

    <div id="bodyContent">

      <button style="margin-left: auto; margin-right: auto;">Submit new issue</button>

      <h2 id="votingHeader">
        Vote on Issues
      </h2>

      <div id="buttonContainer">
        
        <div class="row">
          <div id="localIssues" class="col-sm-4">
            <a type="button" class="btn btn-danger btn-block">Local</a>
            <span id="localCaret" style="color: #d9534f; font-size: 20pt; display: none;" class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span>
          </div>
          <div id="stateIssues" class="col-sm-4">
             <a type="button" class="btn btn-default btn-block">State</a>   
             <span id="stateCaret" style="color: black; font-size: 20pt; display: none;" class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span>
          </div>
          <div id="nationalIssues" class="col-sm-4">
            <a type="button" class="btn btn-primary btn-block">National</a>
            <span id="nationalCaret" style="color: #337ab7; font-size: 20pt; display: none;" class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span>
          </div>
        </div>
      </div>
      <!-- END COLUMN BUTTONS -->

      <div id="listOfIssues">
        
        <div class="panel panel-primary">
            <div class="panel-heading" style="background-color: #0c234b;border-color: #0c234b;">
                <h3 class="panel-title">Issue #1</h3>
            </div>
            <div class="panel-body">Test page for issues to vote on.<a href="http://localhost/HackArizona/voting_view.php"><button style="float: right;">Get info!</button></a></div>

        </div>

        <div class="panel panel-primary">
            <div class="panel-heading" style="background-color: #0c234b;border-color: #0c234b;">
                <h3 class="panel-title">Issue #2</h3>
            </div>
            <div class="panel-body">Test page for issues to vote on.<a href="http://localhost/HackArizona/voting_view.php"><button style="float: right;">Get info!</button></a></div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading" style="background-color: #0c234b;border-color: #0c234b;">
                <h3 class="panel-title">Issue #3</h3>
            </div>
            <div class="panel-body">Test page for issues to vote on.<a href="http://localhost/HackArizona/voting_view.php"><button style="float: right;">Get info!</button></a></div>
        </div>

      </div>



    </div> <!--bodyContent End-->

  </body>
</html>