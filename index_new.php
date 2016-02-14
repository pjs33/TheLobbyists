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
    <link rel="shortcut icon" href="./img/favicon.png" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles/indexstyles_new.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="./scripts/js/pullPopular.js" type="text/javascript"></script>
    

  </head>
  <body>
    <?php
      require_once("view_components/navbar_new.php");
    ?>


    <div id="bodyContent">

      <!-- START COLUMN BUTTONS -->
      <div id="buttonContainer">
        <div class="row">
          <div id="localIssues" class="col-sm-4">
      	    <a type="button" style="font-size: 14pt;" class="btn btn-primary btn-block">Create</a>
          </div>
          <div id="stateIssues" class="col-sm-4">
             <a type="button" style="font-size: 14pt;" class="btn btn-primary btn-block">DESTROY</a>
          </div>
          <div id="nationalIssues" class="col-sm-4">
            <a type="button" style="font-size: 14pt;" class="btn btn-primary btn-block">Create</a>
          </div>
        </div>
      </div>
      <!-- END COLUMN BUTTONS -->

      <div id="popularIssuesContent">

        <div id="popularIssues">

          <?php 
          require_once("./scripts/php/DatabaseAdaptor.php");

          $model = new DatabaseConnection();

          $issuesArray = $model->getAllIssuesALL();
          $currentNum = 1;
          for($i = 0; $i < count($issuesArray); $i++) { ?>
              <a class="issueLink"id="issueLink<?= $currentNum; ?>" style="display: inline-block;width: 280px;height: 280px;" href="http://localhost/HackArizona/issue_view.php?i= <?= $issuesArray[$i]["issue_id"]; ?>">
              <div class="issue">
                <h3 id="issueTitle<?= $currentNum; ?>" style="font-size: 15pt;"><?= $issuesArray[$i]["issue_name"]; ?></h3>
                <img id="imgThumb<?= $currentNum; ?>" src="<?= $issuesArray[$i]["picture"]; ?>" class="img-circle" alt="imgThumb<?= $currentNum; ?>" width="200" height="200">
              </div></a>

          <?php
            $currentNum++;
            }
           ?>
          <!--Javascript should fill this in from pullPopular.js-->
        </div>
        <a id="seeAllIssues" style="display: inline-block;" href="#" type="button" class="btn btn-info btn-block">See All Issues</a>
      </div>
    </div>

<?php
      require_once("view_components/footbar.php");
    ?>

  </body>
</html>