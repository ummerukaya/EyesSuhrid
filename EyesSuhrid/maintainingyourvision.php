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
	<h2>How can I look after my eyes and vision?</h2>
<ul>
<li>Have regular eye examinations. This will allow your optometrist to spot early signs of eye disease, when it is easier to treat. Most people should have an eye examination at least every two years.</li>
<li>Stop smoking. Smoking has been linked to cataracts and age-related macular degeneration (AMD) (the leading cause of sight loss in the UK). NHS services are available to help you quit. Visit nhs.uk/smokefree for more information.
Eat a diet that is rich in leafy greens and coloured fruit and vegetables and maintain a healthy weight. This may reduce your risk of developing AMD.</li>
<li>Be aware of your vision in each eye separately. Many conditions appear in one eye first. If you regularly check your vision (with glasses if you need them) by covering each eye in turn, you are more likely to notice changes. If you notice changes in your vision you should contact your optometrist for advice. Things you should look out for include straight lines (such as door or window frames) appearing distorted or wavy, or seeing blank or blurry spots in your vision.</li>
<li>Wear sunglasses. Sunlight can increase the long-term risk of developing conditions such as cataracts. Good sunglasses don’t need to be expensive: you can purchase perfectly adequate protective sunglasses from high street stores. Look out for glasses carrying the “CE” Mark and British Standard BS EN ISO 12312-1:2013, which ensures that the sunglasses offer a safe level of UV protection. Go for reasonably dark glasses: for example, dark brown offers more protection than light grey.</li></ul>
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


