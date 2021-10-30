<?php
include 'database/db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Title</title>
        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- stylesheets -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="asset/css/main.css">
    </head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" id="home">
<div class="navbar">
    <?php include 'layouts/top-navbar.php';?>
</div>

<div class="header">
    <?php include 'layouts/header.php';?>
</div>

<div class="fluid-container">
    <div class="services-header" id="services">
        <h2 class="">Service Menu</h2>
    </div>

    <section class="services-section" id="services-section">
        <ul class="services-menu" id="services-menu">
            <li class="services-menu-button active" onclick="opend1()">
                <a class="services-menu-active">HAIRCUT</a>
            </li>
            <li class="services-menu-button" onclick="opend2()">
                <a class="services-menu-active">STYLING</a>
            </li>
            <li class="services-menu-button" onclick="opend3()">
                <a class="services-menu-active">COLOUR</a>
            </li>
            <li class="services-menu-button" onclick="opend4()">
                <a class="services-menu-active">TREATMENT</a>
            </li>
        </ul>

        <!-- Start All Servives -->
        <div class="service-two-info">
            <!-- Start 1d Servives -->
            <div id="d1" class="service-container">
                <div class="box">
                    <div class="service-top">
                        <span class="service-menu-title pull-left">Clipper Cut</span>
                        <span class="service-menu-price pull-right">$30</span>
                    </div>
                    <div class="service-menu-description">
                        <p>A haircut using clippers to achieve an ultra-short design. (30 min)</p>
                    </div>
                </div>
                <div class="box">
                    <div class="service-top">
                        <span class="service-menu-title pull-left">Haircut</span>
                        <span class="service-menu-price pull-right">$39</span>
                    </div>
                    <div class="service-menu-description">
                        <p>A haircut, trim or shape on anyone over the age of 10. (60 min)</p>
                    </div>
                </div>
                <div class="box">
                    <div class="service-top">
                        <span class="service-menu-title pull-left">Signature Haircut</span>
                        <span class="service-menu-price pull-right">$49</span>
                    </div>
                    <div class="service-menu-description">
                        <p>A haircut, trim, shape on anyone over the age of 10 with a customized conditioning treatment. (1 hr 15 min)</p>
                    </div>
                </div>
                <div class="box">
                    <div class="service-top">
                        <span class="service-menu-title pull-left">Kids Haircut</span>
                        <span class="service-menu-price pull-right">$20</span>
                    </div>
                    <div class="service-menu-description">
                        <p>A haircut on a child age 10 &amp; under.<br>(30 min)</p> 
                    </div>
                </div>
                <div class="box">
                    <div class="service-top">
                        <span class="service-menu-title pull-left">Bang Trim</span>
                        <span class="service-menu-price pull-right">$19</span>
                    </div>
                    <div class="service-menu-description">
                        <p>A trim on the bang area. Shampoo, conditioner and scalp massage not included. (15 min)</p>
                    </div>
                </div>
                <div class="box">
                    <div class="service-top">
                        <span class="service-menu-title pull-left">Bang Trim</span>
                        <span class="service-menu-price pull-right">$19</span>
                    </div>
                    <div class="service-menu-description">
                        <p>A trim on the bang area. Shampoo, conditioner and scalp massage.</p>
                    </div>
                </div>
            </div>
            <!-- End 1d Servives -->
            <!-- Start 2d Servives -->
            <div id="d2" class="service-container" style="display: none;">
                <div class="box">
                    <div class="service-top">
                        <span class="service-menu-title pull-left">Brush</span>
                        <span class="service-menu-price pull-right">$25</span>
                    </div>
                    <div class="service-menu-description">
                        <p>Blow dry using brush, strait styling. (30 min)</p>
                    </div>
                </div>
                <div class="box">
                    <div class="service-top">
                        <span class="service-menu-title pull-left">Curly Brush</span>
                        <span class="service-menu-price pull-right">$28</span>
                    </div>
                    <div class="service-menu-description">
                        <p>Blow dry using brush, strait styling. (30 min)</p>
                    </div>
                </div>
                <div class="box">
                    <div class="service-top">
                        <span class="service-menu-title pull-left">Light Hair Styling</span>
                        <span class="service-menu-price pull-right">$44</span>
                    </div>
                    <div class="service-menu-description">
                        <p>A haircut, trim, shape on anyone over the age of 10 with a customized conditioning treatment. (1 hr 15 min)</p>
                    </div>
                </div>
                <div class="box">
                    <div class="service-top">
                        <span class="service-menu-title pull-left">Curly Hair</span>
                        <span class="service-menu-price pull-right">$38</span>
                    </div>
                    <div class="service-menu-description">
                        <p>A haircut on a child age 10 &amp; under.<br>(30 min)</p>
                    </div>
                </div>
            </div>
            <!-- End 2d Servives -->
            <!-- Start 3d Servives -->
            <div id="d3" class="service-container" style="display: none;">
                <div class="box">
                    <div class="service-top">
                        <span class="service-menu-title pull-left">Balayage</span>
                        <span class="service-menu-price pull-right">$150</span>
                    </div>
                    <div class="service-menu-description">
                        <p>A haircut using clippers to achieve an ultra-short design. (30 min)</p>
                    </div>
                </div>
                <div class="box">
                    <div class="service-top">
                        <span class="service-menu-title pull-left">Bleach &amp; Tone</span>
                        <span class="service-menu-price pull-right">$90</span>
                    </div>
                    <div class="service-menu-description">
                        <p>A haircut, trim or shape on anyone over the age of 10. (60 min)</p>
                    </div>
                </div>
                <div class="box">
                    <div class="service-top">
                        <span class="service-menu-title pull-left">One Color</span>
                        <span class="service-menu-price pull-right">$80</span>
                    </div>
                    <div class="service-menu-description">
                        <p>A haircut, trim, shape on anyone over the age of 10 with a customized conditioning treatment. (1 hr 15 min)</p>
                    </div>
                </div>
                <div class="box">
                    <div class="service-top">
                        <span class="service-menu-title pull-left">Foliage</span>
                        <span class="service-menu-price pull-right">$110</span>
                    </div>
                    <div class="service-menu-description">
                        <p>A haircut on a child age 10 &amp; under.<br>(30 min)</p>
                    </div>
                </div>
            </div>
            <!-- End 3d Servives -->
            <!-- Start 4d Servives -->
            <div id="d4" class="service-container" style="display: none;">
                <div class="box">
                    <div class="service-top">
                        <span class="service-menu-title pull-left">Olaplex</span>
                        <span class="service-menu-price pull-right">$25</span>
                    </div>
                    <div class="service-menu-description">
                        <p>Olaplex treatment, number 2 and number 3. (20 min)</p>
                    </div>
                </div>
                <div class="box">
                    <div class="service-top">
                        <span class="service-menu-title pull-left">Orising Treatment</span>
                        <span class="service-menu-price pull-right">$28</span>
                    </div>
                    <div class="service-menu-description">
                        <p>Hair treatment using Orising hair care products. (60 min)</p>
                    </div>
                </div>
                <div class="box">
                    <div class="service-top">
                        <span class="service-menu-title pull-left">Label Treatment</span>
                        <span class="service-menu-price pull-right">$80</span>
                    </div>
                    <div class="service-menu-description">
                        <p>Hair treatment using Label cosmetics, consists of 12 steps. (1 hr 15 min)</p>
                    </div>
                </div>
            </div>
            <!-- End 4d Servives -->
        </div>
        <!-- End All Services Info -->
        <div class="service-book">
            <button class="button-service-book" role="button"> <a href="#">Book Now</a></button>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- Start Team Section -->
    <section class="team-section" id="team">
        <div class="container-fluid team-banner">
            <div class="banner-content">
                <h1 class="banner-title">Meet Our Team</h1>
                <hr>
                <!-- <p>Discover Your Style & Beauty</p> -->
            </div>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-md-3">
                    <div class="card-box text-center">
                        <div class="user-pic">
                            <img src="asset/image/user-img.jpg" class="img-fluid" alt="User Pic">
                        </div>
                        <h4>Name Surname</h4>
                        <h6>Hairdresser - Stylist</h6>
                        <hr>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <hr>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card-box text-center">
                        <div class="user-pic">
                            <img src="asset/image/user-img.jpg" class="img-fluid" alt="User Pic">
                        </div>
                        <h4>Name Surname</h4>
                        <h6>Hairdresser - Stylist</h6>
                        <hr>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <hr>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card-box text-center">
                        <div class="user-pic">
                            <img src="asset/image/user-img.jpg" class="img-fluid" alt="User Pic">
                        </div>
                        <h4>Name Surname</h4>
                        <h6>Make-up Artist</h6>
                        <hr>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <hr>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card-box text-center">
                        <div class="user-pic">
                            <img src="asset/image/user-img.jpg" class="img-fluid" alt="User Pic">
                        </div>
                        <h4>Name Surname</h4>
                        <h6>Manicurist</h6>
                        <hr>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section -->

    <!-- Start About Section -->
    <section class="about-section" id="about">
        <div class="container-fluid about-banner">
            <div class="banner-content">
                <h1 class="banner-title">About Us</h1>
                <hr>
                <!-- <p>Discover Your Style & Beauty</p> -->
            </div>
        </div>
        <div class="about">
            <div class="col-md-4 about-item">
                <div class="about-icon">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none"><circle cx="24" cy="16" r="14.5" fill="white" stroke="black"></circle><path d="M43 15C43 25.4934 34.4934 34 24 34C13.5066 34 5 25.4934 5 15" stroke="black"></path><rect x="22.5" y="33.5" width="3" height="7" fill="white" stroke="black"></rect><path d="M15.5275 44.5C15.7762 42.25 17.6837 40.5 20 40.5H28C30.3163 40.5 32.2238 42.25 32.4725 44.5H15.5275Z" fill="white" stroke="black"></path><circle cx="5" cy="17" r="1.5" fill="white" stroke="black"></circle><circle cx="43" cy="17" r="1.5" fill="white" stroke="black"></circle><path d="M31 9L26.5 13" stroke="black"></path><path d="M32 13L29 16" stroke="black"></path></svg>
                </div>
                <h6 class="about-title">Personalized Experience</h6>
                <div class="about-description">
                    <p>Each guest is our favourite guest. Come and make sure that our service is exceptional.</p>
                </div>
            </div>
            <div class="col-md-4 about-item">
                <div class="about-icon">
                    <svg width="48" height="48" viewBox="0 0 48 48"><rect x="2.5" y="12.5" width="19" height="32" rx="5.5" fill="white" stroke="black"></rect><rect x="8.5" y="4.5" width="7" height="8" fill="#F2EEE9" stroke="black"></rect><rect x="4" y="4" width="4" height="1" fill="black"></rect><path d="M26.768 6.1805C26.6597 5.28703 27.3571 4.5 28.2571 4.5H43.7429C44.6429 4.5 45.3403 5.28703 45.232 6.1805L41.7169 35.1805C41.6256 35.9336 40.9864 36.5 40.2278 36.5H31.7722C31.0136 36.5 30.3744 35.9336 30.2831 35.1805L26.768 6.1805Z" fill="white" stroke="black"></path><path d="M30.9277 8.375L33.0717 26.0625" stroke="black"></path><path d="M32.5 36.5H39.5V44.5H32.5V36.5Z" fill="white" stroke="black"></path><rect x="2.5" y="20.5" width="9" height="15" fill="#F2EEE9" stroke="black"></rect></svg>
                </div>
                <h6 class="about-title">Professional Care</h6>
                <div class="about-description">
                    <p>All products we use are professional and have proven effeciency. No compromises.</p>
                </div>
            </div>
            <div class="col-md-4 about-item">
                <div class="about-icon">
                    <svg width="48" height="48" viewBox="0 0 48 48"><path d="M14.5 24.3503C10.59 19.7454 3 22.2781 3 28.7249C3 35.1717 9.9 38.3951 14.5 43C19.1 38.3951 26 35.1717 26 28.7249C26 22.2781 18.41 19.7454 14.5 24.3503Z" fill="white" stroke="black" stroke-miterlimit="10"></path><path d="M36.5 9.79068C33.61 6.28221 28 8.21187 28 13.1237C28 18.0356 33.1 20.4915 36.5 24C39.9 20.4915 45 18.0356 45 13.1237C45 8.21187 39.39 6.28221 36.5 9.79068Z" fill="white" stroke="black" stroke-miterlimit="10"></path><path d="M7 29C7 27.3431 8.34315 26 10 26" stroke="black"></path></svg>
                </div>
                <h6 class="about-title">We Love What We Do</h6>
                <div class="about-description">
                    <p>People that you’ll meet in our studio are doing job they love. Come and make sure there is a difference.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Start Gallery Section -->
    <section class="gallery-section" id="gallery">
        <div class="container-fluid gallery-banner">
            <div class="banner-content">
                <h1 class="banner-title">Photo Gallery</h1>
                <hr>
            </div>
        </div>
        <section id="portfolio">
            <div class="project">
            <img class="project__image" src="https://images.unsplash.com/photo-1519211975560-4ca611f5a72a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6ae34625b8db390fb2b784800d76d225&auto=format&fit=crop&w=700&q=80" />
            <div class="grid__overlay">
                <button class="viewbutton">view more</button>
            </div>
            </div>
            
            <div class="project">
            <img class="project__image" src="https://images.unsplash.com/photo-1521104955835-ba91c70d6443?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=38cdeda7d073c4b6d47a5776f184cba9&auto=format&fit=crop&w=700&q=80" />
            <div class="grid__overlay">
                <button class="viewbutton">view more</button>
            </div>
            </div>
            
            <div class="project">
            <img class="project__image" src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e5a31d03ddee66863a599421f792e07b&auto=format&fit=crop&w=700&q=80" />
            <div class="grid__overlay">
                <button class="viewbutton">view more</button>
            </div>
            </div>
            
            <div class="project">
            <img class="project__image" src="https://images.unsplash.com/photo-1472437774355-71ab6752b434?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=dd4d735954f33290fbf984e4eb7abe32&auto=format&fit=crop&w=700&q=80" />
            <div class="grid__overlay">
                <button class="viewbutton">view more</button>
            </div>
            </div>
            <div class="project">
            <img class="project__image" src="https://images.unsplash.com/photo-1483058712412-4245e9b90334?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=7c5008952226f48ed4bf5d3ea64ff545&auto=format&fit=crop&w=700&q=80" />
            <div class="grid__overlay">
                <button class="viewbutton">view more</button>
            </div>
            </div>
            
            <div class="project">
            <img class="project__image" src="https://images.unsplash.com/photo-1509395176047-4a66953fd231?ixlib=rb-0.3.5&s=a4b3dc4bee43da458f6aa5c05be6bfc4&auto=format&fit=crop&w=700&q=80" />
            <div class="grid__overlay">
                <button class="viewbutton">view more</button>
            </div>
            </div>
            
            <div class="project">
            <img class="project__image" src="https://images.unsplash.com/photo-1481762554390-ff5562748bdf?ixlib=rb-0.3.5&s=1b7f850b7f8f702e237b0f81c0ec0bf5&auto=format&fit=crop&w=700&q=80" />
            <div class="grid__overlay">
                <button class="viewbutton">view more</button>
            </div>
            </div>
            
            <div class="project">
            <img class="project__image" src="https://images.unsplash.com/photo-1463620695885-8a91d87c53d0?ixlib=rb-0.3.5&s=e5bf2f64858b8abe2a386b0c6df594e4&auto=format&fit=crop&w=700&q=80" />
            <div class="grid__overlay">
                <button class="viewbutton">view more</button>
            </div>
            </div>
            <div class="overlay">
            <div class="overlay__inner">
                <button class="close">close X</button>
                <img>
            </div>
            </div>
        </section>
    </section>
</div>
<hr>

<div id="footer">
     <?php include 'layouts/footer.php';?>
</div> 

<!-- Start Scripts -->
    <script src="asset/js/collapsedbar.js"></script>
    <script src="asset/js/services-menu.js"></script>
    <script src="asset/js/gallery.js"></script>
    <script src="asset/js/NavBar.js"></script>
<!-- End Scripts -->

</body>
</html>