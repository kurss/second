<?php header('Content-Type: text/html; charset=utf-8');?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Интернет-магазин</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='robots' content='noindex,follow'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=cyrillic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
   
</head>
    
<body>
    
<?php require 'admin/settings/settings.php'; ?>
<?php require 'admin/functions.php'; ?>


    <div class="hero-image">
        <div id="home">
            <div class="hero-overlay">
                <header id="site-header">
                    <div class="row">
                        <nav id="top-nav" class="navbar navbar-default navbar-fixed-top navbar-scroll-changed">
                              
                          <div class="container">

                            <div class="col-md-2 col-sm-1 col-xs-12">
                                    <div class="branding">
                                      <a href="#" title="Home is where the heart is" rel="home"><img id="logo" src="assets/images/flexible-logo.png" alt="Home is where the heart is"></a>
                                    </div><!--end branding-->
                                
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div><!--end navbar-header-->
                            </div><!--end col-md-2 col-sm-2 col-xs-12-->

                            <div class="col-md-10 col-sm-11 col-xs-12">
                                  <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="true" style="height: 1px;" role="navigation">
                                      
                                    <div class="menu-primary-menu-container">
                                        <ul id="menu-main-top-navigation" class="menu nav navbar-nav navbar-right">
                                            <li><a href="#home">Главная</a></li>
                                            <li><a href="#services">Блог</a></li>
                                            <li><a href="#features">О нашей компании</a></li>
                                            <li><a href="#plan">Цены</a></li>
                                            <li><a href="#contact">Контакты</a></li>
                                        </ul>
                                    </div><!--end menu-->
                                </div><!--end navbar-collapse--> 

                             </div><!--end col-md-10 col-sm-10 col-xs-12--> 
                              
                            </div><!--end container-->
                        </nav>
                           
                            </div><!--end row-->
                        <div class="main-message">  
                            <div class="container">
                                <h1 class="flex fadeInUp animated">Интернет-магазин</h1>
                                <p class="description-image flex fadeInUp animated">
                                  Компания Flexible продаёт ноутбуки известных мировых брендов
                                </p>
                                <a class="btn btn-cta-primary btn-cta-blue flex fadeInUp animated" href="#" role="button">Подробнее</a>
                            </div><!--end container-->                         
                        </div><!--end main-message--> 
                    </header>
                </div><!--end hero-overlay-->
            </div><!--end acasa-->
         </div><!--end hero-image--> 
              
            

            <section id="services" class="container">
                <div class="row">
                    <div class="title">
                        <h2 class="flex fadeInUp animated">Блог компании</h2>
                        <p class="description flex fadeInUp animated">Последние записи блога</p>
                    </div><!--end title-->
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 caption flex fadeInUp animated" data-wow-delay="0.1s">
                                <a href="#" title="Recent post"><img src='assets/images/phones.jpg' class="serv" alt="Cursuri" /></a>    
                                <a href="#" title="Your title here"><h4>Best blog post</h4></a>
                                <p>Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus.</p>
                                <a href="#" title="See more" class="more">See more &nbsp;<i class="fa fa-angle-right"></i></a>
                            </div><!--end col-sm-6-->

                            <div class="col-sm-6 caption flex fadeInUp animated" data-wow-delay="0.2s">
                                <a href="#" title="Your title here"><img src='assets/images/chair.jpg' class="serv" alt="Cursuri" /></a>
                                <a href="#" title="Your title here"><h4>Standard blog post</h4></a>
                                <p>Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus.</p>
                                <a href="#" title="See more" class="more">See more &nbsp;<i class="fa fa-angle-right"></i></a>
                            </div><!--end col-sm-6-->
                        </div><!--end row-->
                    </div><!--end col-md-6-->


                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 caption flex fadeInUp animated" data-wow-delay="0.3s">
                                <a href="#" title=""><img src='assets/images/camera-photos.jpg' class="serv" alt="Cursuri" /></a>
                                <a href="#" title="Your title here"><h4>Simple blog post</h4></a>
                                <p>Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus.</p>
                                <a href="#" title="See more" class="more">See more &nbsp;<i class="fa fa-angle-right"></i></a>
                            </div><!--end col-sm-6-->

                            <div class="col-sm-6 caption flex fadeInUp animated" data-wow-delay="0.4s">
                                <a href="#" title="Your title here"><img src='assets/images/brochure.jpg' class="serv" alt="Cursuri" /></a>
                                <a href="#" title="Your title here"><h4>Another blog post</h4></a>
                                <p>Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus.</p>
                                <a href="#" title="See more" class="more">See more&nbsp;<i class="fa fa-angle-right"></i></a>
                            </div><!--end col-sm-6-->
                        </div><!--end row-->
                    </div><!--end col-md-6-->
                </div><!--end row-->
            </section><!--end services-->  
            
    <section id="features">
        <div class="container">
            <div class="title">
                <h2 class="flex fadeInUp animated">О нашей компании</h2>
                <p class="description flex fadeInUp animated">With features engineered from best practices used by leading property management companies worldwide.</p>
            </div><!--end title-->
           
                <div class="row">
                    <div class="col-md-4 caption flex fadeInUp animated" data-wow-delay="0.1s">
                        <i class="fa fa-paint-brush"></i>
                        <h3>Гибкий подход</h3>
                        <p>Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra eu libero sit amet quam egestas sempe</p>          
                    </div><!--end col-md-4-->    
                
                <div class="col-md-4 caption flex fadeInUp animated" data-wow-delay="0.3s">
                        <i class="fa fa-coffee"></i>
                        <h3>Техническая поддержка</h3>
                        <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat erat volutpat.</p>          
                </div><!--end col-md-4-->    
                
                <div class="col-md-4 caption flex fadeInUp animated" data-wow-delay="0.5s">
                    <i class="fa fa-keyboard-o"></i>
                        <h3>Гарантийный ремонт</h3>
                        <p>Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.</p>         
                </div><!--end col-md-4-->   

            </div><!--end row-->
            </div><!--end container-->
        </section>  
         
    <section id="info">        
            <div class="zig-zag container">
                <div class="row">
                    <div class="col-md-6">
                        <img src='assets/images/akita.jpg' class="serv flex fadeInUp animated" alt="Flexible" />
                    </div><!--end col-md-7-->
                    
                    <div class="col-md-5 col-md-push-1">
                        <h2 class="flex fadeInUp animated">Responsiveness - you bet</h2>
                        <p class="flex fadeInUp animated">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                        </p>
                    </div><!--end col-md-5--> 
                    
                </div><!--end row-->
            </div><!--end zig-zag-->
            
            <div class="zig-zag container">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="flex fadeInUp animated">Easily changing colors</h2>
                        <p class="flex fadeInUp animated">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                        </p>
                    </div><!--end col-md-5--> 
                    
                    <div class="col-md-6 col-md-offset-1">
                        <img src='assets/images/lens.jpg' class="serv flex flipInX animated" alt="Flexible" />
                    </div><!--end col-md-5-->
                    
                </div><!--end row-->
            </div><!--end zig-zag-->
        </section><!--end info-->
               
            
        <section id="plan">
            <div class="container">
                    <div class="title">
                        <h2 class="flex fadeInUp animated">Цены</h2>
                        <p class="description fadeInUp animated">У нас есть следующие товары</p>
                    </div><!--end title-->
            
                    <div class="row"> 
                                  
                    <?php include 'price-table.php'; ?>
                    
                    </div><!--end row-->
            </div><!--end container-->                                       
        </section><!--end plan-->     
            

    
        <section id="testimonials">
                <div class="container">
                     <div class="title">
                        <h2 class="flex fadeInUp animated">Отзывы</h2>
                        <p class="description fadeInUp animated">Слайдер с отзывами благодарных покупателей</p>
                    </div><!--end title-->
                    <div class="caption">   
                    <div class="row">
                        <div class="col-md-12">                            
                            <div id="myCarousel" class="carousel slide" data-interval="4000">

                                <div class="carousel-inner">
                                    <div class="item active">
                                        <a href="https://teamtreehouse.com" target="_blank" class="company"><img src="assets/images/treehouse-logo.png" alt="#"></a>
                                        <blockquote>
                                            <i class="quote-open"></i>
                                            I am really happy what Flexible is able to offer. This guys are amazing, support 24 hours, realy helpfull.
                                            <i class="quote-close"></i>
                                        </blockquote>

                                        <span class="author"><img src="assets/images/user.png" alt="#">Ferry Corsten, Web Designer</span>
                                    </div><!--end item-->

                                    <div class="item">
                                        <a href="http://www.dribbble.com" target="_blank" class="company"><img src="assets/images/dribbble-logo.png" alt="#"></a>
                                        <blockquote>
                                            <i class="quote-open"></i>
                                            Maybe the best product - and definitely the best support of any module I've used.
                                            <i class="quote-close"></i>
                                        </blockquote>
                                        <span class="author"><img src="assets/images/user-1.png" alt="#">Adriana Lima, model</span>
                                    </div><!--end item-->

                                    <div class="item">
                                        <a href="http://www.behance.net" target="_blank" class="company"><img src="assets/images/behance-logo.png" alt="#"></a>
                                        <blockquote>
                                            <i class="quote-open"></i>
                                            Excellent and stable theme that serves its purpose beautifully. Easy to use and easy to setup.
                                            <i class="quote-close"></i>
                                        </blockquote>
                                        <span class="author"><img src="assets/images/user-2.png" alt="#">Amanda Hemingway, Web developer</span>
                                    </div><!--end item-->

                                </div><!--end carousel-inner-->

                                <!-- Indicators -->
                                  <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                                  </ol>

                            </div><!--end myCarousel-->

                        </div><!--end col-md-12-->  

                    </div><!--end row--> 
                    </div><!--end caption-->                            
                </div><!--end container-->
        </section><!--end testimonials-->
                                        
                                                                       

        <section id="contact" class="marketing-action">
            <div class="overlay">
                <div class="text">
                     <h2 class="flex fadeInUp animated" style="color:#ffffff;">Настоящая эффективная команда</h2>
                     <p class="description-image flex fadeInUp animated">
                        See how Flexible can become your perfect website.
                     </p>
                     <a href="#" class="btn btn-cta-primary btn-cta-buy" role="button">Связаться с нами</a>      
                </div><!--end text-->   
            </div><!--end overlay-->    
        </section><!--end marketing-action-->
                                           

       <div id="footer">                                      
       <div class="container">
            <div class="row">
                    <div class="footer-section col-md-1">
                        <a href="#" title="Home is where the heart is" rel="home"><img src='assets/images/flexible-logo-footer.png' class="logo-footer flex fadeInUp animated" alt="Home is where the heart is"></a>
                    </div><!--end footer-section-->
                    
                    <div class="footer-section col-md-8 col-sm-9 col-xs-12">
                            <p class="copyright flex fadeInUp animated">&#169; Copyright 2016 <strong>Flexible.</strong>&nbsp;All rights reserved.</p>
                    </div><!--end footer-section-->
                        
                        
                    <div class="footer-section col-md-3 col-xs-12">    
                        <div class="social copyright flex fadeInUp animated">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div><!--end social-->
                    </div><!--end col-md-3-->
            </div><!--end row-->
        </div><!--end container-->
        </div><!--end footer-->
        
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-mobile.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/respond.min.js"></script>
<script>
//jQuery transitions init(wow + animated)
wow = new WOW(
    {
        boxClass: 'flex',
        animateClass: 'animated', // default
        offset: 0,          // default
        mobile: true,       // default
        live: true        // default
    }
    )
wow.init();
</script>

</body>