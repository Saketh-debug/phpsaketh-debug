<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .carousel .carousel-item {
  height: 500px;
}

.carousel-item {
    height: 600px;
  }
  .carousel-item > img {
    position: absolute;
    top: 0;
    left: 0;
    min-width: 100%;
    height: 600px;
  }
  

    </style>




    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
   
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='CSS/csss.css' rel='stylesheet'>
   
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light" id="n1">
          <a class="navbar-brand" href="index.html">Zentech</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="projects">Projects <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Youtube">YouTube</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Game">Saketh's Box Run</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Game2">Saketh's Ghost Run</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacts" tabindex="-1" aria-disabled="true">Contact Us </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dd">Art of CSS</a>
              </li>
            </ul>  
          </div>
        </nav>
      </header>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Images/About Page Carousel Item 1.jpg" class="d-block w-100" alt="...">
          </div>
          <!--<div class="carousel-item">
            <img src="About Page Carousel Item 2.jpg" class="d-block w-100" alt="...">
          </div>-->
          <div class="carousel-item">
            <img src="Images/About Page Carousel Item 3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        
        </a>
      </div>
    
    <div class="aboutus-secktion paddingTB60">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="strong">Who are we? <br> What do we do?</h1>
                    <p class="lead">Read more about our history and our inspiration here.</p>
                </div>
                <div class="col-md-6">
                    <p>Zentech was co-founded by three friends: Saketh, Hrutvik and Lohith.</p>
                    <p>
                      Our logo, "Amazing, revolutionary and unprecedented, as always", was coined by Hrutvik. 
                      Using just GitHub, Visual Studio, Unity and our imagination, we're unstoppable!
                      Saketh and Hrutvik are the main designers of the website, and Saketh also makes games like Box Run and Ghost Run on his own.
                      We're working on improving our web development skills, and also improving the overall quality of our company.
                    </p>
                    <p>We truly believe in our aspirations and goals for this company, and hope to make our dreams come true.</p>
                    <p>Stayed tuned for updates in our website and more fun games and videos.</p>
                </div>
            </div>
        </div>
    </div>
    <!----<div class="container team-sektion paddingTB60">
	<div class="row">
		<div class="site-heading text-center">
						<h3>Our Team</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt <br> ut labore et dolore magna aliqua. Ut enim ad minim </p>
						<div class="border"></div>
					</div>
	</div>
	<div class="row">
		<div class="col-md-4 team-box">
		    <div class="team-img thumbnail">
		        <img src="https://images.pexels.com/photos/462680/pexels-photo-462680.jpeg?w=940&h=650&auto=compress&cs=tinysrgb">
		    <div class="team-content">    
		        <h3>Philip Freeman</h3>
		        <div class="border-team"></div>
		        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
		        <div class="social-icons"> 
               <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
               <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
	        </div>
		    </div>
		</div>
	</div>
	    <div class="col-md-4 team-box">
		    <div class="team-img thumbnail">
		        <img src="https://images.pexels.com/photos/567459/pexels-photo-567459.jpeg?w=940&h=650&auto=compress&cs=tinysrgb">
		    <div class="team-content">    
		        <h3>David Smith</h3>
		        <div class="border-team"></div>
		        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
		        <div class="social-icons"> 
               <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
               <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
	        </div>
		    </div>
		</div>
	</div>
	    <div class="col-md-4 team-box">
		    <div class="team-img thumbnail">
		        <img src="https://images.pexels.com/photos/325682/pexels-photo-325682.jpeg?w=940&h=650&auto=compress&cs=tinysrgb">
		    <div class="team-content">    
		        <h3>Robert D'costa</h3>
		        <div class="border-team"></div>
		        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
		        <div class="social-icons"> 
               <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
               <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
	        </div>
		    </div>
		</div>
	</div>
	    
</div>
</div>
-->
</div>
  <footer class="container">
          <p class="float-right"><a href="#">Back to top</a></p>
          <p>&copy; 2020-2020 Zentech Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>