<?php require_once("header.php"); ?>

<header class="headerTop affix-top" data-spy="affix" data-offset-top="197">

<div class="small_header">
    <div class="container">
		<div class="row">
		 
			<div class="col-lg-10 col-lg-offset-1 col-md-10  col-md-offset-1 col-sm-12">
			 <div class="col-lg-3 col-md-3 col-sm-12">
				<div class="logo">
					<a href="index.php"><img class="img-responsive" src="images/log.png"></a>
				</div>
			</div>
			
			
			   <div class="col-lg-3 col-lg-offset-2 col-md-3 col-md-offset-2 col-sm-4 col-xs-7">
			      <div class="input-group srcc">
				        <span class="input-group-btn">
							<button class="btn" type="button"><i class="fas fa-search"></i></button>
						</span>
						<input class="form-control" placeholder="Search here" type="email">
						
					</div>
			   </div>
			   	<div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 pull-right text-right">
				     <div class="crt_links">
						<a class="yellow" href="login.php"><i class="fas fa-user"></i></a>
						<a class="yellow" href="#"><i class="fas fa-shopping-cart"></i></a>
					</div>
			   </div>
			</div>
		</div>
	</div>
</div>
<!--End smallHeader -->

<!-- START headerTop -->

	<div class="container">
		
		<div class="row">
			
			<div class="col-lg-10 col-lg-offset-1 col-md-10  col-md-offset-1 col-sm-12">
				<div class="navbar navbar-default">
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						
						</div>
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
						
							<li class="">
								<a href="index.php">Home <b class="caret"></b></a>				
								<ul class="megamenu row">
									<li class="dropdown-header">DISHES </li>
									<li class="col-sm-5">
										<ul>
											<div class="col-md-6 ins_ul">
												<li><a href="#">Burgers</a></li>
												<li><a href="#">Sushi</a></li>
												<li><a href="#">Pizza  </a></li>
												<li><a href="#">Tacos </a></li>
											</div>
											<div class="col-md-6 ins_ul">
												<li><a href="#">Pizza</a></li>
												<li><a href="#">Pasta</a></li>
												<li><a href="#">Poke </a></li>
												<li><a href="#">Sandwiches</a></li>
												<li><a href="#">Salads</a></li>
											</div>
										</ul>
									</li>
									<li class="col-sm-2">
										<ul>
											<div class="col-md-12 ins_ul">
												<li><a href="#">Vegan</a></li>
											    <li><a href="#">Vegetarian</a></li>
											    <li><a href="#">Gluten Free</a></li>
											</div>
											
										</ul>
									</li>
								</ul>

							</li>
						   	<li><a href="restaurant.php">RESTAURANTS</a></li>
						   <li><a href="cuisines.php">CUISINES </a></li>
						   <li><a href="services.php">SERVICES </a></li>
						   <li><a href="non-profit.php">NON-PROFITS</a></li>
						   <li><a href="about.php">ABOUT</a></li>
						</ul>
						</div>
					
					</div>
			</div>
			
		</div>
	
		
	</div>
</header>
<!-- END  headerTop -->
<!-- START Services -->
<section class="service_sec">
	<div class="container">
	 <div class="row ser_ins">
		<div class="col-md-12 col-sm-12">
		  <div class="col-md-4 col-sm-4">
		      <div class="thumbb">
			     <div class="circle">1</div>
			      <figure>
				    <img class="img-responsive" src="images/ic1.png">
				  </figure>
				  <h1>Discover</h1>				  
			  </div>
	      </div>
		  <div class="col-md-4 col-sm-4">
		      <div class="thumbb">
			      <div class="circle">2</div>
			      <figure>
				    <img class="img-responsive" src="images/ic2.png">
				  </figure>
				  <h1>Place order</h1>
			  </div>
	      </div>
		  <div class="col-md-4 col-sm-4">
		      <div class="thumbb">
			     <div class="circle">3</div>
			      <figure>
				    <img class="img-responsive" src="images/ic3.png">
				  </figure>
				  <h1>Enter location</h1>
			  </div>
	      </div>
		   <div class="col-md-4 col-sm-4">
		      <div class="thumbb">
			       <div class="circle">4</div>
			      <figure>
				    <img class="img-responsive" src="images/ic4.png">
				  </figure>
				  <h1>we deliver</h1>
			  </div>
	      </div>
		   <div class="col-md-4 col-sm-4">
		      <div class="thumbb">
			      <div class="circle">5</div>
			      <figure>
				    <img class="img-responsive" src="images/ic5.png">
				  </figure>
				  <h1>Payment</h1>
				  <span>cash on delivery</span>
			  </div>
	      </div>
		   <div class="col-md-4 col-sm-4">
		      <div class="thumbb">
			      <div class="circle">6</div>
			      <figure>
				    <img class="img-responsive" src="images/ic6.png">
				  </figure>
				  <h1>Review</h1>
			  </div>
	      </div>
	    </div>
	  </div>
	</div>
</section>
<!-- END Services -->


<!-- START jS -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>

	  
<!-- START jQuery WOW -->
<script src="js/wow.js"></script>
<script>
wow = new WOW(
  {
	animateClass: 'animated',
	offset:       100,
	callback:     function(box) {
	  console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
	}
  }
);
wow.init();
// document.getElementById('moar').onclick = function() {
//   var section = document.createElement('section');
//   section.className = 'section--purple wow fadeInDown';
//   this.parentNode.insertBefore(section, this);
// };
</script>
<!-- END jQuery WOW -->

<!-- START testimonials -->	
   <script>
            jQuery(document).ready(function($) {
              var owl = $('#testimonials');
              owl.on('initialize.owl.carousel initialized.owl.carousel ' +
                'initialize.owl.carousel initialize.owl.carousel ' +
                'resize.owl.carousel resized.owl.carousel ' +
                'refresh.owl.carousel refreshed.owl.carousel ' +
                'update.owl.carousel updated.owl.carousel ' +
                'drag.owl.carousel dragged.owl.carousel ' +
                'translate.owl.carousel translated.owl.carousel ' +
                'to.owl.carousel changed.owl.carousel',
                function(e) {
                  $('.' + e.type)
                    .removeClass('secondary')
                    .addClass('success');
                  window.setTimeout(function() {
                    $('.' + e.type)
                      .removeClass('success')
                      .addClass('secondary');
                  }, 500);
                });
              owl.owlCarousel({
                loop: true,
                nav: true,
                lazyLoad: true,
                margin: 15,
                video: true,
				autoplay: true,
				autoplayTimeout: 2000,
				responsiveClass: true,
				
                responsive: {
                  0: {
                    items: 2
                  },
                  600: {
                    items: 3
                  },
                  960: {
                    items: 5,
                  },
                  1200: {
                    items: 7
                  }
                }
              });
            });
          </script>		  
<!-- End testimonials -->	

<!-- START FAQ -->


<script>
if ($(document).width() < 768) {
	$('.dropdown-toggle').click(function(e) {
	    e.preventDefault();
		if ($(document).width() > 768){
			var url = $(this).attr('href');
			if (url !== '#') {
			  window.location.href = url;
			}
		}
	});
}else{
	$('.dropdown-toggle').click(function(e) {
	    e.preventDefault();
		window.location = $(this).attr('href');
	});
}
</script>


<script>
function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('glyphicon-plus glyphicon-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);
</script>
<?php require_once("footer.php"); ?>