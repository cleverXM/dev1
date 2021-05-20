<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="css/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" rel="stylesheet">

    <title>Hello, world!</title>

    <style>

.banner{
      background: #000;
      width: 100%;
      height: 50vh;
      text-align:center;
      
    }

		/* About Me 
---------------------*/
		.about-text h3 {
			font-size: 45px;
			font-weight: 700;
			margin: 0 0 6px;
		}

		@media (max-width: 767px) {
			.about-text h3 {
				font-size: 35px;
			}
		}

		.about-text h6 {
			font-weight: 600;
			margin-bottom: 15px;
		}

		@media (max-width: 767px) {
			.about-text h6 {
				font-size: 18px;
			}
		}

		.about-text p {
			font-size: 18px;
			max-width: 450px;
		}

		.about-text p mark {
			font-weight: 600;
			color: #20247b;
		}

		.about-list {
			padding-top: 10px;
		}

		.about-list .media {
			padding: 5px 0;
		}

		.about-list label {
			color: #20247b;
			font-weight: 600;
			width: 88px;
			margin: 0;
			position: relative;
		}

		.about-list label:after {
			content: "";
			position: absolute;
			top: 0;
			bottom: 0;
			right: 11px;
			width: 1px;
			height: 12px;
			background: #20247b;
			-moz-transform: rotate(15deg);
			-o-transform: rotate(15deg);
			-ms-transform: rotate(15deg);
			-webkit-transform: rotate(15deg);
			transform: rotate(15deg);
			margin: auto;
			opacity: 0.5;
		}

		.about-list p {
			margin: 0;
			font-size: 15px;
		}

		@media (max-width: 991px) {
			.about-avatar {
				margin-top: 30px;
			}
		}

		.about-section .counter {
			padding: 22px 20px;
			background: #ffffff;
			border-radius: 10px;
			box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
		}

		.about-section .counter .count-data {
			margin-top: 10px;
			margin-bottom: 10px;
		}

		.about-section .counter .count {
			font-weight: 700;
			color: #20247b;
			margin: 0 0 5px;
		}

		.about-section .counter p {
			font-weight: 600;
			margin: 0;
		}

		mark {
			background-image: linear-gradient(rgba(252, 83, 86, 0.6), rgba(252, 83, 86, 0.6));
			background-size: 100% 3px;
			background-repeat: no-repeat;
			background-position: 0 bottom;
			background-color: transparent;
			padding: 0;
			color: currentColor;
		}

		.theme-color {
			color: #fc5356;
		}

		.dark-color {
			color: #20247b;
		}

	


    </style>
</head>

<body>
    <section class="ftco-section">


        <div class="container">
            <div class="row justify-content-between">
                <div class="col">
                    <a class="navbar-brand" href="index.html">CREATIVE <span>MIND's</span></a>
                </div>
                <div class="col d-flex justify-content-end">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span> Menu
                </button>
                <form action="#" class="searchform order-lg-last">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control pl-3" placeholder="Search">
                        <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
                    </div>
                </form>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>

                        <li class="nav-item active"><a href="about.php" class="nav-link">ABOUT US</a></li>
                        <li class="nav-item"><a href="project.php" class="nav-link">PROJECTS</a></li>
                        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->

    </section>


    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>About Us</h2>
                    <p>Home > About us</p>
                </div>
            </div>

        </div>

    </section>

    
    <section class="section about-section gray-bg" id="about">
		<div class="container">
			<div class="row align-items-center flex-row-reverse">
				<div class="col-lg-6">
					<div class="about-text go-to">
						<h3 class="dark-color">About Me</h3>
						<h6 class="theme-color lead">A Lead UX &amp; UI designer based in Tanzania</h6>
						<p>I <mark>design and develop</mark> services for customers of all sizes, specializing in
							creating stylish, modern websites, web services and online stores. My passion is to design
							digital user experiences through the bold interface and meaningful interactions.</p>
						<div class="row about-list">
							<div class="col-md-6">
								<div class="media">
									<label>Birthday</label>
									<p>4th april 1999</p>
								</div>
								<div class="media">
									<label>Age</label>
									<p>22 Yr</p>
								</div>
								<div class="media">
									<label>Residence</label>
									<p>Tanzania</p>
								</div>
								<div class="media">
									<label>Address</label>
									<p>Dar es salaam, Tz</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="media">
									<label>E-mail</label>
									<p>mouddyjm@gmail.com</p>
								</div>
								<div class="media">
									<label>Phone</label>
									<p>820-885-3321</p>
								</div>
								<div class="media">
									<label>Skype</label>
									<p>skype.0404</p>
								</div>
								<div class="media">
									<label>Freelance</label>
									<p>Available</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about-avatar">
						<img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="">
					</div>
				</div>
			</div>
			<div class="counter">
				<div class="row">
					<div class="col-6 col-lg-3">
						<div class="count-data text-center">
							<h6 class="count h2" data-to="500" data-speed="500">500</h6>
							<p class="m-0px font-w-600">Happy Clients</p>
						</div>
					</div>
					<div class="col-6 col-lg-3">
						<div class="count-data text-center">
							<h6 class="count h2" data-to="150" data-speed="150">150</h6>
							<p class="m-0px font-w-600">Project Completed</p>
						</div>
					</div>
					<div class="col-6 col-lg-3">
						<div class="count-data text-center">
							<h6 class="count h2" data-to="850" data-speed="850">850</h6>
							<p class="m-0px font-w-600">Photo Capture</p>
						</div>
					</div>
					<div class="col-6 col-lg-3">
						<div class="count-data text-center">
							<h6 class="count h2" data-to="190" data-speed="190">190</h6>
							<p class="m-0px font-w-600">Telephonic Talk</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <?php include('include/footer.php'); ?>
</body>

</html>