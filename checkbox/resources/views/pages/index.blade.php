<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Babette">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>Cooking</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Rubik:400,500,700%7cShadows+Into+Light&display=swap">
  <link rel="stylesheet" href="assets/css/libraries.css" />
  <!-- <link rel="stylesheet" href="assets/css/animate.css" /> -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="costumise.css">
</head>

<body>
  <div class="wrapper">
    <!-- =========================
        Header
    =========================== -->
    <header id="header" class="header header-transparent header-layout1">
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html">
            <img src="assets/images/logo/logo-light.png" class="logo-light" alt="logo">
            <img src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <ul class="navbar-nav ml-auto">
                <li class="nav__item with-dropdown">
                  <li class="nav__item"><a href="index.html" class="nav__item-link">Home </a></li>
                </li><!-- /.nav-item -->
                <li class="nav__item with-dropdown">
                  <li class="nav__item"><a href="menu-gallery.html" class="nav__item-link">Les ingredients </a></li>
                </li><!-- /.nav-item -->
                {{-- <li class="nav__item with-dropdown">
                    <li class="nav__item"><a href="gallery-grid.html" class="nav__item-link">Gallery</a></li>
                </li><!-- /.nav-item --> --}}
                
                <!-- /.nav-item -->
              </ul><!-- /.navbar-nav -->
                
              
                
                    
                  
              
              
              <!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
          </div><!-- /.navbar-collapse -->
          
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

    <!-- ============================
        Slider
    ============================== -->
    <section id="slider" class="slider slider-layout1">
      <div class="carousel owl-carousel carousel-arrows" data-slide="1" data-slide-md="1" data-slide-sm="1"
        data-autoplay="true" data-nav="true" data-dots="false" data-space="0" data-loop="true" data-speed="3000"
        data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">
        <div class="slide-item align-v-h text-center bg-overlay">
          <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="slide__content">
                  <span class="slide__subtitle">We Offer You</span>
                  <h2 class="slide__title">Fresh Ingredient, Tasty Meals & True Flavour</h2>
                  <p class="slide__desc">We have awesome recipes !</p>
                  <a href="reservation.html"  class="btn btn__white btn__bordered my-1">Book A Table</a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h text-center bg-overlay bg-overlay-2">
          <div class="bg-img"><img src="assets/images/backgrounds/8.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="slide__content">
                  <span class="slide__subtitle">Fresh Ingredient, Tasty Meals</span>
                  <h2 class="slide__title">Awesome Recipes </h2>
                  <p class="slide__desc">We have awesome recipes !</p>
                  <a href="reservation.html" class="btn btn__primary mx-2 my-1">Discover Our Menu</a>
                  <a href="menu-classic.html" class="btn btn__white mx-2 my-1">Book A Table</a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
      </div><!-- /.carousel -->
      <svg class="slider__divider-shape" xmlns="http://www.w3.org/2000/svg" width="22" height="61" viewBox="0 0 22 61">
        <path
          d="M799,769h2v61h-2V769Zm8,24.8a0.969,0.969,0,0,0-1.911,0,3.012,3.012,0,0,1-.883,2.16,4.486,4.486,0,0,0,0,6.136,3.083,3.083,0,0,1,0,4.32,4.486,4.486,0,0,0,0,6.136,3.088,3.088,0,0,1,0,4.325,4.5,4.5,0,0,0,0,6.142,3.014,3.014,0,0,1,.884,2.163,0.969,0.969,0,0,0,1.911,0,4.414,4.414,0,0,0-1.213-3.07,3.091,3.091,0,0,1,0-4.328,4.491,4.491,0,0,0,0-6.14,3.08,3.08,0,0,1,0-4.319,4.488,4.488,0,0,0,0-6.137,3.081,3.081,0,0,1,0-4.32A4.407,4.407,0,0,0,807,793.8Zm0-20a0.969,0.969,0,0,0-1.911,0,3.014,3.014,0,0,1-.883,2.16,4.486,4.486,0,0,0,0,6.136,3.083,3.083,0,0,1,0,4.32,4.488,4.488,0,0,0,0,6.137,3.087,3.087,0,0,1,0,4.324,4.5,4.5,0,0,0,0,6.142,3.014,3.014,0,0,1,.884,2.163,0.969,0.969,0,0,0,1.911,0,4.414,4.414,0,0,0-1.213-3.07,3.089,3.089,0,0,1,0-4.327,4.491,4.491,0,0,0,0-6.14,3.081,3.081,0,0,1,0-4.32,4.488,4.488,0,0,0,0-6.137,3.081,3.081,0,0,1,0-4.32A4.409,4.409,0,0,0,807,773.8ZM793,793.8a0.969,0.969,0,0,1,1.911,0,3.012,3.012,0,0,0,.883,2.16,4.486,4.486,0,0,1,0,6.136,3.083,3.083,0,0,0,0,4.32,4.486,4.486,0,0,1,0,6.136,3.088,3.088,0,0,0,0,4.325,4.5,4.5,0,0,1,0,6.142,3.014,3.014,0,0,0-.884,2.163,0.969,0.969,0,0,1-1.911,0,4.414,4.414,0,0,1,1.213-3.07,3.091,3.091,0,0,0,0-4.328,4.491,4.491,0,0,1,0-6.14,3.08,3.08,0,0,0,0-4.319,4.488,4.488,0,0,1,0-6.137,3.081,3.081,0,0,0,0-4.32A4.407,4.407,0,0,1,793,793.8Zm0-20a0.969,0.969,0,0,1,1.911,0,3.014,3.014,0,0,0,.883,2.16,4.486,4.486,0,0,1,0,6.136,3.083,3.083,0,0,0,0,4.32,4.488,4.488,0,0,1,0,6.137,3.087,3.087,0,0,0,0,4.324,4.5,4.5,0,0,1,0,6.142,3.014,3.014,0,0,0-.884,2.163,0.969,0.969,0,0,1-1.911,0,4.414,4.414,0,0,1,1.213-3.07,3.089,3.089,0,0,0,0-4.327,4.491,4.491,0,0,1,0-6.14,3.081,3.081,0,0,0,0-4.32,4.488,4.488,0,0,1,0-6.137,3.081,3.081,0,0,0,0-4.32A4.409,4.409,0,0,1,793,773.8Zm-4,5.2h2v41h-2V779Zm20,0h2v41h-2V779Z"
          transform="translate(-789 -769)"></path>
      </svg>
    </section><!-- /.slider -->

    <section class="pt-0">
      <div class="bg-img"><img src="assets/images/backgrounds/pattern/2.png" alt="background"></div>
      <!-- =====================
       Banner layout1
       ======================== -->
      <section id="bannerLayout1" class="banner banner-layout1 pb-70">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="banner__content">
                <div class="banner__content-text" data-aos="fade-right">
                  <div class="banner__content-text-inner">
                    <div class="heading">
                      <span class="heading__subtitle">Hello Dear</span>
                      <h2 class="heading__title">Welcome To Cooking</h2>
                      <div class="heading__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                          <path
                            d="M515,925a10,10,0,1,0,10,10A10.011,10.011,0,0,0,515,925Zm7,13.865a2.568,2.568,0,0,1-.651-0.549,3.235,3.235,0,0,0-5.209,0,1.449,1.449,0,0,1-1.146.683,1.419,1.419,0,0,1-1.2-.695,3.2,3.2,0,0,0-2.548-1.3,3.345,3.345,0,0,0-2.605,1.316,2.625,2.625,0,0,1-.64.544,7.953,7.953,0,0,1-.928-2.86h15.862A7.926,7.926,0,0,1,522,938.863ZM507.069,934a7.948,7.948,0,0,1,.928-2.859,2.617,2.617,0,0,1,.64.543A3.345,3.345,0,0,0,511.242,933a3.2,3.2,0,0,0,2.548-1.3,1.423,1.423,0,0,1,1.2-.7,1.452,1.452,0,0,1,1.146.685,3.237,3.237,0,0,0,5.209,0,2.575,2.575,0,0,1,.651-0.55,7.939,7.939,0,0,1,.932,2.865H507.069ZM515,927a7.975,7.975,0,0,1,5.8,2.509,5.325,5.325,0,0,0-.914.806,1.3,1.3,0,0,1-2.292,0,3.287,3.287,0,0,0-5.289.035,1.286,1.286,0,0,1-1.066.648,1.452,1.452,0,0,1-1.145-.683,5.348,5.348,0,0,0-.9-0.8A7.972,7.972,0,0,1,515,927Zm0,16a7.97,7.97,0,0,1-5.808-2.516,5.3,5.3,0,0,0,.9-0.8,1.452,1.452,0,0,1,1.145-.685,1.288,1.288,0,0,1,1.066.649,3.288,3.288,0,0,0,5.289.036,1.3,1.3,0,0,1,2.292,0,5.241,5.241,0,0,0,.914.806A7.972,7.972,0,0,1,515,943Z"
                            transform="translate(-505 -925)"></path>
                        </svg>
                      </div>
                      <p class="heading__desc">Cooking is a web application that acts as an ingredient to recipe reverse search engine. 
                        It allows you to search for common recipes based on a list of Ingredients that you already have at home...</p>
                      {{-- <img src="assets/images/about/signature.png" alt="signature"> --}}
                    </div><!-- /.heading -->
                  </div><!-- /.banner__content-text-inner -->
                </div><!-- /.banner__content-text -->
                <div class="banner__content-img" data-aos="fade-left">
                  <img src="assets/images/banners/1.png" alt="banner">
                </div><!-- /.banner__content-img -->
              </div><!-- /.banner__content -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Banner layout1 -->
      <!-- =====================
       Clients
       ======================== -->
      <section id="clients" class="clients text-center py-0">
        <div class="container">
          <div class="row">
            
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.clients -->
    </section>

    <!-- ========================
        Menu layout layout 5
    =========================== -->
    <section id="menulayout5" class="menu-layout5 pb-60 bg-overlay bg-overlay-2 bg-parallax">
      <div class="bg-img"><img src="assets/images/backgrounds/9.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading heading-white text-center mb-50">
              <span class="heading__subtitle">Our Favourites recipe</span>
              {{-- <h2 class="heading__title">Discover Our Menu</h2> --}}
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="menu-wrapper">
              <nav class="nav nav-tabs justify-content-center">
                <a class="nav__link active" data-toggle="tab" href="#tab1">Dessert</a>
                <a class="nav__link" data-toggle="tab" href="#tab2">Dinner</a>
                <a class="nav__link" data-toggle="tab" href="#tab3">Dessert</a>
                <a class="nav__link" data-toggle="tab" href="#tab4">Drinks</a>
              </nav>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="tab1">
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 menu-wrapper-inner">
                      <div class="menu-item tab-1">
                        <h4 class="menu__item-title">Orange Cake Recipe</h4>
                        <span class="pricing__tag">New</span>
                        <span class="menu__item-price" ></span>
                        <img src="assets/images/recette/OrangeCakeRecipe.png" alt="">
                      </div><!-- /.menu-item -->
                      {{-- <div class="menu-item">
                        <h4 class="menu__item-title">Salmon Sandwich</h4>
                        <span class="menu__item-price">$15.95</span>
                        <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
                      </div><!-- /.menu-item --> --}}
                      {{-- <div class="menu-item">
                        <h4 class="menu__item-title">Pan of Fried Eggs</h4>
                        <span class="pricing__tag">Recommended</span>
                        <span class="menu__item-price">$13.95</span>
                        <p class="menu__item-desc">Eggs, bacon and cherry-tomatoes with bread.</p>
                      </div><!-- /.menu-item --> --}}
                      {{-- <div class="menu-item">
                        <h4 class="menu__item-title">Breakfast Set</h4>
                        <span class="menu__item-price">$20.95</span>
                        <p class="menu__item-desc">Croissants with strawberries, mascarpone, honey.</p>
                      </div><!-- /.menu-item --> --}}
                      {{-- <div class="menu-item">
                        <h4 class="menu__item-title">Healthy Breakfast</h4>
                        <span class="menu__item-price">$18.95</span>
                        <p class="menu__item-desc">Oat granola with fresh blueberries, almond, yogurt.</p>
                      </div><!-- /.menu-item --> --}}
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-6 menu-wrapper-inner">
                      <div class="menu-item">
                        <h4 class="menu__item-title">Ingredients:</h4>
                        {{-- <span class="menu__item-price">$33.95</span> --}}
                        <p class="menu__item-desc">– 200g dark brown sugar
                          – 4 eggs, separated
                          – Zest of 2 oranges
                          – Juice of 1 orange
                          – 200g ground almonds
                          
                          For the syrup glaze
                          – 130g caster sugar
                          – Juice of 2 oranges
                          – 1 cinnamon stick
                          – 1 teaspoon orange essence or Cointreau</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Methode</h4>
                        {{-- <span class="menu__item-price">$41.95</span> --}}
                        <p class="menu__item-desc">1. Preheat the oven to 180°C/gas mark 4/350°F. Line a 22cm or 23cm round cake tin with parchment paper.
                          2. Beat the brown sugar, egg yolks, orange zest and juice in a large mixing bowl until fluffy and yellow. Gradually beat in the ground almonds.
                          3. In a separate spotlessly clean, dry bowl, beat the egg whites until soft peaks form. Gently fold the egg whites into the cake batter with a metal spoon.
                          4. Spoon the batter into the lined cake tin. Bake for 40 minutes, until a toothpick inserted into the centre comes out clean and the cake is golden brown. Leave to rest on a wire rack in the tin until it’s cool.
                          5. To make the glaze, simmer the caster sugar, orange juice and cinnamon stick in a saucepan for 5 minutes, until the sugar has dissolved.
                          6. Remove from the heat and allow to cool, then add the orange essence or Cointreau. Pour the syrup over the lukewarm cake in its tin. Serve with vanilla ice cream or natural yoghurt.</p>
                      </div><!-- /.menu-item -->
                      {{-- <div class="menu-item">
                        <h4 class="menu__item-title">Chicken Crispy</h4>
                        <span class="menu__item-price">$33.95</span>
                        <p class="menu__item-desc">Smoked quail, crispy egg, spelt, girolles, parsley.</p>
                      </div><!-- /.menu-item --> --}}
                      {{-- <div class="menu-item">
                        <h4 class="menu__item-title">Grilled Fillet</h4>
                        <span class="menu__item-price">$26.95</span>
                        <p class="menu__item-desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.</p>
                      </div><!-- /.menu-item --> --}}
                      {{-- <div class="menu-item">
                        <h4 class="menu__item-title">Salmon Steak</h4>
                        <span class="menu__item-price">$27.95</span>
                        <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
                      </div><!-- /.menu-item --> --}}
                    </div><!-- /.col-lg-6 -->
                  </div><!-- /.row  -->
                </div><!-- /.tab  -->
                <div class="tab-pane fade" id="tab2">
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 menu-wrapper-inner">
                      <div class="menu-item">
                        <h4 class="menu__item-title">Pan of Fried Eggs</h4>
                        <span class="pricing__tag">Recommended</span>
                        <span class="menu__item-price">$13.95</span>
                        <p class="menu__item-desc">Eggs, bacon and cherry-tomatoes with bread.</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Smoked Meat Sandwich</h4>
                        <span class="menu__item-price">$12.95</span>
                        <p class="menu__item-desc">Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Salmon Sandwich</h4>
                        <span class="menu__item-price">$15.95</span>
                        <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Breakfast Set</h4>
                        <span class="menu__item-price">$20.95</span>
                        <p class="menu__item-desc">Croissants with strawberries, mascarpone, honey.</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Healthy Breakfast</h4>
                        <span class="menu__item-price">$18.95</span>
                        <p class="menu__item-desc">Oat granola with fresh blueberries, almond, yogurt.</p>
                      </div><!-- /.menu-item -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-6 menu-wrapper-inner">
                      <div class="menu-item">
                        <h4 class="menu__item-title">Chicken Crispy</h4>
                        <span class="menu__item-price">$33.95</span>
                        <p class="menu__item-desc">Smoked quail, crispy egg, spelt, girolles, parsley.</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Chicken Breast</h4>
                        <span class="menu__item-price">$33.95</span>
                        <p class="menu__item-desc">Paupiette of chicken, blue cheese, rosemary beans.</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Salmon Steak</h4>
                        <span class="menu__item-price">$41.95</span>
                        <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Salmon Steak</h4>
                        <span class="menu__item-price">$27.95</span>
                        <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Grilled Fillet</h4>
                        <span class="menu__item-price">$26.95</span>
                        <p class="menu__item-desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.</p>
                      </div><!-- /.menu-item -->
                    </div><!-- /.col-lg-6 -->
                  </div><!-- /.row  -->
                </div><!-- /.tab  -->
                <div class="tab-pane fade" id="tab3">
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 menu-wrapper-inner">
                      <div class="menu-item">
                        <h4 class="menu__item-title">Chicken Breast</h4>
                        <span class="menu__item-price">$33.95</span>
                        <p class="menu__item-desc">Paupiette of chicken, blue cheese, rosemary beans.</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Salmon Steak</h4>
                        <span class="menu__item-price">$41.95</span>
                        <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Chicken Crispy</h4>
                        <span class="menu__item-price">$33.95</span>
                        <p class="menu__item-desc">Smoked quail, crispy egg, spelt, girolles, parsley.</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Grilled Fillet</h4>
                        <span class="menu__item-price">$26.95</span>
                        <p class="menu__item-desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Salmon Steak</h4>
                        <span class="menu__item-price">$27.95</span>
                        <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
                      </div><!-- /.menu-item -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-6 menu-wrapper-inner">
                      <div class="menu-item">
                        <h4 class="menu__item-title">Pan of Fried Eggs</h4>
                        <span class="pricing__tag">Recommended</span>
                        <span class="menu__item-price">$13.95</span>
                        <p class="menu__item-desc">Eggs, bacon and cherry-tomatoes with bread.</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Breakfast Set</h4>
                        <span class="menu__item-price">$20.95</span>
                        <p class="menu__item-desc">Croissants with strawberries, mascarpone, honey.</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Smoked Meat Sandwich</h4>
                        <span class="menu__item-price">$12.95</span>
                        <p class="menu__item-desc">Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Salmon Sandwich</h4>
                        <span class="menu__item-price">$15.95</span>
                        <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Healthy Breakfast</h4>
                        <span class="menu__item-price">$18.95</span>
                        <p class="menu__item-desc">Oat granola with fresh blueberries, almond, yogurt.</p>
                      </div><!-- /.menu-item -->
                    </div><!-- /.col-lg-6 -->
                  </div><!-- /.row  -->
                </div><!-- /.tab  -->
                <div class="tab-pane fade" id="tab4">
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 menu-wrapper-inner">
                      <div class="menu-item">
                        <h4 class="menu__item-title">Breakfast Set</h4>
                        <span class="menu__item-price">$20.95</span>
                        <p class="menu__item-desc">Croissants with strawberries, mascarpone, honey.</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Smoked Meat Sandwich</h4>
                        <span class="menu__item-price">$12.95</span>
                        <p class="menu__item-desc">Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Salmon Sandwich</h4>
                        <span class="menu__item-price">$15.95</span>
                        <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Pan of Fried Eggs</h4>
                        <span class="pricing__tag">Recommended</span>
                        <span class="menu__item-price">$13.95</span>
                        <p class="menu__item-desc">Eggs, bacon and cherry-tomatoes with bread.</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Healthy Breakfast</h4>
                        <span class="menu__item-price">$18.95</span>
                        <p class="menu__item-desc">Oat granola with fresh blueberries, almond, yogurt.</p>
                      </div><!-- /.menu-item -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-6 menu-wrapper-inner">
                      <div class="menu-item">
                        <h4 class="menu__item-title">Chicken Crispy</h4>
                        <span class="menu__item-price">$33.95</span>
                        <p class="menu__item-desc">Smoked quail, crispy egg, spelt, girolles, parsley.</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Grilled Fillet</h4>
                        <span class="menu__item-price">$26.95</span>
                        <p class="menu__item-desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Salmon Steak</h4>
                        <span class="menu__item-price">$27.95</span>
                        <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Chicken Breast</h4>
                        <span class="menu__item-price">$33.95</span>
                        <p class="menu__item-desc">Paupiette of chicken, blue cheese, rosemary beans.</p>
                      </div><!-- /.menu-item -->
                      <div class="menu-item">
                        <h4 class="menu__item-title">Salmon Steak</h4>
                        <span class="menu__item-price">$41.95</span>
                        <p class="menu__item-desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
                      </div><!-- /.menu-item -->
                    </div><!-- /.col-lg-6 -->
                  </div><!-- /.row  -->
                </div><!-- /.tab  -->
              </div><!-- /.tab-content  -->
            </div><!-- /.menu-wrapper  -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <a href="menu-classic.html" class="btn-custom">Full Menu</a>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.menu layout 5 -->

    <!-- =====================
       Banner layout2
    ======================== -->
    <section id="bannerLayout2" class="banner banner-layout2 pb-130">
      <div class="bg-img"><img src="assets/images/backgrounds/pattern/1.png" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="banner__content">
              <div class="banner__content-text" data-aos="fade-left">
                <div class="banner__content-text-inner">
                  <div class="heading mb-40">
                    <span class="heading__subtitle">A Warm, Charming Atmosphere</span>
                    <h2 class="heading__title">Private Dining & Events</h2>
                    <div class="heading__icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <path
                          d="M515,925a10,10,0,1,0,10,10A10.011,10.011,0,0,0,515,925Zm7,13.865a2.568,2.568,0,0,1-.651-0.549,3.235,3.235,0,0,0-5.209,0,1.449,1.449,0,0,1-1.146.683,1.419,1.419,0,0,1-1.2-.695,3.2,3.2,0,0,0-2.548-1.3,3.345,3.345,0,0,0-2.605,1.316,2.625,2.625,0,0,1-.64.544,7.953,7.953,0,0,1-.928-2.86h15.862A7.926,7.926,0,0,1,522,938.863ZM507.069,934a7.948,7.948,0,0,1,.928-2.859,2.617,2.617,0,0,1,.64.543A3.345,3.345,0,0,0,511.242,933a3.2,3.2,0,0,0,2.548-1.3,1.423,1.423,0,0,1,1.2-.7,1.452,1.452,0,0,1,1.146.685,3.237,3.237,0,0,0,5.209,0,2.575,2.575,0,0,1,.651-0.55,7.939,7.939,0,0,1,.932,2.865H507.069ZM515,927a7.975,7.975,0,0,1,5.8,2.509,5.325,5.325,0,0,0-.914.806,1.3,1.3,0,0,1-2.292,0,3.287,3.287,0,0,0-5.289.035,1.286,1.286,0,0,1-1.066.648,1.452,1.452,0,0,1-1.145-.683,5.348,5.348,0,0,0-.9-0.8A7.972,7.972,0,0,1,515,927Zm0,16a7.97,7.97,0,0,1-5.808-2.516,5.3,5.3,0,0,0,.9-0.8,1.452,1.452,0,0,1,1.145-.685,1.288,1.288,0,0,1,1.066.649,3.288,3.288,0,0,0,5.289.036,1.3,1.3,0,0,1,2.292,0,5.241,5.241,0,0,0,.914.806A7.972,7.972,0,0,1,515,943Z"
                          transform="translate(-505 -925)"></path>
                      </svg>
                    </div>
                    <p class="heading__desc">Allow us to make your next special event extra special. We cater for all
                      sized functions, ideal for your larger functions or an intimate gathering, our team can curate a
                      menu to suit your taste.</p>
                  </div><!-- /.heading -->
                  <a href="#" class="btn btn__secondary btn__link mx-2 my-1">Explore Events</a>
                  <a href="#" class="btn btn__primary mx-2 my-1">Explore Events</a>
                </div><!-- /.banner__content-text-inner -->
              </div><!-- /.banner__content-text -->
              <div class="banner__content-img" data-aos="fade-right">
                <img src="assets/images/banners/2.png" alt="banner">
              </div><!-- /.banner__content-img -->
            </div><!-- /.banner__content -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout1 -->

    <!-- =========================== 
      portfolio Gallery 
    ============================= -->
    <section id="portfolioGallery" class="portfolio portfolio-gallery portfolio-gallery-no-margin py-0">
      <div class="container-fluid col-padding-0">
        <div class="row">
          <!-- portfolio item #1 -->
          
           
          
          
         
         
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.portfolio Gallery -->

    <!-- ========================= 
      Testimonial Layout 1
    =========================  -->
   
          
        
             

    <!-- ========================
      Reservation
    =========================== -->
    <section id="reservationLayout2" class="reservation-layout2  bg-overlay bg-overlay-2 bg-parallax">
      <div class="bg-img"><img src="assets/images/backgrounds/6.jpg" alt="background"></div>
      <div class="container">
        <div class="reservation__wrapper">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-5">
              <div class="reservation__banner">
                <img class="reservation__banner-img" src="assets/images/backgrounds/pattern/3.png" alt="background">
                <div class="reservation__banner-inner">
                  <span class="reservation__banner-inner-subtitle">Check Availability</span>
                  <h5 class="reservation__banner-inner-title">Opening Times</h5>
                  <ul class="list-unstyled">
                    <li><span>Week days</span><span>09.00 – 24:00</span></li>
                    <li><span>Saturday</span><span>08:00 – 03.00</span></li>
                    <li><span>Saturday</span><span>Day off</span></li>
                  </ul>
                  <div class="reservation__banner-contact">
                    <span class="reservation__banner-contact-label">Call Us Now</span>
                    <a class="reservation__banner-contact-phone" href="tel:0201023456789">0201023456789</a>
                  </div><!-- /.reservation__banner-contact -->
                </div><!-- /.reservation__banner-inner -->
              </div><!-- /.reservation__banner -->
            </div><!-- /.col-lg-5 -->
            <div class="col-sm-12 col-md-12 col-lg-7">
              <form class="reservation__form">
                <div class="row">
                  <div class="col-12">
                    <div class="reservation__form-heading  mb-30">
                      <div class="d-flex justify-content-between">
                        <h5>Make A Reservation</h5>
                        <a href="assets/images/shapes/table.jpg" data-lightbox="lightbox">Tables Arrangement</a>
                      </div>
                      <p class="heading__desc">You can book a table online easily in just a minute. Reservations are for
                        lunch and dinner, check the availability of your table & book it now!</p>
                    </div><!-- /.heading -->
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <select class="form-control">
                        <option value="2">2 people</option>
                        <option value="3">3 people</option>
                        <option value="4">4 people</option>
                        <option value="5">5 people</option>
                        <option value="6">6 people</option>
                        <option value="7">7 people</option>
                      </select>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <select class="form-control">
                        <option value="23">March 23, 2020</option>
                        <option value="24">March 24, 2020</option>
                        <option value="25">March 25, 2020</option>
                        <option value="26">March 26, 2020</option>
                      </select>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <select class="form-control">
                        <option value="8">8:00 PM</option>
                        <option value="9">9:00 PM</option>
                        <option value="10">10:00 PM</option>
                        <option value="11">11:00 PM</option>
                      </select>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Phone Number">
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Add a special request (optional)"></textarea>
                    </div>
                  </div><!-- /.col-lg-12 -->
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <button type="submit" class="btn btn__primary btn__block">Find A Table</button>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
              </form>
            </div><!-- /.col-lg-7 -->
          </div><!-- /.row -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Reservation -->

    <!-- ======================
      Blog Grid
    ========================= -->
    <section id="blogGrid" class="blog blog-grid pb-60">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <span class="heading__subtitle">Don’t Miss</span>
              <h2 class="heading__title">Our News & Events</h2>
              <div class="heading__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                  <path
                    d="M515,925a10,10,0,1,0,10,10A10.011,10.011,0,0,0,515,925Zm7,13.865a2.568,2.568,0,0,1-.651-0.549,3.235,3.235,0,0,0-5.209,0,1.449,1.449,0,0,1-1.146.683,1.419,1.419,0,0,1-1.2-.695,3.2,3.2,0,0,0-2.548-1.3,3.345,3.345,0,0,0-2.605,1.316,2.625,2.625,0,0,1-.64.544,7.953,7.953,0,0,1-.928-2.86h15.862A7.926,7.926,0,0,1,522,938.863ZM507.069,934a7.948,7.948,0,0,1,.928-2.859,2.617,2.617,0,0,1,.64.543A3.345,3.345,0,0,0,511.242,933a3.2,3.2,0,0,0,2.548-1.3,1.423,1.423,0,0,1,1.2-.7,1.452,1.452,0,0,1,1.146.685,3.237,3.237,0,0,0,5.209,0,2.575,2.575,0,0,1,.651-0.55,7.939,7.939,0,0,1,.932,2.865H507.069ZM515,927a7.975,7.975,0,0,1,5.8,2.509,5.325,5.325,0,0,0-.914.806,1.3,1.3,0,0,1-2.292,0,3.287,3.287,0,0,0-5.289.035,1.286,1.286,0,0,1-1.066.648,1.452,1.452,0,0,1-1.145-.683,5.348,5.348,0,0,0-.9-0.8A7.972,7.972,0,0,1,515,927Zm0,16a7.97,7.97,0,0,1-5.808-2.516,5.3,5.3,0,0,0,.9-0.8,1.452,1.452,0,0,1,1.145-.685,1.288,1.288,0,0,1,1.066.649,3.288,3.288,0,0,0,5.289.036,1.3,1.3,0,0,1,2.292,0,5.241,5.241,0,0,0,.914.806A7.972,7.972,0,0,1,515,943Z"
                    transform="translate(-505 -925)"></path>
                </svg>
              </div>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- Post Item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="#">
                  <img src="assets/images/blog/grid/1.jpg" alt="post image">
                </a>
              </div><!-- /.post__img -->
              <div class="post__content">
                <div class="post__meta">
                  <span class="post__meta-date">Jan 20, 2020</span>
                  <div class="post__meta-cat">
                    <a href="#">Business</a><a href="#">Tips</a>
                  </div><!-- /.post-meta-cat -->
                </div><!-- /.post-meta -->
                <h4 class="post__title"><a href="#">Simple Recipes for Spring</a></h4>
                <p class="post__desc">My favorite form of cold-weather exercise is snow-shoeing, but by chance I haven’t
                  been able to go this year. Busy working at the computer when fresh snow fell...</p>
                <a href="#" class="btn btn__secondary btn__link">Read More</a>
              </div><!-- /.post__content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Post Item #2 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="#">
                  <img src="assets/images/blog/grid/2.jpg" alt="post image">
                </a>
              </div><!-- /.post__img -->
              <div class="post__content">
                <div class="post__meta">
                  <span class="post__meta-date">Oct 18, 2020</span>
                  <div class="post__meta-cat">
                    <a href="#">Chef</a><a href="#">Dinner</a>
                  </div><!-- /.post-meta-cat -->
                </div><!-- /.post-meta -->
                <h4 class="post__title"><a href="#">Dinner Partty for a Chef!</a></h4>
                <p class="post__desc">I began my career as a recipe tester for cookbooks, and I did that work for years.
                  We loved cookbooks and loved browsing for them at thrift stores...</p>
                <a href="#" class="btn btn__secondary btn__link">Read More</a>
              </div><!-- /.post__content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Post Item #3 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="#">
                  <img src="assets/images/blog/grid/3.jpg" alt="post image">
                </a>
              </div><!-- /.post__img -->
              <div class="post__content">
                <div class="post__meta">
                  <span class="post__meta-date">Jan 20, 2020</span>
                  <div class="post__meta-cat">
                    <a href="#">Food</a><a href="#">Cheese</a>
                  </div><!-- /.post-meta-cat -->
                </div><!-- /.post-meta -->
                <h4 class="post__title"><a href="#">Cake with Cream Cheese</a></h4>
                <p class="post__desc">I’ve been baking this cake for many years, and have experimented with making it
                  into cupcakes, as a layer cake, serving it dusted with confectioner’s sugar...</p>
                <a href="#" class="btn btn__secondary btn__link">Read More</a>
              </div><!-- /.post__content -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->

    <!-- ========================
      Footer
    ========================== -->
    <footer id="footer" class="footer footer-layout1 text-center bg-dark">
      <div class="footer-inner">
        <div class="container">
          <div class="footer-top">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 position-static">
                <svg class="footer__divider-shape" xmlns="http://www.w3.org/2000/svg" width="22" height="61"
                  viewBox="0 0 22 61">
                  <path
                    d="M799,769h2v61h-2V769Zm8,24.8a0.969,0.969,0,0,0-1.911,0,3.012,3.012,0,0,1-.883,2.16,4.486,4.486,0,0,0,0,6.136,3.083,3.083,0,0,1,0,4.32,4.486,4.486,0,0,0,0,6.136,3.088,3.088,0,0,1,0,4.325,4.5,4.5,0,0,0,0,6.142,3.014,3.014,0,0,1,.884,2.163,0.969,0.969,0,0,0,1.911,0,4.414,4.414,0,0,0-1.213-3.07,3.091,3.091,0,0,1,0-4.328,4.491,4.491,0,0,0,0-6.14,3.08,3.08,0,0,1,0-4.319,4.488,4.488,0,0,0,0-6.137,3.081,3.081,0,0,1,0-4.32A4.407,4.407,0,0,0,807,793.8Zm0-20a0.969,0.969,0,0,0-1.911,0,3.014,3.014,0,0,1-.883,2.16,4.486,4.486,0,0,0,0,6.136,3.083,3.083,0,0,1,0,4.32,4.488,4.488,0,0,0,0,6.137,3.087,3.087,0,0,1,0,4.324,4.5,4.5,0,0,0,0,6.142,3.014,3.014,0,0,1,.884,2.163,0.969,0.969,0,0,0,1.911,0,4.414,4.414,0,0,0-1.213-3.07,3.089,3.089,0,0,1,0-4.327,4.491,4.491,0,0,0,0-6.14,3.081,3.081,0,0,1,0-4.32,4.488,4.488,0,0,0,0-6.137,3.081,3.081,0,0,1,0-4.32A4.409,4.409,0,0,0,807,773.8ZM793,793.8a0.969,0.969,0,0,1,1.911,0,3.012,3.012,0,0,0,.883,2.16,4.486,4.486,0,0,1,0,6.136,3.083,3.083,0,0,0,0,4.32,4.486,4.486,0,0,1,0,6.136,3.088,3.088,0,0,0,0,4.325,4.5,4.5,0,0,1,0,6.142,3.014,3.014,0,0,0-.884,2.163,0.969,0.969,0,0,1-1.911,0,4.414,4.414,0,0,1,1.213-3.07,3.091,3.091,0,0,0,0-4.328,4.491,4.491,0,0,1,0-6.14,3.08,3.08,0,0,0,0-4.319,4.488,4.488,0,0,1,0-6.137,3.081,3.081,0,0,0,0-4.32A4.407,4.407,0,0,1,793,793.8Zm0-20a0.969,0.969,0,0,1,1.911,0,3.014,3.014,0,0,0,.883,2.16,4.486,4.486,0,0,1,0,6.136,3.083,3.083,0,0,0,0,4.32,4.488,4.488,0,0,1,0,6.137,3.087,3.087,0,0,0,0,4.324,4.5,4.5,0,0,1,0,6.142,3.014,3.014,0,0,0-.884,2.163,0.969,0.969,0,0,1-1.911,0,4.414,4.414,0,0,1,1.213-3.07,3.089,3.089,0,0,0,0-4.327,4.491,4.491,0,0,1,0-6.14,3.081,3.081,0,0,0,0-4.32,4.488,4.488,0,0,1,0-6.137,3.081,3.081,0,0,0,0-4.32A4.409,4.409,0,0,1,793,773.8Zm-4,5.2h2v41h-2V779Zm20,0h2v41h-2V779Z"
                    transform="translate(-789 -769)"></path>
                </svg>
              </div><!-- /.col-lg-12 -->
              <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="contact-box">
                  <h6 class="contact__box-title">Our Address</h6>
                  <ul class="contact__box-list list-unstyled">
                    <li>22 Alnahas Building, 2 AlBahr St, Tanta Al-Gharbia Governorate, Egypt</li>
                  </ul>
                </div><!-- /.contact-box -->
              </div><!-- /.col-lg-4 -->
              <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="contact-box">
                  <h6 class="contact__box-title">Opening Hours</h6>
                  <ul class="contact__box-list list-unstyled">
                    <li>Mon - Fri: 10 AM - 11 PM</li>
                    <li>Sat - Sun: 9 AM - 1 PM</li>
                  </ul>
                </div><!-- /.contact-box -->
              </div><!-- /.col-lg-4 -->
              <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="contact-box">
                  <h6 class="contact__box-title">Private Dinning</h6>
                  <ul class="contact__box-list list-unstyled">
                    <li><span>Main Email:</span><a href="mailto:Babette@7oroof.com">Babette@7oroof.com</a></li>
                    <li><span>Phone:</span><a href="tel:020101236547">02 0101236547</a></li>
                  </ul>
                </div><!-- /.contact-box -->
              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
          </div><!-- /.footer-top -->
          <div class="footer-middle">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 position-static">
                <div class="footer__logo-wrap text-center">
                  <img src="assets/images/logo/footer-logo.png" alt="logo" class="footer__logo">
                </div>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <p class="mb-20">Babette was designed with the history in mind we have created a soft industrial dining
                  room, combined with an open kitchen, coffee take out bar and alovely awesome on site coffee roastery.
                </p>
                <a href="reservation.html" class="btn btn__primary btn__bordered btn__lg">Book Your Table Now!</a>
              </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
          </div><!-- /.footer-middle -->
        </div><!-- /.container -->
        <div class="footer-bottom">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="footer__copyright mb-30">
                  <span>&copy; Babette, With Love by </span>
                  <a href="http://themeforest.net/user/7oroof" class="color-theme">7oroof.com</a>
                </div>
                <ul class="social__icons social__icons-white justify-content-center">
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-tripadvisor"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul><!-- /.social__icons -->
              </div>
            </div><!-- /.row -->
          </div><!-- /.container -->
          <svg class="footer__divider-shape-bottom" xmlns="http://www.w3.org/2000/svg" width="142" height="17"
            viewBox="0 0 142 17">
            <path
              d="M800,600V583c8.782,15.985,46.811,11.315,56,12a35.721,35.721,0,0,1,15,5m-71,0V583c-8.782,15.985-46.811,11.315-56,12a35.717,35.717,0,0,0-15,5"
              transform="translate(-729 -583)"></path>
          </svg>
        </div><!-- /.Footer-bottom -->
      </div><!-- /.Footer-inner -->
    </footer><!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fa fa-angle-up"></i></button>

    <div class="search-popup">
      <i class="fa fa-times close-search"></i>
      <form class="module__search-form">
        <input type="text" class="search__input" placeholder="Type Words Then Enter">
        <button class="module__search-btn"><i class="fa fa-search"></i></button>
      </form>
    </div><!-- /.search-popup -->

  </div>
  <!-- /.wrapper -->

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <!-- <script src="assets/js/wow.min.js"></script> -->
  <script src="assets/js/main.js"></script>
</body>

</html>