<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>The Lobbyists</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest JQuerry Google CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href='https://fonts.googleapis.com/css?family=Dancing+Script|Great+Vibes|Lobster+Two|Cookie|Playball' rel='stylesheet' type='text/css'>

    <style type="text/css">
      html, body {
        width: 100%;
        height: 100%;
      }

      header {
        position: relative;
        width: 100%;
        height: 100%;
        background: url(css/images/us_capital_building_blur2.png) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-color: #8c8c8c;
      }

      .navbar {
        width: 100%;
        height: 50px;
        border-bottom: 1px solid #e7e7e7;
      }

      .navbar a {
        color: white;
        font-weight: 700;
        font-size: 18px;
        text-shadow: 0 0 5px #595959;
        text-decoration: none;
        margin-right: 20px;
        text-transform: uppercase;
      }

      .navbar a:hover {
        color: #e7e7e7;
      }

      #navbar-left {
        width: 200px;
        line-height: 45px;
        padding-left: 20px;
        float: left;
      }

      #navbar-right {
        width: 467px;
        line-height: 45px;
        padding-left: 20px;
        float: right;
      }

      .affix {
        background-color: #ab0520;
        border: none;
        z-index: 1000;
      }

      .header-content {
        text-align: center;
        position: absolute;
        top: 20%;
        width: 100%;
      }

      h1 {
        margin: 0px;
        color: white;
        font-weight: 700;
        font-size: 100px;
        text-transform: uppercase;
        font-family: 'Lobster Two', cursive;
        text-shadow: 0 0 10px #595959;

      }

      header hr {
        width: 300px; 
        border: 1px solid #ab0520;
        margin-top: 40px; 
        margin-bottom: 20px;
        box-shadow: 0 0 10px #b3b3b3;
      }

      .subheader {
        color: #153e84;
        font-weight: 700;
        font-size: 40px;
        text-transform: uppercase;
        text-shadow: 0 0 10px #b3b3b3;
      }

      .slogan {
        color: white;
        font-weight: 700;
        font-size: 25px;
        text-transform: uppercase;
        text-shadow: -1px 0 10px #595959, 0 1px 10px #595959, 1px 0 10px #595959, 0 -1px 10px #595959;
        margin-top:-10px;
      }

      header button {
        margin-top: 55px;
        padding-top: 15px;
        padding-bottom: 15px;
        padding-right: 40px;
        padding-left: 40px;
        border: 0px;
        border-radius: 50px;
        background-color: #ab0520;
        color: white;
        font-weight: 700;
        font-size: 20px;
        text-transform: uppercase;
      }

      header button:hover {
        background-color: #df072a;
      }

      #about {
        background-color: #666666;
        width: 100%;
        height: 600px;
        position: relative;
      }

      #about-content {
        position: absolute;
        top: 50px;
        width: 100%;
        text-align: center;
      }

      #about-content h2 {
        margin: 0px;
        color: white;
        font-weight: 700;
        font-size: 27px;
      }

      #about hr {
        width: 100px; 
        border: 1.5px solid #153e84;
        margin-bottom: 40px;
      }

      #about-content p {
        color: rgba(255,255,255,.7);
        font-weight: 500;
        font-size: 18px;
        line-height: 1.5;
        font-family: Merriweather,'Helvetica Neue',Arial,sans-serif;
        max-width: 800px;
        margin: auto;
      }

      .step {
        display: inline-block;
        color: white;
        padding-left: 20px;
        padding-right: 20px;
        width: 300px;
        vertical-align: top;
      }

      .step h3 {
        color: white;
        font-weight: 700;
        font-size: 20px;
        text-transform: uppercase;
      }

      .step-icon {
        width: 150px;
        height: 150px;
      }

      #issues {
        background-color: white;
        width: 100%;
        height: 500px;
        position: relative;
      }

      .circle {
        width: 200px;
        height: 200px;
        border-radius: 100px;
        border: 3px white solid;
        margin: auto;
        text-align: center;
        box-shadow: 0 0 15px #b3b3b3;
      }

      .circle img {
        position: relative;
        top: 50%;
        transform: translateY(-50%);
      }

      #about button {
        margin-top: 30px;
        padding-top: 15px;
        padding-bottom: 15px;
        padding-right: 40px;
        padding-left: 40px;
        border: 0px;
        border-radius: 50px;
        background-color: #153e84;
        color: white;
        font-weight: 700;
        font-size: 20px;
        text-transform: uppercase;
      }

    </style>

  </head>
  <body>

    <header>
      <nav class="navbar" data-spy="affix" data-offset-top="0">
        <div id="navbar-left">
          <a href="#">Sign-up</a>
          <a href="#">Login</a>
        </div>

        <div id="navbar-right">
          <a href="#">Take Action</a>
          <a href="#">Discuss</a>
          <a href="#">About</a>
          <a href="#">Contact</a>
        </div>
      </nav>

      <div class="header-content">
        <h1>The <br> Lobbyists</h1>
        <hr>
        <p class="subheader">Crowdfunded Lobbying</p>
        <p class="slogan">Giving power to the people</p>
        <button type="button">How It Works</button>
        <br>
        <span class="glyphicon glyphicon glyphicon-menu-down" aria-hidden="true"></span>
      </div>
      
    </header>

    <div id="about">
      <div id="about-content">
        <h2>How do we make the politicians listen?</h2>
        <hr>
        <div class="step">
          <div class="circle">
            <img src="/TheLobbyists/css/images/lightbulb_icon.png" class="step-icon">
          </div>
          <h3>Support An Idea</h3>
          <p>The American people support an idea for a bill that they want to become law.</p>
        </div>
        <div class="step">
          <div class="circle">
            <img src="/TheLobbyists/css/images/crowdfunding_icon2.png" class="step-icon">
          </div>
          <h3>Crowdfund The Cause</h3>
          <p>We start a corwdfunded campaign to reach politicians with the most supported ideas.</p>
        </div>
        <div class="step">
          <div class="circle">
            <img src="/TheLobbyists/css/images/handshake_icon.png" class="step-icon">
          </div>
          <h3>Hire A Lobbyist</h3>
          <p>We hire a professional lobbyist to draft a bill that is supported by the people.</p>
        </div>
        <div class="step">
          <div class="circle">
            <img src="/TheLobbyists/css/images/bill_icon.png" class="step-icon" style="width:130px;height:130px;">
          </div>
          <h3>Pass The Bill</h3>
          <p>The lobbyist will work directly with legislatures to pass the bill.</p>
        </div>
        <br>
        <button type="button">Find Out More</button>
      </div>
    </div>

    <div id="issues">
    </div>

  </body>
</html>