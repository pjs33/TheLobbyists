<?php 
  require_once("/scripts/php/session_management.php");
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

    <script>
    /*
    $(document).ready(function() {
      var peopleDonating = Math.floor(Math.random() * 9999) + 1;
      var moneyRaised = Math.floor(Math.random() * 9999) + 1;
      var remainingGoal = Math.floor(Math.random() * 9999) + 1;

      while (remainingGoal > moneyRaised) {
        var remainingGoal = Math.floor(Math.random() * 9999) + 1;        
      }

      $("#peopleDonating").text(peopleDonating);
      $("#moneyRaised").text("$"+ moneyRaised);
      $("#remainingGoal").text("$"+ remainingGoal);

      var total = moneyRaised+remainingGoal;
      var difference = (moneyRaised / total)*100;
      var temp = difference.toString();
      if (difference > 10) {
        var percentage = temp.substring(0, 2);
      } else {
        var percentage = temp.substring(0, 1);
      }
      

      $("#donationsTotal").css("width", difference+"%");
      $("#donationsTotal").text("Donations "+percentage+"% Complete.");

    });
    */
    </script>


    
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
    }

    body {
      background: #f2f2f2;
    }

    #bodyContent input {
      margin-top:10px;
    }

    #bodyContent select {
      margin-top:10px;
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
      width:50%;
      float:left;
      padding: 10px;
   }
   #picture{
      width:50%;
      float:right;
      
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
        <div id="box" class="well">
          <h3 id="issue-name">Issue Submission Form</h3>
            <form action="/HackArizona/scripts/php/controller.php" method="post">
              <input type="text" name="issue_name" placeholder="Issue Name"><br>

              <select>
                <option value="local">Please select the scope of your issue.</option>
                <option value="local">Local Level</option>
                <option value="state">State Level</option>
                <option value="national">National Level</option>
              </select><br>

              <select>
                <option value="1000">Please select the target goal amount.</option>
                <option value="1000">$1,000</option>
                <option value="10000">$10,000</option>
                <option value="50000">$50,000</option>
                <option value="100000">$100,000</option>
                <option value="250000">$250,000</option>
                <option value="500000">$500,000</option>
                <option value="1000000">$1,000,000</option>
              </select><br>

              <input type="text" name="picture" placeholder="Picture URL"><br>
              <input type="text" name="lobbyist_username" placeholder="Lobbyist Username"><br>

              <?php if( isset($_GET["failed"]) ) { ?>
              <p style="color:red;margin-top:10px;margin-bottom:0px;">Invalid Lobbyist Username</p>
              <?php } ?>  


              <input type="submit" value="Submit Issue" name="send_issue">
            </form>
          </div>
      </div> <!--bodyContent end-->

<?php
  require_once("view_components/footbar.php");
?>  

  </body>
</html>