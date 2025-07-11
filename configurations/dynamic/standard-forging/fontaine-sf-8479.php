<?php ob_start(); ?> 
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="./../assets/css/slick.css">
    <link rel="stylesheet" href="./../assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="./../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="./../assets/css/spacing.css">
    <link rel="stylesheet" href="./../assets/css/style.css">
    <link rel="stylesheet" href="./../assets/css/app.css">
    <link rel="stylesheet" href="./../assets/css/responsive.css">

    <link rel="shortcut icon" href="./../assets/img/corleone-forged-favicon.png" type="image/x-icon">
    <title>Corleone Forged Configurator</title>
</head>

<body>
     <?php function includeWithVariables($filePath, $variables = array(), $print = true) {
    $output = NULL;
   
    if(file_exists($filePath)){
        // Extract the variables to a local namespace
        extract($variables);

        // Start output buffering
        ob_start();

        // Include the template file
        include $filePath;

        // End buffering and return its contents
        $output = ob_get_clean();


    }

    return $output;

} ?>
    <div id="home"></div>
    <!-- PRELOADER -->
    <div class="preloader">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
          </div>
    </div>
    <!-- PRELOADER END -->




    <!-- HEADER-AREA v2 -->
    <header>
        <div class="header-area-wrapper-v2">
            

            <div class="container px-4">
                <div class="header-content-wrap">
                    <div class="header-shaped-bg bg-attachment" style="background-image: url('./../assets/img/hero-v2/header-shaped-bg-v2.jpg');"></div>


                    <div class="header-top-v2 mb-10">
                        <p><span>news alert :</span> Our prayers have been answered! Custom Wheel Configurator to be launched soon, stay updated!</p>
                    </div>
        
                    <div class="row align-items-end">
                        <div class="col-lg-9">
                            <div class="header-area-v2">
                                <div class="row align-items-center">
                                    <div class="col-xl-2 col-lg-2">
                                        <div class="logo-v2">
                                            <a href="https://www.corleoneforged.com/">
                                                <img  alt="logo" data-src="//397152-1726902-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2021/02/logo-v2.png" class="lazyload" src="./../assets/img/logo-v2/logo-v2.png">
                                                <noscript>
                                                <img src="//397152-1726902-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2021/02/logo-v2.png" alt="logo">
                                                </noscript>
                                            </a>
                                        </div>

                                        
                                        <a href="/?s" class="search-icon d-lg-none"><i class="far fa-search"></i></a>

                            
                                        <div class="resonsive-slide-overlay d-lg-none"></div>
                
                                        <div class="humberger-bar d-lg-none">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                
                                        <div class="resonsive-slide d-lg-none">
                                            <div class="responsive-menu">
                                                <script type="text/javascript"> 
                                
                                            jQuery(document).ready(function(){
                                            jQuery('#menu-mobile-menu li:first').addClass('current');
                                            });
                                    
                                        </script>
                                        
                                            <ul id="menu-mobile-menu" class="menu"><li id="menu-item-32" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-32"><a href="#home">Home</a></li>
    <li id="menu-item-2532" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2532"><a href="https://www.corleoneforged.com/about-us/">About Us</a></li>
    <li id="menu-item-33" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-33"><a href="#wheel">Wheels</a>
    <ul class="sub-menu submenu">
    <li id="menu-item-3990" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3990"><a href="https://www.corleoneforged.com/wheels/">All Wheels</a></li>
    <li id="menu-item-2533" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2533"><a href="https://www.corleoneforged.com/product-category/2021-new-wheels/">2021 New Wheels</a></li>
    <li id="menu-item-2538" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2538"><a href="https://www.corleoneforged.com/product-category/standard-forging/">Standard Forging</a></li>
    <li id="menu-item-2534" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2534"><a href="https://www.corleoneforged.com/product-category/concave-forging/">Concave Forging</a></li>
    <li id="menu-item-2536" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2536"><a href="https://www.corleoneforged.com/product-category/monoblock-forging/">Monoblock Forging</a></li>
    <li id="menu-item-2537" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2537"><a href="https://www.corleoneforged.com/product-category/off-road-forging/">Off-Road Forging</a></li>
    <li id="menu-item-2535" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2535"><a href="https://www.corleoneforged.com/product-category/dually-forging/">Dually Forging</a></li>
    </ul>
    </li>
    <li id="menu-item-2539" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2539"><a href="https://www.corleoneforged.com/become-a-dealer/">Become A Dealer</a></li>
    <li id="menu-item-2540" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2540"><a href="https://www.corleoneforged.com/leave-review/">Leave Review</a></li>
    </ul>                                            </div>
                
                                            <div class="responsive-others">
                                                <div class="resposive-btns text-center">
                                                    <a href="https://www.corleoneforged.com/contact-us/" class="site-btn">Contact</a>
                                                </div>
                
                                                <div class="copyright-text">
                                                    © Copyright 2021 Corleone Forged Designed By <a href="https://designnearme.com/">DesignNearMe.com</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        


                                    </div>

                                    <div class="col-xl-8 col-lg-9 d-none d-lg-block">
                                    <div class="mainmenu-v2 text-center">
                                        <script type="text/javascript"> 
                                
                                        jQuery(document).ready(function(){
                                        jQuery('#menu-main-menu li:first').addClass('current');
                                        });
                            
                                        </script>
                                        
                                        <ul id="menu-main-menu" class="menu"><li id="menu-item-2331" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-2331"><a href="https://www.corleoneforged.com/" aria-current="page">Home</a></li>
    <li id="menu-item-2329" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2329"><a href="https://www.corleoneforged.com/about-us/">About</a></li>
    <li id="menu-item-2330" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2330"><a href="https://www.corleoneforged.com/wheels/">Wheels</a>
    <ul class="sub-menu submenu">
    <li id="menu-item-2526" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2526"><a href="https://www.corleoneforged.com/product-category/2021-new-wheels/">2021 New Wheels</a></li>
    <li id="menu-item-2527" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2527"><a href="https://www.corleoneforged.com/product-category/standard-forging/">Standard Forging</a></li>
    <li id="menu-item-2529" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2529"><a href="https://www.corleoneforged.com/product-category/concave-forging/">Concave Forging</a></li>
    <li id="menu-item-2531" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2531"><a href="https://www.corleoneforged.com/product-category/monoblock-forging/">Monoblock Forging</a></li>
    <li id="menu-item-2528" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2528"><a href="https://www.corleoneforged.com/product-category/off-road-forging/">Off-Road Forging</a></li>
    <li id="menu-item-2530" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2530"><a href="https://www.corleoneforged.com/product-category/dually-forging/">Dually Forging</a></li>
    </ul>
    </li>
    <li id="menu-item-2546" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2546"><a href="https://www.corleoneforged.com/become-a-dealer/">Become A Dealer</a></li>
    <li id="menu-item-1865" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1865"><a href="https://www.corleoneforged.com/leave-review/">Leave Review</a></li>
    <li id="menu-item-2328" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2328"><a href="https://www.corleoneforged.com/contact-us/">Contact</a></li>
    </ul>                                       </div>
                                    </div>

                                    <div class="col-xl-2 col-lg-1 d-none d-lg-block">
                                        <div class="header-btn-v2 text-end">
                                            <ul>
                                                <li><a href="/?s" class="circle-icon-v2"><i class="fas fa-search"></i></a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="header-address-v2 d-none d-lg-block">
                                <ul>
                                    <li>
                                        <i class="fal fa-phone-alt"></i>
                                        <h6><span>Phone line</span>+1 (800) 737-6143</h6>
                                    </li>
                                    <li>
                                        <i class="fal fa-envelope-open-text"></i>
                                        <h6><span>EMAIL</span>Sales@CorleoneForged.com</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER-AREA v2// -->

    <main>

         <?php 

        if(isset($_POST["qoutesubmit"])) {

        
        $mail_to = "sales@corleoneforged.com";

        $mail_to2 = "designnearme@gmail.com";
      
        $accents = trim($_POST["accents"]);
        $faceletter = trim($_POST["face-letter"]);
        $face = trim($_POST["face"]);
        $capletter = trim($_POST["cap-letter"]);
        $cap = trim($_POST["cap"]);
        $bolts = trim($_POST["bolts"]);
        $outerbarrel = trim($_POST["outer-barrel"]);
        $innerbarrrel = trim($_POST["inner-barrrel"]);

        $name = trim($_POST["name"]);
        
        $subject = 'Corleone Customize Wheel Form';
        $email = trim($_POST["email"]);
        $zipcode = trim($_POST["zipcode"]);
        $city = trim($_POST["city"]);

        $state = trim($_POST["state"]);
        $dealer = trim($_POST["dealer"]);
        $nondealer = trim($_POST["non-dealer"]);
        $dealer = ($dealer) ? 'Dealer' : 'Non Dealer';
        
        $img_data = trim($_POST["img_data"]);
        $phone = trim($_POST["phone"]);


        define('UPLOAD_DIR', 'tmp/');
        $image_parts = explode(";base64,", $img_data);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $file = UPLOAD_DIR . uniqid() . '.png';
        file_put_contents($file, $image_base64);

        $actual_linkf = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";


        $image_path = $actual_linkf.'/standard-forging/'.$file;


        $message = trim($_POST["message"]);
        
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        

       
        if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($subject) OR empty($message)  ) {
            # Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Please complete the form and try again.";
            //exit;
        }
       

        $email_content = includeWithVariables($_SERVER['DOCUMENT_ROOT'].'standard-forging/email-template/email.php', array('name' => $name, 'email' => $email, 'phone'=> $phone, 'zipcode' => $zipcode, 'city' => $city, 'city' => $city, 'state' => $state, 'status' => $dealer, 'message' => $message, 'wheel-name' => 'FONTAINE | SF-8479', 'accents' => $accents, 'faceletter' => $faceletter, 'face' => $face, 'capletter' => $capletter, 'cap' => $cap,'bolts' => $bolts
        , 'outerbarrel' => $outerbarrel, 'innerbarrrel' => $innerbarrrel,'image_path' => $image_path    ));
        

       # email headers.
        $headers = "From: " . $name .'<'.$email.'>' . "\r\n";
        $headers .= "Reply-To: ". strip_tags($email) . "\r\n";

        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        # Send the email.
        $success = mail($mail_to, $subject, $email_content, $headers);
        $success = mail($mail_to2, $subject, $email_content, $headers);
      


        if ($success) {

            # Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
            $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            //wp_redirect( '/thank-you/'); 
            header('Location:'.$actual_link.'?data=success'); 

        } else {
            # Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong, we couldn't send your message.";
        }


    }  ?>
       
   
    <div class="config-wrapper fontaine-sf-8479 pb-120 pb-xs-60 pb-md-80 bg-attachment" style="background-image: url(./../assets/img/config/config-bg.jpg);">

    <?php  if ( $_GET['data'] !='success' ) :  ?>

        <!-- configurator area -->
        <div class="config-content active">
            <!-- CONFIG BODY -->
            <div class="config-body">
    
                <div class="config-bg-shape-wrap">
                    <div class="config-bg-shape bg-attachment"></div>
                </div>
    
                <!-- CONFIG-INNER -->
                <div class="config-inner">
                    <div class="row g-0">
    
                        <div class="col-lg-3 col-md-5">
                            <div class="config-title">
    
                                <h3>FONTAINE <span>its easy to build</span></h3>
                                <h1>SF-8479</h1>
                                <h4>Make your own custom wheel</h4>
    
                                
                                <div class="config-navigation-wrap">
    
                                    <div class="placeholder-logo active mt-60 mt-xs-20 mt-md-40">
                                        <img src="./../assets/img/logo-v2/logo-big.png" alt="">
                                    </div>
    
                                    <div class="config-navigation mt-50 mt-xs-20 mt-md-20">
                                        <div class="navigation-slider">
                                            <ul>
                                                <li>
                                                    <img src="./img/fontaine/Navigation/accents.png" alt="">
                                                    <span>accents</span>
                                                </li>
                                                <li>
                                                    <img src="./img/fontaine/Navigation/face-letter.png" alt="">
                                                    <span>face-letter</span>
                                                </li>
                                                <li>
                                                    <img src="./img/fontaine/Navigation/face.png" alt="">
                                                    <span>face</span>
                                                </li>
                                                <li>
                                                    <img src="./img/fontaine/Navigation/cap-letter.png" alt="">
                                                    <span>cap-letter</span>
                                                </li>
                                                <li>
                                                    <img src="./img/fontaine/Navigation/cap.png" alt="">
                                                    <span>cap</span>
                                                </li>
                                                <li>
                                                    <img src="./img/fontaine/Navigation/bolts.png" alt="">
                                                    <span>Bolts</span>
                                                </li>
                                                <li>
                                                    <img src="./img/fontaine/Navigation/outer-barrel.png" alt="">
                                                    <span>outer-barrel</span>
                                                </li>
                                                <li>
                                                    <img src="./img/fontaine/Navigation/inner-barrel.png" alt="">
                                                    <span>inner-barrel</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="navigation-arrow text-center">
                                            <button class="arrow-prev">
                                                <i class="fas fa-angle-left"></i>
                                            </button>
                                            <button class="arrow-next">
                                                <i class="fas fa-angle-right"></i>
                                            </button>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
    
                        </div>
    
                        <div class="col-lg-5 col-md-7 text-center text-md-start">
                            <div class="config-wheel-wrap" id="capture">
                                <div class="preview-loader">
                                    <div class="lds-default">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>

                                <!-- defult-wheel -->
                                <div class="config-main-wheel">
                                    <img class="wheel-shadow" src="./../assets/img/config/wheel-shadow.png"  data-html2canvas-ignore="true" alt="">
                                    <img src="./img/fontaine/default-model.png" alt="">
                                </div>
    
    
                                <!-- custom all parts -->
                                <div class="config-part-wrap">
    
                                    <!-- accents -->
                                    <div class="config-part-page">
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Accents/2.png" alt="">
                                            <img data-src="./img/fontaine/Accents/4.png" alt="">
                                            <img data-src="./img/fontaine/Accents/5.png" alt="">
                                            <img data-src="./img/fontaine/Accents/6.png" alt="">
                                            <img data-src="./img/fontaine/Accents/7.png" alt="">
                                            <img data-src="./img/fontaine/Accents/8.png" alt="">
                                            <img data-src="./img/fontaine/Accents/9.png" alt="">
                                            <img data-src="./img/fontaine/Accents/10.png" alt="">
                                            <img data-src="./img/fontaine/Accents/11.png" alt="">
                                            <img data-src="./img/fontaine/Accents/12.png" alt="">
                                            <img data-src="./img/fontaine/Accents/13.png" alt="">
                                            <img data-src="./img/fontaine/Accents/14.png" alt="">
                                            <img data-src="./img/fontaine/Accents/18.png" alt="">
                                            <img data-src="./img/fontaine/Accents/20.png" alt="">
                                            <img data-src="./img/fontaine/Accents/1.png" alt="">
                                        </div>
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Accents/2.png" alt="">
                                        </div>
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Accents/4.png" alt="">
                                            <img data-src="./img/fontaine/Accents/5.png" alt="">
                                            <img data-src="./img/fontaine/Accents/6.png" alt="">
                                            <img data-src="./img/fontaine/Accents/7.png" alt="">
                                            <img data-src="./img/fontaine/Accents/8.png" alt="">
                                            <img data-src="./img/fontaine/Accents/9.png" alt="">
                                            <img data-src="./img/fontaine/Accents/10.png" alt="">
                                            <img data-src="./img/fontaine/Accents/11.png" alt="">
                                            <img data-src="./img/fontaine/Accents/12.png" alt="">
                                            <img data-src="./img/fontaine/Accents/13.png" alt="">
                                            <img data-src="./img/fontaine/Accents/14.png" alt="">
                                            <img data-src="./img/fontaine/Accents/18.png" alt="">
                                            <img data-src="./img/fontaine/Accents/20.png" alt="">
                                        </div>
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Accents/1.png" alt="">
                                        </div>
                                    </div>

                                    <!-- Face Letter -->
                                    <div class="config-part-page">
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Face Letter/2.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/4.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/5.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/6.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/7.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/8.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/9.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/10.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/11.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/12.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/13.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/14.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/18.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/20.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/1.png" alt="">
                                        </div>
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Face Letter/2.png" alt="">
                                        </div>
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Face Letter/4.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/5.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/6.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/7.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/8.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/9.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/10.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/11.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/12.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/13.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/14.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/18.png" alt="">
                                            <img data-src="./img/fontaine/Face Letter/20.png" alt="">
                                        </div>
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Face Letter/1.png" alt="">
                                        </div>
                                    </div>
                                    
                                    <!-- Face -->
                                    <div class="config-part-page">
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Face/2.png" alt="">
                                            <img data-src="./img/fontaine/Face/4.png" alt="">
                                            <img data-src="./img/fontaine/Face/5.png" alt="">
                                            <img data-src="./img/fontaine/Face/6.png" alt="">
                                            <img data-src="./img/fontaine/Face/7.png" alt="">
                                            <img data-src="./img/fontaine/Face/8.png" alt="">
                                            <img data-src="./img/fontaine/Face/9.png" alt="">
                                            <img data-src="./img/fontaine/Face/10.png" alt="">
                                            <img data-src="./img/fontaine/Face/11.png" alt="">
                                            <img data-src="./img/fontaine/Face/12.png" alt="">
                                            <img data-src="./img/fontaine/Face/13.png" alt="">
                                            <img data-src="./img/fontaine/Face/14.png" alt="">
                                            <img data-src="./img/fontaine/Face/18.png" alt="">
                                            <img data-src="./img/fontaine/Face/20.png" alt="">
                                            <img data-src="./img/fontaine/Face/1.png" alt="">
                                        </div>
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Face/2.png" alt="">
                                        </div>
                                        <div class="config-part-category">
                                                <img data-src="./img/fontaine/Face/4.png" alt="">
                                                <img data-src="./img/fontaine/Face/5.png" alt="">
                                                <img data-src="./img/fontaine/Face/6.png" alt="">
                                                <img data-src="./img/fontaine/Face/7.png" alt="">
                                                <img data-src="./img/fontaine/Face/8.png" alt="">
                                                <img data-src="./img/fontaine/Face/9.png" alt="">
                                                <img data-src="./img/fontaine/Face/10.png" alt="">
                                                <img data-src="./img/fontaine/Face/11.png" alt="">
                                                <img data-src="./img/fontaine/Face/12.png" alt="">
                                                <img data-src="./img/fontaine/Face/13.png" alt="">
                                                <img data-src="./img/fontaine/Face/14.png" alt="">
                                                <img data-src="./img/fontaine/Face/18.png" alt="">
                                                <img data-src="./img/fontaine/Face/20.png" alt="">
                                        </div>
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Face/1.png" alt="">
                                        </div>
                                    </div>
                                    
                                    <!-- Cap Letter -->
                                    <div class="config-part-page">
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Cap Letter/2.png" alt="">
                                            <img data-src="./img/fontaine/Cap Letter/4.png" alt="">
                                            <img data-src="./img/fontaine/Cap Letter/5.png" alt="">
                                            <img data-src="./img/fontaine/Cap Letter/6.png" alt="">
                                            <img data-src="./img/fontaine/Cap Letter/7.png" alt="">
                                            <img data-src="./img/fontaine/Cap Letter/8.png" alt="">
                                            <img data-src="./img/fontaine/Cap Letter/9.png" alt="">
                                            <img data-src="./img/fontaine/Cap Letter/10.png" alt="">
                                            <img data-src="./img/fontaine/Cap Letter/11.png" alt="">
                                            <img data-src="./img/fontaine/Cap Letter/12.png" alt="">
                                            <img data-src="./img/fontaine/Cap Letter/13.png" alt="">
                                            <img data-src="./img/fontaine/Cap Letter/14.png" alt="">
                                            <img data-src="./img/fontaine/Cap Letter/18.png" alt="">
                                            <img data-src="./img/fontaine/Cap Letter/20.png" alt="">
                                            <img data-src="./img/fontaine/Cap Letter/1.png" alt="">
                                        </div>
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Cap Letter/2.png" alt="">
                                        </div>
                                        <div class="config-part-category">
                                                <img data-src="./img/fontaine/Cap Letter/4.png" alt="">
                                                <img data-src="./img/fontaine/Cap Letter/5.png" alt="">
                                                <img data-src="./img/fontaine/Cap Letter/6.png" alt="">
                                                <img data-src="./img/fontaine/Cap Letter/7.png" alt="">
                                                <img data-src="./img/fontaine/Cap Letter/8.png" alt="">
                                                <img data-src="./img/fontaine/Cap Letter/9.png" alt="">
                                                <img data-src="./img/fontaine/Cap Letter/10.png" alt="">
                                                <img data-src="./img/fontaine/Cap Letter/11.png" alt="">
                                                <img data-src="./img/fontaine/Cap Letter/12.png" alt="">
                                                <img data-src="./img/fontaine/Cap Letter/13.png" alt="">
                                                <img data-src="./img/fontaine/Cap Letter/14.png" alt="">
                                                <img data-src="./img/fontaine/Cap Letter/18.png" alt="">
                                                <img data-src="./img/fontaine/Cap Letter/20.png" alt="">
                                        </div>
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Cap Letter/1.png" alt="">
                                        </div>
                                    </div>
                                    
                                    <!-- cap -->
                                    <div class="config-part-page">
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Cap/2.png" alt="">
                                            <img data-src="./img/fontaine/Cap/4.png" alt="">
                                            <img data-src="./img/fontaine/Cap/5.png" alt="">
                                            <img data-src="./img/fontaine/Cap/6.png" alt="">
                                            <img data-src="./img/fontaine/Cap/7.png" alt="">
                                            <img data-src="./img/fontaine/Cap/8.png" alt="">
                                            <img data-src="./img/fontaine/Cap/9.png" alt="">
                                            <img data-src="./img/fontaine/Cap/10.png" alt="">
                                            <img data-src="./img/fontaine/Cap/11.png" alt="">
                                            <img data-src="./img/fontaine/Cap/12.png" alt="">
                                            <img data-src="./img/fontaine/Cap/13.png" alt="">
                                            <img data-src="./img/fontaine/Cap/14.png" alt="">
                                            <img data-src="./img/fontaine/Cap/18.png" alt="">
                                            <img data-src="./img/fontaine/Cap/20.png" alt="">
                                            <img data-src="./img/fontaine/Cap/1.png" alt="">
                                        </div>
                                      <div class="config-part-category">
                                          <img data-src="./img/fontaine/Cap/2.png" alt="">
                                      </div>
                                      <div class="config-part-category">
                                            <img data-src="./img/fontaine/Cap/4.png" alt="">
                                            <img data-src="./img/fontaine/Cap/5.png" alt="">
                                            <img data-src="./img/fontaine/Cap/6.png" alt="">
                                            <img data-src="./img/fontaine/Cap/7.png" alt="">
                                            <img data-src="./img/fontaine/Cap/8.png" alt="">
                                            <img data-src="./img/fontaine/Cap/9.png" alt="">
                                            <img data-src="./img/fontaine/Cap/10.png" alt="">
                                            <img data-src="./img/fontaine/Cap/11.png" alt="">
                                            <img data-src="./img/fontaine/Cap/12.png" alt="">
                                            <img data-src="./img/fontaine/Cap/13.png" alt="">
                                            <img data-src="./img/fontaine/Cap/14.png" alt="">
                                            <img data-src="./img/fontaine/Cap/18.png" alt="">
                                            <img data-src="./img/fontaine/Cap/20.png" alt="">
                                      </div>
                                      <div class="config-part-category">
                                          <img data-src="./img/fontaine/Cap/1.png" alt="">
                                      </div>
                                    </div>
                                    
                                    <!-- Bolts -->
                                    <div class="config-part-page">
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Bolts/2.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/4.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/5.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/6.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/7.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/8.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/9.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/10.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/11.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/12.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/13.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/14.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/18.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/20.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/1.png" alt="">
                                        </div>
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Bolts/2.png" alt="">
                                        </div>
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Bolts/4.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/5.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/6.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/7.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/8.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/9.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/10.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/11.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/12.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/13.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/14.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/18.png" alt="">
                                            <img data-src="./img/fontaine/Bolts/20.png" alt="">
                                        </div>
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Bolts/1.png" alt="">
                                        </div>
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Bolts/1.png" alt="">
                                        </div>
                                    </div>

                                    <!-- Outer Barrel -->
                                    <div class="config-part-page">
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Outer Barrel/2.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/4.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/5.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/6.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/7.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/8.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/9.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/10.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/11.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/12.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/13.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/14.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/18.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/20.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/1.png" alt="">
                                        </div>
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Outer Barrel/2.png" alt="">
                                        </div>
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Outer Barrel/4.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/5.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/6.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/7.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/8.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/9.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/10.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/11.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/12.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/13.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/14.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/18.png" alt="">
                                            <img data-src="./img/fontaine/Outer Barrel/20.png" alt="">
                                        </div>
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Outer Barrel/1.png" alt="">
                                        </div>
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Outer Barrel/1.png" alt="">
                                        </div>
                                    </div>
    
                                    <!-- Inner Barrel -->
                                    <div class="config-part-page">
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Inner Barrel/2.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/4.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/5.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/6.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/7.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/8.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/9.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/10.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/11.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/12.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/13.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/14.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/18.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/20.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/1.png" alt="Inner Barrel">
                                        </div>
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Inner Barrel/2.png" alt="Inner Barrel">
                                        </div>
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Inner Barrel/4.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/5.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/6.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/7.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/8.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/9.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/10.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/11.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/12.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/13.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/14.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/18.png" alt="Inner Barrel">
                                            <img data-src="./img/fontaine/Inner Barrel/20.png" alt="Inner Barrel">
                                        </div>
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Inner Barrel/1.png" alt="Inner Barrel">
                                        </div>
                                        <div class="config-part-category">
                                            <img data-src="./img/fontaine/Inner Barrel/1.png" alt="Inner Barrel">
                                        </div>
                                    </div>
    
                                </div>
    
    
                                <!-- wheel pointer -->
                                <div class="config-pointer-wrap" data-html2canvas-ignore="true">
    
                                    <div class="config-pointer accents">
                                        <h5 class="pointer-name">accents</h5>
                                        <span class="pointer"></span>
                                    </div>
    
                                    <div class="config-pointer face-letter">
                                        <h5 class="pointer-name">face-letter</h5>
                                        <span class="pointer"></span>
                                    </div>
    
                                    <div class="config-pointer face">
                                        <h5 class="pointer-name">face</h5>
                                        <span class="pointer"></span>
                                    </div>
    
                                    <div class="config-pointer cap-letter">
                                        <h5 class="pointer-name">cap-letter</h5>
                                        <span class="pointer"></span>
                                    </div>

                                    <div class="config-pointer cap">
                                        <h5 class="pointer-name">cap</h5>
                                        <span class="pointer"></span>
                                    </div>
    
                                    <div class="config-pointer big-bolts">
                                        <h5 class="pointer-name">bolts</h5>
                                        <span class="pointer"></span>
                                    </div>

                                    <div class="config-pointer outer-barrel">
                                        <h5 class="pointer-name">Outer Barrel</h5>
                                        <span class="pointer"></span>
                                    </div>
                                    
                                    <div class="config-pointer inner-barrel">
                                        <h5 class="pointer-name">Inner Barrel</h5>
                                        <span class="pointer"></span>
                                    </div>
    
                                </div>
    
                            </div>
                        </div>
    
                        <div class="col-lg-4">
                            <div class="config-content-wrap active">
    
                                <div class="row">
                                    <div class="col-12">
                                        <div class="config-content-title bounce-pop active mb-40 mb-xs-20 mb-md-30">
                                            <h5><i class="fas fa-long-arrow-right"></i> CLICK TO CHOOSE TWO TONES FROM FINISHES</h5>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-4 col-lg-5 col-md-3">
                                        <div class="config-category mb-30 mb-xs-20 boxed-blur">
                                            <ul>
                                                <li>ALL FINISHES</li>
                                                <li>BRUSH</li>
                                                <li>POWDER COAT</li>
                                                <li>POLISH</li>
                                            </ul>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-8 col-lg-7 col-md-4">
                                        <div class="selected-boxed active">
                                            <div class="selected-color-wrap active boxed-blur bg-attachment mb-50 mb-xs-20 mb-md-40" style="background-image: url(./../assets/img/config/selected-color-bg.jpg);">
                                                <h4><i class="far fa-long-arrow-right"></i> <span class="active">selected Colors</span></h4>
        
                                                <div class="selected-color active">
                                                    <ul>
                                                        <li>
                                                            <i class="clean-color far fa-times"></i>
                                                            <span>? 
                                                                <div class="color-holder"></div>
                                                            </span>
                                                            <p></p>
                                                        </li>
                                                        <li>
                                                            <i class="clean-color far fa-times"></i>
                                                            <span>? 
                                                                <div class="color-holder"></div>
                                                            </span>
                                                            <p></p>
                                                        </li>
                                                    </ul>
                                                </div>
        
                                                <div class="preview-wheel-wrap">
                                                    <div class="preview-wheel mt-30">
                                                        <span class="arrow-prev"><i class="far fa-angle-left"></i></span>
                                                        <img src="./img/fontaine/default-model.png" class="preview">
                                                        <span class="arrow-next"><i class="far fa-angle-right"></i></span>
                                                    </div>
                                                </div>
        
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-11 col-md-5">
                                        <div class="select-color-main active">
            
                                            <div class="select-color-title">
                                                <h5 class="boxed-blur">Choose Your Two Colors</h5>
                                                <h5 class="boxed-blur">Choose Your BRUSH Color</h5>
                                                <h5 class="boxed-blur">Choose Your POWDER COAT Color</h5>
                                                <h5 class="boxed-blur">Choose Your POLISH Color</h5>
                                            </div>
            
                                            <div class="select-color-page">
                                               
                                                <div class="select-color-page">

                                                    <div class="select-color-category boxed-blur">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #efedeb;"></span>
                                                                <p style="color: #111111;">Brush</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #42C2C6;"></span>
                                                                <p>Pearl Turquoise</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4846;"></span>
                                                                <p>Evo Grey</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E9494D;"></span>
                                                                <p>Fire Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4642;"></span>
                                                                <p>Gloss Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FFFFFE;"></span>
                                                                <p style="color: #111111;">Polar White</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E7DBCF;"></span>
                                                                <p style="color: #111111;">Pearled</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FE7527;"></span>
                                                                <p>Chevy Orange</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #7049B2;"></span>
                                                                <p>Candy Purple</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #413EC1;"></span>
                                                                <p>Lollypop Blue</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF3F37;"></span>
                                                                <p>Lollypop Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #363432;"></span>
                                                                <p>Matte Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF5D81;"></span>
                                                                <p>Pink</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #D86E39;"></span>
                                                                <p>Copper</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #a6a5a4;"></span>
                                                                <p style="color: #111111;">Polish</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="select-color-category boxed-blur">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #efedeb;"></span>
                                                                <p style="color: #111111;">Brush</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="select-color-category boxed-blur">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #42C2C6;"></span>
                                                                <p>Pearl Turquoise</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4846;"></span>
                                                                <p>Evo Grey</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E9494D;"></span>
                                                                <p>Fire Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4642;"></span>
                                                                <p>Gloss Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FFFFFE;"></span>
                                                                <p style="color: #111111;">Polar White</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E7DBCF;"></span>
                                                                <p style="color: #111111;">Pearled</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FE7527;"></span>
                                                                <p>Chevy Orange</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #7049B2;"></span>
                                                                <p>Candy Purple</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #413EC1;"></span>
                                                                <p>Lollypop Blue</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF3F37;"></span>
                                                                <p>Lollypop Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #363432;"></span>
                                                                <p>Matte Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF5D81;"></span>
                                                                <p>Pink</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #D86E39;"></span>
                                                                <p>Copper</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="select-color-category boxed-blur">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #a6a5a4;"></span>
                                                                <p style="color: #111111;">Polish</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
    
                                            </div>
            
                                        </div>
    
                                        <!-- choose-color with parts -->
                                        <div class="choose-color-main">
    
                                            <div class="choose-color-title">
                                                <h5>Choose <span>Accents Color</span></h5>
                                                <h5>Choose <span>Face Letter Color</span></h5>
                                                <h5>Choose <span>Face Color</span></h5>
                                                <h5>Choose <span>Cap Letter Color</span></h5>
                                                <h5>Choose <span>Cap Color</span></h5>
                                                <h5>Choose <span>Bolts Color</span></h5>
                                                <h5>Choose <span>Outer Barrel Color</span></h5>
                                                <h5>Choose <span>Inner Barrel Color</span></h5>
                                            </div>
    
                                            <i class="fas fa-long-arrow-right running-move"></i>

                                            <div class="choose-color-wrapper">
    
                                                <div class="choose-color-page">

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #efedeb;"></span>
                                                                <p style="color: #111111;">Brush</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #42C2C6;"></span>
                                                                <p>Pearl Turquoise</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4846;"></span>
                                                                <p>Evo Grey</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E9494D;"></span>
                                                                <p>Fire Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4642;"></span>
                                                                <p>Gloss Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FFFFFE;"></span>
                                                                <p style="color: #111111;">Polar White</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E7DBCF;"></span>
                                                                <p style="color: #111111;">Pearled</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FE7527;"></span>
                                                                <p>Chevy Orange</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #7049B2;"></span>
                                                                <p>Candy Purple</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #413EC1;"></span>
                                                                <p>Lollypop Blue</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF3F37;"></span>
                                                                <p>Lollypop Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #363432;"></span>
                                                                <p>Matte Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF5D81;"></span>
                                                                <p>Pink</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #D86E39;"></span>
                                                                <p>Copper</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #a6a5a4;"></span>
                                                                <p style="color: #111111;">Polish</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #efedeb;"></span>
                                                                <p style="color: #111111;">Brush</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #42C2C6;"></span>
                                                                <p>Pearl Turquoise</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4846;"></span>
                                                                <p>Evo Grey</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E9494D;"></span>
                                                                <p>Fire Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4642;"></span>
                                                                <p>Gloss Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FFFFFE;"></span>
                                                                <p style="color: #111111;">Polar White</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E7DBCF;"></span>
                                                                <p style="color: #111111;">Pearled</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FE7527;"></span>
                                                                <p>Chevy Orange</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #7049B2;"></span>
                                                                <p>Candy Purple</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #413EC1;"></span>
                                                                <p>Lollypop Blue</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF3F37;"></span>
                                                                <p>Lollypop Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #363432;"></span>
                                                                <p>Matte Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF5D81;"></span>
                                                                <p>Pink</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #D86E39;"></span>
                                                                <p>Copper</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #a6a5a4;"></span>
                                                                <p style="color: #111111;">Polish</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
    
                                                <div class="choose-color-page">

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #efedeb;"></span>
                                                                <p style="color: #111111;">Brush</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #42C2C6;"></span>
                                                                <p>Pearl Turquoise</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4846;"></span>
                                                                <p>Evo Grey</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E9494D;"></span>
                                                                <p>Fire Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4642;"></span>
                                                                <p>Gloss Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FFFFFE;"></span>
                                                                <p style="color: #111111;">Polar White</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E7DBCF;"></span>
                                                                <p style="color: #111111;">Pearled</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FE7527;"></span>
                                                                <p>Chevy Orange</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #7049B2;"></span>
                                                                <p>Candy Purple</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #413EC1;"></span>
                                                                <p>Lollypop Blue</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF3F37;"></span>
                                                                <p>Lollypop Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #363432;"></span>
                                                                <p>Matte Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF5D81;"></span>
                                                                <p>Pink</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #D86E39;"></span>
                                                                <p>Copper</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #a6a5a4;"></span>
                                                                <p style="color: #111111;">Polish</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #efedeb;"></span>
                                                                <p style="color: #111111;">Brush</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #42C2C6;"></span>
                                                                <p>Pearl Turquoise</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4846;"></span>
                                                                <p>Evo Grey</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E9494D;"></span>
                                                                <p>Fire Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4642;"></span>
                                                                <p>Gloss Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FFFFFE;"></span>
                                                                <p style="color: #111111;">Polar White</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E7DBCF;"></span>
                                                                <p style="color: #111111;">Pearled</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FE7527;"></span>
                                                                <p>Chevy Orange</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #7049B2;"></span>
                                                                <p>Candy Purple</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #413EC1;"></span>
                                                                <p>Lollypop Blue</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF3F37;"></span>
                                                                <p>Lollypop Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #363432;"></span>
                                                                <p>Matte Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF5D81;"></span>
                                                                <p>Pink</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #D86E39;"></span>
                                                                <p>Copper</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #a6a5a4;"></span>
                                                                <p style="color: #111111;">Polish</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
    
                                                <div class="choose-color-page">

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #efedeb;"></span>
                                                                <p style="color: #111111;">Brush</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #42C2C6;"></span>
                                                                <p>Pearl Turquoise</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4846;"></span>
                                                                <p>Evo Grey</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E9494D;"></span>
                                                                <p>Fire Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4642;"></span>
                                                                <p>Gloss Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FFFFFE;"></span>
                                                                <p style="color: #111111;">Polar White</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E7DBCF;"></span>
                                                                <p style="color: #111111;">Pearled</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FE7527;"></span>
                                                                <p>Chevy Orange</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #7049B2;"></span>
                                                                <p>Candy Purple</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #413EC1;"></span>
                                                                <p>Lollypop Blue</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF3F37;"></span>
                                                                <p>Lollypop Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #363432;"></span>
                                                                <p>Matte Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF5D81;"></span>
                                                                <p>Pink</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #D86E39;"></span>
                                                                <p>Copper</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #a6a5a4;"></span>
                                                                <p style="color: #111111;">Polish</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #efedeb;"></span>
                                                                <p style="color: #111111;">Brush</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #42C2C6;"></span>
                                                                <p>Pearl Turquoise</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4846;"></span>
                                                                <p>Evo Grey</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E9494D;"></span>
                                                                <p>Fire Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4642;"></span>
                                                                <p>Gloss Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FFFFFE;"></span>
                                                                <p style="color: #111111;">Polar White</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E7DBCF;"></span>
                                                                <p style="color: #111111;">Pearled</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FE7527;"></span>
                                                                <p>Chevy Orange</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #7049B2;"></span>
                                                                <p>Candy Purple</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #413EC1;"></span>
                                                                <p>Lollypop Blue</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF3F37;"></span>
                                                                <p>Lollypop Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #363432;"></span>
                                                                <p>Matte Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF5D81;"></span>
                                                                <p>Pink</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #D86E39;"></span>
                                                                <p>Copper</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #a6a5a4;"></span>
                                                                <p style="color: #111111;">Polish</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
    
                                                <div class="choose-color-page">

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #efedeb;"></span>
                                                                <p style="color: #111111;">Brush</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #42C2C6;"></span>
                                                                <p>Pearl Turquoise</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4846;"></span>
                                                                <p>Evo Grey</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E9494D;"></span>
                                                                <p>Fire Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4642;"></span>
                                                                <p>Gloss Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FFFFFE;"></span>
                                                                <p style="color: #111111;">Polar White</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E7DBCF;"></span>
                                                                <p style="color: #111111;">Pearled</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FE7527;"></span>
                                                                <p>Chevy Orange</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #7049B2;"></span>
                                                                <p>Candy Purple</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #413EC1;"></span>
                                                                <p>Lollypop Blue</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF3F37;"></span>
                                                                <p>Lollypop Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #363432;"></span>
                                                                <p>Matte Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF5D81;"></span>
                                                                <p>Pink</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #D86E39;"></span>
                                                                <p>Copper</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #a6a5a4;"></span>
                                                                <p style="color: #111111;">Polish</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #efedeb;"></span>
                                                                <p style="color: #111111;">Brush</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #42C2C6;"></span>
                                                                <p>Pearl Turquoise</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4846;"></span>
                                                                <p>Evo Grey</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E9494D;"></span>
                                                                <p>Fire Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4642;"></span>
                                                                <p>Gloss Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FFFFFE;"></span>
                                                                <p style="color: #111111;">Polar White</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E7DBCF;"></span>
                                                                <p style="color: #111111;">Pearled</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FE7527;"></span>
                                                                <p>Chevy Orange</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #7049B2;"></span>
                                                                <p>Candy Purple</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #413EC1;"></span>
                                                                <p>Lollypop Blue</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF3F37;"></span>
                                                                <p>Lollypop Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #363432;"></span>
                                                                <p>Matte Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF5D81;"></span>
                                                                <p>Pink</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #D86E39;"></span>
                                                                <p>Copper</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #a6a5a4;"></span>
                                                                <p style="color: #111111;">Polish</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
    
                                                <div class="choose-color-page">

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #efedeb;"></span>
                                                                <p style="color: #111111;">Brush</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #42C2C6;"></span>
                                                                <p>Pearl Turquoise</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4846;"></span>
                                                                <p>Evo Grey</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E9494D;"></span>
                                                                <p>Fire Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4642;"></span>
                                                                <p>Gloss Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FFFFFE;"></span>
                                                                <p style="color: #111111;">Polar White</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E7DBCF;"></span>
                                                                <p style="color: #111111;">Pearled</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FE7527;"></span>
                                                                <p>Chevy Orange</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #7049B2;"></span>
                                                                <p>Candy Purple</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #413EC1;"></span>
                                                                <p>Lollypop Blue</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF3F37;"></span>
                                                                <p>Lollypop Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #363432;"></span>
                                                                <p>Matte Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF5D81;"></span>
                                                                <p>Pink</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #D86E39;"></span>
                                                                <p>Copper</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #a6a5a4;"></span>
                                                                <p style="color: #111111;">Polish</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #efedeb;"></span>
                                                                <p style="color: #111111;">Brush</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #42C2C6;"></span>
                                                                <p>Pearl Turquoise</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4846;"></span>
                                                                <p>Evo Grey</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E9494D;"></span>
                                                                <p>Fire Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4642;"></span>
                                                                <p>Gloss Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FFFFFE;"></span>
                                                                <p style="color: #111111;">Polar White</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E7DBCF;"></span>
                                                                <p style="color: #111111;">Pearled</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FE7527;"></span>
                                                                <p>Chevy Orange</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #7049B2;"></span>
                                                                <p>Candy Purple</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #413EC1;"></span>
                                                                <p>Lollypop Blue</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF3F37;"></span>
                                                                <p>Lollypop Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #363432;"></span>
                                                                <p>Matte Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF5D81;"></span>
                                                                <p>Pink</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #D86E39;"></span>
                                                                <p>Copper</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #a6a5a4;"></span>
                                                                <p style="color: #111111;">Polish</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
    
                                                <div class="choose-color-page">

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #efedeb;"></span>
                                                                <p style="color: #111111;">Brush</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #42C2C6;"></span>
                                                                <p>Pearl Turquoise</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4846;"></span>
                                                                <p>Evo Grey</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E9494D;"></span>
                                                                <p>Fire Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4642;"></span>
                                                                <p>Gloss Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FFFFFE;"></span>
                                                                <p style="color: #111111;">Polar White</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E7DBCF;"></span>
                                                                <p style="color: #111111;">Pearled</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FE7527;"></span>
                                                                <p>Chevy Orange</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #7049B2;"></span>
                                                                <p>Candy Purple</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #413EC1;"></span>
                                                                <p>Lollypop Blue</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF3F37;"></span>
                                                                <p>Lollypop Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #363432;"></span>
                                                                <p>Matte Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF5D81;"></span>
                                                                <p>Pink</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #D86E39;"></span>
                                                                <p>Copper</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #a6a5a4;"></span>
                                                                <p style="color: #111111;">Polish</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #efedeb;"></span>
                                                                <p style="color: #111111;">Brush</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #42C2C6;"></span>
                                                                <p>Pearl Turquoise</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4846;"></span>
                                                                <p>Evo Grey</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E9494D;"></span>
                                                                <p>Fire Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4642;"></span>
                                                                <p>Gloss Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FFFFFE;"></span>
                                                                <p style="color: #111111;">Polar White</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E7DBCF;"></span>
                                                                <p style="color: #111111;">Pearled</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FE7527;"></span>
                                                                <p>Chevy Orange</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #7049B2;"></span>
                                                                <p>Candy Purple</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #413EC1;"></span>
                                                                <p>Lollypop Blue</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF3F37;"></span>
                                                                <p>Lollypop Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #363432;"></span>
                                                                <p>Matte Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF5D81;"></span>
                                                                <p>Pink</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #D86E39;"></span>
                                                                <p>Copper</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #a6a5a4;"></span>
                                                                <p style="color: #111111;">Polish</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    
                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li class="color-fixed">
                                                                <span style="background-color: #d6d6d6;"></span>
                                                                <p style="color: #111111;">Chrome</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
    
                                                <div class="choose-color-page">

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #efedeb;"></span>
                                                                <p style="color: #111111;">Brush</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #42C2C6;"></span>
                                                                <p>Pearl Turquoise</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4846;"></span>
                                                                <p>Evo Grey</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E9494D;"></span>
                                                                <p>Fire Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4642;"></span>
                                                                <p>Gloss Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FFFFFE;"></span>
                                                                <p style="color: #111111;">Polar White</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E7DBCF;"></span>
                                                                <p style="color: #111111;">Pearled</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FE7527;"></span>
                                                                <p>Chevy Orange</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #7049B2;"></span>
                                                                <p>Candy Purple</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #413EC1;"></span>
                                                                <p>Lollypop Blue</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF3F37;"></span>
                                                                <p>Lollypop Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #363432;"></span>
                                                                <p>Matte Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF5D81;"></span>
                                                                <p>Pink</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #D86E39;"></span>
                                                                <p>Copper</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #a6a5a4;"></span>
                                                                <p style="color: #111111;">Polish</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #efedeb;"></span>
                                                                <p style="color: #111111;">Brush</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #42C2C6;"></span>
                                                                <p>Pearl Turquoise</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4846;"></span>
                                                                <p>Evo Grey</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E9494D;"></span>
                                                                <p>Fire Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4642;"></span>
                                                                <p>Gloss Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FFFFFE;"></span>
                                                                <p style="color: #111111;">Polar White</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E7DBCF;"></span>
                                                                <p style="color: #111111;">Pearled</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FE7527;"></span>
                                                                <p>Chevy Orange</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #7049B2;"></span>
                                                                <p>Candy Purple</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #413EC1;"></span>
                                                                <p>Lollypop Blue</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF3F37;"></span>
                                                                <p>Lollypop Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #363432;"></span>
                                                                <p>Matte Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF5D81;"></span>
                                                                <p>Pink</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #D86E39;"></span>
                                                                <p>Copper</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #a6a5a4;"></span>
                                                                <p style="color: #111111;">Polish</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    
                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li class="color-fixed">
                                                                <span style="background-color: #d6d6d6;"></span>
                                                                <p style="color: #111111;">Chrome</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
    
                                                <div class="choose-color-page">

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #efedeb;"></span>
                                                                <p style="color: #111111;">Brush</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #42C2C6;"></span>
                                                                <p>Pearl Turquoise</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4846;"></span>
                                                                <p>Evo Grey</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E9494D;"></span>
                                                                <p>Fire Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4642;"></span>
                                                                <p>Gloss Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FFFFFE;"></span>
                                                                <p style="color: #111111;">Polar White</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E7DBCF;"></span>
                                                                <p style="color: #111111;">Pearled</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FE7527;"></span>
                                                                <p>Chevy Orange</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #7049B2;"></span>
                                                                <p>Candy Purple</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #413EC1;"></span>
                                                                <p>Lollypop Blue</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF3F37;"></span>
                                                                <p>Lollypop Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #363432;"></span>
                                                                <p>Matte Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF5D81;"></span>
                                                                <p>Pink</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #D86E39;"></span>
                                                                <p>Copper</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #a6a5a4;"></span>
                                                                <p style="color: #111111;">Polish</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #efedeb;"></span>
                                                                <p style="color: #111111;">Brush</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #42C2C6;"></span>
                                                                <p>Pearl Turquoise</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4846;"></span>
                                                                <p>Evo Grey</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E9494D;"></span>
                                                                <p>Fire Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #4A4642;"></span>
                                                                <p>Gloss Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FFFFFE;"></span>
                                                                <p style="color: #111111;">Polar White</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #E7DBCF;"></span>
                                                                <p style="color: #111111;">Pearled</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FE7527;"></span>
                                                                <p>Chevy Orange</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #7049B2;"></span>
                                                                <p>Candy Purple</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #413EC1;"></span>
                                                                <p>Lollypop Blue</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF3F37;"></span>
                                                                <p>Lollypop Red</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #363432;"></span>
                                                                <p>Matte Black</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #FF5D81;"></span>
                                                                <p>Pink</p>
                                                            </li>
                                                            <li>
                                                                <span style="background-color: #D86E39;"></span>
                                                                <p>Copper</p>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li>
                                                                <span style="background-color: #a6a5a4;"></span>
                                                                <p style="color: #111111;">Polish</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    
                                                    <div class="choose-color-category">
                                                        <ul>
                                                            <li class="color-fixed">
                                                                <span style="background-color: #d6d6d6;"></span>
                                                                <p style="color: #111111;">Chrome</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
    
                                            </div>
                                        </div>
    
                                        <!-- invert btn -->
                                        <div class="action-btns mt-30 mt-xs-10 mt-md-20 text-end">
                                            <button class="invert-btn bordered-btn-v2 pulse-pop">invert</button>
                                            <button class="threeD-btn bordered-btn-v2 pulse-pop" data-bs-toggle="modal" data-bs-target="#threeD">3D View</button>

                                            <div class="action-inner">
                                                <button class="prev-btn bordered-btn-v2">PREVIOUS</button>
                                                <button class="next-btn bordered-btn-v2 pulse-pop">Next</button>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
    
                            </div>
                        </div>
    
                    </div>
                </div>
    
            </div>
        </div>
        <!-- configurator area// -->
        
        <!-- CONTACT-FORM -->
        <section class="contact-form-area pt-100 pt-xs-50 pt-md-60">
            <div class="container">
                <div class="contact-form-wrap bg-attachment" style="background-image: url(./../assets/img/config-contact/contact-page-bg.jpg)">

                    <div class="contact-form-shape bg-attachment" style="background-image: url(./../assets/img/config-contact/contact-bg-shape.jpg)"></div>

                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8">
                            <div class="contact-title text-center mb-50 mb-xs-30 mb-md-40">
                                <h2>please fillout
                                    the information below</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="contact-form">
                                <form action="" method="post" class="maincls">

                                    <div class="row align-items-center">
                                        <div class="col-lg-6 text-md-center text-lg-start">
                                            <div class="last-preview-config">
                                                <img src="./../assets/img/config-wheel/default-model.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="Full name" name="name">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="zip code" name="zipcode">
                                                </div>
                                            </div>
        
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="your phone number" name="phone">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="email" placeholder="email" name="email">
                                                </div>
                                            </div>
        
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="city" name="city">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="state" name="state">
                                                </div>
                                            </div>
        
                                            <textarea name="message" rows="5" placeholder="LEAVE A DETAIL MESSAGE"></textarea>
        
                                            <div class="chk-box-wrap mt-20 mb-40 mt-xs-10 mb-xs-20 mb-md-30">
                                                <div class="chk-box">
                                                    <input type="radio" id="chk1" name="dealer">
                                                    <label for="chk1">
                                                        <span class="chk"></span>
                                                        dealer
                                                    </label>
                                                </div>
                                                <div class="chk-box">
                                                    <input type="radio" id="chk2" name="non-dealer">
                                                    <label for="chk2">
                                                        <span class="chk"></span>
                                                        Non - dealer
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- final wheel color name data -->
                                    <input class="color_name_data" type="hidden" name="accents" value="">
                                    <input class="color_name_data" type="hidden" name="face-letter" value="">
                                    <input class="color_name_data" type="hidden" name="face" value="">
                                    <input class="color_name_data" type="hidden" name="cap-letter" value="">
                                    <input class="color_name_data" type="hidden" name="cap" value="">
                                    <input class="color_name_data" type="hidden" name="bolts" value="">
                                    <input class="color_name_data" type="hidden" name="outer-barrel" value="">
                                    <input class="color_name_data" type="hidden" name="inner-barrrel" value="">
                                    <!-- final wheel color name data end -->

                                    <input class="img_data" type="hidden" value="" name="img_data">

                                    <div class="contact-page-btns">
                                        <button class="bordered-btn-v2 white-border back-btn">Back</button>
                                        <!-- <a href="#" class="bordered-btn-v2 white-border">Share</a> -->
                                        <!-- <a href="#" class="bordered-btn-v2 white-border">print design</a> -->
                                        <button class="bordered-btn-v2 white-border get-qoute-btn" name="qoutesubmit" type="submit">GET YOUR QUOTE</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- CONTACT-FORM// -->

        <?php endif; ?>

        <?php  if ( $_GET['data'] == 'success' ) :  ?>
        <!-- THANKYOU// -->
        <section class="thankyou-area active">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="thankyou-content text-center bg-attachment" style="background-image: url(./../assets/img/thankyou/thankyou-bg.jpg)">
                            <div class="last-preview-config">
                                <img src="./img/fontaine/default-model.png" alt="">
                            </div>

                            <div class="thankyou-text">
                                <h3>Thank you for choosing</h3>
                                <h4>corleoneforged.</h4>
                                <p>One of our Wheel Specialist will contact 
                                    you as soon as possible</p>
                            </div>

                            <!-- <div class="thankyou-btn mt-70 mt-xs-30 mt-md-50">
                                <a href="#" class="bordered-btn-v2 white-border">Share</a>
                                <a href="#" class="bordered-btn-v2 white-border">print design</a>
                            </div> -->

                            <div class="black-shop">
                                <a href="./fontaine-sf-8479.php" class="bordered-btn-v2 white-border">Back To Configurator</a>
                            </div>

                            <div class="color-social-links">
                                <ul>
                                    <li><a href="#" class="bordered-btn-v2 white-border"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="bordered-btn-v2 white-border instagram"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- THANKYOU// -->
        <?php endif; ?>
        
    </div>
    <!-- CONFIG AREA// -->


    <!-- error popup -->
    <div class="error-wrap">
        <div class="error-box">
            <div class="error-close"><i class="fas fa-times"></i></div>

            <div class="error-text">
                <h4>please select color</h4>
            </div>

        </div>
    </div>
    <!-- error popup// -->




    </main>
    

    <footer>
        <div class="footer-area-v2 bg-attachment" style="background-image: url(//397152-1726902-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2021/03/footer-bg-v2.jpg);">
            <div class="footer-content-v2 pt-70 pb-40 pt-xs-40 pb-xs-10 pt-md-60 pb-md-60">
                <div class="container px-4">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="footer-logo-wrap-v2">
                                <div class="footer-logo-v2">
                                    <a href="https://www.corleoneforged.com/"><img  alt="logo" data-src="//397152-1726902-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2021/02/logo-alt-v2.png" class="lazyload" src="./../assets/img/logo-v2/logo-alt-v2.png"><noscript><img src="//397152-1726902-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2021/02/logo-alt-v2.png" alt="logo"></noscript></a>
                                </div>
                                <p>Corleone Forged Multi-piece wheels was born with a dream and an unparallelly passion for becoming one of the most renowned wheel seller in the world.  </p>

                                <div class="footer-btns-v2">
                                    <a href="https://www.corleoneforged.com/about-us/">ABOUT US</a>

                                    <div class="social-icons-v2">
                                        <ul>
                                            <li><a href="https://web.facebook.com/CorleoneForgedWheels" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="https://www.instagram.com/corleoneforged/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 mb-30">
                            <div class="footer-links-v2">
                                <h4 class="footer-item-title-v2">Useful Links</h4>

                                <ul id="menu-useful-link-menu" class="menu"><li id="menu-item-2479" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-2479"><a href="https://www.corleoneforged.com/" aria-current="page">Home</a></li>
