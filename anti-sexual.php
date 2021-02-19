<?php
include("./admin/db/db.php");
$sql = "SELECT * FROM slider_img";
$result = $conn->query($sql);
$msg = "";
$sql1 = "SELECT * FROM course";
$resultc = $conn->query($sql1);
$msg = "";
$sqlt = "SELECT * FROM staff";
$result2 = $conn->query($sqlt);
$msg = "";
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Evenings College</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <style>
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu a::after {
  transform: rotate(-90deg);
  position: absolute;
  right: 6px;
  top: .8em;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-left: .1rem;
  margin-right: .1rem;
}

  </style>
  </head>
  <body>
	  <div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center py-4">
    			<img src="./images/logo.png" style="width:40%;" alt="">	<a class="navbar-brand" href="index.html">Evening. <span>College</span></a>
    			</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
					    	<div class="text">
					    		<span>Email</span>
						    	<span>youremail@email.com</span>
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <div class="text">
						    	<span>Call</span>
						    	<span>Call Us: + 1235 2355 98</span>
						    </div>
					    </div>
					    <div class="col-md topper d-flex align-items-center justify-content-end">
					    	<p class="mb-0">
					    		<a href="#" class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
					    			<span>Apply now</span>
					    		</a>
					    	</p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
<!-- nav begin -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">JJEDC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About JJEDC
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="#">Overview</a></li>
          <li><a class="dropdown-item" href="#">Vision And Mission</a></li>
          <li><a class="dropdown-item" href="#">About JJEI</a></li>
          <li><a class="dropdown-item" href="#">Governing Council</a></li>
          <li><a class="dropdown-item" href="#">Management Team</a></li>
          <li><a class="dropdown-item" href="#">videos</a></li>
         
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Academics
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="#">Course Offered</a></li>
          <li><a class="dropdown-item" href="#">Department</a></li>
          <li><a class="dropdown-item" href="#">Examination</a></li>
          
         
        </ul>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Student Corner
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <li class="dropdown-submenu">
               <a class="dropdown-item dropdown-toggle" href="#">Safety Cells</a>
               <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="#">Anti-Ragging Cell</a></li>
                 <li><a class="dropdown-item" href="#">Anti-Sexual harassment Cell</a></li>
                  <li><a class="dropdown-item" href="#">Grievance Cell</a></li>
                </ul>
          </li>
          <li><a class="dropdown-item" href="#">Counselling</a></li>
          <li><a class="dropdown-item" href="#">PTM and Mentoring</a></li>
          
         
          <li class="dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle" href="#">Other Cells</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Human Rights Awareness Cell</a></li>
                 
                  </ul>
          </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Activities
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="#">Seminars</a></li>
          <li><a class="dropdown-item" href="#">Study Centres</a></li>
          <li><a class="dropdown-item" href="#">Cultural</a></li>
          <li><a class="dropdown-item" href="#"> Sports</a></li>
          <li><a class="dropdown-item" href="#">Youth Red Cross</a></li>
          
         
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Facilities
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="#">Classroom</a></li>
          <li><a class="dropdown-item" href="#">Activities hall </a></li>
          <li><a class="dropdown-item" href="#">Library</a></li>
          <li><a class="dropdown-item" href="#"> Canteen</a></li>
          <li><a class="dropdown-item" href="#">Computer Lab </a></li>
          
         
        </ul>
      </li>
    </ul>
  </div>
</nav>

    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
	  <?php
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    // echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
                                    ?>
                                     <div class="slider-item" style="background-image:url(./admin/img/<?php  echo $row["path"];?>);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Examination</h1>
            <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
            <!-- <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p> -->
          </div>
        </div>
        </div>
	  </div>
                                    <?php
                                }
                            } else {
                                echo "0 results";
                            }
                            
                            $conn->close();
                            ?>
<!-- 

      <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">University, College School Education</h1>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
          </div>
        </div>
        </div>
      </div> -->
    </section>

    <section class="ftco-services ftco-no-pb">
    
			<div class="container-wrap">
		

          <div class="col-md-12  no-gutters d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="container-fluid">
                                              <div class="card ">
                                    <div class="card-header">
                                    <h1 class="heading">Anti-Sexual Harassment cell</h1>
                                    </div>
                                    <div class="card-body">
                                    <img class="card-img-top img-fluid"  src="" alt="Card image cap">
                                      <p class="text-justify"><br>
                                      Sexual harassment is perceived to violate an individual’s dignity. It has ruined countless innocent lives and careers.
