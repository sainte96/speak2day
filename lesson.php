    <?php require 'inc/translate_lib.php'; ?>
    <?php require 'inc/header.php'; ?>
    <?php 
      if (isset($_GET['lan'])) {
        $lan= $_GET['lan'];
        if ($lan== 'uk') {
          $flag= 'img/uk.webp';   
        }elseif ($lan== 'es') {
          $flag= 'img/esp.svg';   
        }else{
          $flag= 'img/us.svg'; 
        }
      }else{
        $lan= 'en';
        $flag= 'img/us.svg'; 
      }

      // Translate text from english to french.
      $result_welcome = $translate->translate('Welcome', [
          'target' => $lan
      ]);
      $result_lesson_topic = $translate->translate('Lesson 1: Hospitality', [
          'target' => $lan
      ]);
      $result_home = $translate->translate('Home', [
          'target' => $lan
      ]);
      $text= 'hello';
     ?>


    <!-- BredCrumb-Section -->
    <div class="bred_crumb">
      <div class="container">
        <!-- shape animation  -->
        <span class="banner_shape1"> <img src="app/images/banner-shape1.png" alt="image" > </span>
        <span class="banner_shape2"> <img src="app/images/banner-shape2.png" alt="image" > </span>
        <span class="banner_shape3"> <img src="app/images/banner-shape3.png" alt="image" > </span>

        <div class="bred_text">
          <h6 style="color: white;"><?php echo $result_welcome['text'] ?> <?php echo ucwords($_GET['test']) ?> <img src="<?php echo $flag; ?>" style="width: 20px;"></h6>
          <h1><?php echo $result_lesson_topic['text'] ?></h1>
          <ul>
            <li><a href="./"><?php echo $result_home['text'] ?></a></li>
            <li><span>»</span></li>
            <li><a href="#"><?php echo $result_lesson_topic['text'] ?></a></li>
          </ul>
          <!-- <div class="search_bar">
            <form action="">
                <div class="form-group">
                    <input type="text" placeholder="Search here" class="form-control">
                    <button class="btn" type="submit"><i class="icofont-search-1"></i></button>
                </div>
            </form>
          </div> -->
        </div>
      </div>
    </div>

    <!-- Story-Section-Start -->
    <section class="row_am latest_story blog_list_story" id="blog">
      <!-- container start -->
      <div class="container">
          <!-- row start -->
          <div class="row">
            <!-- story -->
            <div class="col-md-4">
                <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                    <div class="story_img">
                      <img src="img/bed.png" alt="image" >
                      <!-- <span>45 min ago</span> -->
                    </div>
                    <div class="story_text">
                        <h3 id="item1">Bedroom</h3>
<!--                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting 
                          industry lorem Ipsum has.</p> -->
                        <img id="myButton" src="<?php echo $flag; ?>" style="width: 20px;">
                        <i id="result"></i>
                    </div>
                </div>
            </div>

            <!-- story -->
            <div class="col-md-4">
                <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                    <div class="story_img">
                      <img src="img/lobby.jpg" alt="image" >
                      <!-- <span>45 min ago</span> -->
                    </div>
                    <div class="story_text">
                          <h3 id="item2">Lobby</h3>
                        <!-- <p>Simply dummy text of the printing and typesetting industry lorem Ipsum has Lorem Ipsum is.</p> -->
                        <img id="myButton2" src="<?php echo $flag; ?>" style="width: 20px;">
                        <i id="result2"></i>
                    </div>
                </div>
            </div>

            <!-- story -->
            <div class="col-md-4">
                <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                    <div class="story_img">
                      <img src="img/food.jpg" alt="image" >
                      <!-- <span>45 min ago</span> -->
                    </div>
                    <div class="story_text">
                          <h3 id="item3">Food</h3>
                        <!-- <p>Printing and typesetting industry lorem Ipsum has Lorem simply dummy text of the.</p> -->
                        <img id="myButton3" src="<?php echo $flag; ?>" style="width: 20px;">
                        <i id="result3"></i>
                    </div>
                </div>
            </div>
           
            
          </div>
          <!-- row end -->

          <!-- Pagination -->
          <div class="pagination_block">
            <ul>
              <li><a href="#" class="prev"><i class="icofont-arrow-left"></i> Prev</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#" class="active">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">6</a></li>
              <li><a href="#" class="next">Next <i class="icofont-arrow-right"></i></a></li>
            </ul>
          </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          $("#myButton").click(function(){
            $("#result").html('Loading...'); // Show the loading text
            $.ajax({
              url: "core.php", // The URL of the PHP file containing the text
              type: "POST",
              data: {
                text: $("#item1").text(),
                lan:'<?php echo $lan; ?>'
              },
              success: function(data){
                $("#result").html(data); // Replace the loading text with the text from the PHP file
              },
              error: function(){
                alert("Error getting text"); // Show an error message if there was an error getting the text
              }
            });
          });
        });

        $(document).ready(function(){
          $("#myButton2").click(function(){
            $("#result2").html('Loading...'); // Show the loading text
            $.ajax({
              url: "core.php", // The URL of the PHP file containing the text
              type: "POST",
              data: {
                text: $("#item2").text(),
                lan:'<?php echo $lan; ?>'
              },
              success: function(data){
                $("#result2").html(data); // Replace the loading text with the text from the PHP file
              },
              error: function(){
                alert("Error getting text"); // Show an error message if there was an error getting the text
              }
            });
          });
        });

        $(document).ready(function(){
          $("#myButton3").click(function(){
            $("#result3").html('Loading...'); // Show the loading text
            $.ajax({
              url: "core.php", // The URL of the PHP file containing the text
              type: "POST",
              data: {
                text: $("#item3").text(),
                lan:'<?php echo $lan; ?>'
              },
              success: function(data){
                $("#result3").html(data); // Replace the loading text with the text from the PHP file
              },
              error: function(){
                alert("Error getting text"); // Show an error message if there was an error getting the text
              }
            });
          });
        });
      </script>
    <!-- Footer-Section start -->
    <?php require 'inc/footer.php'; ?>