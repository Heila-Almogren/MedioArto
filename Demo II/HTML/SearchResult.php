<!DOCTYPE html>
<html>

<head>

    <title>MEDDIO ARTO</title>


    <link rel="stylesheet" type="text/css" href="CSS/Navigation-visitor.css">
    <link rel="stylesheet" type="text/css" href="CSS/SearchResultStyle.css">
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="JS/menuBar.js"></script>


    <script>
        window.onload = function() {
            var x = document.getElementById("res").rows.length;
            document.getElementById("total").innerText = "TOTAL: " + (x - 2) + " RESULTS";


            if (x - 2 == 0) {
                document.getElementById("none").style.display = "table-row";
            }


        };

    </script>

</head>



<body>

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

    <h1 style="margin: auto; margin-top: 150px; width: 100%; text-align: center; font-family: 'Muli-Reg';">SEARCH RESULTS</h1>
    <table id="res" style="font-size: 20px; font-family: 'Muli-Reg'; margin: auto; margin-top: 50px; text-align: left; width: 50%;  border-bottom: solid lightgrey">



        <tr>

            <td colspan="2" style="border-bottom: solid lightgrey;">
                <p style="color: dimgrey">RESULT</p>
            </td>

            <td style="width: 100px; border-bottom: solid lightgrey; text-align: center">
                <img src="Images/clock.png" style="height: 30px; width: 30px; opacity: 0.5;">
            </td>
        </tr>


        <!--This row is hiddena and it appears automatically when rows are zero-->

        <tr id="none" style="display:none">
            <td colspan="3" style="text-align: center">
                <p style="color: dimgrey;">No search Results</p>
            </td>


        </tr>





        <!--one row for each search result-->

        <tr>

            <td style="width: 120px; padding: 20px;">
                <!--the image of the artwork-->
                <img src="Images/ArtWorks/6-tin-can-felt-monsters.jpg" style="width:90px; height: 90px; border-radius: 50%;">
            </td>
            <td>
                <!--the name of the artwork-->
                <a href="Artifact.html">Artwork</a>
            </td>
            <!--the time of the artwork-->
            <td style="width: 100px; text-align: center">
                25 min
            </td>


        </tr>






    </table>

    <p id="total" style="font-size: 15px; font-family: 'Muli-Reg';  width: 50%; margin: auto; margin-bottom: 100px;">TOTAL: 0 RESULTS</p>
    <!--this total changes automatically based on number of rows-->










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
