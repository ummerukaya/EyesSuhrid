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
		<p>Being able to see clearly is important for a child’s overall development and helps them to discover and learn about their world. Most children have excellent sight and do not need to wear glasses, but if there are problems and they are not picked up at an early age, your child may have permanently reduced vision in one or both eyes. Children do not have to be able to read or talk to have their eyes examined. Eye examinations for children under 16 are paid for by the NHS.<br>

Take a look at our infographic on the stages of development of your child’s eyes</p>

<h2>Babies</h2>
<p>At about six weeks old, your baby should be able to follow something colourful or interesting with their eyes, or smile back at someone who is not using sound to get their attention. If your baby doesn’t seem to be able to focus on you properly – for example, if they can’t follow you with their eyes or respond to your facial gestures, or if their eyes wander when they are looking at you – there might be a problem. Also, try covering each of your baby’s eyes in turn. If they object to having one eye covered more than the other, they may have problems seeing out of one eye. Babies’ eyes may squint sometimes (they may not always line up with each other), this is normal. But if their eyes always seem to squint, this should be investigated.<br>

As your baby gets older, you can start to point out objects both close up and far away. If they struggle to see the objects, contact an optometrist for advice.</p>

<h2>Toddlers and young children</h2>
<p>Things to look out for in toddlers and young children include:</p>
<ul>
<li>having one eye turns in or out (this may be easier to spot when they are tired)</li>
<li>rubbing their eyes a lot</li>
<li>watery eyes</li>
<li>clumsiness and poor hand-to-eye co-ordination</li>
<li>avoiding reading, writing or drawing</li>
<li>screwing up their eyes when they read or watch TV</li>
<li>sitting very close to the TV, or holding books or objects close to their face</li>
<li>having behaviour or concentration problems at school</li>
<li>blurred or double vision, or unexplained headaches.</li></ul>
<h2>Starting school</h2>
<p>Some schools carry out vision screening on children aged between four and five. If this does not happen in your area you should take your child to an optometrist for a sight test, paid for by the NHS. Even if your child has had vision screening done at school, you should take them to an optometrist if:</p>
<ul>
<li>you have any concerns</li>
<li>there is a history of needing strong glasses at a young age</li>
<li>there is a history of squint or lazy eye in the family.</li>
<li>Your child’s eye examination</li></ul>

<h2>Children’s glasses and contact lenses</h2>
<p>Your optometrist can advise on the glasses for your child’s eye condition. They can also advise on glasses and goggles for sports, and whether they might be suited to wearing contact lenses.</p>
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


