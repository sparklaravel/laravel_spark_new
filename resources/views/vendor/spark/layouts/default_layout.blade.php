<html>
<head>
    <title>POLLHOLE</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--MAIN CSS + PLUGINS-->
    <link rel="stylesheet" href="css/libs.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css">


  </head>
  <body class="body__primary">

    <header class="header__primary">
      <div class="container">
        <div class="row">
          <!--Logo block-->
          <div class="col-3 logo-block">
            <img class="logo-img" src="img/icons/logo.svg" alt="POLLHOLE Logo">
            <span class="logo-text">Pollhole</span>
          </div>

          <!--Desktop nav block-->
          <div class="col-lg-6 navigation-desktop d-none d-lg-block">
            
            <ul>
              <li><a href="#">How it works</a></li>
              <li><a href="{{ url('/plans') }}">Plans</a></li>
              <li><a href="#">F.A.Q.</a></li>
              <li><a href="#">Placeholder</a></li>
            </ul>
          </div>

          <!--Desktop auth block-->
          <div class="col-3 justify-content-end auth-block d-none d-lg-block">
            <a href="{{ url('/login') }}">
              <button class="login-btn">Log in</button>
            </a>
            <a href="#">
              <button class="register-btn">Sign up</button>
            </a>
          </div>

          <div class="col-9 d-lg-none d-flex justify-content-end">
            <div class="mobile-menu">
                <img onclick="openNav()" src="img/icons/menu-primary.svg" alt="">
                <div id="myNav" class="overlay">

                  <!-- Button to close the overlay navigation -->
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                
                  <div class="overlay-content">
                    <div class="d-flex flex-column justify-content-center mobile-nav-btn-block">
                      <a href="">
                        <button>Log in</button>
                      </a>
                      <a href="">
                        <button>Sign up</button>
                      </a>
                    </div>
                    
                    <ul>
                      <li><a href="#">How it works</a></li>
                      <li><a href="#">Plans</a></li>
                      <li><a href="#">F.A.Q.</a></li>
                    </ul>
                  </div>
                
                </div>
              
            </div>
          </div>
        </div>
      </div>
    </header>
    <body class="body__primary">
        @section('sidebar')
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
    <footer>

    @section('footer')
    <footer class="footer__primary">
      <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="logo-block">
                <img src="img/icons/logo.svg" alt="POLLHOLE Logo">
                <span class="logo-text">Pollhole</span>
              </div>
              <div class="logo-description">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad similique dolorem minus ratione repellat ipsam quidem necessitatibus nihil ut tempora!</p>
              </div>
              <div class="terms-block">
                <a href="">Privacy policy</a>
                <a href="">Terms and conditions</a>
              </div>
              <div class="copyright-block">
                <span>Copyright &copy; 2018 POLLHOLE</span>
              </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-8 d-flex justify-content-lg-end justify-content-start justify-content-xl-end justify-content-md-end">
              <!--Categories block-->
              <div class="footer-navigation">
                <h3>Categories</h3>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Team</a></li>
                  <li><a href="#">Career</a></li>
                  <li><a href="#">Contacts</a></li>
                </ul>
              </div>

              <!--Communities block-->
              <div class="footer-navigation">
                <h3>Community</h3>
                <ul>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Discussions</a></li>
                  <li><a href="#">Collections</a></li>
                  <li><a href="#">Members</a></li>
                  <li><a href="#">Products</a></li>
                  <li><a href="#">Help Center</a></li>
                </ul>
              </div>

              <div class="footer-social">
                <h3>Follow us</h3>
                <ul>
                  <li>
                    <a href="#"><img src="img/icons/twitter-footer.svg" alt=""></a>
                  </li>
                  <li>
                    <a href="#"><img src="img/icons/facebook-footer.svg" alt=""></a>
                  </li>
                  <li>
                    <a href="#"><img src="img/icons/google-plus-footer.svg" alt=""></a>
                  </li>
                  <li>
                    <a href="#"><img src="img/icons/tumblr-footer.svg" alt=""></a>
                  </li>
                </ul>
                <a href="#">
                  <button class="footer-start-btn">Get started</button>
                </a>
              </div>
              
            </div>
        </div>
        
      </div>
    <script src="js/libs.min.js"></script>
    <script src="js/common.js"></script>

</html>