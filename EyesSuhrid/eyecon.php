<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<title>Welcome to eye's suhrid</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

</head>
<body>

	<!-- navbar starts -->
	<header>
		<nav id="nav-wrap">
		<div class="logo">
			<div class="left">
			<a id="logoeye" href="index.php"><i class="fas fa-eye"></i>
		</a>
		<p>Eye's Suhrid</p>
	    </div>
	    <!--
	    <div class="logbtn">
	    	<a href="#" id="loginf" class="login">Log in</a>
	        <button class="signup" onclick="document.getElementById('login-form').style.display='block'">Signup</button> 
	    </div>

		-->
		</div>
	    <div class="menu-button">
		<a href="javascript:void(0)" id="#menu"><i class="fa fa-bars fa-2x"></i>
		</a>
	    </div>
	    <div id="navigation">
	   	<ul id="nav" class="nav">
		<li><a href="index.php">home</a></li>
        <li><a href="eyecon.php" class="active">eye conditions</a></li>
        <li><a href="eyecare.php">eye care</a></li>
        <li><a href="testeye.php">test your eyes</a></li>
        <li><a href="specialists.php">Eye Specialists</a></li>

		<?php
        if(isset($_SESSION["userid"])) {
           echo "<li><a href='profile.php'>Profile</a></li>";
            echo "<li><a href='logout.php'>logout</a></li>";
        }

        else {
            echo "<li><a href='signup.php'>Signup</a></li>";
            echo "<li><a href='login.php'>login</a></li>";
        }

        ?>
	    </ul>
	   </div>
        </nav>
            
 
	</header>
	<!-- navbar ends -->

	<!-- home section starts -->

<section id="home">
      <div id='banner' class="banner">
      	<div class="container">
      		<h1 class="banner-title">
      			<span>Your Eye Conditions</span>
      		</h1>
      		<p>everything you want to know about the eye disease you are suffering from</p>
      		<form>
      			<input type="text" class="search-input" placeholder="find the eye disease">
      			<button type="submit" class="search-btn">
      				<i class="fas fa-search"></i>
      			</button>
      		</form>
      	</div>
      </div>
      <div id='login-form'class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                    <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                </div>
                <form id='login' class='input-group-login'>
                    <input type='text'class='input-field'placeholder='Email Id' required >
		    <input type='password'class='input-field'placeholder='Enter Password' required>
		    <input type='checkbox'class='check-box'><span>Remember Password</span>
		    <button type='submit'class='submit-btn'>Log in</button>
		 </form>
		 <form id='register' class='input-group-register'>
		     <input type='text'class='input-field'placeholder='First Name' required>
		     <input type='text'class='input-field'placeholder='Last Name ' required>
		     <input type='email'class='input-field'placeholder='Email Id' required>
		     <input type='password'class='input-field'placeholder='Enter Password' required>
		     <input type='password'class='input-field'placeholder='Confirm Password'  required>
		     <input type='checkbox'class='check-box'><span>I agree to the terms and conditions</span>
                    <button type='submit'class='submit-btn'>Register</button>
	         </form>
            </div>
        </div>

</section>

<!-- home section ends -->


