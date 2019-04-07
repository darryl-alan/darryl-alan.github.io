<?php
?>

<!DOCTYPE html>
<html>
	<head>
		<title>seekdarryl.com</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
		<link href="https://unpkg.com/treeflex/dist/css/treeflex.css" rel="stylesheet">
		<style>
			.full {
				width:100vw;
				height: 100vh;
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
		<div class="full bg-red" id="about">
			<div class="center">
				<img src="lalala.jpg" style="background-color: #fff;width:30%;height:30%;">
				<h5>Darryl Alan</h5>
				<div class="tf-tree tf-gap-sm">
					<ul>
						<li>
							<span class="tf-nc">Developer</span>
							<ul>
								<li>
									<span class="tf-nc">Full Stack</span>
									<ul>
										<li>
											<span class="tf-nc">Front End</span>
											<ul>
												<li><span class="tf-nc">Bootstrap</span></li>
												<li><span class="tf-nc">React.js</span></li>
												<li><span class="tf-nc">jQuery</span></li>
											</ul>
										</li>
										<li>
											<span class="tf-nc">Back End</span>
											<ul>
												<li><span class="tf-nc">PHP</span></li>
												<li><span class="tf-nc">Node.js</span></li>
											</ul>
										</li>
										<li>
											<span class="tf-nc">Database</span>
											<ul>
												<li><span class="tf-nc">MySQL/MariaDB</span></li>
												<li><span class="tf-nc">MS SQL Server</span></li>
												<li><span class="tf-nc">SQLite</span></li>
<!--												<li><span class="tf-nc">MongoDB</span></li>-->
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<span class="tf-nc">Mobile</span>
									<ul>
										<li><span class="tf-nc">Android</span></li>
										<li><span class="tf-nc">React Native</span></li>
									</ul>
								</li>
								<li>
									<span class="tf-nc">Deep Learning</span>
									<ul>
<!--										<li><span class="tf-nc">Python Numpy</span></li>-->
										<li><span class="tf-nc">Tensorflow</span></li>
										<li><span class="tf-nc">Keras</span></li>
										<li><span class="tf-nc">Pandas</span></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>	
		</div>
		<div class="full bg-yellow">

		</div>
	</body>
</html>
