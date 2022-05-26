<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">  

    <!-- X3DOM.css -->
    <link rel='stylesheet' type='text/css' href='css/x3dom.css'>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">

    <title>Coca Cola Web Page</title>
  </head>
  <body id="bodyColor">
    <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
        <div class="container-fluid"> 

            <!-- Brand -->
            <div class="logo">
                    <a class="navbar-brand" href="#">
                        <h1>Coca</h1>
                        <h2>Cola</h2>
                        <h3>Journey</h3>
                        <p>Refreshing the world, one story at a time</p>
                    </a>
            </div>

            <!-- Navbar Menu Icon -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Menu Icon button to the links class navbar-collapse selector] -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                            <a id="navAbout" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="3D Apps is a final year and postgraduate module ...">About</a>
                    </li>
                
                    <!-- Dropdown -->
                    <li class="nav-item">
                        <a id="navModels" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div id="about" >
               3D Apps is a final year and postgraduate module ...  
        </div>  



    <!-- This is the main contents of the SPA -->
    <div class="container-fluid"> <!-- Start SPA Contents -->
        <!-- This is the home page contents -->
        <div class="main_contents" id="home">
            <div class="row">
                <div class="col-sm-12">
                    <div id="main_3d_image">
                        <div id="main_text" class="col-xs-12 col-sm-4">
                            <div id="title_home"></div>
                            <div id="subTitle_home"></div>
                            <div id="description_home"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- A row to hold three cards for the Coke, Sprite and Pepper contents -->
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <a href="assets/images/render_images/coke.jpg" data-fancybox data-caption="My 3D Coke Can Render">
                            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/gallery_images/coca_cola.jpg" alt="Coca Cola">
                        </a>
                        <div class="card-body">
                            <div id="title_left" class="card-title drinksText"></div>
                            <div id="subTitle_left" class="card-subtitle drinksText"></div>
                            <div id="description_left" class="card-text drinksText"></div>   
                            <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Find out more ...</a>          
                        </div>
                    </div>
                </div>
            
                <div class="col-sm-4">
                    <div class="card">
                        <a href="assets/images/render_images/sprite.jpg" data-fancybox data-caption="My 3D Sprite Bottle Render" class="img-narrow">
                            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/gallery_images/sprite.jpg" alt="Sprite">
                        </a>
                        <div class="card-body">
                            <div id="title_centre" class="card-title drinksText"></div>
                            <div id="subTitle_centre" class="card-subtitle drinksText"></div>
                            <div id="description_centre" class="card-text drinksText"></div>   
                            <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Find out more ...</a>
                          </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <a href="assets/images/render_images/pepper.jpg" data-fancybox data-caption="My 3D Pepper Cup Render" class="thumbnail">
                            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/gallery_images/dr_pepper.jpg" alt="Dr Pepper">
                        </a>
                        <div class="card-body">
                            <div id="title_right" class="card-title drinksText"></div>
                            <div id="subTitle_right" class="card-subtitle drinksText"></div>
                            <div id="description_right" class="card-text drinksText"></div>   
                            <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responsive">Find out more ...</a>
                          </div>
                    </div>
                </div>
            </div>
        </div>  

        <!-- This is the content for X3D models and 3D Image Gallery -->
        <div id="models" class="main_contents" >
            <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
            <div class="row">
                <!-- X3D Model -->
                <div class="col-sm-8">
                <div class="card text-left">
                    <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                        <a id="navCoke" class="nav-link active" href="#">Coke</a>
                        </li>
                        <li class="nav-item">
                        <a id="navSprite" class="nav-link" href="#">Sprite</a>
                        </li>
                        <li class="nav-item">
                        <a id="navPepper" class="nav-link" href="#">Pepper</a>
                        </li>
                    </ul>
                    </div>
                    <div class="card-body">
                    <!-- Coke X3D model -->
                    <div id="coke">
                        <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                        <!-- Place the X3D code here -->
                        <div class="model3D">
                            <x3d>
                                <scene>
                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/coke.x3d" > </inline>
                                </scene>
                            </x3d>
                        </div> 
                        <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                    </div>
                    <!-- Sprite X3D model -->
                    <div id="sprite" style="display:none;">
                        <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                        <!-- Place the X3D code here -->
                        <div class="model3D">
                            <x3d id="model">
                                <scene>
                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/sprite.x3d"> </inline>
                                </scene>
                            </x3d>
                        </div> 
                        <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                    </div>
                    <!-- Pepper X3D model -->
                    <div id="pepper" style="display:none;">
                        <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>
                        <!-- Place the X3D code here -->
                        <div class="model3D">
                            <x3d>
                                <scene>
                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/pepper_animation.x3d"> </inline>
                                </scene>
                            </x3d>
                        </div> 
                        <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
                        </div>
                    </div>
                </div>
                </div>

                <!-- 3D image gallery -->
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

        <!-- Row to hold the interaction panels -->
        <div id="interaction" class="row" >
                <!-- Column for the camera view controls -->
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

                <!-- Column for the animation controls -->
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

                <!-- Column for the render type and lighting controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >Render</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Polygon</a>
                                <a class="dropdown-item" href="#" onclick="wireframe();">Wireframe</a>
                                <a class="dropdown-item" href="#">Vertex</a>
                              </div>
                            </li>
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Default</a>
                                <a class="dropdown-item" href="#">Onmi On/Off</a>
                                <a class="dropdown-item" href="#">Target On/Off</a>
                                <a class="dropdown-item" href="#">Headlight On/Off</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render and Lighting Options</h3>
                          </div>
                          <a href="#" class="btn btn-success btn-responsive">Poly</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">Wire</a>
                          <a href="#" class="btn btn-success btn-responsive" onclick="headlight();">Headlight</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                          <div class="card-text x3dRenderDescription drinksText">
                              <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                          </div>
                        </div>
                      </div>
                </div>
        </div> <!-- End row for the interaction panels -->

        <!-- Row to hold one card to hold the coke descriptive text, etc.-->
        <div id="cokeDescription" class="row" >
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_coke" class="card-title drinksText"></div>
                        <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                        <div id="description_coke" class="card-text drinksText"></div>   
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Coke</a>                 
                    </div>
                </div>
            </div>
        </div> <!-- End coke description contents -->

        <!-- Row to hold one card to hold the sprite descriptive text, etc.-->
        <div id="spriteDescription" class="row" >
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_sprite" class="card-title drinksText"></div>
                        <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
                        <div id="description_sprite" class="card-text drinksText"></div>  
                        <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Visit Sprite</a>                 
                    </div>
                </div>
            </div>
        </div> <!-- End sprite description contents -->

        <!-- Row to hold one card to hold the pepper descriptive text, etc.-->
        <div id="pepperDescription" class="row" >
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_pepper" class="card-title drinksText"></div>
                        <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
                        <div id="description_pepper" class="card-text drinksText"></div>  
                        <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responisve">Visit Pepper.</a>                 
                    </div>
                </div>
            </div>
        </div> 
    </div>  

    

    <nav id="footerColor" class="navbar navbar-expand-sm footer">
        <div class="container-fluid">   
            <div class="navbar-text float-left copyright">
                <p><span class="align-baseline">&copy Coca Cola 2022 | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a> |  <a href="https://github.com/rn200126/Web-3D-Applications">GitHub</a></span></p>
            </div>
            <div class="navbar-text float-right social">
                <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="#"><i class="fab fa-google-plus fa-2x"></i></a>
                <a href="#"><i class="fab fa-github-square fa-2x"></i></a>
            </div>
        </div>
    </nav> 

    <!-- My 3D App modals -->
    <!-- Contact modal -->
    <!-- The Modal -->
    <div class="modal fade" id="contactModal">
        <div class="modal-dialog">
            <div class="modal-content">
            
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Contact and Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <h6>Email:</h6>
                <p>rn257@sussex.ac.uk</p>
                <h6>GitHub:</h6>
                <p>https://github.com/rn200126/Web-3D-Applications</p>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
            
            </div>
        </div>
    </div>

    <!-- JavaScript Files-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script> <!-- Note, updated to Bootstrap 4.3.1 -->

    <script src="application/scripts/js/bootstrap.bundle.min.js"></script>

    <!-- Fontawsome -->
    <script src="fonts/js/all.js"></script>

    <!-- Custom JavaScript code for your 3d App -->
    <!-- Also, intialises popovers-->
    <script src="js/custom.js" crossorigin="anonymous"></script>

    <script type='text/javascript' src='application/scripts/js/x3dom.js'></script>
    <script src="application/scripts/js/script.js"></script>

    <!-- JavaScript to swap for SPA and restyle -->
    <script src="js/swap_restyle.js"></script>

    <script src="application/scripts/js/gallery_generator.js"></script>

    <script src="application/scripts/js/getJsonData.js"></script>

    <script src="application/scripts/js/jquery.fancybox.min.js"></script>

    <script src="application/scripts/js/modelInteraction.js"></script>
  
    <!-- Include the x3dom JavaScript -->
    <script type='text/javascript' src='js/x3dom.js'></script>

    <!-- JavaScript and PHP based Gallery generator  -->
    <script type="text/javascript" src="js/gallery_generator.js"></script>
      <!-- JQuery code to get content data from a backend JSON file -->
    <script src="js/getJsonData.js"></script>

    <!-- JavaScript model interactions -->
    <script src="js/modelInteractions.js"></script>
 
    <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
    <script src="js/jquery.fancybox.min.js"></script>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="scripts/js/jquery-3.4.1.js"></script>
    <script src="scripts/js/popper.min.js"></script>
    <!--<script src="js/bootstrap.js"></script>-->
    <script src="scripts/js/bootstrap-4.4.1.js"></script>

    <!-- Include the x3dom JavaScript -->
    <script src='scripts/js/x3dom.js'></script>

    <!-- Font Awesome Version 5 -->
    <!-- <script src="https://kit.fontawesome.com/6ac3910c4e.js" crossorigin="anonymous"></script> -->
    <!-- <script src="all.js"></script> -->

    <!-- Custom JavaScript code for your 3d App -->
    <!-- Also, intialises popovers-->
    <script src="scripts/js/custom.js" crossorigin="anonymous"></script>

    <!-- JavaScript to swap for SPA and restyle -->
    <script src="scripts/js/swap_restyle.js"></script>

    <!-- JavaScript and PHP based Gallery generator  -->
    <script src="scripts/js/gallery_generator.js"></script>

    <!-- JQuery code to get content data from a backend JSON file -->
    <script src="scripts/js/getJsonData.js"></script>

    <!-- JavaScript model interactions -->
    <script src="scripts/js/modelInteractions.js"></script>

    <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
    <script src="scripts/js/jquery.fancybox.min.js"></script>

  <script id="x3d"></script>


  </body>
</html>
