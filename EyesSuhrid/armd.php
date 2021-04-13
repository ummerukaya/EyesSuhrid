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

<!--about starts -->

<section id="aboutdisease">
	<div class="container aboutdis">
		<h2>What is AMD?</h2>
<p>Age-related macular degeneration (AMD) is the leading cause of sight loss in the UK – affecting more than 600,000 people. However, most people with AMD can see well enough to get around.<br><br>

The macula is an area at the back of your eye that is responsible for your central vision, most of your colour vision and making out fine detail. When the macula is damaged, it becomes harder to recognise faces, or to read or watch television. However, the edge of your vision (peripheral vision) is not normally affected.<br><br>

There are two stages in AMD:</p>

<h2>Early AMD</h2>
<p>Early AMD is always dry AMD. This is when yellow deposits, known as drusen, build up behind the macula. Most people with early AMD have near normal vision. There is no treatment for early AMD. It is important to note that many people with early AMD do not progress to late AMD and will not develop sight loss.</p>

<h2>Late AMD</h2>
<p>Late AMD can ‘wet’ or ‘dry’. Around 10-15% of people with early AMD will develop wet AMD. This develops when abnormal blood vessels grow under the macula and leak blood or fluid, which leads to scarring and rapid loss of central vision. Wet AMD can develop very suddenly but it can now be treated if caught quickly. Fast referral to a hospital specialist is essential.<br><br>

Late dry AMD is called geographic atrophy and is quite rare. This is where you lose vision because the retina at your macula thins but there are no leaking blood vessels. There is no treatment for geographic atrophy.</p>

<h2>Who is affected by AMD?</h2>
<p>The older we are the greater our risk of developing AMD. Around one in every 200 people has AMD at 60. However, by the age of 90 it affects one person in five. We are all living longer so the number of people affected is increasing. You are more at risk of developing AMD if you have a family history of the condition or already have it in one eye. </p>

<h2>What are the symptoms of AMD?</h2>
<p>Here are some of the symptoms of AMD:</p>
<ul>
<li>Straight lines may appear distorted or bent.</li>

<li>Spots or smudges may appear in your vision.</li>
<li>Bright light may be more uncomfortable.</li>
<li>Eyes having difficulty adapting when moving between light and dark rooms.</li>
<li>Colours look faded.</li>
<li>Objects may appear to change shape and size or even move, and words may disappear when you are reading.</li>
</ul>
<h2>How can I stop AMD developing?</h2>
<p>Here are the things you can do to reduce your risk of developing AMD:</p>
<ul>
<li>Quit smoking. Smokers are four times more likely to develop AMD than non-smokers. Smoking causes AMD to progress faster and makes treatment less effective.</li>
<li>Maintain a healthy weight and normal blood pressure.</li>
<li>Take regular exercise and eat a healthy diet with plenty of leafy, green vegetables.</li>
</ul>


<h2>How do you treat AMD?</h2>
<p>There is currently no treatment available for dry AMD. Wet AMD can be treated if caught early. Treatment involves injecting drugs into the corner of your eye, to shrink and stop the growth of the abnormal blood vessels. Some people do not respond to the injections and may be offered a form of laser treatment instead.</p>
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


