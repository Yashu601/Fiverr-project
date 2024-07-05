<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
    <meta charset="utf-8">
    
    <?php function page($name){
        echo "<title>".$name."</title>";
    }?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images\frog logo.png">
    <!-- Template CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/commonbc13.css">  

    <style>
        /* Add some basic styling for the dropdown */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #77D6DB;
            min-width: 125px;
            min-height: 125px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }


        
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
     
    <style>
                .column {
                        float: left;
                        width: 25%;
                }

                .row:after {
                    content: "";
                    display: table;
                    clear: both;
                }

                
                    .column{
                        width: 100%;
                    }
                

    </style>
  
  <style>
    .glow-on-hover {
    width: 125px;
    height: auto;
    border: none;
    outline: none;
    color: #000000;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #77D6DB;
    color: #77D6DB;
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #77D6DB;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}


  </style>
  <style>

.make-shirt {
    margin-bottom: 20px; /* Add margin to the bottom of the first section */
}

    .image-div {
    float: left; /* Float the image div to the left */
}

.image-div img {
    width: 300px; /* Set the width of the image */
    height: auto; /* Automatically adjust the height to maintain aspect ratio */
    display: block; /* Make sure the image is displayed as a block element */
}

  </style>

  <style>
    
    .meking-step {
        margin-top: 20px; /* Add padding to the top of the second section */
}
    .img-div {
    float: left; /* Float the image div to the left */
    margin-left: 200px;
}

.img-div img {
    width: 600px; /* Set the width of the image */
    height: 400px; /* Automatically adjust the height to maintain aspect ratio */
    display: block; /* Make sure the image is displayed as a block element */
}

.steps {
    text-align: auto; /* Align the steps to the left */
}

.step {
    margin-bottom: 20px; /* Add margin to create space between steps */
}

  </style>

 
  
</head>
<?php page("Index"); ?>
<body>
        <header class="header-area header-style-1 header-height-2">

        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1 ">
                        <a href="index.php"><img src="assets/images/frog logo.png" alt="logo"></a>
                    </div>
                    <div class="logo logo-width-5">
                        <a href="index.php"><img src="assets/images/GW Title.png" alt="logo"></a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="index.php"><img src="images\frog logo.png" alt="logo"></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav class="navbar">
                                <ul>
                                    <li>
                                        <a href="index.php" class="Logo">
                                            <button class="glow-on-hover" type="button">
                                                <img src="assets/images/NavBar Icons/Home Act.png" class="logo-img inactive" alt="Inactive Logo">
                                            </button>
                                        </a>
                                    </li>
                                        <li class="dropdown">
                                            <a href="Adult.php"class="Logo">
                                                <button class="glow-on-hover" type="button">
                                                    <img src="assets/images/NavBar Icons/Adult-NonAct.png" class="logo-img inactive" alt="Inactive Logo">
                                            </button>
                                        </a>
                                            <div class="dropdown-content">
                                                <a href="Adult-Shirt.php"class="Logo">
                                                    <button class="glow-on-hover" type="button">
                                                        ShortSleeve
                                                </button>
                                            </a>
                                                <br>
                                                <a href="Adult-Long-Sleeve.php"class="Logo">
                                                    <button class="glow-on-hover" type="button">
                                                     LongSleeve   
                                                </button>
                                            </a>
                                                <br>
                                                <a href="Adult-Hoodies.php"class="Logo">
                                                    <button class="glow-on-hover" type="button">
                                                    Hoodies    
                                                </button>
                                            </a>
                                            </div>
                                        </li>
                                        <li class="dropdown">
                                            <a href="WOMEN.php"class="Logo">
                                                <button class="glow-on-hover" type="button">
                                                    <img src="assets/images/NavBar Icons/Women Non.png" class="logo-img inactive" alt="Inactive Logo">
                                            </button>
                                        </a>
                                            <div class="dropdown-content">
                                                <a href="Women-Shirt.php"class="Logo">
                                                    <button class="glow-on-hover" type="button">
                                                        ShortSleeve
                                                </button>
                                            </a>
                                                <br>
                                                <a href="women-Long-Sleeve.php"class="Logo">
                                                    <button class="glow-on-hover" type="button">
                                                      LongSleeve  
                                                </button>
                                            </a>
                                                <br>
                                                <a href="Women-Hoodies.php"class="Logo"> 
                                                    <button class="glow-on-hover" type="button">
                                                    Hoodies
                                            </button>
                                        </a>
                                            </div>
                                        </li>
                                        <li class="dropdown">
                                            <a href="YOUTH.php"class="Logo"> 
                                                <button class="glow-on-hover" type="button">
                                                <img src="assets/images/NavBar Icons/youth NonAct.png" class="logo-img inactive" alt="Inactive Logo">
                                        </button>
                                    </a>
                                            <div class="dropdown-content">
                                                <a href="Youth-Shirt.php"class="Logo">
                                                    <button class="glow-on-hover" type="button">
                                                     ShortSleeve  
                                                </button>
                                            </a>
                                                <br>
                                                <a href="Youth-Long-Sleeve.php"class="Logo">
                                                    <button class="glow-on-hover" type="button">
                                                    LongSleeve
                                            </button>
                                        </a>
                                                <br>
                                                <a href="Youth-Hoodies.php"class="Logo">
                                                    <button class="glow-on-hover" type="button">
                                                     Hoodies   
                                                </button>
                                            </a>
                                            </div>
                                        </li>
                                        <li class="dropdown">
                                            <a href="OUR DESIGNS.php"class="Logo">
                                                <button class="glow-on-hover" type="button">
                                                <img src="assets/images/NavBar Icons/Our Designs Non.png" class="logo-img inactive" alt="Inactive Logo">
                                        </button>
                                    </a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="Create.php"class="Logo">
                                                <button class="glow-on-hover" type="button">
                                                <img src="assets/images/NavBar Icons/Create NonAct.png" class="logo-img inactive" alt="Inactive Logo">
                                        </button>
                                    </a>
                                        </li>
                                        <li class="dropdown">
                                        <a href="TEMPLATES.php"class="Logo">
                                            <button class="glow-on-hover" type="button">
                                            <img src="assets/images/NavBar Icons/Templates Non.png" class="logo-img inactive" alt="Inactive Logo">
                                    </button>
                                </a>
                                        <div class="dropdown-content">
                                            <a href="../graphix_wizard/Template/search/popularb31a.php">  <button class="glow-on-hover" type="button">  
                                             <img src="Assets/templates/cat/popular.png" alt="Cinque Terre" width="300" height="200">
                                             <div class="desc">Popular</div>
                                            </button>
                                        </a>
                                            
                                        <a href="../graphix_wizard/Template/category/sports.php"> <button class="glow-on-hover" type="button">   
                                             <img src="Assets/templates/cat/sports.png" alt="Cinque Terre" width="300" height="200">
                                             <div class="desc">Sports</div>
                                            </button>
                                        </a>
 
                                        <a href="../graphix_wizard/Template/category/event.php">  <button class="glow-on-hover" type="button">   
                                             <img src="Assets/templates/cat/events.png" alt="Cinque Terre" width="300" height="200">
                                             <div class="desc">Events</div>
                                           
                                            </button> </a>
 
                                            <a href="../graphix_wizard/Template/category/greek.php">  <button class="glow-on-hover" type="button">  
                                             <img src="Assets/templates/cat/greek.png" alt="Cinque Terre" width="300" height="200">
                                             <div class="desc">Greek</div>
                                            
                                            </button></a>
 
                                            <a href="../graphix_wizard/Template/category/school.php"> <button class="glow-on-hover" type="button">  
                                             <img src="Assets/templates/cat/school.png" alt="Cinque Terre" width="300" height="200">
                                             <div class="desc">School</div>
                                            
                                            </button></a>
 
                                            <a href="../graphix_wizard/Template/category/holidays.php"> <button class="glow-on-hover" type="button">   
                                             <img src="Assets/templates/cat/holidays.png" alt="Cinque Terre" width="300" height="200">
                                             <div class="desc">Holidays</div>
                                            
                                            </button></a>
 
                                            <a href="../graphix_wizard/Template/category/occupations.php">  <button class="glow-on-hover" type="button">  
                                             <img src="Assets/templates/cat/occupations.png" alt="Cinque Terre" width="300" height="200">
                                             <div class="desc">Occupations</div>
                                           
                                            </button> </a>
 
                                            <a href="../graphix_wizard/Template/category/religion.php"> <button class="glow-on-hover" type="button">   
                                             <img src="Assets/templates/cat/religion.png" alt="Cinque Terre" width="300" height="200">
                                             <div class="desc">Religion</div>
                                            
                                            </button></a>
 
                                            <a href="../graphix_wizard/Template/category/vacation.php"> <button class="glow-on-hover" type="button">   
                                             <img src="Assets/templates/cat/vacation.png" alt="Cinque Terre" width="300" height="200">
                                             <div class="desc">Vacation</div>
                                            
                                            </button></a>
 
                                            <a href="../graphix_wizard/Template/search/funny3f7b.php"> <button class="glow-on-hover" type="button">  
                                             <img src="Assets/templates/cat/funny.png" alt="Cinque Terre" width="300" height="200">
                                             <div class="desc">Funny</div>
                                            
                                            </button></a>
 
                                            <a href="../graphix_wizard/Template/search/geek81ea.php">  <button class="glow-on-hover" type="button">  
                                             <img src="Assets/templates/cat/geek.png" alt="Cinque Terre" width="300" height="200">
                                             <div class="desc">Geek</div>
                                           
                                            </button> </a>
                                         </div>
                                    </li>
                                    <li class="dropdown">
                                        <a href="HELP.php"class="Logo">
                                            <button class="glow-on-hover" type="button">
                                            <img src="assets/images/NavBar Icons/Help Non.png" class="logo-img inactive" alt="Inactive Logo">
                                    </button>
                                </a>
                                        <div class="dropdown-content">
                                            <a href="FAQS.php"class="Logo">
                                                <button class="glow-on-hover" type="button">
                                                FAQS
                                        </button>
                                    </a>
                                            <br>
                                            <a href="SHIPPING.php"class="Logo">
                                                <button class="glow-on-hover" type="button">
                                                SHIPPING
                                        </button>
                                    </a>
                                            <br>
                                            <a href="RETURNS.php"class="Logo">
                                                <button class="glow-on-hover" type="button">
                                                RETURNS
                                        </button>
                                    </a>
                                            <br>
                                            <a href="CONTACT.php"class="Logo">
                                                <button class="glow-on-hover" type="button">
                                                CONTACT US
                                        </button>
                                    </a>
                                        </div>
                                    </li>                                </ul>
                            </nav>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
             
    </header>

    

    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="index.php"><img src="images\frog logo.png" alt="logo"></a>
                </div>
                
            </div>
           
        </div>
    </div>

    <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.php" rel="nofollow">Home</a>
                    <span></span> Home
                </div>
            </div>
        </div>
   
        <main id="content" class="main wrapper">

            <section class="home-slider position-relative mb-30">
                <div class="container">
                    <div class="home-slide-cover bg-grey-10 mt-30">
                        <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
                            <div class="single-hero-slider single-animation-wrap">
                                <div class="container">
                                    <div class="row align-items-center slider-animated-1">
                                        <div class="col-lg-5 col-md-6">
                                            <div class="hero-slider-content-2">
                                                <h4 class="animated">Grafix Wizard Offer</h4>
                                                <h2 class="animated fw-900">Make your Own Shirt</h>
                                                <h2 class="animated fw-900 text-brand">On our Products</h2>
                                                <p class="animated">The simple and easy way to make your own shirt. Just pick a color and add your design. That's it!</p>
                                                <a class="animated btn btn-brush btn-brush-3" href="Create.php" tabindex="0"> DESIGN STUDIO </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-6">
                                            <div class="single-slider-img single-slider-img-1">
                                                <img class="animated" src="assets/images/Home_pg_foto.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-hero-slider single-animation-wrap">
                                <div class="container">
                                    <div class="row align-items-center slider-animated-1">
                                        <div class="col-lg-5 col-md-6">
                                            <div class="hero-slider-content-2">
                                                <h4 class="animated">Just Follow</h4>
                                                <h2 class="animated fw-900">Few Simple Steps</h2>
                                                <h2 class="animated fw-900 text-brand">And Get your Design Ready</h2>
                                                <p class="animated">So What you Waiting For!</p>
                                                <a class="animated btn btn-brush btn-brush-1" href="Create.php" tabindex="0"> Go For It </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-6">
                                            <div class="single-slider-img single-slider-img-1">
                                                <img class="animated" src="assets/images/H-1-1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-arrow hero-slider-1-arrow"></div>
                    </div>
                </div>
            </section>
		
            <!-- <section class="make shirt">
                <div class="container make shirt">
                    <div class="image-div">
                        <img src="images/frog logo.png" alt="frog image">
                    </div>
                    <center>
                        <h3 class="section-title mb-20">Make Your Own Shirt</h3>
                        <h4 class="section-title mb-20"><span>The simple and easy way to make<br> your own shirt. Just pick a color<br> and add your design. That's it!</span></h4>
                    </center>
                </div>            </section>
            
            <section class="making-steps">
                <div class="img-div">
                    <img src="images/shirt.png" alt="Your Image">
                </div>
                <center>
                    <div class="steps">
                        <div class="step">
                            <h3 class="section-title mb-20">Step 1:</h3>
                            <h4 class="section-title mb-20"><span>Choose one of 3<br> colors of apparel.</span></h4>
                        </div>
                        <div class="step">
                            <h3 class="section-title mb-20">Step 2:</h3>
                            <h4 class="section-title mb-20"><span>Choose size, color<br>and quantity.</span></h4>
                        </div>
                        <div class="step">
                            <h3 class="section-title mb-20">Step 3:</h4>
                            <h4 class="section-title mb-20"><span>Attach your picture.</span></h4>
                        </div>
                    </div>
                </center>            </section> -->

        <section class="Choose">
            <div class="container Choose by style">
                <center>
                    <h3 class="section-title mb-20"><span>~</span> CHOOSE BY STYLE<span>~</span></h3>
                </center>
                
                
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="images\gildan group pick.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="images\gildan man kid.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 d-md-none d-lg-flex">
                        <div class="banner-img wow fadeIn animated  mb-sm-0">
                            <img src="images\gildan restaraunt.jpg" alt="">
                        </div>
                    </div>
                    <div class="row" >
                        <center>
                            <div class="column" style="width: 25%;"><h5 class="section-title mb-20"><span>T-Shirt</span></h5></div>
                            <div class="column" style="width: 22%;"><h5 class="section-title mb-20"><span>Long Sleeve</span></h5></div>
                            <div class="column" style="width: 22%;"><h5 class="section-title mb-20"><span>Sweats</span></h5></div>
                            <div class="column" style="width: 22%;"><h5 class="section-title mb-20"><span>Thanks</span></h5></div>
                        </center>
                        </div>
                    
                        
                </div>
            </div>
        </section>



        
      
        <section class="popular-categories section-padding mt-15">
            <div class="container wow fadeIn animated">
                <center>
                <h3 class="section-title mb-20">Popular Categories</h3>
            </center>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="Adult-Long-Sleeve.php"><img src="images\Untitled-2-1.png" alt=""><img class="hover-img" src="#temp beck if needed" alt=""></a>
                            </figure>
                            <h5><a href="Adult-Long-Sleeve.php">Man</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="Adult-Shirt.php"> <img src="images\Untitled-3-1.png" alt=""></a>
                            </figure>
                            <h5><a href="Adult-Shirt.php">Men</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="Women-Shirt.php"><img src="images\Untitled-4-1.png" alt=""></a>
                            </figure>
                            <h5><a href="Women-Shirt.php">Woman</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="Women-Shirt.php"><img src="images\Untitled-5-1.png" alt=""></a>
                            </figure>
                            <h5><a href="Women-Shirt.php">Women</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="Youth-Shirt.php"><img src="images\Untitled-6-1.png" alt=""></a>
                            </figure>
                            <h5><a href="Youth-Shirt.php">Youth</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="Youth-Hoodies.php"><img src="images\Untitled-7-1.png" alt=""></a>
                            </figure>
                            <h5><a href="Youth-Hoodies.php">Youth</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="Adult-Hoodies.php"><img src="images\Untitled-8-1.png" alt=""></a>
                            </figure>
                            <h5><a href="Adult-Hoodies.php">Adult</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="Adult-Long-Sleeve.php"><img src="images\Untitled-9-1.png" alt=""></a>
                            </figure>
                            <h5><a href="Adult-Long-Sleeve.php">Adult</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <section class="pt-25 pb-15">
            
            <div class="container wow fadeIn animated">
               <center>
                <h3 class="section-title mb-20"> Use A Template</h3>
                <h4 class="section-title mb-20"><span> Be inspired by one one ready made templates.<br>Put your details and colors to make it your own.</span></h4>
                <h5 class="section-title mb-20"> </h5>
            </center>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows"></div>
                    <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="TEMPLATES.php">
                                        <img class="default-img" src="images\Sports Astronaut Basketball For our designs section.png" alt="">
                                        <img class="hover-img" src="#temp beck if needed" alt="">
                                    </a>
                                </div>
                                
                                
                            </div>
                            <div class="product-content-wrap">
                            </div>
                        </div>
                        <!--End product-cart-wrap-1-->
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="TEMPLATES.php">
                                        <img class="default-img" src="images\Untitled-1.png" alt="">
                                        <img class="hover-img" src="#temp beck if needed" alt="">
                                    </a>
                                </div>
                              
                              
                            </div>
                            <div class="product-content-wrap">
                                
                            </div>
                        </div>
                        <!--End product-cart-wrap-2-->
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="TEMPLATES.php">
                                        <img class="default-img" src="images\Untitled-2.png" alt="">
                                        <img class="hover-img" src="#temp beck if needed" alt="">
                                    </a>
                                </div>
                               
                            </div>
                            <div class="product-content-wrap">
                               
                            </div>
                        </div>
                        <!--End product-cart-wrap-3-->
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="TEMPLATES.php">
                                        <img class="default-img" src="images\Sports Astronaut Basketball For our designs section.png" alt="">
                                        <img class="hover-img" src="#temp beck if needed" alt="">
                                    </a>
                                </div>
                                
                            </div>
                            <div class="product-content-wrap">
                                
                            </div>
                        </div>
                        <!--End product-cart-wrap-4-->
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="TEMPLATES.php">
                                        <img class="default-img" src="images\Untitled-1.png" alt="">
                                        <img class="hover-img" src="#temp beck if needed" alt="">
                                    </a>
                                </div>
                              
                            </div>
                            <div class="product-content-wrap">
                                
                            </div>
                        </div>
                        <!--End product-cart-wrap-5-->
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="TEMPLATES.php">
                                        <img class="default-img" src="images\Untitled-2.png" alt="">
                                        <img class="hover-img" src="#temp beck if needed" alt="">
                                    </a>
                                </div>
                              
                            </div>
                            <div class="product-content-wrap">
                                
                            </div>
                        </div>
                        <!--End product-cart-wrap-6-->
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="TEMPLATES.php">
                                        <img class="default-img" src="images\Sports Astronaut Basketball For our designs section.png" alt="">
                                        <img class="hover-img" src="#temp beck if needed" alt="">
                                    </a>
                                </div>
                              
                            </div>
                            <div class="product-content-wrap">
                                
                            </div>
                        </div>
                        <!--End product-cart-wrap-7-->
                    </div>
                </div>
            </div>
        </section>
            
                </main>
        
    <footer class="up-footer">
        <!-- <div class="wrapper"></div> -->
        
        <section class="section-padding footer-mid">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="widget-about font-md mb-md-5 mb-lg-0">
                            <div class="logo logo-width-1 wow fadeIn animated">
                                <a href="index.php"><img src="images\frog logo.png" alt="logo"></a>
                            </div>
                            <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                            <p class="wow fadeIn animated">
                            </p>
                            <p class="wow fadeIn animated">
                            </p>
                            <p class="wow fadeIn animated">
                            </p>
                            <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Follow Us</h5>
                            <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                                <!-- facebook page link here -->
                                <a href="#"><img src="images/icon-facebook.svg" alt="#"></a>
                                <!-- x.com link here -->
                                <a href="#"><img src="images/_x_logo_twitter_new_brand_icon.svg" alt="#"></a>
                                 <!-- instagram page link here -->
                                <a href="#"><img src="images/icon-instagram.svg" alt="#"></a>
                                <!-- pinterest link here -->
                                <a href="#"><img src="images/icon-pinterest.svg" alt="#"></a>
                                <!-- Youtube link here -->
                                <a href="#"><img src="images/icon-youtube.svg" alt="#"></a>
                                <div>Copyright &copy; 2023 Grafix Wizard, Inc.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        
                        <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="Adult.php">ADULT</a></li>
                            <li><a href="WOMEN.php">WOMEN</a></li>
                            <li><a href="YOUTH.php">YOUTH</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-3">
                        <ul class="footer-list wow fadeIn animated">
                            <li><a href="OUR DESIGNS.php">OUR DESIGNS</a></li>
                            <li><a href="Create.php">DESIGN STUDIO</a></li>
                            <li><a href="TEMPLATES.php">TEMPLATES</a></li>
                            
                        </ul>
                    </div>
    
                    <div class="col-lg-2  col-md-3">
                        <ul class="footer-list wow fadeIn animated">
                            <li><a class="active" href="CONTACT.php">CONTACT</a></li>
                            <li><a href="SHIPPING.php">SHIPPING</a></li>
                            <li><a href="FAQS.php">FAQS</a></li>
                            <li><a href="TERMS OF SALE.php">TERMS OF SALE</a></li>
                            
                        </ul>
                    </div>
                    
                </div>
            </div>
        </section>
        <div class="container pb-20 wow fadeIn animated">
            <div class="row">
                <div class="col-12 mb-20">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-lg-6">
                    <p class="float-md-left font-sm text-muted mb-0"> </p>
                </div>
                <div class="col-lg-6">
                    <p class="text-lg-end text-start font-sm text-muted mb-0">
                    </p>
                </div>
            </div>
        </div>
            
        
                
    </footer>
    
    <script src="../bundles/js/catalog03a8?v=IFxqumSAgKCeSFxQfEqFJjUw0N_0udILTrGX-9rXlwU1"></script>


    
    
    <!-- Preloader Start -->
    
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <h5 class="mb-5">Now Loading</h5>
                    <div class="loader">
                        <div class="bar bar1"></div>
                        <div class="bar bar2"></div>
                        <div class="bar bar3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor JS-->
    <script src="js/modernizr-3.6.0.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery-migrate-3.3.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/jquery.syotimer.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/perfect-scrollbar.js"></script>
    <script src="js/magnific-popup.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/waypoints.js"></script>
    <script src="js/counterup.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/images-loaded.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/scrollup.js"></script>
    <script src="js/jquery.vticker-min.js"></script>
    <script src="js/jquery.theia.sticky.js"></script>
    <script src="js/jquery.elevatezoom.js"></script>
    <!-- Template  JS -->
    <script src="js/main.js"></script>
    <script src="js/shop.js"></script>
    
    
   
    
    
    
    
    
    </body>
    
    </html>