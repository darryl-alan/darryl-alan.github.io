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
		<div>
			<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
<!--				<a class="navbar-brand" href="#">Navbar</a>-->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#portfolio">Portfolio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact">Contact</a>
						</li>
					</ul>
				</div>
			</nav>
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
			<div class="full-width bg-yellow" id="portfolio">
				<div class="container py-5 text-center">
					<div class="row mt-3">
						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Website
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Meat Me Steakhouse</h5>
									<p class="card-text">Business website</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Website
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Unique Home</h5>
									<p class="card-text">Business website</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Website
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Kreasicipta</h5>
									<p class="card-text">Business website</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Website
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">NG Photography</h5>
									<p class="card-text">Business website</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Full Stack Web App
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Delvi</h5>
									<p class="card-text">Supplier invoicing system</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Full Stack Web App
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">DQS</h5>
									<p class="card-text">Dealer Quality system</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Full Stack Web App
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">ePayment</h5>
									<p class="card-text">Payment approval system</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Full Stack Web App
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Bimas</h5>
									<p class="card-text">Customer billing system</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Full Stack Web App
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Part Movement</h5>
									<p class="card-text">Logistics tracking system</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Full Stack Web App
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Inhouse</h5>
									<p class="card-text">Spare parts tracking</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Full Stack Web App
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">eFIN</h5>
									<p class="card-text">Finance invoicing system</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Full Stack Web App
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Leasing</h5>
									<p class="card-text">Vehicle leasing system</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Full Stack Web App
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Evo</h5>
									<p class="card-text">Finance invoicing system</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Full Stack Web App
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">ePIC</h5>
									<p class="card-text">Supplier quality management system</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Full Stack Web App & Android
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">WMS</h5>
									<p class="card-text">Warehouse management</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Full Stack Web App
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">GMIV</h5>
									<p class="card-text">Finance invoicing system</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Full Stack Web App
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Invento</h5>
									<p class="card-text">Inventory tracking</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Full Stack Web App
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">SLS</h5>
									<p class="card-text">Service tracking system</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Full Stack Web App
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">ITS</h5>
									<p class="card-text">Inventory Tracking</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Full Stack Web App
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">JSS</h5>
									<p class="card-text">Sales tracking</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Full Stack Web App
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">TAS</h5>
									<p class="card-text">Accounting system</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Full Stack Desktop App
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">DBase</h5>
									<p class="card-text">Dental appointments</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Android
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Despondent</h5>
									<p class="card-text">Web API client</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Android
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Delisi</h5>
									<p class="card-text">Delivery asset tracking</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4 mt-3">
							<div class="card">
								<div class="card-header">
									Android / Deep Learning
								</div>
								<img class="card-img-top" src="delvi.PNG" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Artz</h5>
									<p class="card-text">Neural Style Transfer</p>
									<a href="#" class="btn btn-primary">See more</a>
								</div>
							</div>
						</div>
					</div>
					<a href="#contact" style="font-size:30px;">Contact me<br>&#x25BC;</a>
				</div>
			</div>

			<div class="full-width bg-red" id="about">
				<div class="container py-5 text-left">
					<div class="row">
						<div class="col-12">
							<form>
								<div class="form-group">
									<label for="exampleFormControlInput1">Email address</label>
									<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
								</div>
								<div class="form-group">
									<label for="exampleFormControlTextarea1">Message</label>
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
								</div>
								<button type="submit" class="btn btn-primary">Send</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