The responsibility of universities and colleges as modern educational institutions is not only to treat women students
and all youth regardless of gender as citizens who have a right to safety but to assist them physically, emotionally
and intellectually to claim that right and seek to expand its contours. <br> <h4>The following is also sexual harassment and is covered by the committee</h4> <br>
 <ul><br>
    <li>Unsavory remarks </li><br><li>Jokes causing or likely to cause awkwardness or embarrassment</li><br> <li> Innuendos and taunts</li><li>  Gender based insults or sexist remarks</li>
    <li>Unwelcome sexual overtone in any manner such as over telephone and the like.</li>
    <li> Touching or brushing against any part of the body and the like.</li>
    <li> Displaying pornographic or other offensive or derogatory pictures, cartoons, pamphlets or sayings.</li>
    <li>Forcible physical touch or molestation</li>
    <li>Physical confinement against one’s will and any other act likely to violate one’s privacy</li>
</ul> 
<h4>STEPS TO TAKE IF BEING SEXUALLY HARASSED </h4>
<ol><li>  Know your rights</li>
<li> Do not blame yourself</li>
<li> Do not ignore it</li>
<li> Do not delay</li>
<li> Do not hesitate to ask for help</li></ol>
<br>
Anti Sexual Harassment Cell assures all the complaints of the students, teaching and non – teaching staffs
are treated with dignity and respect and the complaints will be maintained confidential.
Committee Responsibilities: Various activities are conducted to students in order to bring awareness
about the concept by organizing seminars, questionnaires and self defense programmes in college.
</p><br>
<br>
<p><b>Member:B R Divya Shree</b></p><br>
<p><b>Student Member: Prashanth K V &amp; Shwetha K</b></p>

                                    </div>
                                    <div class="card-footer text-muted">
                                    Jnana Jyothi Educational Institution believes in the principles of ‘Work is
                                                    Worship’ and ‘Giving Back to Society’.
                                    </div>
                                    </div>

               </div>      
          </div>


     
          </div>
          
           
          </div>
   
          </div>
          <!-- <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-diploma"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Governing Council</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div> -->

          <!-- <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-books"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Management Team</h3>
                <p>Jnana Jyothi Educational Institution was established in the year 2002, as one of the pioneer
Institution in North Bengaluru, with a vision of providing quality education preparing the
students to the intellect in this competitive world. We offer schooling from Pre -KG to PG and
UG in Evening. Eventually our Institution is achieving summits under the grace of his holiness
Sri Sri Shivakumara Swamiji, Siddaganga Mutt.</p>
<a href="#">Read More</a>
              </div>
            </div>      
          </div> -->
        </div>
		
		</section>
		
		
		

		



		


    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_5.jpg);" data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-end">
    			<div class="col-md-6 py-5 px-md-5">
    				<div class="py-md-5">
		          <div class="heading-section heading-section-white ftco-animate mb-5">
		            <h2 class="mb-4">Request A Quote</h2>
		            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
		          </div>
		          <form action="#" class="appointment-form ftco-animate">
		    				<div class="d-md-flex">
			    				<div class="form-group">
			    					<input type="text" class="form-control" placeholder="First Name">
			    				</div>
			    				<div class="form-group ml-md-4">
			    					<input type="text" class="form-control" placeholder="Last Name">
			    				</div>
		    				</div>
		    				<div class="d-md-flex">
		    					<div class="form-group">
			    					<div class="form-field">
		        					<div class="select-wrap">
		                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                    <select name="" id="" class="form-control">
		                    	<option value="">Select Your Course</option>
		                      <option value="">Art Lesson</option>
		                      <option value="">Language Lesson</option>
		                      <option value="">Music Lesson</option>
		                      <option value="">Sports</option>
		                      <option value="">Other Services</option>
		                    </select>
		                  </div>
			              </div>
			    				</div>
		    					<div class="form-group ml-md-4">
			    					<input type="text" class="form-control" placeholder="Phone">
			    				</div>
		    				</div>
		    				<div class="d-md-flex">
		    					<div class="form-group">
			              <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
			            </div>
			            <div class="form-group ml-md-4">
			              <input type="submit" value="Request A Quote" class="btn btn-primary py-3 px-4">
			            </div>
		    				</div>
		    			</form>
		    		</div>
    			</div>
        </div>
    	</div>
    </section>

		

		

		

		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script>
$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
  }
  var $subMenu = $(this).next('.dropdown-menu');
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass('show');
  });


  return false;
});
  </script>
  </body>
</html>