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
		<p>There are lots of sayings, myths and misconceptions about eyes and eyesight. We’re here to help sort fact from fiction in some of the most common ones:</p>

<h3>Reading in the dark or dim light will damage your eyes</h3>
<p>Fiction. It is more difficult to see in the dark or in dim light than in brighter light, so you may get a headache if you read in the dark, but you will not cause yourself any harm.</p>

<h3>Contact lenses can get lost behind your eyes</h3>
<p>Fiction. The membrane that covers the white of your eye (the conjunctiva) also lines your eyelids, so it is impossible for a contact lens to get lost behind your eyes.</p>

<h3>Wearing someone else’s glasses may damage your eyes</h3>
<p>Fiction. Although you may not be able to see very well with them and may get a headache or double vision, you won’t come to any harm from wearing glasses that are not your prescription. However, you should only ever wear glasses that are your prescription when you drive.</p>

<h3>Watching TV too much or too closely will damage your eyes</h3>
<p>Fiction: Watching too much TV or sitting very close to it may make your eyes tired or give you a headache – particularly if you are watching TV in the dark – but won’t cause any permanent damage.</p>

<h3>Exercising the eye muscles can allow you to 'throw away your glasses'</h3>
<p>Fiction: People normally need glasses because of the shape and size of their eye. Exercises won’t help this.</p>

<h3>Studying the iris in a person’s eye, reveals their health problems</h3>
<p>Fiction: There is no scientific proof for this. However, when optometrists carry out eye examinations they not only test your sight, but also check the health of your eyes and look for signs of some general health problems.</p>

<h3>Using your eyes too much can wear them out</h3>
<p>Fiction: The health of your eyes has nothing to do with the number of hours you use them.</p>

<h3>Holding books up close will damage your child’s eyes</h3>
<p>Fiction: How your child holds a book has no effect on the health of their eyes and doesn’t necessarily mean they need glasses. Sometimes children find it more comfortable to read close-up and their very good focusing ability makes it easy for them to do so. However, your child sits too close to the television, it may mean that they have difficulty seeing further away. Take them to an optometrist.</p>

<h3>Eating carrots will improve your eyesight</h3>
<p>Some fact. Carrots are a source of vitamin A, which is important for the eyes – and should be part of a well–balanced diet that supports your all-round health. Poor nutrition has been implicated in diseases such as age-related macular degeneration (AMD).</p>
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


