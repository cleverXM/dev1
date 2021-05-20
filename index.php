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
        .banner {
			padding: 3em 0 7em 0;
			background: url(images/bg.jpg);
			background-size: cover;
			height: 70vh;
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
                        <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>

                        <li class="nav-item"><a href="about.php" class="nav-link">ABOUT US</a></li>
                        <li class="nav-item"><a href="project.php" class="nav-link">PROJECTS</a></li>
                        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->

    </section>

    <section class="banner slides">
        <div class="container ">
            <div class="row">
                <div class="col-md-6">
                    <h2>WEB DESIGN</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt consequuntur excepturi
                        cumque recusandae quae harum maxime quidem vero similique iure facilis, molestias laborum
                        distinctio iste explicabo sed, expedita nostrum. Sequi.</p>

                    <button class="btn btm-lg">EXPLORER NOW</button>
                </div>

                <div class="col-md-6">
                    <img src="images/image_1.png" alt="">
                </div>
            </div>
        </div>

    </section>

    <?php include('include/footer.php'); ?>
</body>

</html>