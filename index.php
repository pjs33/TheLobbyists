<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

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

      .navbar {
        position: absolute;
        top: 0px;
        width: 100%;
        height: 75px;
        border-bottom: 5px white solid;
      }

      .header-image {
        background: url(css/images/us_capital_building_blur2.png) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        width: 100%;
        height: 100%;
        position: relative;
        text-align: center;
        padding-top: 200px;
      }

      h3 {
        margin: 0px;
        color: white;
        font-weight: 700;
        font-size: 100px;
        text-transform: uppercase;
        font-family: 'Lobster Two', cursive;
        text-shadow: 0 0 10px #888888;
      }

      hr {
        width: 300px; 
        border: 1px solid #ab0520;
        margin-top: 40px; 
        margin-bottom: 20px;
        box-shadow: 0 0 10px #888888;
      }

      .subheader {
        color: #153e84;
        font-weight: 700;
        font-size: 40px;
        text-transform: uppercase;
        text-shadow: 0 0 10px #888888;
      }

      #mission-statement {
        color: white;
        font-weight: 900;
        font-size: 20px;
        text-shadow: -1px 0 2px #262626, 0 1px 2px #262626, 1px 0 2px #262626, 0 -1px 2px #262626;
        width: 850px;
        margin: auto;
        text-align: center;
        margin-top: 10px;
        border-radius: 50px;
        
        padding: 20px;
      }

      button {
        padding: 25px !important;
        font-size: 15px !important;
        font-weight: 600 !important;
        text-transform: uppercase;
        border-radius: 50px !important;
        margin-top: 10px;
        opacity: 0.9;
        box-shadow: 0 0 15px #888888;
      }


    </style>

  </head>
  <body>
    <div class="navbar">
    </div>

    <div class="header-image">
      <h3>The Lobbyists</h3>
      <hr>
      <p class="subheader">Crowdfunded Lobbying</p>
      <p id="mission-statement">Our goal is to make the government listen to the people and get pass the legislation that we want passed.</p>
      <button type="button" class="btn btn-primary">How It Works</button>
    </div>

  </body>
</html>