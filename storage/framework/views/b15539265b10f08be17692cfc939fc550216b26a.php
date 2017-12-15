<?php $__env->startSection('title'); ?>
AnggitPrayogo.com | About
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="fluid-container">
	<div class="parallax">
	  <div class="container between">
	    <div class="row">
	      
	      <center>
	      <div class="trans">
	      	<div id="trigger"></div>
	        <h1 id="title">Selamat Datang di Anggit Prayogo.com</h1>
	        <h5 id="quality">Quality is more important than quantity. One home run is much better than two doubles  - Steve Jobs</h5>
	      </div>
	      	<img src="<?php echo e(asset('images/dev.png')); ?>" alt="Anggit Prayogo" class="img img-responsive img-circle" id="dp">
	      </center>

	    </div>
	    <div class="row">
	      
	    </div>
	    </div>
	</div>
</div>

<div class="about">
	<div class="row no-margin">
		
		<div class="row">
			<div class="col-md-6 side-left">
				<div style="background-image:  url('../images/bg.jpg');" class="side-img"></div>
				<img src="" alt="">
			</div>
			<div class="col-lg-6 side-right">
				<div class="side-right-inner-content">
					<h1 style="margin-bottom: 20px;text-align: center;" class="orange-cn">About Me</h1>
					<hr width="200px" size="10px" style="border-top: 3px solid #FF5721;">
					<div class="head-title">
						<em>Saya adalah seorang freelancer web developer.</em>
					</div>
					<p>		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>
	</div>
	
</div>

<div class="bg">
	<div class="container">
		<div class="row">>
			<div class="col-sm-offset-2 col-sm-8 inner-bg">
				<h1 style="margin-bottom: 20px;text-align: center;" class="orange-cn">Have done many projects with</h1>
				<hr width="200px" size="10px" style="border-top: 3px solid #FF5721;">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
						<div class="img-box service-icon">
							<img src="<?php echo e(asset('images/laravel.png')); ?>" alt="LARAVEL" title="LARAVEL" class="img img-responsive image" draggable="false">
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
						<div class="img-box" style="">
							<img src="<?php echo e(asset('images/java.png')); ?>" alt="JAVA" title="JAVA" class="img img-responsive image" draggable="false">
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
						<div class="img-box" style="">
							<img src="<?php echo e(asset('images/php-edit.png')); ?>" alt="PHP" title="PHP"  class="img img-responsive image" draggable="false">
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
						<div class="img-box" style="">
							<img src="<?php echo e(asset('images/jQurery.gif')); ?>" alt="Jquery" title="Jquery"  class="img img-responsive image" draggable="false">
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
						<div class="img-box" style="">
							<img src="<?php echo e(asset('images/bootstrap-logo.png')); ?>" alt="Bootstrap" title="Bootstrap" class="img img-responsive image" draggable="false">
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
						<div class="img-box" style="">
							<img src="<?php echo e(asset('images/unity-e.png')); ?>" alt="Unity" title="Unity" class="img img-responsive image" draggable="false">
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
						<div class="img-box" style="">
							<img src="<?php echo e(asset('images/unity-e.png')); ?>" alt="LARAVEL" title="LARAVEL" class="img img-responsive image" draggable="false">
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
						<div class="img-box" style="">
							<img src="<?php echo e(asset('images/unity-e.png')); ?>" alt="LARAVEL" title="LARAVEL" class="img img-responsive image">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
</div>

<div class="container bg-2" style="padding-bottom: 100px;">
	<div class="col-sm-offset-2 col-sm-8 inner-bg">
		<h1 style="margin-bottom: 20px;text-align: center;" class="orange-cn">My Portofolio</h1>
		<hr width="200px" size="10px" style="border-top: 3px solid #FF5721;">
		<div class="row">
			<div class="owl-carousel owl-theme">
			  <div class="img-box"> 
			  	<img src="<?php echo e(asset('images/absensi1.png')); ?>" alt="Laravel" title="Laravel" class="img img-responsive image">
			  	<div class="middle">
				   <div class="text"><a href="">Absensi Kampus</a></div>
				</div>
			  </div>
			</div>
			<div class="owl-controls">
				<div class="owl-nav">
					<div class="owl-prev"><</div>
					<div class="owl-next">></div>
				</div>
				<div class="owl-dots" style="display: none;"></div>
			</div>
		</div>
	</div>
	
</div>


<style>
.img-box {
    position: relative;
}

#service .service-icon {
    text-align: center;
    margin-bottom: 30px;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.img-box:hover .image {
  opacity: 0.3;
}

.img-box:hover .middle {
  opacity: 1;
}

.text {
  background-color: #3498db;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}

.wow{
	visibility: visible;
    animation-duration: 1s;
    animation-name: fadeInUp;
}

.fadeInUp {
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp;
}

.owl-controls {
    margin-top: 20px;
    text-align: center;
}

.owl-nav {
    text-align: center;
    margin-top: 30px;
}

.owl-nav .owl-prev, .owl-nav .owl-next {
    font-family: "Ionicons";
    border-radius: 3px;
    background-color: rgb( 248, 91, 16 );
    width: 33px;
    height: 33px;
    color: #FFF;
    font-size: 12px;
    padding: 8px;
    display: inline-block;
    margin: 0 5px;
    position: relative;
    -webkit-transition: all ease-in-out .3s;
    -moz-transition: all ease-in-out .3s;
    -ms-transition: all ease-in-out .3s;
    -o-transition: all ease-in-out .3s;
    transition: all ease-in-out .3s;
}

.owl-controls .owl-nav .owl-prev, .owl-controls .owl-nav .owl-next, .owl-controls .owl-dot {
    cursor: pointer;
    cursor: hand;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
</style>

<script>
	
    $(document).ready(function(){
	  $(".owl-carousel").owlCarousel({
	  	rtl:true,
	    loop:true,
	    margin:10,
	    nav:true,
	    navText: ["<div class='owl-prev'><</div>","<div class='owl-prev'><</div>"],
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:2
	        },
	        1000:{
	            items:3
	        }
	    }
	  });

	});
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>