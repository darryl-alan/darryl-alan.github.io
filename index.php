<?php
?>

<!DOCTYPE html>
<html>
	<head>
		<title>seekdarryl.com</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->

		<style>
			.full {
				width:100vw;
				height: 100vh;
				max-width:100%;
				position:relative;
			}

			.full-width {
				width:100vw;
				max-width:100%;
				position:relative;
			}

			.bg-yellow {
				background-color: yellow;
			}
			.bg-red {
				background-color: #ffaaaa;
			}
			
			.center {
				position: absolute;
				top:50%;
				left:50%;
				-webkit-transform: translate(-50%, -50%);
				-moz-transform: translate(-50%, -50%);
				-ms-transform: translate(-50%, -50%);
				-o-transform: translate(-50%, -50%);
				transform: translate(-50%, -50%);
			}

			.vertical-center {
				position:absolute;
				top:50%;
				transform: translateY(-50%);
			}
			.horizontal-center {
				position:absolute;
				left:50%;
				transform: translateX(-50%);
			}
			.text-center{
				text-align: center;
			}

		</style>
	</head>
	<body>
		<div class="full bg-yellow">
			<div class="center text-center" style="font-size:30px;">
				Seek Darryl<br>
				and you shall find...<br><br>
				<a href="#about">&#x25BC;</a>
			</div>
		</div>
		<div class="full-width bg-red" id="about">
			<div class="container py-5 text-center">
				<div class="row">
					<div class="col-xs-12 col-md-6 pr-md-5 text-md-right">
						<img src="photo.jpg" style="background-color: #fff;width:250px;max-width:100%;">
					</div>
					<div class="col-xs-12 col-md-4 pr-md-5">
						<h1>Darryl Alan</h1>
						<p>
							I'm currently a full-stack and mobile developer at Matrix IT.
							I have nerdy enthusiasm for all things tech.
						</p>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-xs-12 col-md-4 mt-3">
						<div class="card">
							<div class="card-header">
								Full Stack
							</div>
							<div class="card-body">
								<ul class="list-group list-group-flush">
									<li class="list-group-item">CSS3</li>
									<li class="list-group-item">Bootstrap</li>
									<li class="list-group-item">JavaScript</li>
									<li class="list-group-item">jQuery</li>
									<li class="list-group-item">React</li>
									<li class="list-group-item">KendoUI</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-4 mt-3">
						<div class="card">
							<div class="card-header">
								Mobile
							</div>
							<div class="card-body">
								<ul class="list-group list-group-flush">
									<li class="list-group-item">Android</li>
									<li class="list-group-item">React Native</li>

								</ul>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-4 mt-3">
						<div class="card">
							<div class="card-header">
								Deep Learning
							</div>
							<div class="card-body">
								<ul class="list-group list-group-flush">
									<li class="list-group-item">Tensorflow</li>
									<li class="list-group-item">Keras</li>
									<li class="list-group-item">Pandas</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<a href="#portfolio" style="font-size:30px;">See my work<br>&#x25BC;</a>
			</div>
		</div>
		<div class="full bg-yellow">

		</div>
	</body>
</html>
