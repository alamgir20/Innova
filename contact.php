<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Innova</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
  </head>
  <body>
    <!-- header section -->
       <header class="header_section">
         <div class="container">
            <nav class="navbar  navbar-expand-lg navbar-light">
               <a class="navbar-brand" href="index.html">
               <img src="image/main-logo.svg">
               </a>
             <button type="button" class="navbar-toggle x collapsed" data-toggle="collapse" data-target="#navbar-collapse-x">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbar-collapse-x">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link" href="index.html">Innova Sequent</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="datascience.html">Data Science Consultancy</a>
                     </li>
                  </ul>
                 <div class="get-quote">
              <a href="contact.html" class="default-btn">
                <span>Contact Us</span>
              </a>
            </div>
               </div>
            </nav>
         </div>
      </header>
    <!-- contact form -->
    <section class="contact_form section_padding contact-page-section">
      <div class="container">
        <div class="row d-flex align-items-center overflow-hidden">
          <div class="col-lg-6 align-items-center">
            <div class="contact_boxs">
              <h2>Contact Us</h2>
              <p>Feel free to Contact us any time, we will get back to you as soon as we can</p>
            </div>
            <div class="form-column col-md-12 col-sm-12 col-xs-12">
              <div class="inner-column">
                <!--Contact Form-->
                <div class="contact-form">
                  <form method="post" action="sendemail.php" id="contact-form">
                    <div class="row clearfix">
                      <div class="form-group col-md-12 col-sm-12 co-xs-12">
                        <input type="text" name="name" value="" placeholder="Name" required>
                      </div>
                      <div class="form-group col-md-12 col-sm-12 co-xs-12">
                        <input type="email" name="email" value="" placeholder="Email" required>
                      </div>
                      <div class="form-group col-md-12 col-sm-12 co-xs-12">
                        <textarea name="message" placeholder="Massage"></textarea>
                      </div>
                      <div class="form-group col-md-12 col-sm-12 co-xs-12">
                        <button type="submit" class="theme-btn btn-style-one">SEND MESSAGE<span><i class="fa fa-arrow-up" aria-hidden="true"></i></span></button>
                      </div>
                    </div>
                  </form>
                </div>
                <!--End Contact Form-->
              </div>
            </div>
          </div>
          <div class="col-lg-6">
             <div class="contact_box_right">
                <div class="contact_inner_rx">
                   <h2>Tailored Solutions for Your Industry Challenges.</h2>
                   <a href="info@innova-analytics.ai"><span><img src="image/contact-icon.svg"></span>info@innova-analytics.ai</a>
                   <div class="image_box_rn">
                      <img src="image/contact-image.svg">
                   </div>
                   <div class="footer_content">
                      <p>Delivering actionable and accurate insights. Optimize, predict and avoid costly surprises.</p>
                   </div>
                </div>
             </div>
          </div>
          <!--Info Column-->
        </div>
      </div>
    </section>
    <!-- common js -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>