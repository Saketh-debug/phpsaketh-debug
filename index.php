<!doctype html>
<html lang="en">
  <head>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      
      ga('create', 'UA-XXXXX-Y', 'auto');
      ga('send', 'pageview');
      </script>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="Y0Tmy7ijLWTzXG2HKZ8h-G-7cyhf-RRtfZTsi1OQaa4" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Home | Zentech</title>
    <head profile="http://www.w3.org/2005/10/profile">
      <link rel="icon" 
            type="image/png" 
            href="Images/Zentech Logo.png" />
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .carousel-item img {
    position: absolute;
    object-fit:cover;
    top: 0;
    left: 0;
    min-height: 500px;
}
      
     
    </style>
    <!-- Custom styles for this template -->
    <link href="CSS/carousel.css" rel="stylesheet">
    
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
          <a class="navbar-brand" href="#">Zentech</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item ">
                <a class="nav-link" href="projects.php">Projects <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Youtube.php">YouTube</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Game.php">Saketh's Box Run</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Game2.php">Saketh's Ghost Run</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacts.php" tabindex="-1" aria-disabled="true">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="birthday.php">Birthday Celebrations</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dd.php">Art of CSS</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      
      <main role="main">
      
        <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="Images/render result.png" class="d-block w-100" alt="...">
              <div class="container">
                <div class="carousel-caption text-left">
                    <h1>New Releases!</h1>
                    <p>Saketh's Box Run (Beta)</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="Images/ezgif.com-gif-maker.gif" class="d-block w-100" alt="...">
              <div class="container">
                <div class="carousel-caption">
                    <h1>Saketh's Box Run (Beta)</h1>
                    <p>A game created for fun and enjoyment.</p> 
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="https://images.unsplash.com/photo-1534972195531-d756b9bfa9f2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjE3MzYxfQ&auto=format&fit=crop&w=750&q=80" class="d-block w-100" alt="...">
              <div class="container">
                <div class="carousel-caption text-right">
                    <h1> Zentech</h1>
                    <p>Amazing, revolutionary and unprecedented, as always</p>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="jumbotron" id="d1">
            <h1 class="display-4">Hello!</h1>
            <p class="lead">I am Zen, your personal virtual assistant.</p>
            <hr class="my-4">
            <p>Currently unavailable. Sorry for the delay; we are trying our best to bring it back!</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#learnModal">Learn More </button>
        </div>
        <div class="modal fade" id="learnModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="learnModal">Zen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Hello. I'm Zen, and I'm currently undergoing repairs. 
                Some problems have arisen concerning my development, but rest assured, I'll be back in full functionality soon.<br>
                <i>Zentech is regretful about this unforeseen complication. But the repairs are necessary, 
                and we're trying to bring Zen back online as soon as possible.</i>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
      
        <div class="container marketing" id="d2">

            <!-- Three columns of text below the carousel -->
            <div class="row">
              <div class="col-lg-4">
                <img src="Images/Saketh's Picture.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                <h2>Saketh</h2>
                <p>Saketh is a co-founder, the CEO  and a director of <strong>Zentech</strong> along with Hrutvik and Ritvik. </p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                <img src="Images/Hrutvik's Picture.PNG" class="bd-placeholder-img rounded-circle" width="140" height="140" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                <h2>Hrutvik</h2>
                <p>Hrutvik is a co-founder, the CFO, head of PR and a director of <strong>Zentech</strong> along with Saketh and Ritvik.</p>
                <!--<p><a class="btn btn-secondary" href="birthday.php" role="button">About Us</a></p>-->
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                <img src="Images/Ritvik's Picture.HEIC" class="bd-placeholder-img rounded-circle" width="140" height="140" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                <h2>Ritvik</h2>
                <p>Ritvik is a co-founder, the COO and a director of <strong>Zentech</strong> along with Hrutvik and Saketh.</p>
              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
      
          <!-- START THE FEATURETTES -->
      
          <hr class="featurette-divider">
      
          <div class="row featurette">
            <div class="col-md-7">
                <h2 class="Why we made"><strong>What We Do</strong> <span class="text-muted"></span></h2>
                <p class="lead">What do we do, you ask? Simple! We write code!<br>
                  Our projects involving web development range over a wide host of subjects, covering programming languages like Python, JavaScript, and HTML. We also create games.</p>
            </div>
            <div class="col-md-5">
              <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" id="image1" src="https://images.unsplash.com/photo-1512295767273-ac109ac3acfa?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=375&q=80" width="500px" height="500px">
              
            </div>
          </div>
      
          <hr class="featurette-divider">
      
          <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading"><strong>Our Goal</strong><span class="text-muted"></span></h2>
                <p class="lead">Our goal is to make the web a more memorable, safer and enriching experience than ever before, and change it for the better.<br>
                  We also make games for people to enjoy and have fun playing.<br>
                  And, of course, to write code for a variety of reasons!</p>
            </div>
            <div class="col-md-5 order-md-1">
              <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" id="image2" src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=393&q=80" width="500px" height="500px">
            </div>
          </div>
      
          <hr class="featurette-divider">
      
          <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading"><strong>Our Projects</strong> <span class="text-muted"></span></h2>
                <a href="projects.html">Projects</a>
                <p class="lead">Our current projects include making games like Box Run and Ghost Run, our personal assistant Zen, and of course, this website!</p>
            </div>
            <div class="col-md-5">
              <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" id="image2" src="https://images.unsplash.com/photo-1525547719571-a2d4ac8945e2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=80" width="500px" height="500px">
            </div>
          </div>
      
          <hr class="featurette-divider">
      
          <!-- /END THE FEATURETTES -->
      
        </div><!-- /.container -->
      
      
        <!-- FOOTER -->
        <footer class="container">
          <p class="float-right"><a href="#">Back to top</a></p>
          <p>&copy; 2020-2020 Zentech Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
      </main>
      <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    --></body>
      </html>
      
