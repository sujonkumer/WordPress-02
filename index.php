<!DOCTYPE HTML>
<html <?php language_attributes();?>>

<head>

  <meta charset="<?php bloginfo( 'charset' );?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title><?php bloginfo( 'name' );?></title>

  <meta name="keywords" content="" />
  <meta name="description" content="" />

  <!-- css -->
  <link rel="stylesheet" href="<?php bloginfo( 'template_url' );?>/css/bootstrap.css" />
  <link rel="stylesheet" href="<?php bloginfo( 'template_url' );?>/css/bootstrap-responsive.css" />
  <link rel="stylesheet" href="<?php bloginfo( 'template_url' );?>/css/prettyPhoto.css" />
  <link rel="stylesheet" href="<?php bloginfo( 'template_url' );?>/css/sequence.css" />
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' );?>"/>

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php bloginfo( 'template_url' );?>/img/favicon.ico">

  <!-- =======================================================
    Theme Name: test2
    Theme Mail:sujonkumer8231@gmail.com
    Author: Sujon kumer
	======================================================= -->
  <?php wp_head();?>
</head>

<body>

  <!-- main wrap -->
  <div class="main-wrap">

    <!-- header -->
    <?php get_header();?>
    <!-- end of header-->
 


    <!-- section intro -->
    <section id="intro">
      <div class="featured">
        <div class="wrapper">

          <div class="row-fluid">
            <!-- slider -->
            <div class="span12">

              <div id="sequence-theme">
                <div id="sequence">
                  <img class="prev" src="<?php bloginfo( 'template_url' );?>/img/slides/bt-prev.png" alt="Previous Frame" />
                  <img class="next" src="<?php bloginfo( 'template_url' );?>/img/slides/bt-next.png" alt="Next Frame" />
                  <ul>
                    <li class="animate-in">
                      <h2 class="title">Fresh design</h2>
                      <h5 class="subtitle">We always consider with latest web design trends</h5>
                      <img class="model" src="<?php bloginfo( 'template_url' );?>/img/slides/img1.png" alt="" />
                    </li>
                    <li>
                      <h2 class="title">Responsive layout</h2>
                      <h5 class="subtitle">Degrade from wide screen to mobile screen size</h5>
                      <img class="model" src="<?php bloginfo( 'template_url' );?>/img/slides/img2.png" alt="" />
                    </li>
                    <li>
                      <h2 class="title">Built with bootstrap</h2>
                      <h5 class="subtitle">Supports modern browsers, touch devices and responsive designs</h5>
                      <img class="model" src="<?php bloginfo( 'template_url' );?>/img/slides/img3.png" alt="" />
                    </li>
                  </ul>
                </div>
                <ul class="nav">
                  <li><img src="<?php bloginfo( 'template_url' );?>/img/slides/thumb1.png" alt="Thumbnail" /></li>
                  <li><img src="<?php bloginfo( 'template_url' );?>/img/slides/thumb2.png" alt="Thumbnail" /></li>
                  <li><img src="<?php bloginfo( 'template_url' );?>/img/slides/thumb3.png" alt="Thumbnail" /></li>
                </ul>
              </div>

            </div>
            <!-- end slider -->
          </div>

        </div>
      </div>
    </section>
    <!-- end section intro -->

    <!-- section main content -->
    <section id="main-content">
      <div class="content-wrap">

        <!-- tagline -->
        <div class="tagline">
          <div class="wrapper">
            <!--### Subtitle ###-->
            <h2>Great choice to build application landing page</h2>
            <!-- CTA -->
            <div class="cta">
              <div class="btn-group">
                <a href="https://bootstrapmade.com/buy/?template=Bootslander" class="btn btn-green btn-large"><i class="icon-shopping-cart icon-white"></i> Buy this template</a>
                <a href="https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/#download" class="btn btn-red btn-large">Try demo version</a>
              </div>
            </div>
          </div>
        </div>
        <!-- end tagline -->

        <!-- wrapper -->
        <div class="wrapper">

          <!-- boxes -->
          <div class="boxes">
            <div class="row-fluid">

              <!-- box 1 -->
              <div class="span4">
                <div class="box">
                  <div class="icon">
                    <img src="<?php bloginfo( 'template_url' );?>/img/icons/icon-1.png" class="" alt="" />
                  </div>
                  <h4>Easy to customize</h4>
                  <p> Optimal viewing experience with a minimum of resizing, and scrolling across a wide range of devices </p>
                  <a href="#" class="textlink">Learn more</a>
                </div>
              </div>

              <!-- box 2 -->
              <div class="span4">
                <div class="box">
                  <div class="icon">
                    <img src="<?php bloginfo( 'template_url' );?>/img/icons/icon-2.png" class="" alt="" />
                  </div>
                  <h4>High conversion</h4>
                  <p> Optimal viewing experience with a minimum of resizing, and scrolling across a wide range of devices </p>
                  <a href="#" class="textlink">Learn more</a>
                </div>
              </div>

              <!-- box 3 -->
              <div class="span4">
                <div class="box">
                  <div class="icon">
                    <img src="<?php bloginfo( 'template_url' );?>/img/icons/icon-3.png" class="" alt="" />
                  </div>
                  <h4> Responsive Layout</h4>
                  <p> Optimal viewing experience with a minimum of resizing, and scrolling across a wide range of devices </p>
                  <a href="#" class="textlink">Learn more</a>
                </div>
              </div>

            </div>

          </div>
          <!-- end boxes -->


          <!-- recent portfolio -->
          <div class="row-fluid portfolio">
            <div class="headline">
              <h2><span>Great examples built with bootslander</span></h2></div>
            <ul class="portfolio_list da-thumbs">

              <li class="span3">
                <img src="<?php bloginfo( 'template_url' );?>/img/dummies/img1.jpg" alt="img">
                <article class="da-animate da-slideFromRight" style="display: block;">
                  <h5>Portfolio item</h5>
                  <span class="link_post"><a href="#"></a></span>
                  <span class="zoom"><a data-pretty="prettyPhoto[works]" href="img/dummies/big1.jpg"></a></span>
                </article>
              </li>
              <li class="span3">
                <img src="<?php bloginfo( 'template_url' );?>/img/dummies/img2.jpg" alt="img">
                <article class="da-animate da-slideFromRight" style="display: block;">
                  <h5>Portfolio item</h5>
                  <span class="link_post"><a href="#"></a></span>
                  <span class="zoom"><a data-pretty="prettyPhoto[works]" href="img/dummies/big1.jpg"></a></span>
                </article>
              </li>
              <li class="span3">
                <img src="<?php bloginfo( 'template_url' );?>/img/dummies/img3.jpg" alt="img">
                <article class="da-animate da-slideFromRight" style="display: block;">
                  <h5>Portfolio item</h5>
                  <span class="link_post"><a href="#"></a></span>
                  <span class="zoom"><a data-pretty="prettyPhoto" href="img/dummies/big1.jpg"></a></span>
                </article>
              </li>
              <li class="span3">
                <img src="<?php bloginfo( 'template_url' );?>/img/dummies/img4.jpg" alt="img">
                <article class="da-animate da-slideFromRight" style="display: block;">
                  <h5>Portfolio item</h5>
                  <span class="link_post"><a href="#"></a></span>
                  <span class="zoom"><a data-pretty="prettyPhoto" href="img/dummies/big1.jpg"></a></span>
                </article>
              </li>
            </ul>

          </div>
          <!-- end portfolio -->


          <!-- testimonials -->
          <div class="row-fluid testimonials">
            <div class="headline">
              <h2><span>What people are saying</span></h2></div>
            <ul>
              <li class="span4">
                <div class="testimonial">
                  <img src="<?php bloginfo( 'template_url' );?>/img/dummies/user-1.png" alt="" class="img-circle" />
                  <p>
                    &ldquo;Lorem ipsum dolor sit amet, veritus molestie et his. Summo dissentiet duo an. Et duo vitae atomorum, eripuit eruditi definitiones nec ut.&rdquo;
                  </p>
                  <span>&#45;&#45; Mike lamouz, <a href="#">Net designer</a></span>
                </div>
              </li>
              <li class="span4">
                <div class="testimonial">
                  <img src="<?php bloginfo( 'template_url' );?>/img/dummies/user-2.png" alt="" class="img-circle" />
                  <p>
                    &ldquo;Lorem ipsum dolor sit amet, veritus molestie et his. Summo dissentiet duo an. Et duo vitae atomorum, eripuit eruditi definitiones nec ut.&rdquo;
                  </p>
                  <span>&#45;&#45; Leslie samarov, <a href="#">JIK Company</a></span>
                </div>
              </li>
              <li class="span4">
                <div class="testimonial">
                  <img src="<?php bloginfo( 'template_url' );?>/img/dummies/user-3.png" alt="" class="img-circle" />
                  <p>
                    &ldquo;Lorem ipsum dolor sit amet, veritus molestie et his. Summo dissentiet duo an. Et duo vitae atomorum, eripuit eruditi definitiones nec ut.&rdquo;
                  </p>
                  <span>&#45;&#45; Jonathan does, <a href="#">App Studio</a></span>
                </div>
              </li>

            </ul>
          </div>

        </div>
        <!-- end wrapper -->

      </div>
    </section>
    <!-- end main content section -->

    <!-- section bottom -->
    <section id="bottom">
      <div class="bottom-cta">
        <div class="wrapper">
          <h3 class="title">Don&#96;t miss this special offer! </h3>
          <h2>Get it now for just $10! the price will be increased after 50 downloads</h2>
          <a href="#" class="btn btn-red btn-large">Get the latest version of Bootslander</a>
        </div>
      </div>
    </section>
    <!-- end section bottom -->


    <!-- section contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="span8">
            <h4>Get in touch with us by filling contact form below</h4>

            <form method="post" class="contactForm">

              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>

              <div class="row">
                <div class="span4 field form-group">
                  <input type="text" name="name" placeholder="* Enter your full name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="span4 field form-group">
                  <input type="text" name="email" placeholder="* Enter your email address" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="span8 margintop10 field form-group">
                  <input type="text" name="subject" placeholder="Enter your subject" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="span8 margintop10 field form-group">
                  <textarea rows="12" name="message" class="input-block-level" placeholder="* Your message here..." data-rule="required" data-msg="Please write something"></textarea>
                  <div class="validation"></div>

                  <p>
                    <button class="btn btn-theme btn-medium margintop10 pull-left" type="submit">Send message</button>
                    <span class="pull-right margintop20">* Please fill all required form field, thanks!</span>
                  </p>
                </div>
              </div>
            </form>
          </div>
          <div class="span4">
            <div class="clearfix"></div>
            <aside class="right-sidebar">

              <div class="widget">
                <h5 class="widgetheading">Contact information<span></span></h5>

                <ul class="contact-info">
                  <li><label>Address :</label> Tinggi sekali tower Jl.Kemacetan timur<br /> Jakarta selatan - Indonesia</li>
                  <li><label>Phone :</label>+62 123 456 78 / +62 123 456 79</li>
                  <li><label>Fax : </label>+62 123 456 10 / +62 123 456 11</li>
                  <li><label>Email : </label> info@yourdomain.com</li>
                </ul>

              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
    <!-- end section contact -->

    <!-- footer -->
    <?php get_footer();?>


  </div>
  <!-- end main wrap -->

  <!-- Javascript Libraries -->
  <script src="<?php bloginfo( 'template_url' );?>/js/jquery.min.js"></script>
  <script src="<?php bloginfo( 'template_url' );?>/js/bootstrap.js"></script>
  <script src="<?php bloginfo( 'template_url' );?>/js/jquery.prettyPhoto.js"></script>
  <script src="<?php bloginfo( 'template_url' );?>/js/sequence.jquery.js"></script>
  <script src="<?php bloginfo( 'template_url' );?>/js/jquery-hover-effect.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Custom Javascript File -->
  <script src="<?php bloginfo( 'template_url' );?>/js/custom.js"></script>

</body>

</html>
