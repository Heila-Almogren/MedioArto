<!DOCTYPE html>
<html>

<head>

    <title>Login</title>


    <link rel="stylesheet" type="text/css" href="CSS/Navigation-Guest.css">
    <link rel="stylesheet" type="text/css" href="CSS/forgotPassword.css">
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="JS/menuBar.js"></script>
    <script src="JS/jquery-ui-1.12.1.custom/jquery-ui.js"></script>

    <script>
        $(document).ready(function() {

            $('.blockline').show('slide', {
                direction: 'right'
            }, 350);
            $('#recover').click(function() {
                $('.front').hide();
                $('#recover').hide();



                //here verify account
                var input = $("#recovMail");        //this is the email that user entered
                var uname = 'Saleh@email.com';        //this is the correct email


                if (input.val() != uname) {

                    $('.back2').show();
                } else {
                    $('.back1').show();
                    $('form').submit();
                }
            });


            $('#done').click(function() {
                $('.blockline').hide('slide', {
                    direction: 'right'
                }, 350, function() {
                    window.location.href = "Login.html";    //after it's done, go back to login page
                });
            });


            $('#backError').click(function() {

                $('.back2').hide();
                $('.front').show();
                $('#recover').show();









            });



        });

    </script>

</head>

<body>








    <div class="nav">




        <a href="ChooseRole.html">Register</a>
        <a class="active" href="Login.html">Login</a>
        <a href="About-Guest.html">About</a>
        <a href="MedioArto.html">Home</a>

        <img src="Images/Leaves.png" alt="logo" class="logo">
    </div>










    <!--side menu-->
    <div class="skeleton">

        <div class="blockline" style="display: none;">



            <div class="BoxStyle" style="text-align: center; ">


                <form onsubmit="e.preventDefault();">

                    <div class="front">
                        <p class="BoxTitle">Recover Password</p>
                        woah.. no panic! What's your email?
                        <input type="text" name="email" maxlength="60" class="InputStyle" placeholder="email" id="recovMail">



                    </div>
                </form>
                <button class="ButtonStyle" id="recover">Recover</button>
                <div class="back1" style="display: none;">
                    <img src="Images/Check.png" style="height: 40px; padding-bottom: 20px; padding-top: 40px;"><br>
                    Done.. Check your email for recovery link!
                    <button class="ButtonStyle" id="done">Back</button>



                </div>



                <div class="back2" style="display: none;">
                    <img src="Images/error.png" style="height: 40px; padding-bottom: 20px; padding-top: 40px;"><br>
                    Hmm.. are you sure about this email?! <br>
                    We couldn't find it :/ <br>
                    <button class="ButtonStyle" id="backError">Back</button>



                </div>


                <br>










            </div>



        </div>
    </div>


    <div class="footer">

        <div class="footerC brief">
            Medio Arto is a platform for eco-friendly art to share ideas of recycling items that usually reside in the recycling bin.. go and share yours now!
        </div>

        <div class="footerC">
            Contact Us:
            <div class="footerC col">
                email: &nbsp;
                <a href="mailto:info@medioarto.com">info@medioarto.com</a> </div>
            <div class=" footerC col">
                tel: +966563636787</div>


            <div class=" footerC col">
                Address:</div>


            <div class=" footerC col">
                11314 Riyadh, Saudi Arabia</div>
        </div>

        <div class="footerC">
            Find Us on Social Media!


            <div class=" footerC col">
                <div class=" footerC col">
                    <a href="#" class="fa fa-twitter"></a>
                    &nbsp;
                    <a href="#" class="fa fa-facebook"></a>
                    &nbsp;
                    <a href="#" class="fa fa-youtube"></a> &nbsp;
                    <a href="#" class="fa fa-instagram"></a>
                </div>

            </div>


        </div>





    </div>



</body>

</html>
