<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Speak2day:: App Landing Page</title>

  <!-- icofont-css-link -->
  <link rel="stylesheet" href="app/css/icofont.min.css">
  <!-- Owl-Carosal-Style-link -->
  <link rel="stylesheet" href="app/css/owl.carousel.min.css">
  <!-- Bootstrap-Style-link -->
  <link rel="stylesheet" href="app/css/bootstrap.min.css">
  <!-- Aos-Style-link -->
  <link rel="stylesheet" href="app/css/aos.css">
  <!-- Coustome-Style-link -->                  
  <link rel="stylesheet" href="app/css/style.css">
  <!-- Responsive-Style-link -->
  <link rel="stylesheet" href="app/css/responsive.css">
  <!-- waveanimation-Style-link -->
  <link rel="stylesheet" href="app/css/wave-animation-style.css">   
  <!-- Favicon -->            
  <link rel="shortcut icon" href="img/5.png" type="image/x-icon">

</head>

<body>

  <!-- Page-wrapper-Start -->
  <div class="page_wrapper">

    <!-- Preloader -->
    <div id="preloader">
      <div id="loader"></div>
    </div>

    <!-- Header Start -->
    <header class="white_header">
      <!-- container start -->
      <div class="container">
        <!-- navigation bar -->
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="#">
            <img src="img/v4.png" alt="image" >
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
              <!-- <i class="icofont-navigation-menu ico_menu"></i> -->
              <div class="toggle-wrap">
                <span class="toggle-bar"></span>
              </div>
            </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <!-- secondery menu start -->
              <li class="nav-item">
                <a class="nav-link" href="./">Home</a>
              </li>
              <!-- secondery menu end -->
             
              <li class="nav-item">
                <a class="nav-link" href="#features">Features</a>
              </li>
              <!-- secondery menu start -->
             <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <!-- secondery menu end -->
              
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>

              <li class="nav-item">
                <div style="border: 2px solid #d37600;border-radius: 5px;"><div id="google_translate_element"></div></div>
              </li>

              <li class="nav-item">
                <a class="nav-link dark_btn" href="https://bit.ly/speak2daysignup">GET STARTED</a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- navigation end -->
      </div>
      <!-- container end -->
    </header>


    <!-- BredCrumb-Section -->
    <div class="bred_crumb blog_detail_bredcrumb">
      <div class="container">
        <div class="bred_text">
          <h1>Hospitality Scenario</h1>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><span>»</span></li>
            <li><a href="http://kalanidhithemes.com/live-preview/landing-page/apper/all-demo/03-app-landing-page-wave-animation/blog-detail.html"> Introduction</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Blog Details Block -->
    <section class="blog_detail_section">
      <div class="container">
        <div class="blog_inner_pannel">
            <!-- <div class="review">
              <span>Review</span>
              <span>45 min ago</span>
            </div>
            <div class="section_title">
              <h2>Top rated app of the year!</h2>
            </div> -->
            <div class="main_img">
              <!-- <img src="app/images/blog_detail_main.png" alt="image"> -->
              <video height="500" controls id="my-video" autoplay style="width: 100%;">
                <source id="video-source-1" src="media/Speak2day_Hospitality_eng.mov" type="video/mp4">
                <source id="video-source-2" src="media/Speak2day_Hospitality_esp.mov" type="video/mp4">
                <track id="caption-source-1" kind="subtitles" src="captions/Speak2day_ Hospitality-eng.vtt" label="English" srclang="en" default>
                <track id="caption-source-2" kind="subtitles" src="captions/Speak2day_ Hospitality-esp.vtt" label="Spanish" srclang="es">
                <!-- <source src="movie.ogg" type="video/ogg"> -->
              </video>
              
            </div>
            <div class="info">
              <!-- <button onclick="openSubtitle()">Open Subtitle</button> -->
              <div id="subtitle-container"></div>
              <div id="full-subtitle-container"></div>
              <div class="form-group">
                <select class="form-control" id="video-source" onchange="switchVideo()" style="width: 150px">
                  <option value="" selected disabled>Listen in:</option>
                  <option value="media/Speak2day_Hospitality_eng.mov">English</option>
                  <option value="media/Speak2day_Hospitality_esp.mov">Spanish</option>
                </select>
              </div>
              <div class="form-group">
                <select class="form-control" id="caption-source" onchange="switchCaption()" style="width: 150px">
                  <option value="" selected disabled>Subtitle in:</option>
                  <option value="captions/Speak2day_ Hospitality-eng.vtt">English</option>
                  <option value="captions/Speak2day_ Hospitality-esp.vtt">Spanish</option>
                </select>
              </div>
              <!-- <div class="w3-container" style="width: 150px">
                <select class="w3-select" id="video-source" onchange="switchVideo()">
                  <option value="media/Speak2day_Hospitality_eng.mov">English</option>
                  <option value="media/Speak2day_Hospitality_esp.mov">Spanish</option>
                </select>
              </div> -->
              <!-- <div class="w3-container" style="width: 150px">
                <select class="w3-select" id="caption-source" onchange="switchCaption()">
                  <option value="captions/Speak2day_ Hospitality-eng.vtt">English</option>
                  <option value="captions/Speak2day_ Hospitality-esp.vtt">Spanish</option>
                </select>
              </div> -->
              <p style="margin: 50px 0px;">Lorem Ipsum is simply dummy text of the printing and typesetting in dustry lorem Ipsum has been the industrys standard dummy text ev er since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic Lorem Ipsum is simply dummy text of the printing and typesettingindustry lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived.</p>
              <p>Printing and typesetting in dustry lorem Ipsum has been the industrys standard dummy text ev er since the 1500s, when an unnown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic Lorem Ipsum is simply dummy text of the printing and typesettingindustry lorem Ipsum has been the industrys centuries, but also the leap into electronic.</p>
              <h3>Why we are best</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting in dustry lorem Ipsum has been the industrys standard dummy text ev er since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>
              <ul>
                <li><p> <span class="icon"><i class="icofont-check-circled"></i></span> Lorem Ipsum is simply dummy text of the printing and typesetting in </p></li>
                <li><p> <span class="icon"><i class="icofont-check-circled"></i></span> Dustry lorem Ipsum has been the industrys standard dummy text ev er since the when</p></li>
                <li><p> <span class="icon"><i class="icofont-check-circled"></i></span> Unknown printer took a galley of type and scrambled it to make.</p></li>
                <li><p> <span class="icon"><i class="icofont-check-circled"></i></span> Type specimen book. It has survived not only five centuries, but also the leap into electronic.</p></li>
                <li><p> <span class="icon"><i class="icofont-check-circled"></i></span> Lorem Ipsum is simply dummy text of the printing.</p></li>
                <li><p> <span class="icon"><i class="icofont-check-circled"></i></span> Dustry lorem Ipsum has been the industrys standard dummy text ev er since.</p></li>
                <li><p> <span class="icon"><i class="icofont-check-circled"></i></span> Unknown printer took a galley of type and scrambled it to make.</p></li>
                <li><p> <span class="icon"><i class="icofont-check-circled"></i></span> Type specimen book. It has survived not only.</p></li>
              </ul>
            </div>
            <div class="two_img">
              <div class="row">
                <div class="col-md-6">
                  <img src="app/images/blog_sub_01.png" alt="image">
                </div>
                <div class="col-md-6">
                  <img src="app/images/blog_sub_02.png" alt="image">
                </div>
              </div>
            </div>
            <div class="info">
              <h3>Why we are best</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting in dustry lorem Ipsum has been the industrys standard dummy text ev er since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic Lorem Ipsum is simply dummy text of the printing and typesettingindustry lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived.</p>
            </div>
            <div class="quote_block">
              <span class="q_icon"><img src="app/images/quote_icon.png" alt="image"></span>
              <h2>Lorem Ipsum is simply dummy text of the printing and typesetting in dustry lorem Ipsum has been the industrys standard dummy.</h2>
              <p><span class="name">Mr. John Doe,</span> Apper Inc</p>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting in dustry lorem Ipsum has been the industrys standard dummy text ev er since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic industry.</p>
            <div class="blog_authore">
                <div class="authore_info">
                    <div class="avtar">
                      <img src="app/images/blog_d02.png" alt="image">
                    </div>
                    <div class="text">
                      <h3>By: John Dow</h3>
                      <span>July 25, 2022</span>
                    </div>
                </div>
                <div class="social_media">
                  <ul>
                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                    <li><a href="#"><i class="icofont-twitter"></i></a></li>
                    <li><a href="#"><i class="icofont-instagram"></i></a></li>
                    <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                  </ul>
                </div>
            </div>
            <div class="blog_tags">
                <ul>
                  <li class="tags"><p>Tags:</p></li>
                  <li><span>app,</span></li>
                  <li><span>rating,</span></li>
                  <li><span>development</span></li>
                </ul>
            </div>
        </div>
      </div>
    </section>

    <!-- Comment Section -->
    <section class="row_am comment_section">
      <div class="container">
        <div class="section_title">
           <h2>3 Comments</h2>
        </div>
        <ul>
          <li>
            <div class="authore_info">
              <div class="avtar">
                <img src="app/images/blog_d01.png" alt="image">
              </div>
              <div class="text">
                <span>30 min ago</span>
                <h4>Dolly Shell</h4>
              </div>
            </div>
            <div class="comment">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting in dustry lorem Ipsum has been the in
                dustrys standard dummy text ev er since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen. </p>
            </div>
          </li>
          <li class="replay_comment">
            <div class="authore_info">
              <div class="avtar">
                <img src="app/images/blog_d02.png" alt="image">
              </div>
              <div class="text">
                <span>15 min ago</span>
                <h4>Devil Joe</h4>
              </div>
            </div>
            <div class="comment">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting in dustry lorem Ipsum has been the industrys standard dummy text ev er since the when.</p>
            </div>
          </li>
          <li>
            <div class="authore_info">
              <div class="avtar">
                <img src="app/images/blog_d03.png" alt="image">
              </div>
              <div class="text">
                <span>2 days ago</span>
                <h4>Sherly Shie</h4>
              </div>
            </div>
            <div class="comment">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting in dustry lorem Ipsum has been the in
                dustrys standard dummy text ev er since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen. </p>
            </div>
          </li>
        </ul>
      </div>
    </section>
    
   
    <!-- Comment Form Section -->
    <section class="row_am comment_form_section">
      <div class="container">
        <div class="section_title">
          <h2>Leave a <span>comment</span></h2>
          <p>Your email address will not be published. Required fields are marked *</p>
        </div>
        <form action="">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Name *">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email *">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Phone">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Website  ">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <textarea class="form-control" placeholder="Comments"></textarea>
              </div>
            </div>
            <div class="col-md-12 text-center">
              <button class="btn puprple_btn" type="submit">POST COMMENTS</button>
            </div>
          </div>
        </form>
      </div>
    </section>


    <!-- Story-Section-Start -->
    <section class="row_am latest_story" id="blog">
      <!-- container start -->
       <div class="container">
           <div class="section_title" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
               <h2>Read latest <span>story</span></h2>
               <p>Lorem Ipsum is simply dummy text of the printing and typese tting <br> indus orem Ipsum has beenthe standard dummy.</p>
           </div>
           <!-- row start -->
           <div class="row">
             <!-- story -->
             <div class="col-md-4">
                 <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                     <div class="story_img">
                       <img src="app/images/story01.png" alt="image" >
                       <span>45 min ago</span>
                     </div>
                     <div class="story_text">
                         <h3>Cool features added!</h3>
                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting 
                           industry lorem Ipsum has.</p>
                         <a href="#">READ MORE</a>
                     </div>
                 </div>
             </div>
 
             <!-- story -->
             <div class="col-md-4">
                 <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                     <div class="story_img">
                       <img src="app/images/story02.png" alt="image" >
                       <span>45 min ago</span>
                     </div>
                     <div class="story_text">
                           <h3>Top rated app! Yupp.</h3>
                         <p>Simply dummy text of the printing and typesetting industry lorem Ipsum has Lorem Ipsum is.</p>
                         <a href="#">READ MORE</a>
                     </div>
                 </div>
             </div>
 
             <!-- story -->
             <div class="col-md-4">
                 <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                     <div class="story_img">
                       <img src="app/images/story03.png" alt="image" >
                       <span>45 min ago</span>
                     </div>
                     <div class="story_text">
                           <h3>Creative ideas on app.</h3>
                         <p>Printing and typesetting industry lorem Ipsum has Lorem simply dummy text of the.</p>
                         <a href="#">READ MORE</a>
                     </div>
                 </div>
             </div>
           </div>
           <!-- row end -->
       </div>
       <!-- container end -->
     </section>
     <!-- Story-Section-end -->


    <!-- News-Letter-Section-Start -->
    <section class="newsletter_section">
      <!-- container start -->
      <div class="container">
        <div class="newsletter_box">
          <div class="section_title" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
            <!-- h2 -->
            <h2>Subscribe newsletter</h2>
            <!-- p -->
            <p>Be the first to recieve all latest post in your inbox</p>
          </div>
          <form action="" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <button class="btn">SUBMIT</button>
            </div>
          </form>
        </div>
      </div>
      <!-- container end -->
    </section>
    <!-- News-Letter-Section-end -->


    <!-- Footer-Section start -->
    <footer>
      <div class="top_footer has_bg">
        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div class="row">
            <!-- footer link 1 -->
            <div class="col-lg-4 col-md-6 col-12">
              <div class="abt_side">
                <div class="logo"> <img src="app/images/footer_logo.png" alt="image"></div>
                <ul>
                  <li><a href="#">support@example.com</a></li>
                  <li><a href="#">+1-900-123 4567</a></li>
                </ul>
                <ul class="social_media">
                  <li><a href="#"><i class="icofont-facebook"></i></a></li>
                  <li><a href="#"><i class="icofont-twitter"></i></a></li>
                  <li><a href="#"><i class="icofont-instagram"></i></a></li>
                  <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                </ul>
              </div>
            </div>

            <!-- footer link 2 -->
            <div class="col-lg-3 col-md-6 col-12">
              <div class="links">
                <h3>Useful Links</h3>
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Contact us</a></li>
                </ul>
              </div>
            </div>

            <!-- footer link 3 -->
            <div class="col-lg-3 col-md-6 col-12">
              <div class="links">
                <h3>Help & Suport</h3>
                <ul>
                  <li><a href="#">FAQs</a></li>
                  <li><a href="#">Support</a></li>
                  <li><a href="#">How it works</a></li>
                  <li><a href="#">Terms & conditions</a></li>
                  <li><a href="#">Privacy policy</a></li>
                </ul>
              </div>
            </div>

            <!-- footer link 4 -->
            <div class="col-lg-2 col-md-6 col-12">
              <div class="try_out">
                <h3>Let’s Try Out</h3>
                <ul class="app_btn">
                  <li>
                    <a href="#">
                      <img src="app/images/appstore_blue.png" alt="image">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="app/images/googleplay_blue.png" alt="image">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
      </div>

      <!-- last footer -->
      <div class="bottom_footer">
        <!-- container start -->
        <div class="container">
          <!-- row start -->
          <div class="row">
            <div class="col-md-6">
              <p>© Copyrights 2022. All rights reserved.</p>
            </div>
            <div class="col-md-6">
              <p class="developer_text">Design & developed by <a href="https://themeforest.net/user/kalanidhithemes" target="blank">Kalanidhi Themes</a></p>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- container end -->
      </div>

      <!-- go top button -->
      <div class="go_top">
        <span><img src="app/images/go_top.png" alt="image"></span>
      </div>
    </footer>
    <!-- Footer-Section end -->
    
  </div>
  <!-- Page-wrapper-End -->

  <!-- custom js -->
  <script>
    function switchVideo() {
      var selectedSource = document.getElementById("video-source").value;
      var video = document.getElementById("my-video");
      if (selectedSource === "media/Speak2day_Hospitality_eng.mov") {
        video.src = document.getElementById("video-source-1").src;
      } else if (selectedSource === "media/Speak2day_Hospitality_esp.mov") {
        video.src = document.getElementById("video-source-2").src;
      }
    }

    function switchCaption() {
      var selectedSource = document.getElementById("caption-source").value;
      var video = document.getElementById("my-video");
      if (selectedSource === "captions/Speak2day_ Hospitality-eng.vtt") {
        video.textTracks[0].mode = "showing";
        video.textTracks[1].mode = "hidden";
      } else if (selectedSource === "captions/Speak2day_ Hospitality-esp.vtt") {
        video.textTracks[0].mode = "hidden";
        video.textTracks[1].mode = "showing";
      }
      // video.textTracks[0].mode = "showing";
    }
  </script>  
  <!-- Jquery-js-Link -->
  <script src="app/js/jquery.js"></script>
  <!-- owl-js-Link -->
  <script src="app/js/owl.carousel.min.js"></script>
  <!-- bootstrap-js-Link -->
  <script src="app/js/bootstrap.min.js"></script>
  <!-- aos-js-Link -->
  <script src="app/js/aos.js"></script>
  <!-- main-js-Link -->
  <script src="app/js/main.js"></script>

</body>

</html>