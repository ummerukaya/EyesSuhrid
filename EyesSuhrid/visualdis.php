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
		<h2>What is visual disturbance?</h2>
		<p>Visual disturbance is when you experience a short spell of flashing or shimmering of light in your sight. The symptoms normally last around twenty minutes before your sight returns to normal. Usually, there is no headache during the visual disturbance. A visual disturbance should not be confused with a retinal or ocular migraine where there is a partial or total loss of vision in one eye, normally with a headache.</p>
		<h2>Who is affected by visual disturbance?</h2>
		<p>Visual disturbance is a common condition among people who are affected by migraines, although they can affect anyone.

Visual disturbances tend to be more common in:</p>
<ul>
<li>women</li>
<li>people aged under 40</li>
<li>people aged over 60</li>
<li>people with a personal or family history of migraines</li>
</ul>

<h2>What are the symptoms of visual disturbance?</h2>
<ul>
<li>Flashes of light</li>
<li>These may start in the periphery of your sight, and become larger and more central (Some people experience the opposite, starting as a tiny dot centrally and become a bigger arc as they reach the periphery)</li>
<li>They may be black and white or brightly coloured</li>
<li>Typically described as a zigzagging pattern, or giving the appearance of shards of glass</li>
<li>They may be apparent when your eyes are shut
The disturbance affects your sight and both eyes are affected.</li>
<li>There is no headache during the disturbance</li>
<li>The visual disturbance last around 20-30 minutes</li>
</ul>
<h2>How do you treat visual disturbance?</h2>
<p>Firstly, do not panic; visual disturbances can be frightening, but in most cases are short lived. If you are driving or operating machinery, stop what you are doing and wait for the symptoms to go away. Make a note of your symptoms, how long they lasted and what you were doing just before they began. In most cases, there is a common trigger and keeping a diary of symptoms can help work out what the trigger is. Simply avoiding the trigger, where possible, may be all you need to do.

Common triggers include:</p>
<ul>
<li>stress</li>
<li>tiredness</li>
<li>flashing or flickering lights (including driving through a row of trees in bright sunlight)</li>
<li>glare (bright sheen of light reflected from a window, computer monitor, or white paper)</li>
<li>exercise</li>
<li>bending over</li>
<li>dehydration</li>
<li>certain foods such as chocolate, cheese or alcohol</li>
<li>excessive heat</li>
</ul>
<p>
If you are regularly affected by visual disturbance, take the diary of your symptoms to your optometrist for further advice.

If you experience a partial or complete loss of vision or persistent flashing it’s important to see an optometrist or GP, or contact NHS 111 urgently, particularly when it occurs for the first time. Your optometrist or GP will also establish whether you have been affected by a visual disturbance or the less common and more serious retinal migraine.</p>
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


