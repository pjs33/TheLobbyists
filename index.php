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
        background-color: #bfbfbf;
      }

      .navbar {
        width: 100%;
        height: 50px;
        border-bottom: 1px solid #e7e7e7; 
        background-color: #ab0520;
      }

      .navbar a {
        color: #e7e7e7;
        font-weight: 700;
        font-size: 18px;
        text-shadow: 0 0 5px #595959;
        text-decoration: none;
        margin-right: 20px;
        text-transform: uppercase;
      }

      .navbar a:hover {
        color: white;
      }

      #navbar-left {
        width: 300px;
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

      .header-content {
        text-align: center;
        position: absolute;
        top: 25%;
        width: 100%;
        height: 75%;
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

      hr {
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

      button {
        margin-top: 75px;
        padding-top: 15px;
        padding-bottom: 15px;
        padding-right: 40px;
        padding-left: 40px;
        border: 0px;
        border-radius: 50px;
        background-color: #ab0520;
        color: white;
        font-weight: 700;
        font-size: 25px;
        text-transform: uppercase;
      }

      button:hover {
        background-color: #ab0520;
      }

      #how-it-works-button {
        position: absolute;
        bottom: 1%;
        width: 100%;
        text-align: center;
        margin-top: 30px;
      }

      #logoImage {
        margin: 0 50px 5px 0;

      }

    </style>

  </head>
  <body>

    <header>
      <div class="navbar">
        <div id="navbar-left">
          <img id="logoImage" src="./css/images/logov2.png" alt="logoImage" height="45" width="45">
          <a href="#">Sign-up</a>
          <a href="#">Login</a>
        </div>

        <div id="navbar-right">
          <a href="#">Take Action</a>
          <a href="#">Discuss</a>
          <a href="#">About</a>
          <a href="#">Contact</a>
        </div>
      </div>

      <div class="header-content">
        <h1>The <br> Lobbyists</h1>
        <hr>
        <p class="subheader">Crowdfunded Lobbying</p>
        <p style="color: white;
        font-weight: 700;
        font-size: 25px;text-transform:uppercase;text-shadow: -1px 0 10px #737373, 0 1px 10px #737373, 1px 0 10px #737373, 0 -1px 10px #737373;margin-top:-10px;">Giving power to the people</p>
      </div>

      <div id="how-it-works-button">
        <button type="button" class="">How It Works</button>
        <br>
        <span class="glyphicon glyphicon glyphicon-menu-down" aria-hidden="true"></span>
      </div>
      
    </header>

  </body>
</html>