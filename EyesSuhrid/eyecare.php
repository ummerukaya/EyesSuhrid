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
        <li><a href="eyecon.php">eye conditions</a></li>
        <li><a href="eyecare.php" class="active">eye care</a></li>
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
	  <h1>A guid for looking after your eyes.</h1>
	  <p>Your eyes are affected by your lifestyle and health conditions elsewhere in your body. Our useful, easy to follow advice will help you to protect your vision and keep your eyes healthy throughout the year.</p>
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
					<img src="./images/screenuse.jpg" alt="">
					
					<span><i class="fa fa-thumbs-o-up"></i></span>
						
				</div>
				<div class="blog-text">
					<h2>Screen use</h2>
					<p>Many people worry that viewing a screen can damage their eyes. There is no evidence of this. In fact, because you can alter the size, brightness and contrast of the display, it can easier and more comfortable to see on a screen compared with looking at things on paper. However, some people find that looking at a screen for a long time is tiring.</p>
					<a href="screenuse.php">Read More</a>
				</div>
			</div>
			<!--items end-->
			<!--items-->
			<div class="blog-item">
				<div class="blog-img">
					<img src="./images/healthyfood.jpg" alt="">
					
						<span><i class="fa fa-thumbs-o-up"></i></span>
					
				</div>
				<div class="blog-text">
					<h2>Eat for healthy eyes</h2>
					<p>Eating a wide variety of fruit and vegetables, including dark green leaves, is good for your general health and may support good eye health. Eating healthily will help you to maintain a healthy weight, which helps keep your blood pressure under control. High blood pressure increases your risk of stroke, which happens when a blood vessel in your brain bleeds or becomes blocked.</p>
					<a href="eatforhealthyeyes.php">Read More</a>
				</div>
			</div>
			<!--items end-->
            <!--items-->
			<div class="blog-item">
				<div class="blog-img">
					<img src="./images/homeimp.jpg" alt="">
				
						<span><i class="fa fa-thumbs-o-up"></i></span>
					
				</div>
				<div class="blog-text">
					<h2>Home improvement</h2>
					<p>How to protect your eyes while carrying out DIY and what to do in case of an accident. According to the Eye Health UK, DIY activity in the home and garden is the cause of more than 20,000 eye injuries each year. Some of these have led to serious permanent eye damage and loss of sight. </p>
					<a href="homeimprovement.php">Read More</a>
				</div>
			</div>
			<!--items end-->
			<!--items-->
			<div class="blog-item">
				<div class="blog-img">
					<img src="./images/highblood.png" alt="">
					
						<span><i class="fa fa-thumbs-o-up"></i></span>
						
				</div>
				<div class="blog-text">
					<h2>High blood pressure</h2>
					<p>High blood pressure increases your risk of stroke, which happens when a blood vessel in your brain bleeds or becomes blocked. This can cause blind spots in your vision, if it is in the part of the brain that you use to see with. High blood pressure also increases the likelihood of a blood vessel in your eye bleeding.</p>
					<a href="highbloodpressure.php">Read More</a>
				</div>
			</div>
			<!--items end-->
			<!--items-->
			<div class="blog-item">
				<div class="blog-img">
					<img src="./images/healthyvision.jpg" alt="">
					
						<span><i class="fa fa-thumbs-o-up"></i></span>
					
				</div>
				<div class="blog-text">
					<h2>Maintaining your vision</h2>
					<p>Be aware of your vision in each eye separately. Many conditions appear in one eye first. If you regularly check your vision (with glasses if you need them) by covering each eye in turn, you are more likely to notice changes. If you notice changes in your vision you should contact your optometrist for advice.</p>
					<a href="maintainingyourvision.php">Read More</a>
				</div>
			</div>
			<!--items end-->
			<!--items-->
			<div class="blog-item">
				<div class="blog-img">
					<img src="./images/children.jpg" alt="">
					
						<span><i class="fa fa-thumbs-o-up"></i></span>
						
				</div>
				<div class="blog-text">
					<h2>Children eye health</h2>
					<p>Being able to see clearly is important for a child’s overall development and helps them to discover and learn about their world. Most children have excellent sight and do not need to wear glasses, but if there are problems and they are not picked up at an early age, your child may have permanently reduced.</p>
					<a href="childreneyehealth.php">Read More</a>
				</div>
			</div>
			<!--items end-->
			<!--items-->
			<div class="blog-item">
				<div class="blog-img">
					<img src="./images/interesting.jpg" alt="">
					
						<span><i class="fa fa-thumbs-o-up"></i></span>
					
				</div>
				<div class="blog-text">
					<h2>Eye facts and fiction</h2>
					<p>It is more difficult to see in the dark or in dim light than in brighter light, so you may get a headache if you read in the dark, but you will not cause yourself any harm. The membrane that covers the white of your eye also lines your eyelids, so it is impossible for a contact lens to get lost behind your eyes.</p>
					<a href="eyesfactandfiction.php">Read More</a>
				</div>
			</div>
			<!--items end-->
			<!--items-->
			<div class="blog-item">
				<div class="blog-img">
					<img src="./images/sunanduv.jpg" alt="">
					
						<span><i class="fa fa-thumbs-o-up"></i></span>
						
				</div>
				<div class="blog-text">
					<h2>Sun and UV light</h2>
					<p>If you spend time outdoors in the sunshine or on a sunbed, then you need to protect your eyes from harmful ultraviolet (UV) light. Exposure to ultraviolet (UV) light has been linked to certain eye conditions including cataract. Looking directly at the sun may cause a solar burn of the retina.</p>
					<a href="sunanduvlight.php">Read More</a>
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