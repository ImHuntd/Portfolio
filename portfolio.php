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
		<title>Portfolio</title>
	</head>
  <body>
		<?php
				require 'inc/Header.php';
		?>
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-4">Portfolio</h1>
					<p class="lead">Here are some of my projects i have made in school!</p>
			</div>
		</div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card text-white bg-dark mb-3">
            <div class="card-body">
              <div class="card-title">
                <h4>Vault</h4>
              </div>
              <p class="lead">HTML/CSS/JS</p>
              <p>This project will show you a vault with a lock on it! Maybe you can try and open it?</p><br>
              <a href="http://twitch.tv/imhuntd" class="btn btn-dark"><button type="button" class="btn btn-light">More info</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card text-white bg-dark mb-3">
            <div class="card-body">
              <div class="card-title">
                <h4>Game World</h4>
              </div>
              <p class="lead">HTML/CSS/PHP</p>
              <p>This project will show you a webpage where you can find and buy some games you maybe like!</p>
              <a href="http://twitch.tv/imhuntd" class="btn btn-dark"><button type="button" class="btn btn-light">More info</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card text-white bg-dark mb-3">
            <div class="card-body">
              <div class="card-title">
                <h4>Guestbook</h4>
              </div>
              <p class="lead">HTML/CSS/PHP</p>
              <p>This project will show you a Guestbook where you can send your information to a database!</p>
              <a href="http://twitch.tv/imhuntd" class="btn btn-dark"><button type="button" class="btn btn-light">More info</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
		<div class="container">
			<div class="row">
				<div class="col-md-4 mb-4">
					<div class="card text-white bg-dark mb-3">
						<div class="card-body">
							<div class="card-title">
								<h4>Vault</h4>
							</div>
							<p class="lead">HTML/CSS/JS</p>
							<p>This project will show you a vault with a lock on it! Maybe you can try and open it?</p><br>
							<a href="http://twitch.tv/imhuntd" class="btn btn-dark"><button type="button" class="btn btn-light">More info</button></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="card text-white bg-dark mb-3">
						<div class="card-body">
							<div class="card-title">
								<h4>Game World</h4>
							</div>
							<p class="lead">HTML/CSS/PHP</p>
							<p>This project will show you a webpage where you can find and buy some games you maybe like!</p>
							<a href="http://twitch.tv/imhuntd" class="btn btn-dark"><button type="button" class="btn btn-light">More info</button></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="card text-white bg-dark mb-3">
						<div class="card-body">
							<div class="card-title">
								<h4>Guestbook</h4>
							</div>
							<p class="lead">HTML/CSS/PHP</p>
							<p>This project will show you a Guestbook where you can send your information to a database!</p>
							<a href="http://twitch.tv/imhuntd" class="btn btn-dark"><button type="button" class="btn btn-light">More info</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>

  </body>
</html>
