<head>
    <meta charset="utf-8">
    <title>Reichminate</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    <link href="<?= assets_url('img/company_icon.png'); ?>" rel="icon">
    <link href="<?= assets_url('img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
    <link href="<?= assets_url('lib/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= assets_url('lib/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?= assets_url('lib/animate/animate.min.css'); ?>" rel="stylesheet">
    <link href="<?= assets_url('lib/ionicons/css/ionicons.min.css'); ?>" rel="stylesheet">
    <link href="<?= assets_url('lib/owlcarousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
    <link href="<?= assets_url('lib/magnific-popup/magnific-popup.css'); ?>" rel="stylesheet">
    <link href="<?= assets_url('lib/ionicons/css/ionicons.min.css'); ?>" rel="stylesheet">
    <link href="<?= assets_url('css/style.css'); ?>" rel="stylesheet">
    <link href="<?= assets_url('css/all.css'); ?>" rel="stylesheet">

    <style>
        #map {
            width: 100%;
            height: 400px;
        }
    </style>
</head>

<body id="body">
    <header id="header">
        <div class="container">
            <div id="logo" class="pull-left">
                <a href="<?= base_url(); ?>"><img src="<?= assets_url('img/logo.png'); ?>" style="width: 60%" alt="" title="" /></a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active">
                        <a href="<?= base_url(''); ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?= base_url('#about'); ?>">About Us</a>
                    </li>
                    <li>
                        <a href="<?= base_url('#services'); ?>">Services</a>
                    </li>
                    <li>
                        <a href="<?= base_url('#team'); ?>">Team</a>
                    </li>
                    <li>
                        <a href="<?= base_url('reach'); ?>">Let's Talk</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main id="main">
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
                    <form action="<?= base_url('reach_post'); ?>" method="post" role="form" class="contactForm">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" data-rule="minlen:0" data-msg="" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="job_title" class="form-control" id="job_title" placeholder="Job Title" data-rule="required" data-msg="Please enter your job title" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Company Name" data-rule="required" data-msg="Please enter your company name" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="contact_number" class="form-control" id="contact_number" placeholder="Contact Number" data-rule="required" data-msg="Please enter your contact number" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Your Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="checkbox">
                                    <label for="company_profile">
                                        <input type="checkbox" name="company_profile" id="company_profile">
                                        Company Profile
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="checkbox">
                                    <label for="web_development">
                                        <input type="checkbox" name="web_development" id="web_development">
                                        Web Development
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="checkbox">
                                    <label for="search_engine_optimization">
                                        <input type="checkbox" name="search_engine_optimization" id="search_engine_optimization">
                                        Search Engine Optimization
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="checkbox">
                                    <label for="content_creation">
                                        <input type="checkbox" name="content_creation" id="content_creation">
                                        Content Creation
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="checkbox">
                                    <label for="social_media_management">
                                        <input type="checkbox" name="social_media_management" id="social_media_management">
                                        Social Media Management
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="checkbox">
                                    <label for="digital_advertising">
                                        <input type="checkbox" name="digital_advertising" id="digital_advertising">
                                        Digital Advertising
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>

        </section>
    </main>

    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright. <?php echo date("Y"); ?> Reichminate
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top">
        <i class="fa fa-chevron-up"></i>
    </a>

    <script src="<?= assets_url('lib/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= assets_url('lib/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= assets_url('lib/easing/easing.min.js'); ?>"></script>
    <script src="<?= assets_url('lib/superfish/hoverIntent.js'); ?>"></script>
    <script src="<?= assets_url('lib/superfish/superfish.min.js'); ?>"></script>
    <script src="<?= assets_url('lib/wow/wow.min.js'); ?>"></script>
    <script src="<?= assets_url('lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?= assets_url('lib/magnific-popup/magnific-popup.min.js'); ?>"></script>
    <script src="<?= assets_url('lib/sticky/sticky.js'); ?>"></script>
    <script src="<?= assets_url('contactform/contactform.js'); ?>"></script>
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