@extends('layout')
<head>	<link rel="stylesheet" href="css/style2.css">	</head>
@section('content')
<!-- Masthead-->
<header class="masthead">
	<div class="container">
		<div class="masthead-subheading">¡Bienvenido!</div>
		<div class="masthead-heading text-uppercase">MI PÁGINA PERSONAL</div>
		<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Conóceme</a>
	</div>
</header>
<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Portfolio</h2>
			<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
		</div>
		<div class="row">
			<div class="col-lg-4 col-sm-6 mb-4">
				<div class="portfolio-item">
					<a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
						</div>
						<img class="img-fluid" src="img/portfolio/database.jpg" alt="" />
					</a>
					<div class="portfolio-caption">
						<div class="portfolio-caption-heading">DataBase</div>
						<div class="portfolio-caption-subheading text-muted">Mysql</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mb-4">
				<div class="portfolio-item">
					<a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
						</div>
						<img class="img-fluid" src="img/portfolio/design.jpg" alt="" />
					</a>
					<div class="portfolio-caption">
						<div class="portfolio-caption-heading">Software Design</div>
						<div class="portfolio-caption-subheading text-muted">PHP, Node, Laravel, JS</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mb-4">
				<div class="portfolio-item">
					<a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
						</div>
						<img class="img-fluid" src="img/portfolio/appweb.jpg" alt="" />
					</a>
					<div class="portfolio-caption">
						<div class="portfolio-caption-heading">Web Application</div>
						<div class="portfolio-caption-subheading text-muted">Laravel, Ruby, Java, HTML, PHP</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
				<div class="portfolio-item">
					<a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
						</div>
						<img class="img-fluid" src="img/portfolio/ios.jpg" alt="" />
					</a>
					<div class="portfolio-caption">
						<div class="portfolio-caption-heading">IOS</div>
						<div class="portfolio-caption-subheading text-muted">Swift, Apps, C#</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
				<div class="portfolio-item">
					<a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
						</div>
						<img class="img-fluid" src="img/portfolio/android.jpg" alt="" />
					</a>
					<div class="portfolio-caption">
						<div class="portfolio-caption-heading">Android</div>
						<div class="portfolio-caption-subheading text-muted">Js, Apps</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="portfolio-item">
					<a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
						</div>
						<img class="img-fluid" src="img/portfolio/security.jpg" alt="" />
					</a>
					<div class="portfolio-caption">
						<div class="portfolio-caption-heading">Software Security</div>
						<div class="portfolio-caption-subheading text-muted">All security in ur software</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Team-->
<section class="page-section bg-transparent text-light" id="team">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Mi equipo</h2>
			<h3 class="section-subheading text-muted">Unidos con un mismo fin</h3>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="team-member">
					<img class="mx-auto rounded-circle" src="img/team/profesor.jpg" alt="" />
					<h4>Profesor</h4>
					<p class="text-muted">Colaborador</p>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="team-member">
					<img class="mx-auto rounded-circle" src="img/team/drhouse.jpg" alt="" />
					<h4>Dr. House</h4>
					<p class="text-muted">Doctor</p>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="team-member">
					<img class="mx-auto rounded-circle" src="img/team/breakingbad.jpg" alt="" />
					<h4>Walter White</h4>
					<p class="text-muted">Químico</p>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="team-member">
					<img class="mx-auto rounded-circle" src="img/team/drstrange.jpg" alt="" />
					<h4>Dr. Strange</h4>
					<p class="text-muted">Cirujano Místico</p>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="team-member">
					<img class="mx-auto rounded-circle" src="img/team/frisco.jpg" alt="" />
					<h4>Francisco Ramírez</h4>
					<p class="text-muted">Director</p>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="team-member">
					<img class="mx-auto rounded-circle" src="img/team/dexter.jpg" alt="" />
					<h4>Dr. dexter</h4>
					<p class="text-muted">Científico</p>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
		</div>
	</div>
</section>
<!-- Clients-->
<div class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6 my-3">
				<a href="#!"><img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="" /></a>
			</div>
			<div class="col-md-3 col-sm-6 my-3">
				<a href="#!"><img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="" /></a>
			</div>
			<div class="col-md-3 col-sm-6 my-3">
				<a href="#!"><img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="" /></a>
			</div>
			<div class="col-md-3 col-sm-6 my-3">
				<a href="#!"><img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="" /></a>
			</div>
		</div>
	</div>
