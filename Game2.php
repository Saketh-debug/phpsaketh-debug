<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Saketh's Ghost Run | Zentech</title>
    <head profile="http://www.w3.org/2005/10/profile">
      <link rel="icon" 
            type="image/png" 
            href="Images/Zentech Logo.png" />
    <link rel="stylesheet" href="TemplateData/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="TemplateData/UnityProgress.js"></script>
    <script src="Build/UnityLoader.js"></script>
    <script>
      var unityInstance = UnityLoader.instantiate("unityContainer", "Build/html game.json", {onProgress: UnityProgress});
    </script>
    <style>
      body{
        background-image: url(Images/blur.jpg);
        background-size: cover;
        background-attachment: fixed;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
      <a class="navbar-brand" href="index.php">Zentech</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="projects.php">Projects <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Youtube.php">Youtube</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Game.php">Saketh's Box Run</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Saketh's Ghost Run</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacts.php" tabindex="-1" aria-disabled="true">Contact Us </a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="dd.php">Art of CSS</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="webgl-content">
      <div id="unityContainer" style="width: 960px; height: 540px"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="unityInstance.SetFullscreen(1)"></div>
        <div class="title">created by <strong>Saketh</strong></div>
      </div>
    </div>
  </body>
</html>
