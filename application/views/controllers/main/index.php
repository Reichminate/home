<head>
    <meta charset="utf-8">
    <title>Reichminate</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    <!-- Favicons -->
    <link href="<?= assets_url('img/company_icon.png'); ?>" rel="icon">
    <link href="<?= assets_url('img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?= assets_url('lib/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?= assets_url('lib/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?= assets_url('lib/animate/animate.min.css'); ?>" rel="stylesheet">
    <link href="<?= assets_url('lib/ionicons/css/ionicons.min.css'); ?>" rel="stylesheet">
    <link href="<?= assets_url('lib/owlcarousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
    <link href="<?= assets_url('lib/magnific-popup/magnific-popup.css'); ?>" rel="stylesheet">
    <link href="<?= assets_url('lib/ionicons/css/ionicons.min.css'); ?>" rel="stylesheet">


    <!-- Main Stylesheet File -->
    <link href="<?= assets_url('css/style.css'); ?>" rel="stylesheet">

    <!-- font awesome -->
    <link href="<?= assets_url('css/all.css'); ?>" rel="stylesheet">

    <!-- =======================================================
        Theme Name: Reveal
        Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
        Author: BootstrapMade.com
        License: https://bootstrapmade.com/license/
    ======================================================= -->
    <style>
        #map {
            width: 100%;
            height: 400px;
        }
    </style>
</head>

