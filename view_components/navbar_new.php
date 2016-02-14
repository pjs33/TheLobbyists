<style type="text/css">

#styleBar {
  width: 100%;
  background-color: #ab0520;
  height: 20px;
  font-size: 0px;
}

#navBar {
  width: 100%;
  font-size: 0pt;
  height: 80px;
  background-color: #0c234b;
  box-shadow: 0 0 13px 0 #777;
}

#homeLink { 
  display:inline-block;
  width: 30%;
  float: left;
}

#logoContainer {
  float: right;
  position: relative;
  height: 70px;
  width:290px;
  color: white;
}

#logo {
  float: left;
  margin-top: 5px;
}

#page-title {
  font-family: 'Parisienne', cursive;
  font-size: 29pt;
  font-weight: 450;
  float:right;
  margin:21px 25px 0 0; 
}

#titleFlavor {
  font-size: 12pt;
  font-family: 'Ubuntu Condensed', sans-serif;
  font-weight: 400;
  position: absolute;
  left: 70px;
}

#nav-bar-place-holder {
  width: 65%;
  height: 80px;
  display: inline-block;
  float: right;
  margin-right: 40px;
}

.nav-bar-link {
  height: 40px;
  margin: 0px;
  margin-left: 4px;
  padding: 8px;
  padding-left: 37px;
  padding-right: 37px;
  color: white;
  font-size: 16px;
  font-weight: 700;
  letter-spacing: 1px;
  text-decoration: none;
  text-transform: uppercase;
  cursor: auto; 
}

.nav-bar-link:hover {
  background: #666666;
  text-shadow: none;
  color: white;
  text-decoration: none;
}

.nav-link-separator {
  border-right: 1px solid white;
  display: inline;
  margin: 2px;
}

#navBar.affix {
  top:0px;
}

</style>
<link href='https://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>
<div id="styleBar"></div>
  <div id="navBar" data-spy="affix" data-offset-top="20">
    <!--site logo
    <img id="logo" data-spy="affix" src="./img/logov3.jpg">-->
    <a id="homeLink" href ="http://localhost/HackArizona/index_new.php">
      <div id="logoContainer">
          <img id="logo" src="./img/logov2.png" width="50px" height="50px">
          <h1 id="page-title">The Lobbyists</h1>
          <p id="titleFlavor">Giving power to the people.<p>
      </div> <!--End logoContainer-->
    </a>


    <!-- LINKS -->

    <div id="nav-bar-place-holder">
      <div id="nav-bar-container">
        <div id="nav-bar">
          <a class="nav-bar-link btn primary-btn" href="http://localhost/HackArizona/about_us.php">About Us</a>
          <?php  
            if( isset($_SESSION["username"]) ) { 
          ?>
          <div class="nav-link-separator"></div>
          <div class="nav-link-separator"></div>
          <a class="nav-bar-link btn primary-btn" href="http://localhost/HackArizona/issue_voting.php">Vote on Issues</a>
          <?php } ?>
          <div class="nav-link-separator"></div>
          <div class="nav-link-separator"></div>
          <a class="nav-bar-link btn primary-btn" href="http://localhost/HackArizona/how_it_works.php">How It Works</a>
          <div class="nav-link-separator"></div>
          <div class="nav-link-separator"></div>
          <?php if( isset($_SESSION["username"]) ) { ?>
            <a class="nav-bar-link btn primary-btn" href="http://localhost/HackArizona/scripts/php/session_logout.php">
              Logout
            </a>
          <?php } else { ?> 
            <a class="nav-bar-link btn primary-btn" href="http://localhost/HackArizona/login.php">
              Login
            </a>

            <div class="nav-link-separator"></div>
            <div class="nav-link-separator"></div>

            <a class="nav-bar-link btn primary-btn" href="http://localhost/HackArizona/signup.php">
              Sign-up
            </a>

          <?php } ?>
          <div class="nav-link-separator"></div>
          <div class="nav-link-separator"></div>
        </div>
      </div>
    </div> <!--nav-bar-place-holder end-->
  </div>


<!-- END NAVBAR -->