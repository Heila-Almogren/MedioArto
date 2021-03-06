<!DOCTYPE html>
<html>

<head>
    <title>Zoo Bags</title>
    <link rel="stylesheet" type="text/css" href="CSS/ArtifactStyle.css">
    <link rel="stylesheet" type="text/css" href="CSS/Navigation-visitor.css">
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="JS/menuBar.js"></script>

    <script>
        $(document).ready(function() {
            var isVisitor = true; //change this
            if (isVisitor) {
                $('#brief').append("<input id='toggle-heart' type='checkbox'/><label for='toggle-heart' style='font-size: 20px;'>&hearts; &nbsp; </label> Favourite");

            };

            var isArtist = true; //change this
            if (isArtist) {
                $('#brief').append("<td><a href='www.google.com'><img class='im' src='Images/set.png' style='height: 20px; width: 20px; '></a></td>");

            };



        });

    </script>
    <script>
        function SendComment() { //function when sending a comment.



            var inputContent = document.getElementById("commentBox").value;

            if (inputContent != "") {
                var table = document.getElementById("commentTable");




                var row = table.insertRow(table.rows.length - 1);

                var cell1 = row.insertCell(0);
                cell1.style.width = "100px";
                cell1.style.height = "100px";
                cell1.style.textAlign = "center";
                cell1.style.verticalAlign = "middle";



                cell1.innerHTML = " <img class='im' src='Images/Neutral-placeholder-profile.jpg' style='width:80px; height: 80px; border-radius: 30px;'> <p style='height: auto; margin-top: 0px; text-align: center'> Jerry</p>";



                //+ document.getElementById("commentBox").Value;
                var cell2 = row.insertCell(1);
                cell2.addClass = "ReaderField";
                cell2.style.marginTop = "30px";
                cell2.style.marginBottom = "30px";

                cell2.innerHTML = "<div class='speech-bubble' style='width: 400px; min-height: 50px; height: auto; padding: 15px; font-family: 'Muli-Reg'; '>" + inputContent + "</div>";

                document.getElementById("commentBox").value = "";


            }

        }

    </script>

    <!--javascript of profile pop-up menu-->

</head>

