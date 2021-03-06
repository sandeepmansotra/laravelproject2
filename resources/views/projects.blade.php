@extends('layout')
@section('content')

<div id="content-wrapper">

      <div class="container">


        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/">Home</a>
          </li>
          <li class="breadcrumb-item active">Your Account</li>
        </ol>
        <div class="jumbotron">
        <!-- Icon Cards-->
        <div class="row">

          <div class="col-xxl-6 col-sm-12 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class=" btn btn-primary card-body">
                <a class="text-light mr-5" href="/projects/{{Auth::user()->id}}">LOGIN & SECURITY</a>
              </div>
              <a class=" btn btn-sucess card-footer text-white clearfix large z-1 float-center" href="/projects/{{Auth::user()->id}}">
                Edit login, name and mobile number
              </a>
            </div>
          </div>

          <div class="col-xxl-6 col-sm-12 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class=" btn btn-primary card-body">
                <a class="text-light mr-5" href="/address">YOUR ADDRESS</a>
              </div>
              <a class=" btn btn-sucess card-footer text-white clearfix large z-1 float-center" href="/address">Edit address for orders</a>
            </div>
          </div>

          <div class="col-xxl-6 col-sm-12 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class=" btn btn-primary card-body">
                <a class="text-light mr-5" href="/csoon">YOUR ORDERS</a>
              </div>
              <a class=" btn btn-sucess card-footer text-white clearfix large z-1 float-center" href="/csoon">Track, return, or buy things again</a>
            </div>
          </div>

          <div class="col-xxl-6 col-sm-12 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class=" btn btn-primary card-body">
                <a class="text-light mr-5" href="/csoon">PREMIUM MEMBERSHIP</a>
              </div>
              <a class=" btn btn-sucess card-footer text-white clearfix large z-1 float-center" href="/csoon">View benifits of premium membership</a>
            </div>
          </div>

        </div>
     </div>

     <!-- Footer -->

  	<footer class="footer">
  		<div class="container">
  			<div class="row">

  				<div class="col-lg-3 footer_col">
  					<div class="footer_column footer_contact">
  						<div class="logo_container">
  							<div class="logo"><a href="#">OneTech</a></div>
  						</div>
  						<div class="footer_title">Got Question? Call Us 24/7</div>
  						<div class="footer_phone">+91  9149665892</div>
  						<div class="footer_contact_text">
  							<p>Lovely Professional University</p>
  							<p>Phagwara, Punjab, India</p>
  						</div>
  						<div class="footer_social">
  							<ul>
  								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
  								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
  								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
  								<li><a href="#"><i class="fab fa-google"></i></a></li>
  								<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
  							</ul>
  						</div>
  					</div>
  				</div>

  				<div class="col-lg-2 offset-lg-2">
  					<div class="footer_column">
  						<div class="footer_title">Find it Fast</div>
  						<ul class="footer_list">
  							<li><a href="#">Computers & Laptops</a></li>
  							<li><a href="#">Cameras & Photos</a></li>
  							<li><a href="#">Hardware</a></li>
  							<li><a href="#">Smartphones & Tablets</a></li>
  							<li><a href="#">TV & Audio</a></li>
  						</ul>
  						<div class="footer_subtitle">Gadgets</div>
  						<ul class="footer_list">
  							<li><a href="#">Car Electronics</a></li>
  						</ul>
  					</div>
  				</div>

  				<div class="col-lg-2">
  					<div class="footer_column">
  						<ul class="footer_list footer_list_2">
  							<li><a href="#">Video Games & Consoles</a></li>
  							<li><a href="#">Accessories</a></li>
  							<li><a href="#">Cameras & Photos</a></li>
  							<li><a href="#">Hardware</a></li>
  							<li><a href="#">Computers & Laptops</a></li>
  						</ul>
  					</div>
  				</div>

  				<div class="col-lg-2">
  					<div class="footer_column">
  						<div class="footer_title">Customer Care</div>
  						<ul class="footer_list">
  							<li><a href="#">My Account</a></li>
  							<li><a href="#">Order Tracking</a></li>
  							<li><a href="#">Wish List</a></li>
  							<li><a href="#">Customer Services</a></li>
  							<li><a href="#">Returns / Exchange</a></li>
  							<li><a href="#">FAQs</a></li>
  							<li><a href="#">Product Support</a></li>
  						</ul>
  					</div>
  				</div>

  			</div>
  		</div>
  	</footer>

  	<!-- Copyright -->

  	<div class="copyright">
  		<div class="container">
  			<div class="row">
  				<div class="col">

  					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
  						<div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  </div>
  						<div class="logos ml-sm-auto">
  							<ul class="logos_list">
  								<li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
  								<li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
  								<li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
  								<li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
  							</ul>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="styles/bootstrap4/popper.js"></script>
  <script src="styles/bootstrap4/bootstrap.min.js"></script>
  <script src="plugins/greensock/TweenMax.min.js"></script>
  <script src="plugins/greensock/TimelineMax.min.js"></script>
  <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
  <script src="plugins/greensock/animation.gsap.min.js"></script>
  <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
  <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
  <script src="plugins/slick-1.8.0/slick.js"></script>
  <script src="plugins/easing/easing.js"></script>
  <script src="js/custom.js"></script>
@endsection
