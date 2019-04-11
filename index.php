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

<div class="modal fade" id="modal"  role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalTitle">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="bd-example">
					<div id="carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel" data-slide-to="0" class="active"></li>
							<li data-target="#carousel" data-slide-to="1"></li>
							<li data-target="#carousel" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="images/bimas_thumb.png" class="d-block w-100" alt="...">
								<div class="carousel-caption d-none d-md-block">
									<h5>First slide label</h5>
									<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/epayment_thumb.png" class="d-block w-100" alt="...">
								<div class="carousel-caption d-none d-md-block">
									<h5>Second slide label</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/epic_thumb.png" class="d-block w-100" alt="...">
								<div class="carousel-caption d-none d-md-block">
									<h5>Third slide label</h5>
									<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev carousel-control" href="#carousel" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next carousel-control" href="#carousel" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
<!--			<div class="modal-footer">-->
<!--				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
<!--				<button type="button" class="btn btn-primary">Save changes</button>-->
<!--			</div>-->
		</div>
	</div>
</div>



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
						<img class="card-img-top" src="images/meatme_thumb.png" srcset="images/meatme_thumb_2x.png 2x" alt="a head carved out of wood">
						<div class="card-body">
							<h5 class="card-title">Meat Me Steakhouse</h5>
							<p class="card-text">Business website</p>
							<a href="projects/meatme" class="btn btn-dark"
							   data-gallery='[{"file": {"sm": "meatme_1_full_360.png", "md": "meatme_1_full_720.png", "lg": "meatme_1_1080.png", "full": "meatme_1_full.png"},
												"title": "Meat Me Steak House", "description": "Home"},
												{"file": {"sm": "meatme_2_full_360.png", "md": "meatme_2_full_720.png", "lg": "meatme_2_1080.png", "full": "meatme_2_full.png"},
												"title": "Meat Me Steak House", "description": "Find Us"},
												{"file": {"sm": "meatme_3_full_360.png", "md": "meatme_3_full_720.png", "lg": "meatme_3_1080.png", "full": "meatme_3_full.png"},
												"title": "Meat Me Steak House", "description": "Gallery"}]'
								>See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Website
						</div>
						<img class="card-img-top" src="images/uniquehome_thumb.png" srcset="images/uniquehome_thumb_2x.png 2x" alt="Unique Home Interior Design">
						<div class="card-body">
							<h5 class="card-title">Unique Home</h5>
							<p class="card-text">Business website</p>
							<a href="projects/uniquehome" class="btn btn-dark"
							   data-gallery='[{"file": {"sm": "uniquehome_1_360.png", "md": "uniquehome_1_720.png", "lg": "uniquehome_1_1080.png", "full": "uniquehome_1_full.png"},
												"title": "Unique Home", "description": "Home"},
												{"file": {"sm": "uniquehome_2_360.png", "md": "uniquehome_2_720.png", "lg": "uniquehome_2_1080.png", "full": "uniquehome_2_full.png"},
												"title": "Unique Home", "description": "About"},
												{"file": {"sm": "uniquehome_3_360.png", "md": "uniquehome_3_720.png", "lg": "uniquehome_3_1080.png", "full": "uniquehome_3_full.png"},
												"title": "Unique Home", "description": "Projects"}]'
							>See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Website
						</div>
						<img class="card-img-top" src="images/kreasicipta_thumb.png" srcset="images/kreasicipta_thumb_2x.png 2x" alt="a head carved out of wood">
						<div class="card-body">
							<h5 class="card-title">Kreasicipta</h5>
							<p class="card-text">Business website</p>
							<a href="projects/kreasicipta" class="btn btn-dark"
							   data-gallery='[{"file": {"sm": "kreasicipta_1_360.png", "md": "kreasicipta_1_720.png", "lg": "kreasicipta_1_1080.png", "full": "kreasicipta_1_full.png"},
												"title": "Kreasicipta", "description": "Home"},
												{"file": {"sm": "kreasicipta_2_360.png", "md": "kreasicipta_2_720.png", "lg": "kreasicipta_2_1080.png", "full": "kreasicipta_2_full.png"},
												"title": "Kreasicipta", "description": "Products"},
												{"file": {"sm": "kreasicipta_3_360.png", "md": "kreasicipta_3_720.png", "lg": "kreasicipta_3_1080.png", "full": "kreasicipta_3_full.png"},
												"title": "Kreasicipta", "description": "Services"}]'
							>See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/delvi_thumb.PNG" srcset="images/delvi_thumb_2x.PNG 2x" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Delvi</h5>
							<p class="card-text">Supplier invoicing system</p>
							<a href="projects/delvi" class="btn btn-dark"
							   data-gallery='[{"file": {"sm": "delvi_1_360.png", "md": "delvi_1_720.png", "lg": "delvi_1_1080.png", "full": "delvi_1_full.png"},
												"title": "Delvi", "description": "Home"},
												{"file": {"sm": "delvi_2_360.png", "md": "delvi_2_720.png", "lg": "delvi_2_1080.png", "full": "delvi_2_full.png"},
												"title": "Delvi", "description": ""},
												{"file": {"sm": "delvi_3_360.png", "md": "delvi_3_720.png", "lg": "delvi_3_1080.png", "full": "delvi_3_full.png"},
												"title": "Delvi", "description": ""}]'
							>See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/dqs_thumb.png" srcset="images/dqs_thumb_2x.png 2x" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">DQS</h5>
							<p class="card-text">Dealer Quality system</p>
							<a href="projects/dqs" class="btn btn-dark"
							   data-gallery='[{"file": {"sm": "dqs_1_360.png", "md": "dqs_1_720.png", "lg": "dqs_1_1080.png", "full": "dqs_1_full.png"},
												"title": "DQS", "description": "Home"},
												{"file": {"sm": "dqs_2_360.png", "md": "dqs_2_720.png", "lg": "dqs_2_1080.png", "full": "dqs_2_full.png"},
												"title": "DQS", "description": ""},
												{"file": {"sm": "dqs_3_360.png", "md": "dqs_3_720.png", "lg": "dqs_3_1080.png", "full": "dqs_3_full.png"},
												"title": "DQS", "description": ""}]'
							>See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/epayment_thumb.png" srcset="images/epayment_thumb_2x.png 2x" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">ePayment</h5>
							<p class="card-text">Payment approval system</p>
							<a href="projects/epayment" class="btn btn-dark"
							   data-gallery='[{"file": {"sm": "epayment_1_360.png", "md": "epayment_1_720.png", "lg": "epayment_1_1080.png", "full": "epayment_1_full.png"},
												"title": "ePayment", "description": "Home"},
												{"file": {"sm": "epayment_2_360.png", "md": "epayment_2_720.png", "lg": "epayment_2_1080.png", "full": "epayment_2_full.png"},
												"title": "ePayment", "description": ""},
												{"file": {"sm": "epayment_3_360.png", "md": "epayment_3_720.png", "lg": "epayment_3_1080.png", "full": "epayment_3_full.png"},
												"title": "ePayment", "description": ""}]'
							>See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/bimas_thumb.png" srcset="images/bimas_thumb_2x.png 2x" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Bimas</h5>
							<p class="card-text">Customer billing system</p>
							<a href="projects/bimas" class="btn btn-dark"
							   data-gallery='[{"file": {"sm": "bimas_1_360.png", "md": "bimas_1_720.png", "lg": "bimas_1_1080.png", "full": "bimas_1_full.png"},
												"title": "Bimas", "description": "Home"},
												{"file": {"sm": "bimas_2_360.png", "md": "bimas_2_720.png", "lg": "bimas_2_1080.png", "full": "bimas_2_full.png"},
												"title": "Bimas", "description": ""},
												{"file": {"sm": "bimas_3_360.png", "md": "bimas_3_720.png", "lg": "bimas_3_1080.png", "full": "bimas_3_full.png"},
												"title": "Bimas", "description": ""}]'
							>See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/partmovement_thumb.png" srcset="images/partmovement_thumb_2x.png 2x" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Part Movement</h5>
							<p class="card-text">Logistics tracking system</p>
							<a href="projects/partmovement" class="btn btn-dark"
							   data-gallery='[{"file": {"sm": "partmovement_1_360.png", "md": "partmovement_1_720.png", "lg": "partmovement_1_1080.png", "full": "partmovement_1_full.png"},
												"title": "Part Movement", "description": "Home"},
												{"file": {"sm": "partmovement_2_360.png", "md": "partmovement_2_720.png", "lg": "partmovement_2_1080.png", "full": "partmovement_2_full.png"},
												"title": "Part Movement", "description": ""},
												{"file": {"sm": "partmovement_3_360.png", "md": "partmovement_3_720.png", "lg": "partmovement_3_1080.png", "full": "partmovement_3_full.png"},
												"title": "Part Movement", "description": ""},
												{"file": {"sm": "partmovement_4_360.png", "md": "partmovement_4_720.png", "lg": "partmovement_4_1080.png", "full": "partmovement_4_full.png"},
												"title": "Part Movement", "description": ""}]'
							>See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/inhouse_thumb.png" srcset="images/inhouse_thumb_2x.png 2x" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Inhouse</h5>
							<p class="card-text">Spare parts tracking</p>
							<a href="projects/inhouse" class="btn btn-dark"
							   data-gallery='[{"file": {"sm": "inhouse_1_360.png", "md": "inhouse_1_720.png", "lg": "inhouse_1_1080.png", "full": "inhouse_1_full.png"},
												"title": "Inhouse", "description": "Home"},
												{"file": {"sm": "inhouse_2_360.png", "md": "inhouse_2_720.png", "lg": "inhouse_2_1080.png", "full": "inhouse_2_full.png"},
												"title": "Inhouse", "description": ""},
												{"file": {"sm": "inhouse_3_360.png", "md": "inhouse_3_720.png", "lg": "inhouse_3_1080.png", "full": "inhouse_3_full.png"},
												"title": "Inhouse", "description": ""}]'
							>See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/efin_thumb.png" srcset="images/efin_thumb_2x.png 2x" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">eFin</h5>
							<p class="card-text">Finance invoicing system</p>
							<a href="projects/efin" class="btn btn-dark"
							   data-gallery='[{"file": {"sm": "efin_1_360.png", "md": "efin_1_720.png", "lg": "efin_1_1080.png", "full": "efin_1_full.png"},
												"title": "eFin", "description": "Home"},
												{"file": {"sm": "efin_2_360.png", "md": "efin_2_720.png", "lg": "efin_2_1080.png", "full": "efin_2_full.png"},
												"title": "eFin", "description": ""},
												{"file": {"sm": "efin_3_360.png", "md": "efin_3_720.png", "lg": "efin_3_1080.png", "full": "efin_3_full.png"},
												"title": "eFin", "description": ""},
												{"file": {"sm": "efin_4_360.png", "md": "efin_4_720.png", "lg": "efin_4_1080.png", "full": "efin_4_full.png"},
												"title": "eFin", "description": ""}]'
							>See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/leasing_thumb.png" srcset="images/leasing_thumb_2x.png 2x" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Leasing</h5>
							<p class="card-text">Vehicle leasing system</p>
							<a href="projects/leasing" class="btn btn-dark"
							   data-gallery='[{"file": {"sm": "leasing_1_360.png", "md": "leasing_1_720.png", "lg": "leasing_1_1080.png", "full": "leasing_1_full.png"},
												"title": "Leasing", "description": "Home"},
												{"file": {"sm": "leasing_2_360.png", "md": "leasing_2_720.png", "lg": "leasing_2_1080.png", "full": "leasing_2_full.png"},
												"title": "Leasing", "description": ""},
												{"file": {"sm": "leasing_3_360.png", "md": "leasing_3_720.png", "lg": "leasing_3_1080.png", "full": "leasing_3_full.png"},
												"title": "Leasing", "description": ""}]'
							>See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/evo_thumb.png" srcset="images/evo_thumb_2x.png 2x" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Evo</h5>
							<p class="card-text">Finance invoicing system</p>
							<a href="projects/evo" class="btn btn-dark"
							   data-gallery='[{"file": {"sm": "evo_1_360.png", "md": "evo_1_720.png", "lg": "evo_1_1080.png", "full": "evo_1_full.png"},
												"title": "Evo", "description": "Home"},
												{"file": {"sm": "evo_2_360.png", "md": "evo_2_720.png", "lg": "evo_2_1080.png", "full": "evo_2_full.png"},
												"title": "Evo", "description": ""},
												{"file": {"sm": "evo_3_360.png", "md": "evo_3_720.png", "lg": "evo_3_1080.png", "full": "evo_3_full.png"},
												"title": "Evo", "description": ""},
												{"file": {"sm": "evo_4_360.png", "md": "evo_4_720.png", "lg": "evo_4_1080.png", "full": "evo_4_full.png"},
												"title": "Evo", "description": ""}]'
							>See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/epic_thumb.png" srcset="images/epic_thumb_2x.png 2x" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">ePIC</h5>
							<p class="card-text">Supplier quality monitoring</p>
							<a href="projects/epic" class="btn btn-dark"
							   data-gallery='[{"file": {"sm": "epic_1_360.png", "md": "epic_1_720.png", "lg": "epic_1_1080.png", "full": "epic_1_full.png"},
												"title": "ePIC", "description": "Home"},
												{"file": {"sm": "epic_2_360.png", "md": "epic_2_720.png", "lg": "epic_2_1080.png", "full": "epic_2_full.png"},
												"title": "ePIC", "description": ""},
												{"file": {"sm": "epic_3_360.png", "md": "epic_3_720.png", "lg": "epic_3_1080.png", "full": "epic_3_full.png"},
												"title": "ePIC", "description": ""},
												{"file": {"sm": "epic_4_360.png", "md": "epic_4_720.png", "lg": "epic_4_1080.png", "full": "epic_4_full.png"},
												"title": "ePIC", "description": ""},
												{"file": {"sm": "epic_5_360.png", "md": "epic_5_720.png", "lg": "epic_5_1080.png", "full": "epic_5_full.png"},
												"title": "ePIC", "description": ""},
												{"file": {"sm": "epic_6_360.png", "md": "epic_6_720.png", "lg": "epic_6_1080.png", "full": "epic_6_full.png"},
												"title": "ePIC", "description": ""}]'
							>See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App & Android App
						</div>
						<img class="card-img-top" src="images/wms_thumb.png" srcset="images/wms_thumb_2x.png 2x" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">WMS</h5>
							<p class="card-text">Warehouse management</p>
							<a href="projects/wms" class="btn btn-dark"
							   data-gallery='[{"file": {"sm": "wms_1_360.png", "md": "wms_1_720.png", "lg": "wms_1_1080.png", "full": "wms_1_full.png"},"title": "WMS", "description": "Home"},
												{"file": {"sm": "wms_2_360.png", "md": "wms_2_720.png", "lg": "wms_2_1080.png", "full": "wms_2_full.png"},"title": "WMS", "description": ""},
												{"file": {"sm": "wms_3_360.png", "md": "wms_3_720.png", "lg": "wms_3_1080.png", "full": "wms_3_full.png"},"title": "WMS", "description": ""},
												{"file": {"sm": "wms_4_360.png", "md": "wms_4_720.png", "lg": "wms_4_1080.png", "full": "wms_4_full.png"}, "title": "WMS", "description": ""},
												{"file": {"sm": "wms_5_360.png", "md": "wms_5_720.png", "lg": "wms_5_1080.png", "full": "wms_5_full.png"}, "title": "WMS", "description": ""},
												{"file": {"sm": "wms_6_360.png", "md": "wms_6_720.png", "lg": "wms_6_1080.png", "full": "wms_6_full.png"}, "title": "WMS", "description": ""},
												{"file": {"sm": "wms_7_360.png", "md": "wms_7_720.png", "lg": "wms_7_1080.png", "full": "wms_7_full.png"}, "title": "WMS", "description": ""},
												{"file": {"sm": "wms_8_360.png", "md": "wms_8_720.png", "lg": "wms_8_1080.png", "full": "wms_8_full.png"}, "title": "WMS", "description": ""},
												{"file": {"sm": "wms_9_360.png", "md": "wms_9_720.png", "lg": "wms_9_1080.png", "full": "wms_9_full.png"}, "title": "WMS", "description": ""},
												{"file": {"sm": "wms_10_360.png", "md": "wms_10_720.png", "lg": "wms_10_1080.png", "full": "wms_10_full.png"}, "title": "WMS", "description": ""}]'
							>See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/gmiv_thumb.png" srcset="images/gmiv_thumb_2x.png 2x" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">GMIV</h5>
							<p class="card-text">Finance invoicing system</p>
							<a href="projects/gmiv" class="btn btn-dark"
							   data-gallery='[{"file": {"sm": "gmiv_1_360.png", "md": "gmiv_1_720.png", "lg": "gmiv_1_1080.png", "full": "gmiv_1_full.png"},"title": "GMIV", "description": "Home"},
												{"file": {"sm": "gmiv_2_360.png", "md": "gmiv_2_720.png", "lg": "gmiv_2_1080.png", "full": "gmiv_2_full.png"},"title": "GMIV", "description": ""},
												{"file": {"sm": "gmiv_3_360.png", "md": "gmiv_3_720.png", "lg": "gmiv_3_1080.png", "full": "gmiv_3_full.png"},"title": "GMIV", "description": ""},
												{"file": {"sm": "gmiv_4_360.png", "md": "gmiv_4_720.png", "lg": "gmiv_4_1080.png", "full": "gmiv_4_full.png"},"title": "GMIV", "description": ""}]'
							>See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/invento_thumb.png" srcset="images/invento_thumb_2x.png 2x" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Invento</h5>
							<p class="card-text">Inventory tracking</p>
							<a href="projects/invento" class="btn btn-dark"
							   data-gallery='[{"file": {"sm": "invento_1_360.png", "md": "invento_1_720.png", "lg": "invento_1_1080.png", "full": "invento_1_full.png"},
												"title": "Invento", "description": "Home"},
												{"file": {"sm": "invento_2_360.png", "md": "invento_2_720.png", "lg": "invento_2_1080.png", "full": "invento_2_full.png"},
												"title": "Invento", "description": ""},
												{"file": {"sm": "invento_3_360.png", "md": "invento_3_720.png", "lg": "invento_3_1080.png", "full": "invento_3_full.png"},
												"title": "Invento", "description": ""}]'
							>See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/SLS_thumb.png" srcset="images/SLS_thumb_2x.png 2x" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">SLS</h5>
							<p class="card-text">Service tracking system</p>
							<a href="projects/sls" class="btn btn-dark"
							   data-gallery='[{"file": {"sm": "sls_1_360.png", "md": "sls_1_720.png", "lg": "sls_1_1080.png", "full": "sls_1_full.png"},
												"title": "SLS", "description": "Home"},
												{"file": {"sm": "sls_2_360.png", "md": "sls_2_720.png", "lg": "sls_2_1080.png", "full": "sls_2_full.png"},
												"title": "SLS", "description": ""},
												{"file": {"sm": "sls_3_360.png", "md": "sls_3_720.png", "lg": "sls_3_1080.png", "full": "sls_3_full.png"},
												"title": "SLS", "description": ""}]'
							>See more</a>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/ITS_thumb.png" srcset="images/ITS_thumb_2x.png 2x" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">ITS</h5>
							<p class="card-text">Inventory Tracking</p>
							<a href="projects/its" class="btn btn-dark"
							   data-gallery='[{"file": {"sm": "its_1_360.png", "md": "its_1_720.png", "lg": "its_1_1080.png", "full": "its_1_full.png"},
												"title": "ITS", "description": "Home"},
												{"file": {"sm": "its_2_360.png", "md": "its_2_720.png", "lg": "its_2_1080.png", "full": "its_2_full.png"},
												"title": "ITS", "description": ""},
												{"file": {"sm": "its_3_360.png", "md": "its_3_720.png", "lg": "its_3_1080.png", "full": "its_3_full.png"},
												"title": "ITS", "description": ""}]'
							>See more</a>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/JSS_thumb.png" srcset="images/JSS_thumb_2x.png 2x" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">JSS</h5>
							<p class="card-text">Sales tracking</p>
							<a href="projects/jss" class="btn btn-dark"
							   data-gallery='[{"file": {"sm": "jss_1_360.png", "md": "jss_1_720.png", "lg": "jss_1_1080.png", "full": "jss_1_full.png"},
												"title": "JSS", "description": "Home"},
												{"file": {"sm": "jss_2_360.png", "md": "jss_2_720.png", "lg": "jss_2_1080.png", "full": "jss_2_full.png"},
												"title": "JSS", "description": ""},
												{"file": {"sm": "jss_3_360.png", "md": "jss_3_720.png", "lg": "jss_3_1080.png", "full": "jss_3_full.png"},
												"title": "JSS", "description": ""}]'
							>See more</a>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Web App
						</div>
						<img class="card-img-top" src="images/TAS_thumb.png" srcset="images/TAS_thumb_2x.png 2x" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">TAS</h5>
							<p class="card-text">Accounting system</p>
							<a href="projects/tas" class="btn btn-dark"
							   data-gallery='[{"file": {"sm": "tas_1_360.png", "md": "tas_1_720.png", "lg": "tas_1_1080.png", "full": "tas_1_full.png"},
												"title": "TAS", "description": "Home"},
												{"file": {"sm": "tas_2_360.png", "md": "tas_2_720.png", "lg": "tas_2_1080.png", "full": "tas_2_full.png"},
												"title": "TAS", "description": ""},
												{"file": {"sm": "tas_3_360.png", "md": "tas_3_720.png", "lg": "tas_3_1080.png", "full": "tas_3_full.png"},
												"title": "TAS", "description": ""}]'
							>See more</a>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Desktop App
						</div>
						<img class="card-img-top" src="images/DBase_thumb.png" srcset="images/DBase_thumb_2x.png 2x" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">DBase</h5>
							<p class="card-text">Dental appointments</p>
							<a href="projects/dbase" class="btn btn-dark"
							   data-gallery='[{"file": {"sm": "DBase_1_360.png", "md": "DBase_1_720.png", "lg": "DBase_1_1080.png", "full": "DBase_1_full.png"},"title": "DBase", "description": "Home"},
												{"file": {"sm": "DBase_2_360.png", "md": "DBase_2_720.png", "lg": "DBase_2_1080.png", "full": "DBase_2_full.png"},"title": "DBase", "description": ""},
												{"file": {"sm": "DBase_3_360.png", "md": "DBase_3_720.png", "lg": "DBase_3_1080.png", "full": "DBase_3_full.png"},"title": "DBase", "description": ""},
												{"file": {"sm": "DBase_4_360.png", "md": "DBase_4_720.png", "lg": "DBase_4_1080.png", "full": "DBase_4_full.png"},"title": "DBase", "description": ""}]'
							>See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Android
						</div>
						<img class="card-img-top" src="images/delvi_thumb.png" srcset="images/delvi_thumb_2x.png 2x" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Despondent</h5>
							<p class="card-text">Web API client</p>
							<a href="projects/despondent" class="btn btn-dark"
							   data-gallery='[{"file": {"sm": "despondent_1_360.png", "md": "despondent_1_720.png", "lg": "despondent_1_1080.png", "full": "despondent_1_full.png"},
												"title": "Despondent", "description": "Home"},
												{"file": {"sm": "despondent_2_360.png", "md": "despondent_2_720.png", "lg": "despondent_2_1080.png", "full": "despondent_2_full.png"},
												"title": "Despondent", "description": ""},
												{"file": {"sm": "despondent_3_360.png", "md": "despondent_3_720.png", "lg": "despondent_3_1080.png", "full": "despondent_3_full.png"},
												"title": "Despondent", "description": ""}]'
							>See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Android
						</div>
						<img class="card-img-top" src="images/delvi_thumb.png" srcset="images/delvi_thumb_2x.png 2x" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Delisi</h5>
							<p class="card-text">Delivery asset tracking</p>
							<a href="projects/delisi" class="btn btn-dark"
							   data-gallery='[{"file": {"sm": "delisi_1_360.png", "md": "delisi_1_720.png", "lg": "delisi_1_1080.png", "full": "delisi_1_full.png"},
												"title": "Delisi", "description": "Home"},
												{"file": {"sm": "delisi_2_360.png", "md": "delisi_2_720.png", "lg": "delisi_2_1080.png", "full": "delisi_2_full.png"},
												"title": "Delisi", "description": ""},
												{"file": {"sm": "delisi_3_360.png", "md": "delisi_3_720.png", "lg": "delisi_3_1080.png", "full": "delisi_3_full.png"},
												"title": "Delisi", "description": ""}]'
							>See more</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-xl-3 mt-3">
					<div class="card">
						<div class="card-header">
							Android / Deep Learning
						</div>
						<img class="card-img-top" src="images/delvi_thumb.png" srcset="images/delvi_thumb_2x.png 2x" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Artz</h5>
							<p class="card-text">Neural Style Transfer</p>
							<a href="projects/artz" class="btn btn-dark"
							   data-gallery='[{"file": {"sm": "artz_1_360.png", "md": "artz_1_720.png", "lg": "artz_1_1080.png", "full": "artz_1_full.png"},
												"title": "Artz", "description": "Home"},
												{"file": {"sm": "artz_2_360.png", "md": "artz_2_720.png", "lg": "artz_2_1080.png", "full": "artz_2_full.png"},
												"title": "Artz", "description": ""},
												{"file": {"sm": "artz_3_360.png", "md": "artz_3_720.png", "lg": "artz_3_1080.png", "full": "artz_3_full.png"},
												"title": "Artz", "description": ""}]'
							>See more</a>
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