<body id="body">

    <!--==========================
        Top Bar
    ============================-->
    <section id="topbar" class="d-none d-lg-block">
        <div class="container clearfix">
            <div class="contact-info float-left">
                <i class="fa fa-envelope-o"></i> 
                <a href="mailto:hi@reichminate.com">hi@reichminate.com</a>
                <i class="fa fa-phone"></i> +62 823 8800 0124
            </div>
            <div class="social-links float-right">
                <a href="https://www.linkedin.com/company/reichminate" class="linkedin">
                    <i class="fa fa-linkedin"></i>
                </a>
            </div>
        </div>
    </section>

    <!--==========================
        Header
    ============================-->
    <header id="header">
        <div class="container">
            <div id="logo" class="pull-left">
                <!-- <h1>
                    <a href="#body" class="scrollto">Reich<span>minate</span></a>
                </h1> -->
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="#body"><img src="<?= assets_url('img/logo.png'); ?>" style="width: 60%" alt="" title="" /></a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active">
                        <a href="#body">Home</a>
                    </li>
                    <li>
                        <a href="#main">About Us</a>
                    </li>
                    <li>
                        <a href="#services">Services</a>
                    </li>
                    <li>
                        <a href="#team">Team</a>
                    </li>
                    <li>
                        <a href="#contact">Let's Talk</a>
                    </li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->



    <!--==========================
        Intro Section
    ============================-->
    <section class="video-background">
        <div id="video">
            <video id="bgvid" autoplay loop muted playsinline>
                <source src="<?= assets_url('video/singapore.mp4'); ?>" type="video/mp4">
            </video>
        </div>

        <div class="caption text-center">
            <h1>Skyrocketing</h1>
            <h3>YOUR COMPANY</h3>
            <a class="btn scrollto btn-outline-light btn-lg" href="#about">GET IN TOUCH</a>
        </div>
    </section>
    <!-- #intro -->
    
    <main id="main">
        <!--==========================
        About Section
        ============================-->
        <section id="about" class="wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 about-img" style="margin-top: 6em;">
                        <img src="<?= assets_url('img/company_people.png'); ?>" alt="">
                    </div>

                    <div class="col-lg-6 content">
                        <h2>Welcome to Reichminate</h2>
                        <h3><b>Reichminate is a software agency for web development. We are all about digitalizing your needs. We provide web development, e-commerce solutions, and content management. Let us help you to define your needs, cause we believe that everything can be digitalized.</b></h3>
                        <h4>Our Values</h4>
                        <ul>
                        <li><i class="ion-android-checkmark-circle"></i> <b>Quality</b><br> We deliver premium value to our customers, we create outstanding products and unsurpassed service, we do it well.</li>
                        <li><i class="ion-android-checkmark-circle"></i> <b>Innovation</b><br> Great just isn’t good enough, right? it’s about solving one problem after the next and focus on the process.</li>
                        <li><i class="ion-android-checkmark-circle"></i> <b>Commitment</b><br> Committed in heart and mind, we commit to helping my customers. We understand how our products can impact our customers' business.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- #about -->

        <!--==========================
        Services Section
        ============================-->
        <section id="services">
            <div class="container">
                <div class="section-header">
                    <h2>Services</h2>
                    <p>We can help you to create this following </p>
                </div>

                <div class="row">

                <div class="col-lg-6">
                    <div class="box shine wow fadeInLeft" style="overflow:hidden;">
                        <div class="icon">
                        <img src="<?= assets_url('img/company.png'); ?>" width="70px">
                        </div>
                        <h4 class="title"><a href="">Company Profile</a></h4>
                        <p class="description">Create a high-quality website that combines your great ideas and our interactive design to make people more interested and easier to reach you.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box shine wow fadeInRight" style="overflow:hidden;">
                        <div class="icon">
                            <img src="<?= assets_url('img/web.png'); ?>" width="70px">
                        </div>
                        <h4 class="title"><a href="">Web Development</a></h4>
                        <p class="description">Build your own web-based application including E-Commerce, Online Auctions, CMS, Dashboard, and many other features as you like.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box shine wow fadeInRight" style="overflow:hidden;">
                        <div class="icon">
                        <img src="<?= assets_url('img/SEO.png'); ?>" width="70px">
                        </div>
                        <h4 class="title"><a href="">Search Engine Optimization</a></h4>
                        <p class="description">Make your website appears on top of search result / increase ranking and visibility of your website/brand search engines.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box shine wow fadeInRight" style="overflow:hidden;">
                        <div class="icon">
                        <img src="<?= assets_url('img/content.png'); ?>" width="70px">
                        </div>
                        <h4 class="title"><a href="">Content Creation</a></h4>
                        <p class="description">Create an interesting illustration, image, video, caption, article that relates to your market and make yourself as the best on your audiences.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box shine wow fadeInRight" style="overflow:hidden;">
                        <div class="icon">
                        <img src="<?= assets_url('img/social-media.png'); ?>" width="70px">
                        </div>
                        <h4 class="title">
                            <a href="">Social Media Management</a>
                        </h4>
                        <p class="description">Have a consultation or even let us manage your Social Media to grow and interact with your customers.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box shine wow fadeInRight" style="overflow:hidden;">
                        <div class="icon">
                        <img src="<?= assets_url('img/digital-advertising.png'); ?>" width="70px">
                        </div>
                        <h4 class="title">
                            <a href="">Digital Advertising</a>
                        </h4>
                        <p class="description">Advertise your brands through many digital platforms to grab more attention on internet.</p>
                    </div>
                </div>
            </div>
        </section><!-- #services -->

        <!--==========================
        Our Team Section
        ============================-->
        <section id="team" class="wow fadeInUp" style="margin-top: 2em;">
            <div class="container">
                <div class="section-header">
                    <h2>Our Team</h2>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic rounded-circle">
                                <img src="<?= assets_url('img/n-circle.png'); ?>" alt="">
                            </div>
                            <div class="details">
                                <h4>Naufal F Sayuti</h4>
                                <span>Business Development Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic rounded-circle">
                                <img src="<?= assets_url('img/d-circle.png'); ?>" alt="">
                            </div>
                            <div class="details">
                                <h4>Dzaky Rifqiatha</h4>
                                <span>Business Analyst</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic rounded-circle">
                                <img src="<?= assets_url('img/t-circle.png'); ?>" alt="">
                            </div>
                            <div class="details">
                                <h4>Connery</h4>
                                <span>Tech Lead</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member">
                            <div class="pic rounded-circle">
                                <img src="<?= assets_url('img/a-circle.png'); ?>" alt="">
                            </div>
                            <div class="details">
                                <h4>Anas Aditya</h4>
                                <span>Front End Lead</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #team -->

        <!--==========================
        Contact Section
        ============================-->
        <section id="contact" class="wow fadeInUp" style="margin-top: 3em;">
            <div class="container">
                <div class="section-header">
                    <h2>Let's Talk</h2>
                </div>

                <div class="row contact-info">
                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>Address</h3>
                            <address>BSI Residence I28, Batam 29464, Indonesia</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>Phone Number</h3>
                            <p>
                                <a href="tel:+155895548855">+62 823 8800 0124</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>Email</h3>
                            <p>
                                <a href="mailto:info@example.com">hi@reichminate.com</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container mb-4">
                <div id="map"></div>
            </div>

            <div class="container">
                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>

        </section><!-- #contact -->

    </main>

    <!--==========================
        Footer
    ============================-->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright . <?php echo date("Y"); ?> Reichminate
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top">
        <i class="fa fa-chevron-up"></i>
    </a>

    <!-- JavaScript Libraries -->
    <script src="<?= assets_url('lib/jquery/jquery.min.js'); ?>"></script>
    <!-- <script src="lib/jquery/jquery-migrate.min.js"></script> -->
    <script src="<?= assets_url('lib/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= assets_url('lib/easing/easing.min.js'); ?>"></script>
    <script src="<?= assets_url('lib/superfish/hoverIntent.js'); ?>"></script>
    <script src="<?= assets_url('lib/superfish/superfish.min.js'); ?>"></script>
    <script src="<?= assets_url('lib/wow/wow.min.js'); ?>"></script>
    <script src="<?= assets_url('lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?= assets_url('lib/magnific-popup/magnific-popup.min.js'); ?>"></script>
    <script src="<?= assets_url('lib/sticky/sticky.js'); ?>"></script>

    <!-- Contact Form JavaScript File -->
    <script src="<?= assets_url('contactform/contactform.js'); ?>"></script>

    <!-- Template Main Javascript File -->
    <script src="<?= assets_url('js/main.js'); ?>"></script>
