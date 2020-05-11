<?php
$servername = "localhost";
$username = "root";
$password = "";
$name="medioarto";

// Create connection
$conn = new mysqli($servername,$username, "",$name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

   session_start();
?>

<?php

    if(isset($_POST['sub'])){
    $query1 ="INSERT INTO atwork (name,date, description , time,artist_id )            
				VALUES ('".$_REQUEST['add_title']."','".$_REQUEST['add_date']."','" .$_REQUEST['add_des']."','" .$_REQUEST['add_time']."','" .$_SESSION['artistid']."')"; 
                $result1 = mysqli_query($conn, $query1);
header("location:addArtwork.php?id='".$_SESSION['artistid']."'") ;	    
    }
?>

<html>

<head>

    <title>MEDDIO ARTO</title>


    <link rel="stylesheet" type="text/css" href="CSS/Navigation-visitor.css">
    <link rel="stylesheet" type="text/css" href="CSS/addArtwork.css">
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="JS/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="JS/FitText.js/jquery.fittext.js"></script>
    <script src="JS/flip/dist/jquery.flip.js"></script>
    <script src="JS/flip/dist/jquery.flip.min.js"></script>
    
   
    <script > 

$(document).ready(function() {
         $("#x").mouseover(function() { 
             
             $("#myForm").slideDown("fast");
         
         
         });
    
    $("#x").one("mouseover",function() {
            
                    //for artist, show add artwork + edit account
                    var addArtworkTab = document.createElement("a");
                    addArtworkTab.innerHTML = "<a href='addArtwork.php?id=<?php
echo  $_SESSION['artistid'];
?>'> <div class='ProfileOption' style='color:black;'>&#x1F4A1; &nbsp; Add Artwork</div></a>";
                    $(".ProfileTitle").after(addArtworkTab);

                
         
         });
    
    
    
    
    
    
    
            
         $("#myForm").mouseleave(function(){
         $("#myForm").slideUp("fast");
         });
    
    
    
   });
   
               $('form').submit(function(/*e*/) { //when form is submitted
               // e.preventDefault();
                $('form').hide();
                $('.back').show();  //back says that you registered succesfully
				
				
            });
   </script>



    <script>
        function removeItem(list) { //removes item from suggestions list
            var nIngredients = $('#Ingredients tr').length;
            if (nIngredients < 16) {
                var item = $('input#' + list).val();
                if ($('option[value="' + item + '"]'))
                    $('option[value="' + item + '"]').remove();
            }
        }

        function returnItem(e) { //returns item to suggestions list

            var optionVal = $(e).closest("td").next().children("label").html();
            var newOption = new Option(optionVal, optionVal);
            $("#suggests").append(newOption);
        }

        //life has no limits :)
        function addIngredient(e) { //adds item to ingredient list
            var warningI = document.getElementById("warningI");
            warningI.innerHTML = "";

            var nIngredients = $('#Ingredients tr').length;
            if (nIngredients < 16) {
                var inputContent = document.getElementById("addIngreField").value;
                if (inputContent != "") {
                    var table = document.getElementById("Ingredients");
                    var row = table.insertRow(table.rows.length - 2);
                    var cell1 = row.insertCell(0);
                    cell1.style.textAlign = "left";
                    cell1.innerHTML = "<button class='removeIngre' type='button' onclick='returnItem(this) ; removeIngredient(this)'>-</button>";


                    var cell2 = row.insertCell(1);
                    cell2.innerHTML = "<label class='ingred'>" + inputContent + "</label>";
                    document.getElementById("addIngreField").value = "";
                }


            }


        };


        function removeIngredient(e) { //removes item from ingredients list
            var warningI = document.getElementById("warningI");
            warningI.innerHTML = "";
            var warningS = document.getElementById("warningS");
            warningS.innerHTML = "";
            var row = e.parentNode.parentNode;
            row.parentNode.removeChild(row);

            document.getElementById("addStepField").disabled = false;
            document.getElementById("addStepField").style.backgroundColor = "white";
        };

        function validateIngre() {
            var warningI = document.getElementById("warningI");
            warningI.innerHTML = "";
            var nIngredients = $('#Ingredients tr').length;
            if (nIngredients < 5) {


                warningI.innerHTML = "<p class='warn'>Huh! Add at least one item!</p>";
            } else {
                $("#Ingredients").hide('slide', {
                    direction: 'left'
                }, 250, function() {
                    $("#Steps").show('slide', {
                        direction: 'right'
                    }, 250)
                })
            }
			

        };


        function validateStep() { //validate steps before end of the process
            var warningS = document.getElementById("warningS");
            warningS.innerHTML = "";
            var nIngredients = $('#Steps tr').length;
            if (nIngredients < 5) {


                warningS.innerHTML = "<p>Come on.. Add at least one step!</p>";
            } else {

                $("#finalImage").show('slide', {
                    direction: 'right'
                }, 450, function() {
                    $("#mainDiv").hide('slide', {
                        direction: 'right'
                    }, 450,);
                });



            }

        };



        function addStep() {
            var warningS = document.getElementById("warningS");
            warningS.innerHTML = "";
            var nSteps = $('#Steps tr').length;
            if (nSteps < 16) {
                var inputContent = document.getElementById("addStepField").value;
                if (inputContent != "") {
                    var table = document.getElementById("Steps");


                    /**/



                    /**/

                    var row = table.insertRow(nSteps - 3);




                    var cell1 = row.insertCell(0);
                    cell1.style.textAlign = "left";


                    cell1.innerHTML = "<button class='removeSte' type='button' onclick='removeIngredient(this)'>-</button>";

                    var cell2 = row.insertCell(1);
                    cell2.classList.add("num");

                    //+ document.getElementById("commentBox").Value;
                    var cell3 = row.insertCell(2);
                    cell3.style.textAlign = "left";
                    cell3.width = "80%";
                    cell3.innerHTML = inputContent;

                    document.getElementById("addStepField").value = "";


                }
            }

            if ($('#Steps tr').length == 16) {
                document.getElementById("addStepField").disabled = true;
                document.getElementById("addStepField").style.backgroundColor = "#E8E8E8";
            };
        };


        function validateGeneral() {

            if (!$('#addArtworkForm')[0].checkValidity()) {
                document.getElementById("warnD").innerHTML = "<p style='color: firebrick; font-weight: bolder;'>&#x1F620; Naah.. fill all the fields first!</p>"
            } else {
                $("#GeneralInformation").hide('slide', {
                    direction: 'right'
                }, 250, function() {
                    $("#Ingredients").show('slide', {
                        direction: 'left'
                    }, 250)
                });
            }



        }
    </script>




</head>



<body>
     <div id="MenuBar">

            <?php
                      
                     $IM= $_SESSION['artistimage'];
// Echo session variables that were set on previous page
     print "<a><img src='".$IM."'  class='userProfileIcon' id='x'></a> " ;
?>


        
        
        
        <a href="About-artist.php?id=<?php
echo  $_SESSION['atrtistid'];
?>">
            <p class="menuText">About</p>
        </a>
             
  <a  href="ArtistsDash.php?id=<?php
echo  $_SESSION['artistid'];
?>">
            <p class="menuText">Home</p>
        </a>


        <img href="MedioArto.html" src="Images/Leaves.png" alt="logo" class="logo">
    </div>







    <!--pop-up menu of profile image-->
<!--pop-up menu of profile image-->

    <nav class="form-popup" id="myForm">


        <p class="ProfileTitle">
            Hello, 
			        <?php
// Echo session variables that were set on previous page
echo  $_SESSION['artistfname'];
?>

        </p>





        <a href="MedioArto.php">
            <div class="ProfileOption">
                &#x1f511; &nbsp;
                Logout
            </div>
        </a>

    </nav>

    <div class="mainTitleDiv">
        <p id="LDSA" style="margin-top: 450px;">
            ARTWORK
        </p>

    </div>

	
<form method="post">
    <div id="finalImage" style="height:200px; width: 400px; margin: auto; margin-top: 150px; text-align: center; z-index: -100; ">
        <img src="Images/jumping.gif" style="height:200px; width: 200px; margin: auto; text-align: center;">
        <p id="finalStatement" style="text-align: center; font-size: 20px;">AH.. GORGEOUS! <br> WHAT A MARVELOUS ARTWORK! INIMITABLE TALENT!</p>
        <button type="button" name="sub" id="sub" style="border: none; border-radius: 15px; height: 40px; width: 100px; color: dimgrey; font-size: 22px; outline: none; background-color: darkgrey; color: white" class="fieldTitle" onclick="window.open('addArtwork.php')">BACK</button>
    </div>
	</form>





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
<?php
                mysqli_close($conn);
?>
?>