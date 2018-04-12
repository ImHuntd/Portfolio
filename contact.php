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
		<title>Contact</title>
	</head>
  <body>
		<?php
				require 'inc/Header.php';
		?>
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-4">Contact</h1>
					<p class="lead">Find me on social media!</p>
			</div>
		</div>
		<div class="container">
      <div class="row">
				<div class="col-md-4 mb-4">
					<div class="card text-white bg-dark mb-3">
						<div class="card-body">
							<div class="card-title">
								<h5>Private Contact</h5>
							</div>
							<p>
								 Name: Thomas Godding <br>
								 Email: tddgodding@gmail.com <br>
								 Phone: +31 6 ********
							</p>
						</div>
					</div>
				</div>
					<div class="container">
						<div class="row">
							<div class="col-md-4 mb-4 ">
								<div class="card text-white bg-dark mb-3">
									<div class="card-body">
										<div class="card-title">
											<h5>Send an email!</h5>
										</div>
										<p>
											<form action="mailto:someone@example.com" method="post" enctype="text/plain">
											  <div id="container-email">
											    Name:<br>
											    <input type="text" name="name"><br>
											    E-mail:<br>
											    <input type="email" name="mail"><br>
											    Comment:<br>
											    <textarea id="textarea"type="text" name="comment" size="50"></textarea><br><br>
											    <button id="game-btn" type="submit" value="Send" class="btn btn-light btn-md">Send</button>
											    <button id="game-btn" type="reset" value="Send" class="btn btn-light btn-md">Reset</button>
											  </div>
											</form>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

			</div>
		</div>
  </body>
</html>