</div>
<!-- Contact-->
<section class="page-section" id="contact">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Contáctame</h2>
			<h3 class="section-subheading text-muted">Llena este formulario y contáctame.</h3>
		</div>
		<form id="contactForm" name="sentMessage" novalidate="novalidate">
			<div class="row align-items-stretch mb-5">
				<div class="col-md-6">
					<div class="form-group">
						<input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
						<p class="help-block text-danger"></p>
					</div>
					<div class="form-group">
						<input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
						<p class="help-block text-danger"></p>
					</div>
					<div class="form-group mb-md-0">
						<input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
						<p class="help-block text-danger"></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group form-group-textarea mb-md-0">
						<textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
						<p class="help-block text-danger"></p>
					</div>
				</div>
			</div>
			<div class="text-center">
				<div id="success"></div>
				<button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
			</div>
		</form>
	</div>
</section>
<!-- Footer-->
<footer class="footer py-4">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4 text-lg-left">Copyright © Your Website 2020</div>
			<div class="col-lg-4 my-3 my-lg-0">
				<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
				<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
				<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<div class="col-lg-4 text-lg-right">
				<a class="mr-3" href="#!">Privacy Policy</a>
				<a href="#!">Terms of Use</a>
			</div>
		</div>
	</div>
</footer>
<!-- Portfolio Modals-->
<!-- Modal 1-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal"><img src="img/close-icon.svg" alt="Close modal" /></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="modal-body">
							<!-- Project Details Go Here-->
							<h2 class="text-uppercase">Project Name</h2>
							<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
							<img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="" />
							<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
							<ul class="list-inline">
								<li>Date: January 2020</li>
								<li>Client: Threads</li>
								<li>Category: Illustration</li>
							</ul>
							<button class="btn btn-primary" data-dismiss="modal" type="button">
							<i class="fas fa-times mr-1"></i>
							Close Project
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal 2-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="modal-body">
							<!-- Project Details Go Here-->
							<h2 class="text-uppercase">Project Name</h2>
							<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
							<img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="" />
							<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
							<ul class="list-inline">
								<li>Date: January 2020</li>
								<li>Client: Explore</li>
								<li>Category: Graphic Design</li>
							</ul>
							<button class="btn btn-primary" data-dismiss="modal" type="button">
							<i class="fas fa-times mr-1"></i>
							Close Project
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal 3-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="modal-body">
							<!-- Project Details Go Here-->
							<h2 class="text-uppercase">Project Name</h2>
							<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
							<img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="" />
							<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
							<ul class="list-inline">
								<li>Date: January 2020</li>
								<li>Client: Finish</li>
								<li>Category: Identity</li>
							</ul>
							<button class="btn btn-primary" data-dismiss="modal" type="button">
							<i class="fas fa-times mr-1"></i>
							Close Project
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal 4-->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="modal-body">
							<!-- Project Details Go Here-->
							<h2 class="text-uppercase">Project Name</h2>
							<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
							<img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="" />
							<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
							<ul class="list-inline">
								<li>Date: January 2020</li>
								<li>Client: Lines</li>
								<li>Category: Branding</li>
							</ul>
							<button class="btn btn-primary" data-dismiss="modal" type="button">
							<i class="fas fa-times mr-1"></i>
							Close Project
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal 5-->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="modal-body">
							<!-- Project Details Go Here-->
							<h2 class="text-uppercase">Project Name</h2>
							<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
							<img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="" />
							<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
							<ul class="list-inline">
								<li>Date: January 2020</li>
								<li>Client: Southwest</li>
								<li>Category: Website Design</li>
							</ul>
							<button class="btn btn-primary" data-dismiss="modal" type="button">
							<i class="fas fa-times mr-1"></i>
							Close Project
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal 6-->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="modal-body">
							<!-- Project Details Go Here-->
							<h2 class="text-uppercase">Project Name</h2>
							<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
							<img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="" />
							<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
							<ul class="list-inline">
								<li>Date: January 2020</li>
								<li>Client: Window</li>
								<li>Category: Photography</li>
							</ul>
							<button class="btn btn-primary" data-dismiss="modal" type="button">
							<i class="fas fa-times mr-1"></i>
							Close Project
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="assets/mail/jqBootstrapValidation.js"></script>
<script src="assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
@endsection