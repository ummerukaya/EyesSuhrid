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
	    <div class="logbtn">
	    	
	       <!-- <button class="signup" onclick="document.getElementById('login-form').style.display='block'">Signup</button> -->
	    </div>
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

<!--about starts -->

<section id="aboutdisease">
	<div class="container aboutdis">
		<p>If you spend time outdoors in the sunshine or on a sunbed, then you need to protect your eyes from harmful ultraviolet (UV) light. Exposure to ultraviolet (UV) light has been linked to certain eye conditions including cataract, and there may be a link between exposure to UV light and age-related macular degeneration (AMD).</p>

<h2>Protecting your eyes from the sun</h2>
<p>If you are spending time outdoors, especially in the summer or on holidays abroad, make sure that you and your children have good quality, dark sunglasses with UV protection. Look for the British Standard (BS EN ISO 12312-1:2013) or the CE mark, which is the manufacturer’s assurance that the sunglasses have been made to the appropriate safety standards. You can also protect your eyes by making sure to wear a hat with a brim or a sun visor in bright sunlight. You will need stronger protection if you are taking part in winter sports.<br>

Scientific studies have shown that children who spend time outdoors are less likely to be short-sighted, and some eye problems are linked to unhealthy lifestyles. So don’t stop your child exercising outdoors – just make sure their eyes are properly protected.</p>

<h2>Tanning Beds</h2>
<p>Sunbeds have been linked to skin cancer, so they are best avoided. They can produce high UV levels, which can cause serious damage to the outer and internal structures of the eye and eyelids such as benign eye growths (pterygium) or cataracts. Most health experts advise against using tanning beds but if you do use them, make sure that you protect your eyes with tanning goggles or ‘winkies’ (small circular stickers that can be rolled into a cone and placed over the eye). These should fit well and be without any damage and make sure that they are secured with a strap if you are using a stand-up bed. Just closing your eyes doesn’t offer full protection.</p>

<h2>Viewing an eclipse</h2>
<p>Looking directly at the sun may cause a solar burn of the retina.</p>

<h3>How can I view the solar eclipse safely?</h3>
<ul>
<li>Don’t look directly at the sun, even with sunglasses on – they don’t offer enough protection.</li>
<li>Don’t watch it directly through a telescope, binoculars, camera or camera phone. Even if you are just lining up the projection, this still puts you at risk.</li>
<li>Do use the pinhole projection method.</li>
<li>If you must view the eclipse directly, use ‘eclipse glasses’ with specially designed solar filters (bearing the CE logo). Make sure you check the surface to ensure they are not scratched before use.</li></ul>
<h3>What is a pinhole projector?</h3>



<p>A pinhole projector (see diagram above) involves putting a hole in a piece of card, and holding the card up with your back to the sun so that an image of the sun is projected onto another piece of paper or card. This will allow you to see the progress of the eclipse without damaging your eyes.

You will need:</p>
<ul>
<li>one piece of stiff card</li>
<li>one sheet of white paper</li>
<li>a drawing pin.
<ol>
<li>Make a small hole in the card using the pin and hold the card in front of the sun.</li>
<li>Hold the paper at a distance in front of the card – the sun will project through your pinhole on to the paper screen.</li>
<li>Adjust the distance between the card and paper to make the image of the sun larger but remember, your back should always face the sun and don’t look through the pinhole.</li></li></ol></ul>
<h3>Are there other ways to watch the eclipse?</h3>
<p>Watching a webcam or television broadcast is an easy and safe alternative to using a pinhole projector.</p>

<h3>What if I accidentally look at the sun?</h3>
<p>If you accidentally look at the sun during the solar eclipse and you have concerns about the health of your eyes, please contact your optometrist.</p>
    </div>
</section>
<!--about ends-->


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
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>