<body>

    <!--Navigation bar-->

    <div id="MenuBar">

        <a>
            <img src="Images/Neutral-placeholder-profile.jpg" class="userProfileIcon" id="x"></a>

        <a href="About-Visitor.html">
            <p class="menuText">About</p>
        </a>
        <a href="All Artist page.html">
            <p class="menuText">Artists</p>
        </a>
        <a href="AllArtworks.html">
            <p class="menuText">Artifacts</p>
        </a>
        <a href="visiterPage.html">
            <p class="menuText">Home</p>
        </a>

        <img href="MedioArto.html" src="Images/Leaves.png" alt="logo" class="logo">
    </div>



    <!--pop-up menu of profile image-->
    <nav class="form-popup" id="myForm">


        <p class="ProfileTitle">
            Hello, Sara!
        </p>




        <a href="MedioArto.html">
            <div class="ProfileOption">
                &#x1f511; &nbsp;
                Logout
            </div>
        </a>


    </nav>


    <div style="background-color: white; min-width: 100%; height: 250px; text-align: center">




        <!--image of the artwork-->
        <img class="im" src="Images/ArtWorks/plastic-bottle-art-30%20copy.jpg" style="height: 300px; padding: 30px; width: 300px; margin-top:50px; background-color: white;">
    </div>

    <div style="border: dashed orange; border-width: thick; width: auto; min-height: 400px; margin: 30px; border-radius: 40px; text-align: center; border-bottom: none; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px; ">
        <!--name of the artwork-->
        <p style="margin-top: 150px;  font-family: 'Muli-Reg'; font-size: 50px; text-align: center; width: 100%; ">ZOO BAGS</p>


        <!--table for artwork info (artists name, time, date, etc..) -->
        <table style="width: 800px; text-align: center; font-size: 18px; margin: auto; border-bottom: solid black; padding: 5px; vertical-align: middle;">

            <tr id="brief">
                <td>
                    <!--artist name-->
                    <img class="im" src="Images/person_110935.png" style="height: 20px; width: 20px; margin-top: 5px;" /> &nbsp;
                    By: Jiff Thomas
                </td>
                <td>
                    <!--date-->
                    <img class="im" src="Images/cal.png" style="height: 20px; width: 20px; margin-top: 5px;" /> &nbsp;
                    21/12/2019
                </td>
                <td>
                    <!--time-->
                    <img class="im" src="Images/clock.png" style="height: 20px; width: 20px; "> &nbsp; 25 minutes
                </td>


            </tr>

        </table>

        <!--artwork description-->
        <p style=" font-family: 'Muli-Reg'; font-size: 20px; text-align: center; width: 700px; margin: auto; margin-top: 50px; margin-bottom: 50px;">Those cute bags that look like funny animals is made from leftovers and it's a perfect for saving small stuff like keys, hair bands and staionary.. let's how to do it!</p>





    </div>

    <div style="background-color: white; width: 100%; height: auto; min-height: 400px; text-align: center; ">

        <table style="margin: auto; text-align: center;  width: 1000px;">

            <tr style="text-align: center;">


                <!--list of ingredients-->
                <td style="text-align: center; ">
                    <p style="font-size: 25px;">WHAT TO HAVE:</p>
                    <div style="background-color: lightgrey; width: 300px; height: auto; border-radius: 25px; margin:auto; padding: 20px;">
                        <table style="width:100%; vertical-align: middle; text-align: left">

                            <tr>
                                <td>

                                    <label class="container">Plastic Bags
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>

                                </td>

                            </tr>

                            <tr>
                                <td>

                                    <label class="container">Metal Zips
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>

                                </td>

                            </tr>


                            <tr>
                                <td>

                                    <label class="container">Old Fabrics
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>

                                </td>

                            </tr>



                            <tr>
                                <td>

                                    <label class="container">Fake Eyes.. etc
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>

                                </td>

                            </tr>


                        </table>
                    </div>
                </td>


                <td style="text-align: center; ">
                    <p style="font-size: 25px;">WHAT TO DO:</p>


                    <!--list of instructions.. The numbering is automatic-->
                    <table class="instr" style="width:100%; text-align: left;">

                        <tr>
                            <td width="10%" class="num"></td>
                            <td>Cut the bottom quaters of Plastic Bottles. </td>
                        </tr>

                        <tr>
                            <td width="10%" class="num"></td>
                            <td>Attach a couple of bottoms with each other using metal zip.</td>
                        </tr>


                        <tr>
                            <td width="10%" class="num"></td>
                            <td>Cut fabrics to create mouth and nose and paste fake eyes.</td>
                        </tr>
                    </table>
                </td>







            </tr>




        </table>
    </div>










    <div class="CommentArea">       <!--COMMENTS-->


        <table style="width:100%; padding: 20px;" id="commentTable">
            <tr>
                <td colspan="2" style="padding: 20px;">
                    <p style="width:inherit; border-bottom: solid black; font-size: 20px;">COMMENTS</p>
                </td>
            </tr>
            <tr>
                <!--FIRST TD IS FOR USER NAME AND IMAGE-->
                <td style="width:100px; text-align: center; vertical-align: middle">

                    <img class="im" src="Images/Neutral-placeholder-profile.jpg" style="width:80px; height: 80px; border-radius: 30px;">    <!--IMAGE-->
                    <p style="height: auto; margin-top: 0px; text-align: center; vertical-align: top;">
                        Clara   <!--NAME-->
                    </p>


                </td>
                <!--SECOND TD IS FOR THE COMMENT TEXT-->
                <td class="ReaderField" style="margin-top: 30px; margin-bottom: 30px;">

                    <div class="speech-bubble" style="width: 400px; min-height: 50px; height: auto; padding: 15px; font-family: font-family: 'Muli-Reg'; ">
                        hi! I just tried this one and I literally like it!hi! I just tried this one and I literally like it!hi! I just tried this one and I literally like it!hi! I just tried this one and I literally like it!hi! I just tried this one and I literally like it!hi! I just tried this one and I literally like it!
                    </div>



                </td>
            </tr>


            <tr>
                <td style="width:100px; text-align: center; vertical-align: center;">

                    <img class="im" src="Images/Neutral-placeholder-profile.jpg" style="width:80px; height: 80px; border-radius: 30px;">
                    <p style="height: auto; margin-top: 0px; text-align: center; vertical-align: top;">
                        Jerry
                    </p>
                </td>
                <td class="ReaderField" style="margin-top: 30px; margin-bottom: 30px;">

                    <div class="speech-bubble" style="width: 400px; min-height: 50px; height: auto; padding: 15px; font-family: font-family: 'Muli-Reg'; ">
                        This is amazing.. I did this with my brother
                    </div>



                </td>
            </tr>

            <tr>
                <td>
                </td>
                
                <!--here is the comment input-->
                <td>

                    <input type="text" id="commentBox" name="commentBox" class="commentBox" maxlength="300" placeholder="Join the discussion">
                    <input type="button" value="&rarr;" class="commentButton" onclick="SendComment()">

                </td>



            </tr>




        </table>



    </div>










    <div class="footer">

        <div class="footerC brief">
            Medio Arto is a platform for eco-friendly art to share ideas of recycling items that usually reside in the recycling bin.. go and share yours now!
        </div>

        <div class="footerC">
            Contact Us:
            <div class=" footerC col">
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
