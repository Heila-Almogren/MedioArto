<!DOCTYPE html>
<html>
 
    <?php
                    include "dbcon.php";
                         
    ?>
    
                
<head>

    <title>MEDDIO ARTO</title>


    <link rel="stylesheet" type="text/css" href="CSS/Navigation-visitor.css">
    <link rel="stylesheet" type="text/css" href="CSS/VisitorStyle.css">
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="JS/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="JS/menuBar.js"></script>

    <script>
        $(document).ready(function() {


            $(".titleDivContainer").show('slide', {
                direction: 'left'
            }, 350, function() {
                $(".sideMenuContainer").show('slide', {
                    direction: 'right'
                }, 350);
            });





            $(".SideMenu").mouseout(function() {



                $(".SideMenu").animate({

                    right: '-350px',
                }, {
                    queue: false,

                }, "100");

                $(".mainTitleDiv").stop().animate({

                    left: '0px',
                }, {
                    queue: false,
                }, "100")
            });




            $(".SideMenu").mouseover(function() {

                $(".mainTitleDiv").stop(true).animate({

                    left: '-100px',
                }, {
                    queue: false,
                }, "50");

                $(".SideMenu").stop(true).animate({

                    right: '-50px',
                }, {
                    queue: false,
                }, "50");







            });

        });


        $(window).scroll(function() {
            $(".SideMenu").stop().animate({

                right: '-350px',
            }, {
                queue: false,
            }, "100")
        });

    </script>

</head>

<body>







    <div id="MenuBar">

        <a>
            <img src="Images/Neutral-placeholder-profile.jpg" class="userProfileIcon" id="x"></a>

        <a href="About-Visitor.html">
            <p class="menuText">About</p>
        </a>
        <a href="AllArtists.html">
            <p class="menuText">Artists</p>
        </a>
        <a href="AllArtworks.html">
            <p class="menuText">Artifacts</p>
        </a>
        <a class="active" href="visiterPage.html">
            <p class="menuText">Home</p>
        </a>

        <img href="MedioArto.html" src="Images/Leaves.png" alt="logo" class="logo">
    </div>



    <!--pop-up menu of profile image-->

    <nav class="form-popup" id="myForm">


        <p class="ProfileTitle">
            Hello, Sara!
            
            <?php

         ?>

        </p>







        <a href="MedioArto.html">
            <div class="ProfileOption">
                &#x1f511; &nbsp;
                Logout
            </div>
        </a>


    </nav>








    <!--side menu-->

    <div class="blockline">
        <div class="titleDivContainer" style="display: none;">

            <div class="mainTitleDiv">
                <p id="LDSA">
                    Hey&#44; Let's do something arty!
                </p>

            </div>
        </div>
        <div class="sideMenuContainer" style="display: none;">

            <div class="SideMenu" id="SideMenu">




                
                
               <script>
                
                    <?php
                   $query="select name from tool"
                       $result=mysql_query($conn,$query) ;
                         
    ?>
                
                <?php
            while ($arr=mysql_fetch_array($result)) {
                 ?>
                 <?php
                $tool=arr["name"] ;
               
                ?>
    
                var td = document.createElement("td");
                 var tr = document.createElement("tr");
               var lable = document.createElement("lable");
             var input = document.createElement("input");
                 var span = document.createElement("span");

           var cttl=td.appendChild(tr).appendChild(lable) ;
                   
                   cttl.innerHTML= name;
                  cttl.appendChild(input).appendChild(span) ;
                }
                
                </script>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                



                <table id="innerTable">
                    <tr>
                        <td>
                            <p class="SideMenuTitle">WAHT'S IN YOUR RECYCLE BIN?

                                <p>
                        </td>


                        <td>
                            <form>


                                <div class="MenuElements">
                                    <!--here are all the items that are in the database-->
                                    <!--Replace those with the real items-->

                                    <table id="conta">
                   
                                        <!--row
                                        <tr>
                                            <td>
                                                <label class="container">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <!--row
                                        <tr>
                                            <td>
                                                <label class="container">colored paper
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <!--row--
                                        <tr>
                                            <td>

                                                <label class="container">wood frames
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <!--row--
                                        <tr>
                                            <td>
                                                <label class="container">Used Fabrics
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <!--row--
                                        <tr>
                                            <td>
                                                <label class="container">Terapak Cartons
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <!--row--
                                        <tr>
                                            <td>

                                                <label class="container">Hair ties
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <!--row--
                                        <tr>
                                            <td>
                                                <label class="container">Newspaper
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>

                                            </td>
                                        </tr>
                                        <!--row--
                                        <tr>
                                            <td>
                                                <label class="container">Cardboards
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <!--row--
                                        <tr>
                                            <td>

                                                <label class="container">Pizza Box
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>

                                            </td>
                                        </tr>
                                        <!--row--
                                        <tr>
                                            <td>
                                                <label class="container">Aluminum Foil
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <!--row--
                                        <tr>
                                            <td>
                                                <label class="container">Cloth Hangers
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <!--row--
                                        <tr>
                                            <td>
                                                <label class="container">Sterofoam Cups
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <!--row--
                                        <tr>
                                            <td>
                                                <label class="container">CD's
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <!--row--
                                        <tr>
                                            <td>
                                                <label class="container">Leather
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <!--row--
                                        -->
                                    </table>










                                </div>


                                <p id="buttons">
                                    <button class="SearchButton" type="submit" formaction="SearchResult.html">Search</button>
                                    &nbsp;
                                    <button class="SearchButton" type="reset">Reset</button>

                                </p>
                            </form>
                        </td>
                    </tr>
                </table>







            </div>

        </div>

    </div>



    <div id="featured">
        <p class="featuredArtTitle">FEATURED ARTWORKS</p><br>


        <figure>
            <img class="featuredImg" src="Images/ArtWorks/6-tin-can-felt-monsters.jpg">
        </figure>

        <figure>
            <img class="featuredImg" src="Images/ArtWorks/226695.jpeg">
        </figure>

        <figure>
            <img class="featuredImg" src="Images/ArtWorks/recycle-creative-lamai-tote-bag.jpg_16.jpg">
        </figure>

        <figure>
            <img class="featuredImg" src="Images/ArtWorks/f1d97862783760aa08c7847204df0940.jpg">
        </figure>

        <figure>
            <img class="featuredImg" src="Images/ArtWorks/plastic-bottles-recycling-ideas-21.jpg">
        </figure>

        <figure>
            <img class="featuredImg" src="Images/ArtWorks/decorative painted bottle ideas3 (6).jpg">
        </figure>

        <figure>
            <img class="featuredImg" src="Images/ArtWorks/b0870903479cc96cc4e4900d7c0f5a9a.jpg">
        </figure>

        <figure>
            <img class="featuredImg" src="Images/ArtWorks/playing_card_lamp_shade.png">
        </figure>



        
        
        
        


        <br>


        <p class="featuredArtTitle">FEATURED ARTISTS</p><br>

        <figure>
            <img class="featuredImg" src="Images/Artists/3.jpg">
            <p>Frank Lee</p>
        </figure>

        <figure>
            <img class="featuredImg" src="Images/Artists/5.jpg">
            <p>Harrison Burch</p>
        </figure>

        <figure>
            <img class="featuredImg" src="Images/Artists/8.jpeg">
            <p>Taylor Camacho</p>
        </figure>

        <figure>
            <img class="featuredImg" src="Images/Artists/10.jpg">
            <p>Roger Gomez</p>
        </figure>






    </div>







    <!--

-->
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