</body>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiudCrjI4vUzeYFjr6EkYxHMzFmYmjr34&callback=initMap" async defer></script>

<script>
    function initMap() {
        var latlng = new google.maps.LatLng(1.1126258, 104.0925131);
        var styles = [
            {
                "featureType": "administrative",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "color": "#ff0081"
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "color": "#ff0081"
                    }
                ]
            },
            {
                "featureType": "landscape.natural",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "lightness": "-1"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "color": "#ff0081"
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "color": "#ff0081"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#ae0058"
                    }
                ]
            }
        ];

        var myOptions = {
            zoom: 13,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            disableDefaultUI: true,
            styles: styles
        };

        map = new google.maps.Map(document.getElementById('map'), myOptions);

        var headquarters_position = {lat: 1.1126258, lng: 104.0925131};

        // var url_icon_marker = "http://maps.google.com/mapfiles/ms/micons/blue-dot.png";
        // var url_icon_marker = "https://media.flaticon.com/dist/min/img/home/editor-1.png";
        // var url_icon_marker = "https://image.flaticon.com/icons/svg/1465/1465405.svg";
        var url_icon_marker = "<?= assets_url('img/company_icon.png'); ?>";

        var marker = new google.maps.Marker({
            position: headquarters_position,
            map: map,
            title:"A place where your digital solutions come from.",
            label: { color: '#FF0081', fontWeight: 'bold', fontSize: '11px', text: 'Reichminate Headquaters'},
            icon : {
                url : url_icon_marker,
                scaledSize: new google.maps.Size(40, 40),
                origin: new google.maps.Point(0,0),
                anchor: new google.maps.Point(0,0),
                labelOrigin: { x: 14, y: -10}
            }
        });
    }
</script>