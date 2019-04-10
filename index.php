<?php
?>

<!DOCTYPE html>
<html>
<head>
	<title>seekdarryl.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"
			integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
			integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
			crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
	<script src="https://threejs.org/examples/js/libs/stats.min.js"></script>

	<script src="script.js"></script>

	<link href="styles.css" type="text/css" rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#navbar">
<div id="particles-js"></div>



	<div class="full" id="home">
		<div class="center text-center text-white" style="font-size:45px;">
			Seek Darryl<br>
			and you shall find...<br><br>
			<div style="position:relative;width:100%;">
				<a class="no-decor text-white downArrow bounce" style="font-size:50px;" href="#about">
					<i class="fas fa-caret-down"></i>
				</a>
			</div>
		</div>
	</div>
	<div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" id="navbar">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="#home">Home</a>
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
	<div class="full-width bg-light pt-5" id="about">

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
				<div class="col-xs-12 col-sm-6 col-lg-3 mt-3">
					<div class="card">
						<div class="card-header bg-dark text-white">
							Front End
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
				<div class="col-xs-12 col-sm-6 col-lg-3 mt-3">
					<div class="card">
						<div class="card-header bg-dark text-white">
							Back End
						</div>
						<div class="card-body">
							<ul class="list-group list-group-flush">
								<li class="list-group-item">PHP</li>
								<li class="list-group-item">Node.js</li>
								<li class="list-group-item">Python</li>
								<li class="list-group-item">Ruby</li>
								<li class="list-group-item">SQL</li>
								<li class="list-group-item">NoSQL</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-3 mt-3">
					<div class="card">
						<div class="card-header bg-dark text-white">
							Mobile
						</div>
						<div class="card-body">
							<ul class="list-group list-group-flush">
								<li class="list-group-item">Android</li>
								<li class="list-group-item">React Native</li>
								<li class="list-group-item">Apache Cordova</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-3 mt-3">
					<div class="card">
						<div class="card-header bg-dark text-white">
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
			<div class="mt-5">
				<a href="#portfolio" class="text-dark no-decor" style="font-size:35px;">
					See my work
					<br>
					<button class="btn btn-circle btn-dark mt-3">
						<i class="fa fa-angle-down fa-2x animated"></i>
					</button>
				</a>
			</div>
		</div>
	</div>
	<div class="full-width bg-dark" id="portfolio">
		<div class="container py-5 text-center">
			<div class="mt-5">
				<h1 class="text-white">Portfolio</h1>
			</div>
			<div class="row mt-5">
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Website
						</div>
						<img class="card-img-top" src="images/meatme_thumb.png" alt="Meat Me Steakhouse Thumbnail">
						<div class="card-body">
							<h5 class="card-title">Meat Me Steakhouse</h5>
							<p class="card-text">Business website</p>
							<a href="#" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Website
						</div>
						<img class="card-img-top" src="images/uniquehome.png" alt="Unique Home Interior Design">
						<div class="card-body">
							<h5 class="card-title">Unique Home</h5>
							<p class="card-text">Business website</p>
							<a href="#" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Website
						</div>
						<img class="card-img-top" src="images/kreasicipta_thumb.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Kreasicipta</h5>
							<p class="card-text">Business website</p>
							<a href="#" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/delvi_thumb.PNG" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Delvi</h5>
							<p class="card-text">Supplier invoicing system</p>
							<a href="#" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/dqs_thumb.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">DQS</h5>
							<p class="card-text">Dealer Quality system</p>
							<a href="#" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/epayment_thumb.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">ePayment</h5>
							<p class="card-text">Payment approval system</p>
							<a href="#" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/bimas_thumb.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Bimas</h5>
							<p class="card-text">Customer billing system</p>
							<a href="#" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/partmovement.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Part Movement</h5>
							<p class="card-text">Logistics tracking system</p>
							<a href="#" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/inhouse_thumb.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Inhouse</h5>
							<p class="card-text">Spare parts tracking</p>
							<a href="#" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/efin_thumb.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">eFIN</h5>
							<p class="card-text">Finance invoicing system</p>
							<a href="#" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/leasing.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Leasing</h5>
							<p class="card-text">Vehicle leasing system</p>
							<a href="#" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/evo_thumb.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Evo</h5>
							<p class="card-text">Finance invoicing system</p>
							<a href="#" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/epic_thumb.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">ePIC</h5>
							<p class="card-text">Supplier quality management system</p>
							<a href="#" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App & Android App
						</div>
						<img class="card-img-top" src="images/wms.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">WMS</h5>
							<p class="card-text">Warehouse management</p>
							<a href="#" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/gmiv_thumb.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">GMIV</h5>
							<p class="card-text">Finance invoicing system</p>
							<a href="#" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/invento_thumb.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Invento</h5>
							<p class="card-text">Inventory tracking</p>
							<a href="#" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/SLS.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">SLS</h5>
							<p class="card-text">Service tracking system</p>
							<a href="#" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/ITS_thumb.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">ITS</h5>
							<p class="card-text">Inventory Tracking</p>
							<a href="#" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/JSS_thumb.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">JSS</h5>
							<p class="card-text">Sales tracking</p>
							<a href="#" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/TAS.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">TAS</h5>
							<p class="card-text">Accounting system</p>
							<a href="#" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Desktop App
						</div>
						<img class="card-img-top" src="images/DBase_thumb.PNG" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">DBase</h5>
							<p class="card-text">Dental appointments</p>
							<a href="#" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Android
						</div>
						<img class="card-img-top" src="images/delvi_thumb.PNG" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Despondent</h5>
							<p class="card-text">Web API client</p>
							<a href="#" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Android
						</div>
						<img class="card-img-top" src="images/delvi_thumb.PNG" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Delisi</h5>
							<p class="card-text">Delivery asset tracking</p>
							<a href="#" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Android / Deep Learning
						</div>
						<img class="card-img-top" src="images/delvi_thumb.PNG" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Artz</h5>
							<p class="card-text">Neural Style Transfer</p>
							<a href="#" class="btn btn-dark">See more</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mt-5">
				<a href="#contact" class="text-white no-decor" style="font-size:35px;">
					Contact me
					<br>
					<button class="btn btn-circle btn-light mt-3">
						<i class="fa fa-angle-down fa-2x animated"></i>
					</button>
				</a>
			</div>
		</div>
	</div>

	<div class="full-width bg-light" id="contact">
		<div class="container py-5 text-left">
			<div class="my-5 text-center">
				<h1 class="text-dark">Contact Me</h1>
			</div>
			<div class="row">
				<div class="col-12">
					<form>
						<div class="form-group">
							<label for="exampleFormControlInput1">Email address</label>
							<input type="email" class="form-control" id="exampleFormControlInput1"
								   placeholder="name@example.com">
						</div>
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Message</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
						</div>
						<button type="submit" class="btn btn-dark">Send</button>
					</form>
				</div>
				<div class="col-12 text-left my-5 pb-5">
					<h3 class="mb-3">You can also find me on</h3>
					<div class="row col-12">
						<a class="text-dark no-decor text-sm-medium" href="https://www.linkedin.com/in/darryl-alan"
						   ><i class="fab fa-linkedin"></i>
							<span>https://www.linkedin.com/in/darryl-alan</span>
						</a>
					</div>
					<div class="row col-12 mt-2">
						<a class="text-dark no-decor text-sm-medium" href="https://github.com/darryl-alan"
						   ><i class="fab fa-github-square"></i>
							<span>https://github.com/darryl-alan</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>


</html>
