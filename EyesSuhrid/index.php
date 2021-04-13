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
			<a id="logoeye"><i class="fas fa-eye"></i>
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
		<li><a href="#home" class="active">home</a></li>
        <li><a href="eyecon.php">eye conditions</a></li>
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
      <div id="banner" class="eyecareabout">
      <div class="title">
	  <h1>About Our Purpose and Work</h1>
	  <p>From this website, you can learn some of the most common eye diseases and some of the ways to detect them. These include mild eye diseases like pink eye, and also more serious eye conditions that can lead to vision loss like macular degeneration and glaucoma. Meanwhile you can find the symptoms of some of the most common eye problems and can get the contact informations of your nearest eye specialists.</p>
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

<!-- home blog pages starts-->

<section id="homeblog">
	<div class="container homeblog-wrap">
		<div class="homeblog-about">
			<h2><a href="eatforhealthyeyes.php">Eat for healthy eyes</a></h2>
			<p>Eating a wide variety of fruit and vegetables, including dark green leaves, is good for your general health and may support good eye health. Eating healthily will help you to maintain a healthy weight, which helps keep your blood pressure under control.</p>
		</div>
		<div class="homeblog-img">
			<img src="./images/healthyfood.jpg" alt="">
		</div>
	</div>
	<div class="container homeblog-wrap">
		<div class="homeblog-about">
			<h2><a href="screenuse.php">Screen use</a></h2>
			<p>Many people worry that viewing a screen can damage their eyes. There is no evidence of this. In fact, because you can alter the size, brightness and contrast of the display, it can easier and more comfortable to see on a screen compared with looking at things on paper.</p>
		</div>
		<div class="homeblog-img">
			<img src="./images/screenuse.jpg" alt="">
		</div>
	</div>
	<div class="container homeblog-wrap">
		<div class="homeblog-about">
			<h2><a href="highbloodpressure.php">High blood pressure</a></h2>
			<p>High blood pressure increases your risk of stroke, which happens when a blood vessel in your brain bleeds or becomes blocked. This can cause blind spots in your vision, if it is in the part of the brain that you use to see with.</p>
		</div>
		<div class="homeblog-img">
			<img src="./images/highblood.png" alt="">
		</div>
	</div>

	<div class="container homeblog-wrap">
		<div class="homeblog-about">
			<h2><a href="maintainingyourvision.php">Maintaining your vision</a></h2>
			<p>Be aware of your vision in each eye separately. Many conditions appear in one eye first. If you regularly check your vision (with glasses if you need them) by covering each eye in turn, you are more likely to notice changes.</p>
		</div>
		<div class="homeblog-img">
			<img src="./images/healthyvision.jpg" alt="">
		</div>
	</div>

	<div class="container homeblog-wrap">
		<div class="homeblog-about">
			<h2><a href="visualdis.php">Visual Disturbance</a></h2>
			<p>A visual disturbance is when you experience a short spell of flashing or shimmering of light in your sight. The symptoms normally last around twenty minutes before your sight returns to normal. Usually, there is no headache during the visual disturbance.</p>
		</div>
		<div class="homeblog-img">
			<img src="./images/visual disturbance.jpg" alt="">
		</div>
	</div>

	<div class="container homeblog-wrap">
		<div class="homeblog-about">
			<h2><a href="glaucoma.php">Glaucoma</a></h2>
			<p>Glaucoma is a group of eye diseases in which the optic nerve, which connects the eye to the brain, is damaged by the pressure of the fluid inside your eye. It can affect one or both of your eyes and can lead to sight loss if not treated.</p>
		</div>
		<div class="homeblog-img">
			<img src="./images/glucoma.jpg" alt="">
		</div>
	</div>
	<div class="container homeblog-wrap">
		<div class="homeblog-about">
			<h2><a href="blurred.php">blurred vision</a></h2>
			<p>When you have blurred vision, your eyesight is less sharp and objects, images and words seem to be out of focus. Anyone can be affected by blurred vision. It could be a sign of getting older and/or needing new glasses, tiredness, or too much sun.</p>
		</div>
		<div class="homeblog-img">
			<img src="./images/blurred.jpg" alt="">
		</div>
	</div>
	<div class="container homeblog-wrap">
		<div class="homeblog-about">
			<h2><a href="armd.php">Age-related macular degeneration</a></h2>
			<p>High blood pressure increases your risk of stroke, which happens when a blood vessel in your brain bleeds or becomes blocked. This can cause blind spots in your vision, if it is in the part of the brain that you use to see with.</p>
		</div>
		<div class="homeblog-img">
			<img src="./images/agerelatedmacular.jpg" alt="">
		</div>
	</div>
	
</section>
<!-- home blog pages ends -->

<section class="team" id="team">
	<div class="container">
		<div class="title">
			<h2>Meet The Team</h2>
		</div>
		<div class="team-content">
			<!--items-->
			<div class="team-item">
				<div class="team-img">
					<img src="./images/farjana (2).jpg" alt="">
				</div>
				<div class="team-text">
					<h2>Farjana Akter</h2>
					<p>A student of Computer Science And Engineering at Daffodil International University and interested in Programming.</p>
				</div>
				<div class="icons">
                   <a href="#" class="fab fa-facebook"></a>
                   <a href="#" class="fab fa-twitter"></a>
                   <a href="#" class="fab fa-github"></a>
                   <a href="#" class="fab fa-linkedin"></a>
                </div>
			</div>
			<!--items end-->
			<!--items-->
			<div class="team-item">
				<div class="team-img">
					<img src="./images/sefuda.jpg" alt="">
				</div>
				<div class="team-text">
					<h2>Md Shafiul Alam</h2>
					<p>A student of Computer Science And Engineering at Daffodil International University.</p>
				</div>
				<div class="icons">
                  <a href="#" class="fab fa-facebook"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-github"></a>
                  <a href="#" class="fab fa-linkedin"></a>
                </div>
			</div>
			<!--items end-->
			
			<!--items-->
			<div class="team-item">
				<div class="team-img">
					<img src="./images/suny.jpg" alt="">
				</div>
				<div class="team-text">
					<h2>Umme Rukaya Suny</h2>
					<p>A current student of Computer Science And Engineering at Daffodil International University and also a member of DIU ACM.</p>
				</div>
				<div class="icons">
                  <a href="#" class="fab fa-facebook"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="https://github.com/ummerukaya" class="fab fa-github"></a>
                  <a href="#" class="fab fa-linkedin"></a>
                </div>
			</div>
			<!--items end-->
        </div>
    </div>
</section>

<!-- contact section starts  -->

<section id="contact">
<div class="sup">
<h1>Support</h1>
</div>
<p class="para">For more info and support contact us</p>

<div class="wrapper">

<div class="info">

    <div class="item">
        <h2><i class="fas fa-map-marker-alt"></i> Address </h2>
        <p>Dhaka,<br>
            Bangladesh  
        </p>
    </div>

    <div class="item">
        <h2><i class="fas fa-envelope"></i> E-mail </h2>
        <p>teameyesuhrid@gmail.com</p>
    </div>

    <div class="item">
        <h2><i class="fas fa-phone"></i> Phone </h2>
        <p>+8801923400578</p>
    </div>

</div>

<form action="">

    <div class="inputBox">
        <h3>full name</h3>
        <input type="text">
    </div>

    <div class="inputBox">
        <h3>e-mail</h3>
        <input type="email">
    </div>

    <div class="inputBox">
        <h3>message</h3>
        <textarea name="" id="" cols="30" rows="10"></textarea>
    </div>

    <input type="submit" value="send">

</form>

</div>


</section>

<!-- contact section ends  -->
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