<li id="menu-item-35" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-35"><a href="https://www.corleoneforged.com/about-us/">About</a></li>
<li id="menu-item-2485" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2485"><a href="https://www.corleoneforged.com/become-a-dealer/">Become A Dealer</a></li>
<li id="menu-item-2489" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2489"><a href="https://www.corleoneforged.com/product-category/2021-new-wheels/">New Wheels 2021</a></li>
<li id="menu-item-2491" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2491"><a href="https://www.corleoneforged.com/leave-review/">Leave Review</a></li>
<li id="menu-item-2490" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2490"><a href="https://www.corleoneforged.com/contact-us/">Contact</a></li>
</ul>                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-30">
                            <div class="footer-tags-v2">
                                <h4 class="footer-item-title-v2">Tags</h4>

                                <ul id="menu-product-tag" class="menu"><li id="menu-item-44" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-44"><a href="#">MONOBLOCK FORGING</a></li>
<li id="menu-item-45" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-45"><a href="#">CONCAVE FORGING</a></li>
<li id="menu-item-46" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-46"><a href="#">STANDARD FORGING</a></li>
<li id="menu-item-47" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-47"><a href="#">STREET STYLE</a></li>
<li id="menu-item-2509" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2509"><a href="#">OFF-ROAD FORGING</a></li>
</ul>                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-30">
                            <div class="contact-info-v2">
                                <h4>Get In Touch</h4>
    
                                <ul>
                                    <li>
                                        <i class="fal fa-map-marked-alt"></i>
                                        <span>3604 Mansfield Hwy Fort Worth, TX 76119</span>
                                    </li>
                                    <li>
                                        <i class="fal fa-phone-alt"></i>
                                        <span>+1 (800) 737-6143</span>
                                    </li>
                                    <li>
                                        <i class="fal fa-envelope-open-text"></i>
                                        <span>Sales@CorleoneForged.com</span>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="footer-active-gallery-v2">
			
			<div class="single-footer-gallery">
                    <a href="http://397152-1726902-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2021/03/footer-gallery-v2-1-1.jpg" class="footer-gallery-viewer bg-attachment d-block" style="background-image: url(http://397152-1726902-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2021/03/footer-gallery-v2-1-1.jpg)"></a>
                </div><div class="single-footer-gallery">
                    <a href="http://397152-1726902-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2021/03/footer-gallery-v2-2-thum.jpg" class="footer-gallery-viewer bg-attachment d-block" style="background-image: url(http://397152-1726902-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2021/03/footer-gallery-v2-2-thum.jpg)"></a>
                </div><div class="single-footer-gallery">
                    <a href="http://397152-1726902-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2021/03/footer-gallery-v2-3-thum.jpg" class="footer-gallery-viewer bg-attachment d-block" style="background-image: url(http://397152-1726902-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2021/03/footer-gallery-v2-3-thum.jpg)"></a>
                </div><div class="single-footer-gallery">
                    <a href="http://397152-1726902-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2021/03/footer-gallery-v2-4-1.jpg" class="footer-gallery-viewer bg-attachment d-block" style="background-image: url(http://397152-1726902-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2021/03/footer-gallery-v2-4-1.jpg)"></a>
                </div><div class="single-footer-gallery">
                    <a href="http://397152-1726902-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2021/03/footer-gallery-v2-5-1.jpg" class="footer-gallery-viewer bg-attachment d-block" style="background-image: url(http://397152-1726902-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2021/03/footer-gallery-v2-5-1.jpg)"></a>
                </div><div class="single-footer-gallery">
                    <a href="http://397152-1726902-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2021/03/footer-gallery-v2-6-thum.jpg" class="footer-gallery-viewer bg-attachment d-block" style="background-image: url(http://397152-1726902-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2021/03/footer-gallery-v2-6-thum.jpg)"></a>
                </div><div class="single-footer-gallery">
                    <a href="http://397152-1726902-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2021/03/footer-gallery-v2-7-1.jpg" class="footer-gallery-viewer bg-attachment d-block" style="background-image: url(http://397152-1726902-raikfcquaxqncofqfm.stackpathdns.com/wp-content/uploads/2021/03/footer-gallery-v2-7-1.jpg)"></a>
                </div>			
			
			
			
                

            </div>

            <div class="container">
                <div class="copyright-area-v2 text-center">
                
                     © Copyright 2021 Corleone Forged Designed By <a href="https://designnearme.com/">DesignNearMe.com</a>
                
                      
                </div>
            </div>
        </div>
    </footer>


    <!-- 3d trigger modal -->
    <div class="modal" id="threeD" tabindex="-1" data-easein="bounceIn" role="dialog" aria-labelledby="threeD" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            <div class="modal-body">

                <div style="max-width: 800px; max-height: 800px;">
                    <div class="img-modal-wrap" style="left: 0px; width: 100%; height: 0px; position: relative; padding-bottom: 100%; overflow: hidden;">
                        
                    <iframe src="./../assets/3d-model/neon-green.html"
                        allowfullscreen
                        style="position: absolute; top: 0px; left: 0px; height: 100%; width: 1px; min-width: 100%; *width: 100%;"
                        frameborder="0"
                        scrolling="no">
                    </iframe>
                    </div>
                </div>
                
            </div>
        </div>
        </div>
    </div>



    <!-- Popper.js first, then Bootstrap JS -->
    <script src="./../assets/js/jquery-3.5.1.min.js"></script>
    <script src="./../assets/js/velocity.js"></script>
    <script src="./../assets/js/velocity-ui.js"></script>
    <script src="./../assets/js/popper-min.js"></script>
    <script src="./../assets/js/bootstrap.min.js"></script>
    <script src="./../assets/js/slick.min.js"></script>
    <script src="./../assets/js/magnific-popup.min.js"></script>
    <script src="./../assets/js/html2canvas.min.js"></script>
    <!-- CUSTOM JS -->
    <script src="./../assets/js/app.js"></script>
    <script src="./../assets/js/main.js"></script>



    
</body>

</html>