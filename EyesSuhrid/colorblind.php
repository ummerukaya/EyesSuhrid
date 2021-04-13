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
		<h2>What is colour blindness?</h2>
<p>Most ‘colour blind’ people are able to see things as clearly as other people but they have difficulty distinguishing between some colours. This may have an impact upon a child’s performance at school or on the sports field and can also affect career options, for example joining the army or becoming a pilot. As most colour blind people can see some colours, it is better to describe it as a colour vision deficiency (CVD). There are some people who are unable to see any colour at all, but this is very rare.<br><br>

In the normal eye there are three different types of cones. Some cones are best at capturing long wavelength (red) light. Others catch medium wavelength (green) light, while other cones respond best to short wavelength (blue) light. The signals from these cones are sent to the brain where they are perceived as colour. People with CVD are born with one or more cone types absent or different.<br><br>

Most people with CVD are red/green deficient, which means they mix up all colours with some red or green in them. For example, a red/green CVD person will confuse blue and purple because they can’t ‘see’ the red element in purple. This is more severe in some forms of CVD than in others.</p>

<h2>Who is affected by colour vision deficiency?</h2>
<p>Colour vision may be affected by some eye diseases, but the most common cause of CVD is genetic. The gene for this is transmitted on the X chromosome (from your mother) and so it mainly affects men and boys, with around 8% of males and 0.5% of females having CVD. There are around 3 million people in the UK with some kind of CVD.</p>

<h2>What are the symptoms of colour blindness?</h2>
<p>If someone has CVD they may have difficulties distinguishing between different types of food – for example mistaking chocolate sauce for ketchup. It may also be very hard to get a child with CVD to try green vegetables as they will look unappetising. Older children may confuse the red and green lights on their games console.<br><br>

If you have any concerns about your child’s vision, make an appointment for an eye examination with your optometrist. This will be paid for by the NHS. There are many tests available to measure colour vision.</p>

<h2>The Lantern Test</h2>
<p>Certain jobs require you to be able to recognise and differentiate between lights of certain colours. For example, seeing signals for aviation, railways or maritime. People wishing to apply for these jobs will be required to undertake a Lantern Test, which imitates actual signals. Those taking the test will be asked to name standardised coloured lights (principally red, green, yellow and white) of controlled brightness, colour and size. This is usually done in a dark room.</p>
<h2>How do you treat colour vision deficiency?</h2>
<p>There is currently no cure for genetic CVD. Your optometrist may suggest using colour filters on your glasses, or coloured contact lenses. People with illnesses that have led to CVD, may find that their vision returns to normal when their illness has been treated.</p>
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


