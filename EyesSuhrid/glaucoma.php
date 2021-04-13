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
		<h2>What is glaucoma?</h2>
		<p>Glaucoma is a group of eye diseases in which the optic nerve, which connects the eye to the brain, is damaged by the pressure of the fluid inside your eye. It can affect one or both of your eyes and can lead to sight loss if not treated. The two most common types of glaucoma are:</p>
        <ul>
        	<li>Chronic glaucoma – this develops slowly. This is the most common form of glaucoma in the UK. The most common form of chronic glaucoma is primary open angle glaucoma (POAG).</li>
        	<li>Acute glaucoma – this causes the pressure inside your eye to increase rapidly. It may be called acute angle closure glaucoma.</li>
        </ul>
		
		<h2>Who is affected by glaucoma?</h2>
		<p>Anyone can develop chronic glaucoma. But the risk increases if you:</p>
        <ul>
        	<li>are aged over 40</li>
        	<li>are very short-sighted</li>
        	<li>are of African or Caribbean origin</li>
        	<li>are closely related to someone with chronic glaucoma</li>
        	<li>have raised pressure in your eye. This is called ocular hypertension (OHT)</li>
        	<li>are diabetic</li>
        	<li>have high blood pressure.</li>
        </ul>
        <p>People at risk of developing acute glaucoma include:</p>
        <ul>
        	<li>people over the age of 40</li>
        	<li>women</li>
        	<li>people of East Asian or South Asian origin</li>
        	<li>people with a family history of closed-angle glaucoma</li>
        	<li>people who are long-sighted.</li>
        </ul>
        <p>
        If one of your parents or children, or a brother or sister, has glaucoma, and you are over 40, the NHS will pay for your eye examination. In Scotland, all eye examinations are paid for by the NHS.
		</p>
		<h2>What are the symptoms of glaucoma?</h2>
		<h3>Chronic glaucoma</h3>
		<p>There are no symptoms in the early stages of chronic glaucoma, so it is important to have eye examinations – especially if you are in the group of people at risk of getting this condition. In the later stages, you may have blurring around the outside of your vision.</p>
		<h3>Acute glaucoma</h3>
		<p>Acute glaucoma causes the pressure inside your eye to increase rapidly. The increased pressure can come and go, and some people get short bursts of pain or discomfort and blurred vision. This can happen when your pupils get bigger, so you may notice it at night or when you are in a dark area (like the cinema) or when you are reading. Other symptoms include an ache in the eye which may come and go, nausea and vomiting, red eyes, or seeing coloured rings around white lights, or it can be a bit like looking through a haze or mist. If you get these symptoms it is important to act quickly. If the symptoms persist, you should go to the Accident and Emergency department immediately, so that they can reduce the pressure and get rid of the pain. Even if the symptoms appear to go away, your vision may be damaged, so you should see your optometrist as soon as possible.</p>
		<h2>How do you treat glaucoma?</h2>
		<h3>Chronic glaucoma</h3>
		<p>If your optometrist suspects that you have chronic glaucoma, they will refer you to an ophthalmologist (a specialist eye doctor) for a diagnosis. This may involve you having more tests. There is no cure for chronic glaucoma but it can be treated effectively, normally with eye drops which you use every day. These reduce the pressure in your eye. You will not feel that anything is happening, but you must ensure that you keep using the drops, as your sight could be much worse if you stop the treatment. It is also important that you attend your follow-up appointments.</p>
		<h3>Acute glaucoma</h3>
		<p>Acute glaucoma requires prompt treatment. The first step is to lower the eye pressure. This is done using eye drops and an intravenous injection. Once the pressure is lowered, your ophthalmologist will use a laser or surgery to bypass the blockage in your eye’s drainage system to prevent the problem coming back.</p>
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


