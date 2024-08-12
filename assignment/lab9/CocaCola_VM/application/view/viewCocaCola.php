<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coca-Cola</title>
    <link rel="stylesheet" href="../application/css/header.css">
    <link rel="stylesheet" href="../application/css/style.css">
    <link rel="stylesheet" href="../application/css/footer.css">
    <link rel="stylesheet" href="../application/css/custom-d.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/kTc9w8SdYtv5PpGkA1VVz9OYXla8z0ts5RJ7kw6i3QjNNY9Cfp5WuPVx5pumMM9R1mPZwKXu0vCbg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- X3dom -->
    <link rel='stylesheet' type='text/css' href='../application/css/x3dom.css'>
    <style>
        .dropdown-menu .dropdown-menu {
            position: absolute;
            left: 100%; /* Position it to the right of the parent dropdown */
            margin-top: -40px; /* Align with the parent dropdown */
            z-index: 1000; /* Ensure it appears above other content */
        }
    </style>
</head>
<body>
  <header>
      <nav class="navbar sticky-top">
          <div class="logo">
              <a class="navbar-brand" href="index.html">
              <h1>Coca</h1>
              <h2>Cola</h2>
              <h3>Journey</h3>
              <p>Refreshing the world, one story at a time</p>
              </a>
          </div>
          <div class="hamburger" onclick="toggleNav()">
              <i class="fas fa-bars"></i>
          </div>
          <ul class="nav-links" id="main-nav">
              <li><a href="#">Home</a></li>
              <li>
                  <a href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Kaosarat Malik Web 3D Applications" data-content="My name is Kaosarat Malik, Advanced Computer Science(Msc), i designed this Mobile 3d applications, it is based on a 3d websites.">About</a>
              </li>
              <li class="dropdown">
                  <a id="navModels"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
              </li>
              <li><a href="#" data-toggle="modal" data-target="#contactModal">Contact</a></li>
          </ul>
      </nav>
  </header>



  <section class="hero" id="home">
      <div class="content">
          <h1><span class="black-text">Always</span> Best Served Chilled</h1>
          <p>Coca-Cola is the world's favourite soft drink and has been enjoyed since 1886. Whether you want a small 250ml
              can or a large 1.75 litre bottle for sharing, you can find Coca-Cola original taste in a variety of sizes to
              suit every lifestyle and occasion.</p>
          <a href="products.html" class="btn">View Products</a>
      </div>
      <div class="image">
          <img src="../application/assets/images/coca_cola.png" alt="Coca-Cola">
      </div>
  </section>
  <br>
  <div class="row" style="margin-left: 10px; margin-right: 10px; " id="about">
        <!-- Coca Cola Column -->
        <div class="col-sm-4">
            <div class="card">
            <a href="javascript:swap('coke')">
                <img class="card-img-top img-fluid img-thumbnail "  src="../application/assets/images/site_images/coca_cola.jpg" alt="Coca Cola">
            </a>
            <div class="card-body">
                <h3 class="card-title">Coca Cola</h3>
                <p class="card-text">It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!</p>    
                <a href="https://www.coca-cola.com/gb/en/brands/coca-cola-original-taste" class="btn" style="background-color: #ff0000; color: #fff">Find out more ...</a>   
            </div>
            </div>
        </div>
       
        <!-- Sprite Column -->
        <div class="col-sm-4">
            <div class="card">
            <a href="javascript:swap('sprite')">
                <img class="card-img-top img-fluid img-thumbnail imag" src="../application/assets/images/site_images/sprite.jpg" alt="Sprite">
            </a>
            <div class="card-body">
                <h3 class="card-title">Sprite</h3>
                <p class="card-text">First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world's leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.</p>
                <a href="https://www.coca-cola.com/gb/en/brands/sprite" class="btn" style="background-color: #ff0000; color: #fff">Find out more ...</a>
            </div>
            </div>
        </div>
            
        <!-- Dr Pepper Column -->
        <div class="col-sm-4">
            <div class="card">
            <a href="javascript:swap('pepper')">
                <img class="card-img-top img-fluid img-thumbnail imag" src="../application/assets/images/site_images/dr_pepper.jpg" alt="Dr Pepper">
            </a>
            <div class="card-body">
                <h3 class="card-title">Dr Pepper</h3>
                <p class="card-text">Dr Pepper's unique, sparkling blend of 23 fruit flavours has been around for well over a century and it's still the same, with that distinctive flavour you just can't quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885.</p>
                <a href="https://www.coca-cola.com/gb/en/brands/dr-pepper" class="btn" style="background-color: #ff0000; color: #fff">Find out more ...</a>
            </div>
            </div>
        </div>   
    </div>

    <div id="models" class="main_contents" style="display:none;">
        <div class="row">
            <div class="col-sm-8">
                <div class="card text-left">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                            <a id="navCoke" class="nav-link active" href="#">X3D Models</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <div>
                            <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                            <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                            <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>

                            <button type="button" class="btn btn-success btn-responsive" onMouseUp="cokeScene(); cokeDescription();">Coke</button>
                            <button type="button" class="btn btn-success btn-responsive" onMouseUp="spriteScene(); spriteDescription();">Sprite</button>
                            <button type="button" class="btn btn-success btn-responsive" onMouseUP="pepperScene(); pepperDescription();">Pepper</button>

                            <div class="model3D">
                                <x3d id="wire">
                                    <scene>
                                        <Switch whichChoice="0" id='SceneSwitch'>
                                            <transform>
                                                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/coke_can.x3d" > </inline>
                                            </transform>
                                            <transform>
                                                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/sprite.x3d"> </inline>
                                            </transform>
                                            <transform>
                                                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/pepper.x3d"> </inline>
                                            </transform>
                                        </Switch>
                                    </scene>
                                </x3d>
                            </div>

                            
                            <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                            <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                            <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- image gallery -->
            <div class="col-sm-4">
                <div class="card text-left">
                    <div class="card-header gallery-header">
                        <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Gallery</a>
                        </li>
                    </div>
                    <div class="card-body">
                        <div class="card-title title_gallery drinksText"></div>
                        <div class="gallery" id="gallery"></div>
                        <div class="card-text description_gallery drinksText"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="interaction" class="row" style="display:none;">
        <div class="col-sm-4">
            <div class="card text-left">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                    <!-- Dropdown nav-tab -->
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" onclick="cameraFront();">Front</a>
                            <a class="dropdown-item" href="#" onclick="cameraBack();">Back</a>
                            <a class="dropdown-item" href="#" onclick="cameraLeft();">Left</a>
                            <a class="dropdown-item" href="#" onclick="cameraRight();">Right</a>
                            <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                            <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="card-Title x3dCamera_Subtitle drinksText">
                        <h3>Camera Views</h3>
                    </div>                            
                    <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                    <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                    <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                    <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                    <a href="#" class="btn btn-outline-dark disabled btn-responsive">Off</a>
                    <div class="card-text x3dCameraDescription drinksText">
                        <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card text-left">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Animation</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="card-Title x3dAnimationSubtitle drinksText">
                        <h3>Animation Options</h3>
                    </div>
                    <a href="#" class="btn btn-outline-light btn-responsive" onclick="spin();">RotX</a>
                    <a href="#" class="btn btn-outline-light btn-responsive">RotY</a>
                    <a href="#" class="btn btn-outline-light btn-responsive">RotZ</a>
                    <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                    <div class="card-text x3dAnimationDescription drinksText">
                        <p>These buttons select a range of X3D animation options</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card text-left">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >Render</a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Polygon</a>
                            <a class="dropdown-item" href="#" onclick="wireFrame();">Wireframe</a>
                            <a class="dropdown-item" href="#">Vertex</a>
                            </div>
                        </li>
                        <!-- Dropdown nav-tab -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" onclick="headLight();">Default</a>
                            <a class="dropdown-item" href="#" onclick="omniLight();">Onmi On/Off</a>
                            <a class="dropdown-item" href="#" onclick="targetLight();">Target On/Off</a>
                            <a class="dropdown-item" href="#" onclick="headLight();">Headlight On/Off</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="card-body">
                    <div class="card-Title x3dRendersubtitle drinksText">
                        <h3>Render and Lighting Options</h3>
                    </div>
                    <a href="#" class="btn btn-success btn-responsive">Poly</a>
                    <a href="#" class="btn btn-secondary btn-responsive" onclick="wireFrame();">Wire</a>
                    <a href="#" class="btn btn-success btn-responsive" onclick="headLight();">Headlight</a>
                    <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                    <div class="card-text x3dRenderDescription drinksText">
                        <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <section class="slideshow">
        <div class="slideshow-container">
            <div id="player"></div>
        </div>
    </section>
  <footer>
      <div class="footer-content">
          <ul class="social-icons">
              <li><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
              <li><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://youtube.com" target="_blank"><i class="fab fa-youtube"></i></a></li>
          </ul>
          <p>&copy; <span id="year"></span> Mobile 3D Applications.</p>
      </div>
  </footer>

  <div class="modal fade" id="contactModal">
    <div class="modal-dialog">
        <div class="modal-content">
        
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">3D App Contact Details</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <p>Kaosarat Ololade Malik, Informatics & Engineering, Email: km744@sussex.ac.uk</p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
        
        </div>
    </div>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<!-- <script src="https://www.youtube.com/iframe_api"></script> -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../application/js/jquery-3.4.1.js"></script>
<script src="../application/js/popper.min.js"></script>
<!--<script src="js/bootstrap.js"></script>-->
<script src="../application/js/bootstrap-4.4.1.js"></script>

<!-- Include the x3dom JavaScript -->
<script src='../application/js/x3dom.js'></script>
<script src="../application/js/slideshow.js"></script>
<!-- JavaScript to swap for SPA and restyle -->
<script src="../application/js/swap_restyle.js"></script>
<!-- JQuery code to get content data from a backend JSON file -->
<script src="../application/js/getJsonData.js"></script>
<!-- JavaScript and PHP based Gallery generator  -->
<script type="text/javascript" src="../application/js/gallery_generator.js"></script>
<!-- JavaScript model interactions -->
<script src="../application/js/modelInteractions.js"></script>

<script>
    function toggleNav() {
        var nav = document.getElementById("main-nav");
        nav.classList.toggle("show-nav");
    }

    // JavaScript to toggle dropdown on click
    document.querySelector('.dropbtn').addEventListener('click', function() {
        this.nextElementSibling.classList.toggle('show');
    });

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }

    document.getElementById("year").textContent = new Date().getFullYear();
</script>

</body>
</html>