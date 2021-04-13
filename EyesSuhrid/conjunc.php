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
		<h2>What is conjunctivitis?</h2>
<p>Conjunctivitis, or pink eye, is an inflammation of the conjunctiva, which is the clear membrane that covers the white of your eye. It may be caused by an infection, or by an allergy. If it is one eye it is more likely to be caused by an infection. If it is present in both eyes then it is more likely to be caused by an allergy, such as hay fever. Conjunctivitis causes the eyes to become red, gritty, and uncomfortable. It does not affect your vision.</p>

<h2>Who is affected by conjunctivitis?</h2>
<p>Infective conjunctivitis may be caused by bacteria or a virus and can affect anyone. The infection may be spread by contact with an infected person or exposure to infected surfaces such as towels, or through sinus or ear or sexually transmitted infections. Infective conjunctivitis will normally resolve without any treatment. In severe cases of bacterial conjunctivitis you may be prescribed an antibiotic which may speed up recovery.<br><br>

Allergic conjunctivitis causes similar symptoms to infective conjunctivitis, but is more likely to occur in both eyes. It is common in people who get hayfever.</p>

<h2>What are the symptoms of conjunctivitis?</h2>
<p>Symptoms include:</p>
<ul>
<li>bloodshot eyes</li>
<li>a burning or ‘gritty’ sensation</li>
<li>pus that sticks to eye lashes</li>
<li>itchy eyes</li>
<li>watering eyes.</li>
</ul>

<p>If you wear contact lenses, you may also have spots on your eyelids. This may be because you are allergic to the lenses. Talk to your optometrist.</p>

<h2>How do you treat conjunctivitis?</h2>
<p>Most allergic conjunctivitis will clear up on its own. To help relieve the symptoms you may wish to use a cold compress on your closed eyelids, to help them feel more comfortable.<br><br>

It can help if you keep your eyelids clean by moistening a clean cotton wool pad or ball with cooled, boiled water, and use it to gently rub your eye lashes to remove any crusts. Make sure you use a different pad or ball for each eye. If your eyes feel dry you may also find that artificial tears make your eyes feel more comfortable.<br><br>

If your symptoms are acute, your optometrist or GP may recommend antibiotic drops or ointment.<br><br>

If you have allergic conjunctivitis, the best advice is to try and ascertain what is causing the allergy and avoid it. If you cannot avoid it – for example if you have hayfever – you can get antihistamine drops from the pharmacist to relieve your symptoms.<br><br>

If you have conjunctivitis you don’t need to stay off work or keep your children out of school. But you should ensure that you avoid spreading the infection by making sure you wash your hands regularly with warm, soapy water, You should also wash your towels, face cloths and pillows regularly and don’t let anyone else use them until you are symptom-free. If you usually wear contact lenses, don’t wear them until your eyes are better.</p>
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


