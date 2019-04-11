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
							   data-gallery='[{"file": {"1x": "meatme_1_full.png", "2x": "meatme_1_full.png", "full": "meatme_1_full.png"},
												"title": "Meat Me Steak House", "description": "Home"},
												{"file": {"1x": "meatme_2.png", "2x": "meatme_2.png", "full": "meatme_2.png"},
												"title": "Meat Me Steak House", "description": "Find Us"},
												{"file": {"1x": "meatme_3.png", "2x": "meatme_3.png", "full": "meatme_3.png"},
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
							   data-gallery='[{"file": {"1x": "uniquehome_1.png", "2x": "uniquehome_1_2x.png", "full": "uniquehome_1_full.png"},
												"title": "Unique Home", "description": "Home"},
												{"file": {"1x": "uniquehome_2.png", "2x": "uniquehome_2_2x.png", "full": "uniquehome_2_full.png"},
												"title": "Unique Home", "description": "About"},
												{"file": {"1x": "uniquehome_3.png", "2x": "uniquehome_3_2x.png", "full": "uniquehome_3_full.png"},
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
							   data-gallery='[{"file": {"1x": "kreasicipta_1.png", "2x": "kreasicipta_1_2x.png", "full": "kreasicipta_1_full.png"},
												"title": "Kreasicipta", "description": "Home"},
												{"file": {"1x": "kreasicipta_2.png", "2x": "kreasicipta_2_2x.png", "full": "kreasicipta_2_full.png"},
												"title": "Kreasicipta", "description": "Products"},
												{"file": {"1x": "kreasicipta_3.png", "2x": "kreasicipta_3_2x.png", "full": "kreasicipta_3_full.png"},
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
							   data-gallery='[{"file": {"1x": "delvi_1.png", "2x": "delvi_1_2x.png", "full": "delvi_1_full.png"},
												"title": "Delvi", "description": "Home"},
												{"file": {"1x": "delvi_2.png", "2x": "delvi_2_2x.png", "full": "delvi_2_full.png"},
												"title": "Delvi", "description": ""},
												{"file": {"1x": "delvi_3.png", "2x": "delvi_3_2x.png", "full": "delvi_3_full.png"},
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
							   data-gallery='[{"file": {"1x": "dqs_1.png", "2x": "dqs_1_2x.png", "full": "dqs_1_full.png"},
												"title": "DQS", "description": "Home"},
												{"file": {"1x": "dqs_2.png", "2x": "dqs_2_2x.png", "full": "dqs_2_full.png"},
												"title": "DQS", "description": ""},
												{"file": {"1x": "dqs_3.png", "2x": "dqs_3_2x.png", "full": "dqs_3_full.png"},
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
							   data-gallery='[{"file": {"1x": "epayment_1.png", "2x": "epayment_1_2x.png", "full": "epayment_1_full.png"},
												"title": "ePayment", "description": "Home"},
												{"file": {"1x": "epayment_2.png", "2x": "epayment_2_2x.png", "full": "epayment_2_full.png"},
												"title": "ePayment", "description": ""},
												{"file": {"1x": "epayment_3.png", "2x": "epayment_3_2x.png", "full": "epayment_3_full.png"},
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
							   data-gallery='[{"file": {"1x": "bimas_1.png", "2x": "bimas_1_2x.png", "full": "bimas_1_full.png"},
												"title": "Bimas", "description": "Home"},
												{"file": {"1x": "bimas_2.png", "2x": "bimas_2_2x.png", "full": "bimas_2_full.png"},
												"title": "Bimas", "description": ""},
												{"file": {"1x": "bimas_3.png", "2x": "bimas_3_2x.png", "full": "bimas_3_full.png"},
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
							   data-gallery='[{"file": {"1x": "partmovement_1.png", "2x": "partmovement_1_2x.png", "full": "partmovement_1_full.png"},
												"title": "Part Movement", "description": "Home"},
												{"file": {"1x": "partmovement_2.png", "2x": "partmovement_2_2x.png", "full": "partmovement_2_full.png"},
												"title": "Part Movement", "description": ""},
												{"file": {"1x": "partmovement_3.png", "2x": "partmovement_3_2x.png", "full": "partmovement_3_full.png"},
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
							   data-gallery='[{"file": {"1x": "inhouse_1.png", "2x": "inhouse_1_2x.png", "full": "inhouse_1_full.png"},
												"title": "Inhouse", "description": "Home"},
												{"file": {"1x": "inhouse_2.png", "2x": "inhouse_2_2x.png", "full": "inhouse_2_full.png"},
												"title": "Inhouse", "description": ""},
												{"file": {"1x": "inhouse_3.png", "2x": "inhouse_3_2x.png", "full": "inhouse_3_full.png"},
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
							   data-gallery='[{"file": {"1x": "efin_1.png", "2x": "efin_1_2x.png", "full": "efin_1_full.png"},
												"title": "eFin", "description": "Home"},
												{"file": {"1x": "efin_2.png", "2x": "efin_2_2x.png", "full": "efin_2_full.png"},
												"title": "eFin", "description": ""},
												{"file": {"1x": "efin_3.png", "2x": "efin_3_2x.png", "full": "efin_3_full.png"},
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
							   data-gallery='[{"file": {"1x": "leasing_1.png", "2x": "leasing_1_2x.png", "full": "leasing_1_full.png"},
												"title": "Leasing", "description": "Home"},
												{"file": {"1x": "leasing_2.png", "2x": "leasing_2_2x.png", "full": "leasing_2_full.png"},
												"title": "Leasing", "description": ""},
												{"file": {"1x": "leasing_3.png", "2x": "leasing_3_2x.png", "full": "leasing_3_full.png"},
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
							   data-gallery='[{"file": {"1x": "evo_1.png", "2x": "evo_1_2x.png", "full": "evo_1_full.png"},
												"title": "Evo", "description": "Home"},
												{"file": {"1x": "evo_2.png", "2x": "evo_2_2x.png", "full": "evo_2_full.png"},
												"title": "Evo", "description": ""},
												{"file": {"1x": "evo_3.png", "2x": "evo_3_2x.png", "full": "evo_3_full.png"},
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
							   data-gallery='[{"file": {"1x": "epic_1.png", "2x": "epic_1_2x.png", "full": "epic_1_full.png"},
												"title": "ePIC", "description": "Home"},
												{"file": {"1x": "epic_2.png", "2x": "epic_2_2x.png", "full": "epic_2_full.png"},
												"title": "ePIC", "description": ""},
												{"file": {"1x": "epic_3.png", "2x": "epic_3_2x.png", "full": "epic_3_full.png"},
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
							   data-gallery='[{"file": {"1x": "wms_1.png", "2x": "wms_1_2x.png", "full": "wms_1_full.png"},
												"title": "WMS", "description": "Home"},
												{"file": {"1x": "wms_2.png", "2x": "wms_2_2x.png", "full": "wms_2_full.png"},
												"title": "WMS", "description": ""},
												{"file": {"1x": "wms_3.png", "2x": "wms_3_2x.png", "full": "wms_3_full.png"},
												"title": "WMS", "description": ""}]'
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
							   data-gallery='[{"file": {"1x": "gmiv_1.png", "2x": "gmiv_1_2x.png", "full": "gmiv_1_full.png"},
												"title": "GMIV", "description": "Home"},
												{"file": {"1x": "gmiv_2.png", "2x": "gmiv_2_2x.png", "full": "gmiv_2_full.png"},
												"title": "GMIV", "description": ""},
												{"file": {"1x": "gmiv_3.png", "2x": "gmiv_3_2x.png", "full": "gmiv_3_full.png"},
												"title": "GMIV", "description": ""}]'
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
							   data-gallery='[{"file": {"1x": "invento_1.png", "2x": "invento_1_2x.png", "full": "invento_1_full.png"},
												"title": "Invento", "description": "Home"},
												{"file": {"1x": "invento_2.png", "2x": "invento_2_2x.png", "full": "invento_2_full.png"},
												"title": "Invento", "description": ""},
												{"file": {"1x": "invento_3.png", "2x": "invento_3_2x.png", "full": "invento_3_full.png"},
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
							   data-gallery='[{"file": {"1x": "sls_1.png", "2x": "sls_1_2x.png", "full": "sls_1_full.png"},
												"title": "SLS", "description": "Home"},
												{"file": {"1x": "sls_2.png", "2x": "sls_2_2x.png", "full": "sls_2_full.png"},
												"title": "SLS", "description": ""},
												{"file": {"1x": "sls_3.png", "2x": "sls_3_2x.png", "full": "sls_3_full.png"},
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
							   data-gallery='[{"file": {"1x": "its_1.png", "2x": "its_1_2x.png", "full": "its_1_full.png"},
												"title": "ITS", "description": "Home"},
												{"file": {"1x": "its_2.png", "2x": "its_2_2x.png", "full": "its_2_full.png"},
												"title": "ITS", "description": ""},
												{"file": {"1x": "its_3.png", "2x": "its_3_2x.png", "full": "its_3_full.png"},
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
							   data-gallery='[{"file": {"1x": "jss_1.png", "2x": "jss_1_2x.png", "full": "jss_1_full.png"},
												"title": "JSS", "description": "Home"},
												{"file": {"1x": "jss_2.png", "2x": "jss_2_2x.png", "full": "jss_2_full.png"},
												"title": "JSS", "description": ""},
												{"file": {"1x": "jss_3.png", "2x": "jss_3_2x.png", "full": "jss_3_full.png"},
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
							   data-gallery='[{"file": {"1x": "tas_1.png", "2x": "tas_1_2x.png", "full": "tas_1_full.png"},
												"title": "TAS", "description": "Home"},
												{"file": {"1x": "tas_2.png", "2x": "tas_2_2x.png", "full": "tas_2_full.png"},
												"title": "TAS", "description": ""},
												{"file": {"1x": "tas_3.png", "2x": "tas_3_2x.png", "full": "tas_3_full.png"},
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
							   data-gallery='[{"file": {"1x": "DBase_1.png", "2x": "DBase_1_2x.png", "full": "DBase_1_full.png"},
												"title": "DBase", "description": "Home"},
												{"file": {"1x": "DBase_2.png", "2x": "DBase_2_2x.png", "full": "DBase_2_full.png"},
												"title": "DBase", "description": ""},
												{"file": {"1x": "DBase_3.png", "2x": "DBase_3_2x.png", "full": "DBase_3_full.png"},
												"title": "DBase", "description": ""}]'
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
							   data-gallery='[{"file": {"1x": "despondent_1.png", "2x": "despondent_1_2x.png", "full": "despondent_1_full.png"},
												"title": "Despondent", "description": "Home"},
												{"file": {"1x": "despondent_2.png", "2x": "despondent_2_2x.png", "full": "despondent_2_full.png"},
												"title": "Despondent", "description": ""},
												{"file": {"1x": "despondent_3.png", "2x": "despondent_3_2x.png", "full": "despondent_3_full.png"},
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
							   data-gallery='[{"file": {"1x": "delisi_1.png", "2x": "delisi_1_2x.png", "full": "delisi_1_full.png"},
												"title": "Delisi", "description": "Home"},
												{"file": {"1x": "delisi_2.png", "2x": "delisi_2_2x.png", "full": "delisi_2_full.png"},
												"title": "Delisi", "description": ""},
												{"file": {"1x": "delisi_3.png", "2x": "delisi_3_2x.png", "full": "delisi_3_full.png"},
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
							   data-gallery='[{"file": {"1x": "artz_1.png", "2x": "artz_1_2x.png", "full": "artz_1_full.png"},
												"title": "Artz", "description": "Home"},
												{"file": {"1x": "artz_2.png", "2x": "artz_2_2x.png", "full": "artz_2_full.png"},
												"title": "Artz", "description": ""},
												{"file": {"1x": "artz_3.png", "2x": "artz_3_2x.png", "full": "artz_3_full.png"},
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
