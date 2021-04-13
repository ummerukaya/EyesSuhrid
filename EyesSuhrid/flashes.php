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
		<h2>What are flashes?</h2>
		<p>When we are young, the gel inside your eye (the vitreous) is firmly attached to the back of your eye. As we get older, the vitreous gel naturally becomes more liquid and collapses away from the retina. This is called posterior vitreous detachment (PVD). It is very common and more likely to happen as you get older. As the vitreous pulls away from your retina you may see this as a flash of light in one or both eyes, like small sparkles, lightning or fireworks. The flashes tend to be in the extreme corners of your vision and come and go, but don’t obscure any part of your vision. They are different from the shimmering or zig-zag lines that may be part of a migraine. Very occasionally, flashes can be a sign of retinal detachment, which should be treated as soon as possible.</p>
		<h2>What are floaters?</h2>
		<p>Floaters are small dark or transparent dots or strands or something that looks like a hair or small pieces of a cobweb that float in the vitreous gel inside your eye. They are formed when the vitreous, which is the jelly inside your eye, separates into watery fluid and wavy collagen fibres. They appear to float in front of your eyes and move when you try to look at them. They are very common and are normally harmless.</p>
		<h2>Who is affected by flashes and floaters?</h2>
		<p>Flashes and floaters are more common in older people, people who are short-sighted and in people who have had eye surgery.</p>
		<h2>What are the symptoms of flashes and floaters?</h2>
		<p>Flashes appear as small sparkles, lightening or fireworks usually in the extreme corners of your vision. They may come and go. Floaters are more visible in bright light, or if you are looking at a plain bright background such as a cloudless sky or white wall.<br><br>

Usually, the symptoms are nothing to worry about and you can get used to them. However, if you have any of the following symptoms, you should contact your optometrist as soon as possible:</p>
<ul>
<li>a sudden increase in floaters, particularly if you also notice flashing lights</li>
<li>a new, large, floater</li>
<li>a change in floaters or flashing lights after you have had a direct blow to your eye</li>
<li>a shadow or cobweb spreading across the vision of one of your eyes.</li>
</ul>
<p>If you can’t contact your optometrist you should get urgent attention, ideally from an eye casualty department at the hospital. If you cannot get to an eye casualty you should go to a hospital A&E department.
</p>
<h2>How do you treat flashes and floaters?</h2>
<p>Flashes normally settle down after a few months without treatment. Floaters may be long lasting, but you tend to ignore them after a while. There is usually no treatment required for these conditions.</p>
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


