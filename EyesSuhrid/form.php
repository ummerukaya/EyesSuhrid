<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Eye-Disease Testing</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

</head>

<body>
    <!-- navbar starts -->
    <header>
        <nav id="nav-wrap">
            <div class="logo">
                <div class="left">
                    <a id="logoeye"><i class="fas fa-eye"></i>
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
                    <li><a href="testeye.php" class="active">test your eyes</a></li>
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

    <!-- question answer starts-->
    <section id="question-form">
        <div class="container ques-form">
            <form>
                <div class="formdesign">
                    <div>
                        <label class="ques" for="q1">1. Do you experience a short spell of flashing or shimmering of
                            light in your
                            sight
                            ?</label><br>
                        <div class="ans">
                            <input type="radio" id="q1Y" name="q1" value="Yes">
                            <label for="Yes">Yes</label><br>
                            <input type="radio" id="q1N" name="q1" value="No">
                            <label for="No">No</label><br>

                        </div>
                    </div>
                    <div>
                        <label class="ques" for="q2">2. If you experience the flashes of light, then how long does it
                            last?</label><br>
                        <div class="ans">
                            <input type="radio" id="q2a1" name="q2" value="Around 1 - 2 hours">
                            <label for="Around 1 - 2 hours">Around 1 - 2 hours</label><br>
                            <input type="radio" id="q2a2" name="q2" value="Around 20 - 30 minutes">
                            <label for="Around 20 - 30 minutes">Around 20 - 30 minutes</label><br>
                            <input type="radio" id="q2it" name="q2" value="It comes and goes">
                            <label for="It comes and goes">It comes and goes</label><br>
                            <input type="radio" id="q2id" name="q2" value="I don’t experience such flashes">
                            <label for="I don't experience such flashes">I don’t experience such flashes<br>
                        </div>
                    </div>
                    <div>
                        <label class="ques" for="q3">3. Do you often feel any headache?</label><br>
                        <div class="ans">
                            <input type="radio" id="q3Y" name="q3" value="Yes">
                            <label for="Yes">Yes</label><br>
                            <input type="radio" id="q3N" name="q3" value="No">
                            <label for="No">No</label><br>
                        </div>
                    </div>
                    <div>
                        <label class="ques" for="q4">4. Do you see floaters while looking at a plain bright background
                            such as a
                            cloudless
                            sky or white wall?</label><br>
                        <div class="ans">
                            <input type="radio" id="q4Y" name="q4" value="Yes">
                            <label for="Yes">Yes</label><br>
                            <input type="radio" id="q4N" name="q4" value="No">
                            <label for="No">No</label><br>
                        </div>
                    </div>
                    <div>
                        <label class="ques" for="q5">5. Do you have blurring around the outside of your vision and pain
                            inside your
                            eyes?</label><br>
                        <div class="ans">
                            <input type="radio" id="q5Y" name="q5" value="Yes">
                            <label for="Yes">Yes</label><br>
                            <input type="radio" id="q5N" name="q5" value="No">
                            <label for="No">No</label><br>
                        </div>
                    </div>
                    <div>
                        <label class="ques" for="q6">6. Do you often feel nausea and vomiting with eye ache?</label><br>
                        <div class="ans">
                            <input type="radio" id="q6Y" name="q6" value="Yes">
                            <label for="Yes">Yes</label><br>
                            <input type="radio" id="q6N" name="q6" value="No">
                            <label for="No">No</label><br>
                        </div>
                    </div>
                    <div>
                        <label class="ques" for="q7">7. Do you see coloured rings around white lights?</label><br>
                        <div class="ans">
                        <input type="radio" id="q7Y" name="q7" value="Yes">
                        <label for="Yes">Yes</label><br>
                        <input type="radio" id="q7N" name="q7" value="No">
                        <label for="No">No</label><br>
                        </div>
                    </div>
                    <div>
                        <label class="ques" for="q8">8. Do you see a line bent or distorted what others see as a
                            straight
                            line?</label><br>
                        <div class="ans">
                            <input type="radio" id="q8Y" name="q8" value="Yes">
                            <label for="Yes">Yes</label><br>
                            <input type="radio" id="q8N" name="q8" value="No">
                            <label for="No">No</label><br>
                        </div>
                    </div>
                    <div>
                        <label class="ques" for="q9">9. Do you see spots or smudges in your vision?</label><br>
                        <div class="ans">
                            <input type="radio" id="q9Y" name="q9" value="Yes">
                            <label for="Yes">Yes</label><br>
                            <input type="radio" id="q9N" name="q9" value="No">
                            <label for="No">No</label><br>
                        </div>
                    </div>
                    <div>
                        <label class="ques" for="q10">10. Do the words seem disappearing when you are
                            reading?</label><br>
                        <div class="ans">
                            <input type="radio" id="q10Y" name="q10" value="Yes">
                            <label for="Yes">Yes</label><br>
                            <input type="radio" id="q10N" name="q10" value="No">
                            <label for="No">No</label><br>
                        </div>
                    </div>
                    <div>
                        <label class="ques" for="q11">11. Does the white of your eyes become pink or red in
                            color?</label><br>
                        <div class="ans">
                            <input type="radio" id="q11Y" name="q11" value="Yes">
                            <label for="Yes">Yes</label><br>
                            <input type="radio" id="q11N" name="q11" value="No">
                            <label for="No">No</label><br>
                        </div>
                    </div>
                    <div>
                        <label class="ques" for="q12">12. Do you feel Itching, irritation or burning in your
                            eyes?</label><br>
                        <div class="ans">
                            <input type="radio" id="q12Y" name="q12" value="Yes">
                            <label for="Yes">Yes</label><br>
                            <input type="radio" id="q12N" name="q12" value="No">
                            <label for="No">No</label><br>
                        </div>
                    </div>
                    <div>
                        <label class="ques" for="q13">13. Are there any discharge (pus) sticks to your
                            eyelashes?</label><br>
                        <div class="ans">
                            <input type="radio" id="q13Y" name="q13" value="Yes">
                            <label for="Yes">Yes</label><br>
                            <input type="radio" id="q13N" name="q13" value="No">
                            <label for="No">No</label><br>
                        </div>
                    </div>
                    <div>
                        <label class="ques" for="q14">14. Do you have high levels of blood sugar, high blood pressure or
                            high
                            cholesterol?</label><br>
                        <div class="ans">
                            <input type="radio" id="q14Y" name="q14" value="Yes">
                            <label for="Yes">Yes</label><br>
                            <input type="radio" id="q14N" name="q14" value="No">
                            <label for="No">No</label><br>
                        </div>
                    </div>
                    <div>
                        <label class="ques" for="q15">15. Do you find it hard to tell the difference between reds,
                            oranges, yellows,
                            browns
                            and greens ?</label><br>
                        <div class="ans">
                            <input type="radio" id="q15Y" name="q15" value="Yes">
                            <label for="Yes">Yes</label><br>
                            <input type="radio" id="q15N" name="q15" value="No">
                            <label for="No">No</label><br>
                        </div>
                    </div>
                    <div>
                        <label class="ques" for="q16">16. Do you feel trouble distinguishing between shades of purple
                            and confuse
                            reds with
                            black?</label><br>
                        <div class="ans">
                            <input type="radio" id="q16Y" name="q16" value="Yes">
                            <label for="Yes">Yes</label><br>
                            <input type="radio" id="q16N" name="q16" value="No">
                            <label for="No">No</label><br>
                        </div>
                    </div>
                </div>
                <div id="answer-show" class="answer-show">
                    <input type="button" value="Show Result" onclick='hello()'>
                </div>
            </form>
        
        <!--result show box-->
        <div id="result">

        </div>
        <!--Advice show box-->
        <div id="advice">



        </div>
        </div>
    </section>

    <script src="myscript.js"></script>

    <!--question answer ends-->


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

        $('ul#nav li a').click(function () {
            console.log('Clicked!')
            $(".nav").removeClass("responsive");
        });

        $(document).ready(function () {

            $(window).scroll(function () {
                if ($(window).scrollTop() < 20) {
                    $('header').css('box-shadow', 'none');
                } else {
                    $('header').css('box-shadow', '0 .2rem .5rem #333');
                }
            });

        });

    </script>


    <script>
        var modal = document.getElementById('login-form');
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>