<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="10;url=index.html">
    <title>My Personal Profile</title>
    <link rel="icon" href="images/favicon.png" />
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="nav-container">
      <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <div class="menu">
          <ul class="nav-items">
            <li>
              <a class="nav-btn-container style1" href="Introduction.html"
                >Introduction</a
              >
            </li>
            <li>
              <a class="nav-btn-container style2" href="involvement.html"
                >Involvement</a
              >
            </li>
            <li>
              <a class="nav-btn-container style3" href="contact.html"
                >Contact Me
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="wrapper">
        <nav>
          <div>
            <a href="index.html"><img src="images/home.svg" alt="" /></a>
          </div>
          <ul class="nav-items">
            <li>
              <a class="nav-btn-container style1" href="Introduction.html"
                >Introduction</a
              >
            </li>
            <li>
              <a class="nav-btn-container style2" href="involvement.html"
                >Involvement</a
              >
            </li>
            <li>
              <a class="nav-btn-container style3" href="contact.html"
                >Contact
              </a>
            </li>
          </ul>
          <div id="main">
            <button class="openbtn" onclick="openNav()">
              <box-icon
                name="menu"
                animation="tada"
                rotate="90"
                color="#ffffff"
              ></box-icon>
            </button>
          </div>
        </nav>
      </div>
    </div>
    <div class="wrapper">
      <div class="contact">
        <h1>Thanks for Sending</h1>
        <div class="map"></div>
        <div class="pinkborder">
          <div class="form">
          <?php
            $message_sent= false;
            if(isset($_POST['email']) && $_POST['email'] !='') {
                if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

                //get data from form  
                $fname = $_POST['name']; 
                $email = $_POST['email'];
                $message = $_POST['message'];

                $to = "ibiso@itechqueen.com";                
                $subject = "Mail From Personal Website";
                $body = "Here is the Details Submitted from your Personal Page " . "\r\n\n"."First Name : ". $name . "\r\n". "Email : " . $email . "\r\n"."Message: " . $message . "\r\n";
            
                mail($to,$subject,$body);

                $message_sent= true;
                }
            }        
            ?>
                <?php
                  if ($message_sent):
                  ?>
                    <h2> Message Sent! </h2>
                    <p>&nbsp&nbsp&nbsp&nbsp We would respond to You.</p>  
                  <?php
                  else:
                  ?>  
                  <h2> Message Not Sent </h2>
                  <p> &nbsp&nbsp&nbsp&nbsp Message not Sent Due to some Errors</p>  
                  <?php
                  endif;
                  ?>      
          </div>
        </div>
        <div class="contact-image">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.1000290249094!2d151.20406401521!3d-33.861312880658325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae43b99a25b3%3A0x5073ae85775713c!2sLilyvale%2C%20The%20Rocks!5e0!3m2!1sen!2sau!4v1638932197867!5m2!1sen!2sau"
            width="100%"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
          ></iframe>
        </div>
      </div>
    </div>

    <footer>
      <div class="wrapper">
        <div class="tools">
          <p>IT Tools , System and Application Softwares Competency</p>
          <img src="images/t1.svg" alt="" />
          <img src="images/t2.png" alt="" />
          <img src="images/t3.png" alt="" />
          <img src="images/t4.png" alt="" />
          <img src="images/t5.png" alt="" />
          <img src="images/t6.png" alt="" />
          <img src="images/t7.png" alt="" />
          <img src="images/t8.png" alt="" />
          <img src="images/t9.png" alt="" />
          <img src="images/t10.png" alt="" />
          <img src="images/t11.png" alt="" />
          <img src="images/t12.png" alt="" />
          <img src="images/t13.png" alt="" />
          <img src="images/t14.png" alt="" />
          <img src="images/t15.png" alt="" />
          <img src="images/t16.png" alt="" />
          <img src="images/t17.png" alt="" />
          <img src="images/t18.png" alt="" />
          <img src="images/t19.png" alt="" />
          <img src="images/t20.png" alt="" />
        </div>
        <div class="socials">
          <p>You May Also Find Me On Social Pages</p>
          <a href="#"><img src="images/s1.png" alt="" /></a>
          <a href="#"><img src="images/s2.png" alt="" /></a>
          <a href="#"><img src="images/s3.png" alt="" /></a>
          <a href="#"><img src="images/s4.png" alt="" /></a>
          <a href="#"><img src="images/s5.png" alt="" /></a>
          <a href="#"><img src="images/s6.png" alt="" /></a>
          <a href="#"><img src="images/s7.png" alt="" /></a>
          <a href="#"><img src="images/s8.png" alt="" /></a>
        </div>

        <div class="copywrite">
          <hr />
          <p>All Right Reserved Designed By Me</p>
        </div>
      </div>
    </footer>

    <!--<script src="main.js"></script>-->
  </body>
</html>