<!--blog starts-->
<section class="blog" id="blog">
	<div class="container">
	
		<div class="blog-content">
			<!--items-->
			<div class="blog-item">
				<div class="blog-img">
					<img src="./images/visual disturbance.jpg" alt="">
					
					<span><i class="fa fa-thumbs-o-up"></i></span>
						
				</div>
				<div class="blog-text">
					<h2>Visual Disturbance</h2>
					<p>A visual disturbance is when you experience a short spell of flashing or shimmering of light in your sight. The symptoms normally last around twenty minutes before your sight returns to normal. Usually, there is no headache during the visual disturbance.</p>
					<a href="visualdis.php">Read More</a>
				</div>
			</div>
			<!--items end-->
			<!--items-->
			<div class="blog-item">
				<div class="blog-img">
					<img src="./images/flashes.jpg" alt="">
					
						<span><i class="fa fa-thumbs-o-up"></i></span>
					
				</div>
				<div class="blog-text">
					<h2>Flashes and floaters</h2>
					<p>Flashes appear as small sparkles, lightening or fireworks usually in the extreme corners of your vision. They may come and go. Floaters are more visible in bright light, or if you are looking at a plain bright background such as a cloudless sky or white wall.</p>
					<a href="flashes.php">Read More</a>
				</div>
			</div>
			<!--items end-->
            <!--items-->
			<div class="blog-item">
				<div class="blog-img">
					<img src="./images/glucoma.jpg" alt="">
				
						<span><i class="fa fa-thumbs-o-up"></i></span>
					
				</div>
				<div class="blog-text">
					<h2>Glaucoma</h2>
					<p>Glaucoma is a group of eye diseases in which the optic nerve, which connects the eye to the brain, is damaged by the pressure of the fluid inside your eye. It can affect one or both of your eyes and can lead to sight loss if not treated. </p>
					<a href="glaucoma.php">Read More</a>
				</div>
			</div>
			<!--items end-->
			<!--items-->
			<div class="blog-item">
				<div class="blog-img">
					<img src="./images/blurred.jpg" alt="">
					
						<span><i class="fa fa-thumbs-o-up"></i></span>
						
				</div>
				<div class="blog-text">
					<h2>blurred vision</h2>
					<p>When you have blurred vision, your eyesight is less sharp and objects, images and words seem to be out of focus. Anyone can be affected by blurred vision. It could be a sign of getting older and/or needing new glasses, tiredness, or too much sun.</p>
					<a href="blurred.php">Read More</a>
				</div>
			</div>
			<!--items end-->
			<!--items-->
			<div class="blog-item">
				<div class="blog-img">
					<img src="./images/agerelatedmacular.jpg" alt="">
					
						<span><i class="fa fa-thumbs-o-up"></i></span>
					
				</div>
				<div class="blog-text">
					<h2>Age-related macular degeneration</h2>
					<p>The macula is an area at the back of your eye that is responsible for your central vision, most of your colour vision and making out fine detail. When the macula is damaged, it becomes harder to recognise faces.</p>
					<a href="armd.php">Read More</a>
				</div>
			</div>
			<!--items end-->
			<!--items-->
			<div class="blog-item">
				<div class="blog-img">
					<img src="./images/conjunctivitis.jpg" alt="">
					
						<span><i class="fa fa-thumbs-o-up"></i></span>
						
				</div>
				<div class="blog-text">
					<h2>Conjunctivitis</h2>
					<p>Conjunctivitis, or pink eye, is an inflammation of the conjunctiva, which is the clear membrane that covers the white of your eye. It may be caused by an infection, or by an allergy.</p>
					<a href="conjunc.php">Read More</a>
				</div>
			</div>
			<!--items end-->
			<!--items-->
			<div class="blog-item">
				<div class="blog-img">
					<img src="./images/diabetic.jpg" alt="">
					
						<span><i class="fa fa-thumbs-o-up"></i></span>
					
				</div>
				<div class="blog-text">
					<h2>diabetic retinopathy</h2>
					<p>If you have diabetic retinopathy, the small blood vessels in your retina leak blood and fluid into the retina – the light-sensitive layer of cells at the back of your eye. Although this does not affect your vision in the early stages, if it is left untreated it may lead to sight loss.</p>
					<a href="diabetic.php">Read More</a>
				</div>
			</div>
			<!--items end-->
			<!--items-->
			<div class="blog-item">
				<div class="blog-img">
					<img src="./images/colourblind.jpg" alt="">
					
						<span><i class="fa fa-thumbs-o-up"></i></span>
						
				</div>
				<div class="blog-text">
					<h2>colour blindness</h2>
					<p>Most ‘colour blind’ people are able to see things as clearly as other people but they have difficulty distinguishing between some colours. This may have an impact upon a child’s performance at school or on the sports field.</p>
					<a href="colorblind.php">Read More</a>
				</div>
			</div>
			<!--items end-->
			
		</div>
	</div>
</section>

<!-- blog ends -->


<!-- footer section starts  -->

<section id="footer">

    <h1>&copy; copyright @ 2021 by <span>Eye's Suhrid Team</span></h1>

</section>

<!-- footer section ends  -->


<!-- jquery/js part -->


<script>

$(".menu-button").click(function () {
	$(".nav").toggleClass("responsive");
});

 $('ul#nav li a').click(function(){
 	console.log('Clicked!')
        $(".nav").removeClass("responsive");
    });

$(document).ready(function(){

    $(window).scroll(function(){
        if($(window).scrollTop() < 20){
            $('header').css('box-shadow','none');
        }else{
            $('header').css('box-shadow','0 .2rem .5rem #333');
        }
    });

});

</script>

 <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	<script>
        var modal = document.getElementById('login-form');
        var modal1 = document.getElementById('banner');
        var log = document.getElementById('loginf');
        log.onclick= function(event){

        	if(event.target == log){
        	modal.style.display = 'block';
        	modal1.style.display = 'none';
            }
            else
            {
            	modal1.style.display = 'flex';
            }
        }
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
                modal1.style.display = 'flex';
            }
        }
    </script>
    
</body>
</html>