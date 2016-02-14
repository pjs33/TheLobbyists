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
      padding-top: 30px;
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
    #currentVoters, #totalNeeded {
      font-size: 30pt;
      color: #5cb85c;
      width: 380px;
      margin-left: auto;
      margin-right: auto;
    }
    #start_donation {
      margin: 100px 50px 20px 50px;
      width: 250px;
      height: 50px;
    }
    #facebookButton, #twitterButton {
      width: 200px;
    }
    #facebookButton {
      margin-left: 10px;
    }


  </style>

  </head>
  <body>
    <?php
      require_once("view_components/navbar.php");
    ?>

    <div id="bodyContent">
      <h2 id="issue-name">Test Title for Voting!</h2>

        <div id="topInfo">

          <div id="mainInfo">
            <div id="pictureContainer">
              <img id="image_main" src="./css/images/default-user.png">
            </div>
            <div id="donationContainer">

              <div><span id="currentVoters">9587</span><br> people want this to be an issue.</div>

              <div><span id="totalNeeded">2487</span><br> people needed to delare this issue.<br><br>20000 total votes needed.</div>
              
              <form method="post">
                <button id="start_donation" type="submit" name="support-issue" class="btn btn-success">Support This Issue!</button>
              </form>
              <img id="facebookButton" src="./css/images/share_on_facebook.png">
              <img id="twitterButton" src="./css/images/share_on_twitter.png">

            </div>
          </div>

          <h2>Issue Info</h2>

          <div id="textInfo">
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
              <br>
              <br>
              It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
            </p>
          </div>
        </div> <!--topInfo end-->
      </div> <!--bodyContent end-->
  </body>
</html>