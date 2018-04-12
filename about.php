<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Portfolio">
		<meta name="keywords" content="HTML,CSS,php">
		<meta name="author" content="Thomas Godding">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
		<title>About</title>
	</head>
  <body>
		<?php
				require 'inc/Header.php';
		?>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">About me</h1>
          <p class="lead">Here you will find everything you need to know about me!</p>
      </div>
    </div>
		<div class="container">
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card text-white bg-dark mb-3">
            <div class="card-body">
              <div class="card-title">
                <h3>Streamer</h3>
              </div>
              <p class="lead">Twitch</p>
              <p>I try to stream almost every day! I have reached a total of 700+ followers! Find me on twitch by pressing More Info!</p>
              <a href="http://twitch.tv/imhuntd"><button type="button" class="btn btn-light">More info</button></a>
							<img id="twitch-img"src="img/twitch.png" class="img-fluid" alt="Responsive image">
            </div>
          </div>
        </div>
				<div class="col-md-8 mb-4">
					<div class="card text-white bg-dark mb-3">
						<div class="card-body">
							<div class="card-title">
								<h3>Games</h3>
							</div>
							<p class="lead">Gaming is life!</p>
							<p>Fortnite and Rocket League are the 2 games i only play! with my friend Eddie we try and win alot of games together! Gaming and Streaming are the 2 main things in my life that i love to do!</p><br>
							<a href="http://www.epicgames.com/fortnite" id="game-img"><button id="game-btn" type="button" class="btn btn-light btn-lg">More info</button></a>
							<a href="http://rocketleague.com" id="game-img"><button id="game-btn" type="button" class="btn btn-light btn-lg">More info</button></a>
							<img src="img/fortnite.png.jpg" id="game-img" class="img-fluid" alt="Responsive image">
							<img src="img/rocketleague.png.jpg" id="game-img" class="img-fluid" alt="Responsive image">
						</div>
					</div>
				</div>
      </div>
    </div>
  </body>
</html>
