<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Hotel Azul</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="js/jquery-3.6.4.js"></script>
        <link rel="stylesheet"  type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet"  type="text/css" href="mainstyle.css">
        <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>
        <script type="module" src="bootstrap/js/index.bundle.min.js"></script>
        <script type="module" src="js/scripts.js"></script>
        
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <nav class="py-3 bg-primary navbar navbar-expand-sm">
                    <div class="container-fluid">
                        <a href="#" id="logotext" class="col-sm bg-primary text-bg-primary text-nowrap navbar-brand">Hotel Azul</a>
                        <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon navbar-dark"></span>
        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav bg-primary justify-content-end col-sm flex-nowrap">

                                    <li class="nav-item text-bg-primary">
                                        <a class="nav-link active opened rounded-0" href="#">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link text-bg-primary dropdown-toggle" data-bs-toggle="dropdown" href="#">Rooms&Prices</a>
                                        <ul class="dropdown-menu rounded-0">
                                            <li><a class="dropdown-item" href="#">Single room</a></li>
                                            <li><a class="dropdown-item" href="#">Double room</a></li>
                                            <li><a class="dropdown-item" href="#">Deluxe</a></li>
                                            <li><a class="dropdown-item" href="#">Prices</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-bg-primary" href="#">Restaurant</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-bg-primary" href="#">Contact</a>
                                    </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div id="topCarousel" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#topCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#topCarousel" data-bs-slide-to="1" class="active"></button>
                <button type="button" data-bs-target="#topCarousel" data-bs-slide-to="2" class="active"></button>
                
            </div>
            
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/hotel1.jpg" alt="hotelkep" class="d-block w-100">
                </div>
                <div class="carousel-item active">
                    <img src="images/hotel2.jpg" alt="hotelkep" class="d-block w-100">
                </div>
                <div class="carousel-item active">
                    <img src="images/hotel3.jpg" alt="hotelkep" class="d-block w-100">
                </div>
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#topCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#topCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div> 
        <!--end of carousel-->
        
        <div class="container-fluid" id="mainContent">
            
            

            <div class="container">
<div class="row my-5">
                <div class="col-12 d-flex justify-content-center g-0">
                    <a class="btn btn-lg bg-primary text-bg-primary" href="#">Book now</a>
                </div>
            </div>
                <div class="row pt-5">

                    <div class="col-sm">
                        <h2 class="mb-4">About us</h2>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                    </div>
                    <div class="col-sm">
                        <img src="images/intro1.jpg" alt="introimg" class="img-fluid pt-3 pt-sm-0">

                    </div>
                </div>

                <div class="row pt-5">
                    
                    <div class="col-sm">
                        <h2 class="mb-4">Our rooms</h2>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                    
                    <div class="col-sm order-sm-first">
                        <img src="images/intro2.jpg" alt="introimg" class="img-fluid pt-3 pt-sm-0">

                    </div>
                </div>



                <div class="row pt-5">

                    <div class="col-sm">
                        <h2 class="mb-4">The restaurant</h2>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                    </div>
                    <div class="col-sm">
                        <img src="images/intro3.jpg" alt="introimg" class="img-fluid pt-3 pt-sm-0">

                    </div>
                </div>
            </div>
            <div class="container my-lightbox">
            <div class="row mt-5">

                <a href="images/gallery1.jpg" data-toggle="lightbox" data-gallery="mainGallery" class="col-sm-4">
                    <img src="images/gallery1.jpg" class="img-fluid img-thumbnail">
                </a>
                <a href="images/gallery2.jpg" data-toggle="lightbox" data-gallery="mainGallery" class="col-sm-4">
                    <img src="images/gallery2.jpg" class="img-fluid img-thumbnail">
                </a>
                <a href="images/gallery3.jpg" data-toggle="lightbox" data-gallery="mainGallery" class="col-sm-4">
                    <img src="images/gallery3.jpg" class="img-fluid img-thumbnail">
                </a>
                </div>
                <div class="row mt-3">
                    <a href="images/gallery4.jpg" data-toggle="lightbox" data-gallery="mainGallery" class="col-sm-4">
                        <img src="images/gallery4.jpg" class="img-fluid img-thumbnail">
                    </a>
                    <a href="images/gallery5.jpg" data-toggle="lightbox" data-gallery="mainGallery" class="col-sm-4">
                        <img src="images/gallery5.jpg" class="img-fluid img-thumbnail">
                    </a>
                    <a href="images/gallery6.jpg" data-toggle="lightbox" data-gallery="mainGallery" class="col-sm-4">
                        <img src="images/gallery6.jpg" class="img-fluid img-thumbnail">
                    </a>
                </div>
            </div>
            <div class="container-fluid bg-body-secondary mt-5 border-top border-bottom border-dark py-5">
                <div class="container">
                    <div class="row">
                        <h2 class="text-center mb-5">Find us here</h2>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <div class="ratio ratio-4x3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d87136.30001447194!2d17.81858034547247!3d46.961505806415154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4769bd123ed3eaff%3A0x400c4290c1e1ba0!2sBalatonf%C3%BCred!5e0!3m2!1shu!2shu!4v1680025952393!5m2!1shu!2shu" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            
                            <b>Address:</b> Lorem ipsum dolor sit amet <br>
                            <b>Phone:</b> 555-12345678 <br>
                            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-dark text-bg-dark">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-sm text-center">
                            <p>All rights reserved &copy;</p>
                        </div>
                        <div class="col-sm text-center">
                            <a href="" class="text-bg-dark">Impressum</a><br>
                            <a href="" class="text-bg-dark">Data management policy</a>
                        </div>
                    </div>
                </div>
                
                
            </footer>
            
        </div>
    </body>
    <script type="text/javascript" src="js/scripts.js"></script>
</html>
