<?php
include_once "db_connect.php";


use portalove\DB;

//$db = new DB("localhost", "zadanie", "root", "", 3308);
$db = $GLOBALS['db'];
$menu = $db->getMenuItems();
$popular = $db->getPopularItems();
$continent= $db->getContinents();
$hotels = $db ->getHotels();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Journey HTML CSS Template</title>
<!-- 
Journey Template 
http://www.templatemo.com/tm-511-journey
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="css/datepicker.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
      </head>

      <body>
        <div class="tm-main-content" id="top">
            <div class="tm-top-bar-bg"></div>    
            <div class="tm-top-bar" id="tm-top-bar">
                <div class="container">
                    <div class="row">
                        <nav class="navbar navbar-expand-lg narbar-light">
                            <a class="navbar-brand mr-auto" href="#">
                                <img src="img/logo.png" alt="Site logo">
                                Journey
                            </a>
                            <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                                <ul class="navbar-nav ml-auto">
                                    <?php
                                    foreach ($menu as $item) {
                                        echo '<li class="nav-item">
                                    <a class="nav-link active" href="#'.$item['href'].'">'.$item['item'].' <span class="sr-only">(current)</span></a>
                                </li>';
                                    }
                                    ?>
                            </ul>
                        </div>                            
                    </nav>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- .tm-top-bar -->

        <div class="tm-page-wrap mx-auto">
            <section class="tm-banner">
                <div class="tm-container-outer tm-banner-bg">
                    <div class="container">

                        <div class="row tm-banner-row tm-banner-row-header">
                            <div class="col-xs-12">
                                <div class="tm-banner-header">
                                    <h1 class="text-uppercase tm-banner-title">Let's begin</h1>
                                    <img src="img/dots-3.png" alt="Dots">
                                    <p class="tm-banner-subtitle">We assist you to choose the best.</p>
                                    <a href="javascript:void(0)" class="tm-down-arrow-link"><i class="fa fa-2x fa-angle-down tm-down-arrow"></i></a>       
                                </div>    
                            </div>  <!-- col-xs-12 -->                      
                        </div> <!-- row -->
                        <div class="row tm-banner-row" id="tm-section-search">

                            <form action="index.html" method="get" class="tm-search-form tm-section-pad-2">
                                <div class="form-row tm-search-form-row">                                
                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                                        <label for="inputCity">Choose Your Destination</label>
                                        <input name="destination" type="text" class="form-control" id="inputCity" placeholder="Type your destination...">
                                    </div>
                                    <div class="form-group tm-form-group tm-form-group-1">                                    
                                        <div class="form-group tm-form-group tm-form-group-pad tm-form-group-2">
                                            <label for="inputRoom">How many rooms?</label>
                                            <select name="room" class="form-control tm-select" id="inputRoom">
                                                <option value="1" selected>1 Room</option>
                                                <option value="2">2 Rooms</option>
                                                <option value="3">3 Rooms</option>
                                                <option value="4">4 Rooms</option>
                                                <option value="5">5 Rooms</option>
                                                <option value="6">6 Rooms</option>
                                                <option value="7">7 Rooms</option>
                                                <option value="8">8 Rooms</option>
                                                <option value="9">9 Rooms</option>
                                                <option value="10">10 Rooms</option>
                                            </select>                                        
                                        </div>
                                        <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">                                       
                                            <label for="inputAdult">Adult</label>     
                                            <select name="adult" class="form-control tm-select" id="inputAdult">
                                                <option value="1" selected>1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>                                        
                                        </div>
                                        <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">

                                            <label for="inputChildren">Children</label>                                            
                                            <select name="children" class="form-control tm-select" id="inputChildren">
                                            	<option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>                                        
                                        </div>
                                    </div>
                                </div> <!-- form-row -->
                                <div class="form-row tm-search-form-row">

                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                                        <label for="inputCheckIn">Check In Date</label>
                                        <input name="check-in" type="text" class="form-control" id="inputCheckIn" placeholder="Check In">
                                    </div>
                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                                        <label for="inputCheckOut">Check Out Date</label>
                                        <input name="check-out" type="text" class="form-control" id="inputCheckOut" placeholder="Check Out">
                                    </div>
                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                                        <label for="btnSubmit">&nbsp;</label>
                                        <button type="submit" class="btn btn-primary tm-btn tm-btn-search text-uppercase" id="btnSubmit">Check Availability</button>
                                    </div>
                                </div>                              
                            </form>                             

                        </div> <!-- row -->
                        <div class="tm-banner-overlay"></div>
                    </div>  <!-- .container -->                   
                </div>     <!-- .tm-container-outer -->                 
            </section>

            <section class="p-5 tm-container-outer tm-bg-gray">            
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">                        
                            <h2 class="text-uppercase mb-4">Your <strong>Journey</strong> is our priority</h2>
                            <p class="mb-4">Nullam auctor, sapien sit amet lacinia euismod, lorem magna lobortis massa, in tincidunt mi metus quis lectus. Duis nec lobortis velit. Vivamus id magna vulputate, tempor ante eget, tempus augue. Maecenas ultricies neque magna.</p>
                            <a href="#" class="text-uppercase btn-primary tm-btn">Continue explore</a>                              
                        </div>
                    </div>
                </div>            
            </section>
            
            <div class="tm-container-outer" id="tm-section-2">
                <?php
                $i = 0;
                foreach ($popular as $item) {
                    if ($i % 2 === 0){
                        echo '
                    <section class="tm-slideshow-section">
                    <div class="tm-slideshow">
                        <img src="'.$item['fotka1'].'" alt="Image">
                        <img src="'.$item['fotka2'].'" alt="Image">
                        <img src="'.$item['fotka3'].'" alt="Image">    
                    </div>
                    <div class="tm-slideshow-description tm-bg-primary">
                        <h2 class="">'.$item['name'].'</h2>
                        <p>'.$item['text'].'</p>
                        <a href="#" class="text-uppercase tm-btn tm-btn-white tm-btn-white-primary">Continue Reading</a>
                    </div>
                </section>
                    ';
                    } else {
                    echo '
                    <section class="tm-slideshow-section">
                    <div class="tm-slideshow-description tm-bg-primary">
                        <h2 class="">'.$item['name'].'</h2>
                        <p>'.$item['text'].'</p>
                        <a href="#" class="text-uppercase tm-btn tm-btn-white tm-btn-white-primary">Continue Reading</a>
                    </div>
                    <div class="tm-slideshow">
                        <img src="'.$item['fotka1'].'" alt="Image">
                        <img src="'.$item['fotka2'].'" alt="Image">
                        <img src="'.$item['fotka3'].'" alt="Image">    
                    </div>
                </section>
                    ';}
                    $i = $i +1;
                }
                ?>


            <div class="tm-container-outer" id="tm-section-3">
                <ul class="nav nav-pills tm-tabs-links">
                    <?php
                    $i = 1;
                    foreach ($continent as $item){
                        if ($i === 1){
                            $active = "active";
                        }else $active ="";
                        echo '
                        <li class="tm-tab-link-li">
                        <a href="#'.$i.'a" data-toggle="tab" class="tm-tab-link '.$active.'">
                            <img src="'.$item['fotka'].'" alt="Image" class="img-fluid">
                        '.$item['name'].'
                        </a>
                    </li>';
                        $i = $i +1;
                    }
                    ?>

                </ul>
                <div class="tab-content clearfix">
                    <?php
                        for ($n =1;$n<8;$n++) {
                            if ($n === 1){
                                $active = " show active";
                            }else $active ="";
                            echo ' 
                            <div class="tab-pane fade '.$active.'" id="'.$n.'a">
                            <div class="tm-recommended-place-wrap">
                           ';
                            $hotel = $db->getHotel($n.'a');
                            foreach ($hotel as $item) {
                                echo
                                '
                                
                            <div class="tm-recommended-place">
                                <img src="img/' . $item['photo'] . '" alt="Image" class="img-fluid tm-recommended-img">
                                    <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">' . $item['name'] . '</h3>
                                    <p class="tm-text-highlight">' . $item['place'] . '</p>
                                    <p class="tm-text-gray">' . $item['text'] . '</p>   
                                    </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">' . $item['price'] . '</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>                        
                            </div>;';
                            }
                            echo '
                            </div>

                            <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Show More Places</a>
                            </div> <!-- tab-pane -->
                            ';
                        }

                    ?>
                </div>
            </div>

            <div class="tm-container-outer tm-position-relative" id="tm-section-4">
                <div id="google-map"></div>
                <form action="index.html" method="post" class="tm-contact-form">
                    <div class="form-group tm-name-container">
                        <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                    </div>
                    <div class="form-group tm-email-container">
                        <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                    </div>
                    <div class="form-group">
                        <input type="text" id="contact_subject" name="contact_subject" class="form-control" placeholder="Subject"  required/>
                    </div>
                    <div class="form-group">
                        <textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary tm-btn-primary tm-btn-send text-uppercase">Send Message Now</button>
                </form>
            </div> <!-- .tm-container-outer -->

            <footer class="tm-container-outer">
                <p class="mb-0">Copyright © <span class="tm-current-year">2018</span> Your Company 
                    
                . Designed by <a rel="nofollow" href="http://www.google.com/+templatemo" target="_parent">Template Mo</a></p>
            </footer>
        </div>
    </div> <!-- .main-content -->

    <!-- load JS files -->
    <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
    <script src="js/popper.min.js"></script>                    <!-- https://popper.js.org/ -->       
    <script src="js/bootstrap.min.js"></script>                 <!-- https://getbootstrap.com/ -->
    <script src="js/datepicker.min.js"></script>                <!-- https://github.com/qodesmith/datepicker -->
    <script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
    <script src="slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->
    <script src="js/jquery.scrollTo.min.js"></script>           <!-- https://github.com/flesler/jquery.scrollTo -->
    <script> 
        /* Google Maps
        ------------------------------------------------*/
        var map = '';
        var center;

        function initialize() {
            var mapOptions = {
                zoom: 16,
                center: new google.maps.LatLng(37.769725, -122.462154),
                scrollwheel: false
            };

            map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

            google.maps.event.addDomListener(map, 'idle', function() {
              calculateCenter();
          });

            google.maps.event.addDomListener(window, 'resize', function() {
              map.setCenter(center);
          });
        }

        function calculateCenter() {
            center = map.getCenter();
        }

        function loadGoogleMap(){
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDVWt4rJfibfsEDvcuaChUaZRS5NXey1Cs&v=3.exp&sensor=false&' + 'callback=initialize';
            document.body.appendChild(script);
        } 

        /* DOM is ready
        ------------------------------------------------*/
        $(function(){

            // Change top navbar on scroll
            $(window).on("scroll", function() {
                if($(window).scrollTop() > 100) {
                    $(".tm-top-bar").addClass("active");
                } else {                    
                 $(".tm-top-bar").removeClass("active");
                }
            });

            // Smooth scroll to search form
            $('.tm-down-arrow-link').click(function(){
                $.scrollTo('#tm-section-search', 300, {easing:'linear'});
            });

            // Date Picker in Search form
            var pickerCheckIn = datepicker('#inputCheckIn');
            var pickerCheckOut = datepicker('#inputCheckOut');

            // Update nav links on scroll
            $('#tm-top-bar').singlePageNav({
                currentClass:'active',
                offset: 60
            });

            // Close navbar after clicked
            $('.nav-link').click(function(){
                $('#mainNav').removeClass('show');
            });

            // Slick Carousel
            $('.tm-slideshow').slick({
                infinite: true,
                arrows: true,
                slidesToShow: 1,
                slidesToScroll: 1
            });

            loadGoogleMap();                                       // Google Map                
            $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright           
        });

    </script>             

</body>
</html>