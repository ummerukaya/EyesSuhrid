<?php
include_once 'header.php';

?>

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
        <li><a href="eyecare.php">eye care</a></li>
        <li><a href="testeye.php">test your eyes</a></li>
        <li><a href="specialists.php">Eye Specialists</a></li>
        <li><a href="signup.php">Signup</a></li>
        <li><a href="login.php" class="active">login</a></li>

	    </ul>
	   </div>
        </nav>
            
 
	</header>
	<!-- navbar ends -->

<!--about starts -->

<section id="aboutdisease">
	<div class="container aboutdis">
		<h2>login</h2>

        <form action="login2.php" method="POST">
        <input style="width: 50%; padding: 10px; margin-bottom: 20px; box-sizing: border-box; border: 1px solid black;" type="text" name="uid" placeholder="Username/Email">
        <br>
        <input style="width: 50%; padding: 10px; margin-bottom: 20px; box-sizing: border-box; border: 1px solid black;" type="password" name="pwd" placeholder="Password">
        <br>
        <button style="width: 20%;height: 3rem;color: var(--pure);background: var(--dark);font-size: 1.3rem;font-family: 'Josefin Sans',sans-serif;font-weight: 600;padding: 1rem;border-style: none;margin: 1rem auto;cursor: pointer;" type="submit" name="submit">login</button>
        </form>

        <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all fields!<p>";
            }
            else if($_GET["error"] == "wronglogin"){
                echo "<p>Incorrect login credentials</p>";

            }

            
        }

        ?>
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


