



<?php
$servername = "localhost";
$username = "root";
$password = "";
$name="medioarto";

// Create connection
$conn = new mysqli($servername, $username, $password,$name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

   session_start();
 
?>


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
    <script src="JS/jquery-ui-1.12.1.custom/jquery-ui.js"></script>


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
    
    
    
   });</script> 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
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

        function addIngredient() {
            var inputContent = document.getElementById("addIngreField").value;
            if (inputContent != "") {
                var table = document.getElementById("ingredientsTable");





                var row = table.insertRow(table.rows.length - 1);

                var cell1 = row.insertCell(0);
                cell1.style.textAlign = "center";


                cell1.innerHTML = "<button class='removeIngre' type='button' onclick='returnItem(this) ; removeIngredient(this)'>-</button>";



                //+ document.getElementById("commentBox").Value;
                var cell2 = row.insertCell(1);

                cell2.innerHTML = "<label class='ingred'>" + inputContent + "</label>";

                document.getElementById("addIngreField").value = "";


            }
        };



        function addStep() {
            var inputContent = document.getElementById("addStepField").value;
            if (inputContent != "") {
                var table = document.getElementById("stepsTable");


                /**/



                /**/

                var row = table.insertRow(table.rows.length - 1);




                var cell1 = row.insertCell(0);
                cell1.style.textAlign = "left";


                cell1.innerHTML = "<input class='removeSte' type='button' value='-' onclick='removeIngredient(this)'>";

                var cell2 = row.insertCell(1);
                cell2.classList.add("num");

                //+ document.getElementById("commentBox").Value;
                var cell3 = row.insertCell(2);
                cell3.style.textAlign = "left";
                cell3.width = "80%";
                cell3.innerHTML = inputContent;

                document.getElementById("addStepField").value = "";


            }
        };


        function removeIngredient(e) {
            var row = e.parentNode.parentNode;
            row.parentNode.removeChild(row);
        };

        function SendComment() {



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


    <script>
        $(document).ready(function() {

            $(".save").click(function() {
                confirm("are you sure you want to save changes?")
                //save changes..
            });

            $(".cancel").click(function() {
                //return to orignal artwork page
            });




        });

    </script>

    <!--javascript of profile pop-up menu-->

</head>

<body>

    <!--Navigation bar-->

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
             
  <a class="active" href="ArtistsDash.php?id=<?php
echo  $_SESSION['artistid'];
?>">
            <p class="menuText">Home</p>
        </a>


        <img href="MedioArto.html" src="Images/Leaves.png" alt="logo" class="logo">
    </div>



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

    <!--rgba(91, 146, 229, 1)-->
    

        <div style="background-color: white; min-width: 100%; height: 250px; text-align: center">





            
        <!--image of the artwork-->
         <?php  
            
                $query1 = "SELECT * FROM atwork where id =". $_GET['id'] .";";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        print "<img class='im' src='" . $row[4] . "' style='height: 300px; padding: 30px; width: 300px; margin-top:50px; background-color: white;' >";
                        
                    }
                }
                else
                                        echo "There are no atwork.";

            ?>
            
        </div>
        
        
        
        <form action ="editart.php" method="post">
            
            <?php
    
             print  " <input type='hidden' name='idartwork'  id='idartwork' value='". $_GET['id'] ."'> " ;
    
    ?>

 <script>
                    var sjid="<?php echo $_GET['id'] ?>" ;
                    var ele=document.getElementById("idartwork") ;
                        ele.setAttribute("value",sjid) ;
                    
                    </script>

        <div style="border: dashed orange; border-width: thick; width: auto; min-height: 400px; margin: 30px; border-radius: 40px; text-align: center; border-bottom: none; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px; ">

            
            <?php  
            
                $query1 = "SELECT * FROM atwork where id =". $_GET['id'] .";";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        print "<input name='artworkname' type='text' maxlength='300' placeholder='title' value='". $row[1] ."' style='border-radius: 20px; font-size: 50px; height: auto; width: 400px; border: none; text-align: center; margin-top: 150px; margin-bottom:50px;  font-family: 'Muli-Reg';'
                        

                        
                        >";
                        
                    }
                }
                else
                                        echo "There are no artwork";

            ?>
            
            
            




            <table style="width: 800px; text-align: center; font-size: 18px; margin: auto; border-bottom: solid black; padding: 5px; vertical-align: middle;">

                <tr>
                    <td>
                    <!--artist name-->
                    <img class="im" src="Images/person_110935.png" style="height: 20px; width: 20px; margin-top: 5px;" /> &nbsp;
                    By: 
                    
                      <?php  
            
                $query1 = "SELECT Fname ,Lname FROM artist where id IN (SELECT artist_id FROM atwork where id =". $_GET['id'] .");";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        print "<p>" . $row[0] . " ". $row[1] ." </p>";
                        
                    }
                }
                else
                    echo "There are no artist.";
            ?>         
            
                     
                    
                    
                </td>
                    
                    
                    
                    
                    
                    
                     <td>
                    <!--date-->
                    <img class="im" src="Images/cal.png" style="height: 20px; width: 20px; margin-top: 5px;" />
                        &nbsp;
<?php  
            
                $query1 = "SELECT * FROM atwork where id =". $_GET['id'] .";";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        print "<input name='artworkdate'type='date' value='". $row[5] ."' style='border-radius: 20px; font-size: 15px; height: 30px; width: 150px; border: none; text-align: center; margin-bottom: 10px;'>


";
                        
                    }
                }
                else
                    echo "There are no artwork.";
            ?>                </td>
                    
                    
                    
                
            
                    <td>
                    <!--time-->
                    <img class="im" src="Images/clock.png" style="height: 20px; width: 20px; "> &nbsp; 
                    <?php  
            
                $query1 = "SELECT * FROM atwork where id =". $_GET['id'] .";";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        print " <input  name='artworktime'type='text' maxlength='300'placeholder='time' value='". $row[3] ."' style='border-radius: 20px; font-size: 15px; height: 30px; width: 40px; border: none; text-align: center'> ";
                        
                    }
                }
                else
                    echo "There are no artwork.";
            ?>    
                        minutes
                    
                </td>
                    
                    
                    
                    

                    
                    
                    
                    
                    
                       
        
                    
                    
       
           
                    
                    
                    
                   
                   




                </tr>

            </table>
            
            <div >

 <?php  
            
                $query1 = "SELECT * FROM atwork where id =". $_GET['id'] .";";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        print "<textarea name='artworkdes' maxlength='300' placeholder='description' style='border-radius: 20px; font-size: 20px; width: 700px; border: none; margin: auto; text-align: center; margin-top: 50px; margin-bottom:50px;  font-family: Muli-Reg; min-height: 100px; padding: 10px;'>" . $row[2] . " </textarea>";
                        
                    }
                }
                else
                    echo "There are no artwork.";
            ?>         
            
            
</div>
           


                   
    
    
    
        </div>
        
           <div style="text-align: center;  height: 150px; vertical-align: middle">
                        <button class="save">SAVE</button>
                        &nbsp;
                        <button class="cancel">CANCEL</button>


                    </div>
                 </form>
    
    
    
    
    
    
    
    
    
    
    

        <div style="background-color: white; width: 100%; height: auto; min-height: 400px; text-align: center; ">

            <table style="margin: auto; text-align: center;  width: 1000px;">

                <tr style="text-align: center;">



                    <td style="text-align: center; ">
                        <p style="font-size: 25px;">WHAT TO HAVE:</p>
                        <div style="background-color: lightgrey; width: 300px; height: auto; border-radius: 25px; margin:auto; padding: 20px;">
                            <table id="ingredientsTable" style="width:100%; vertical-align: middle; text-align: left">

                                <?php
                $query = "SELECT name FROM tool WHERE id IN (SELECT tool_id FROM madefrom WHERE atwork_id IN(SELECT id FROM atwork where id =". $_GET['id'] ."));";
                            
                $result = mysqli_query($conn, $query);
                 if (mysqli_num_rows($result) > 0) 
                 {
                    while ($data = mysqli_fetch_row($result)) {
                        print "<tr>
                                    <td style='text-align: center'><button class='removeIngre' type='button' onclick='returnItem(this) ; removeIngredient(this)'>-</button></td>
                                    <td>

                                        <label class='ingred'>". $data[0] ." </label>

                                    </td>

                                </tr>";
                    }
                }
                else {
                    echo "There are no tool.";
                }
            ?>


                                

                                <tr id="addI" style="height:50px;">
                                    <td style="text-align: center">
                                        <input class="addIngre" type="button" value="+" onclick="removeItem('addIngreField'); addIngredient()">
                                    </td>
                                    
                                    <td>



                                        <input id="addIngreField" type="text" maxlength="25" autocomplete="off" style="outline: none;  border-radius: 20px; font-size: 15px; height: 30px; width: 95%; border: none; text-align:left; padding-left: 10px; padding-left: 10px;" list="suggests">

                                        <datalist id="suggests">
                                            
                                             <?php
                $query = "SELECT * FROM tool";
                $result = mysqli_query($conn, $query);
                 if (mysqli_num_rows($result) > 0) 
                 {
                    while ($data = mysqli_fetch_row($result)) {
                        print "<option value='". $data[1] ."'>";
                    }
                }
                else {
                    echo "There are no restaurants.";
                   
                }
            ?>       
                                        </datalist>
                                    </td>
                                </tr>


                            </table>
                        </div>
                    </td>


                      <td style="text-align: center; ">
                   <p style="font-size: 25px;">WHAT TO DO:</p>
                        <table id="stepsTable" style="width: 600px; text-align: left;  margin: auto">

                        
                                                                         
         <?php
                $query = "SELECT * FROM step WHERE artworkId  IN(SELECT id FROM atwork where id =". $_GET['id'] .");";
                            
                $result = mysqli_query($conn, $query);
                 if (mysqli_num_rows($result) > 0) 
                 {
                    while ($data = mysqli_fetch_row($result)) {
                        print " <tr>

                                <td><input class='removeSte' type='button' value='-' onclick='removeIngredient(this)'></td>
                                <td class='num'></td>
                                <td>". $data[1] ."</td>
                            </tr> ";
                    }
                }
                else {
                                        echo "There are no step.";

                }
            ?>
                  
                        
                        
                        <tr id="addS" style="height:50px;">


                                <td style="width:30px;"><input class="addSte" type="button" value="+" onclick="addStep()"></td>
                                <td class="num" style="width:30px;"></td>
                                <td style="width:300px;"><input id="addStepField" type="text" maxlength="90" style="outline: none; border-radius: 20px; border: solid black 2px; font-size: 15px; height: 30px; width: 280px; text-align: left; padding-left: 10px; padding-right: 10px;">


                                </td>
                            </tr> 
                        
                    </table>
                </td>







                </tr>
                <tr>
                    <td colspan="2">

                    </td>
                </tr>

              




            </table>
        </div>




<div class="CommentArea">       <!--COMMENTS-->

                    <td style="vertical-align: middle">
                    <!--comment-->
                                                

                    
                    
                    
                    
                    
                    
                    
                    
        <table style="width:100%; padding: 20px;" id="commentTable">
            <tr>
                <td colspan="2" style="padding: 20px;">
                    <p style="width:inherit; border-bottom: solid black; font-size: 20px;">COMMENTS</p>
                </td>
                 <td style="vertical-align: middle">
                    <!--comment-->
                                                

                    <?php  
            
                $query1 = "SELECT * FROM atwork where id =". $_GET['id'] .";";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        print "     <form action ='disComment.php' method='post'> 
                         
    
             <input type='hidden' name='dis'  id='idartwork' value='". $_GET['id'] ."'> 
    
    
                        <input Style='border:none; width:100px; height:50px;Border-radius:25px;' name='discommenen'  id='discommenen'  
                         type='button' onclick='this.form.submit()' value='Disable'  > </form> ";
                        
                            
                        
                    }
                }
                else
                    echo "There are no artwork.";
            ?>    
                     
                        
                        
                        <?php  
            
                $query1 = "SELECT * FROM atwork where id =". $_GET['id'] .";";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        print "  <form action ='enableComment.php' method='post'> 
                        <input type='hidden' name='add'  id='idartwork' value='". $_GET['id'] ."'> 
                        <input Style='border:none; width:100px; height:50px;Border-radius:25px;' name='encommenen'  id='encommenen'  
                         type='button' onclick='this.form.submit()' value='Enable'  > </form> ";
                        
                            
                        
                    }
                }
                else
                    echo "There are no artwork.";
            ?>    

                           
                    
                </td>
                <script>
                    function run(id){
                   if(id==0){
                          document.getElementById("discommenen").style.display = "none" ;
                            
                        }
                    else {
                        if(id=='1'){
                document.getElementById("encommenen").style.display = "none" ;


                            
                        }
                        
                        
                    }
                        
                    };
                        
                        
                         
                    
                                                  
                    <?php  
            
                $query1 = "SELECT * FROM atwork where id =". $_GET['id'] .";";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        
                        
                                  echo "run(". $row[7].");";    
                      
                        
                        
                        
                        
                        
                        
                        
                    }
                }
                else
                    echo "There are no artwork.";
            ?>    
                    
                    
                    </script>

                   
            </tr>
           
            
            
           
            
            
            
             <?php
                $query = " SELECT visitor.Fname, visitor.profileImage, comment.content ,comment.atwork_id 
FROM visitor
INNER JOIN comment ON visitor.id=comment.vistior_id
            
            where  comment.atwork_id  IN  (SELECT id FROM atwork where id ='". $_GET['id'] ."')  ;
            ";
                            
                $result = mysqli_query($conn, $query);
                            
                 if (mysqli_num_rows($result) > 0) {
                     
                      while ($data = mysqli_fetch_row($result)  ) {
                        print " <tr> <td style='width:100px; text-align: center; vertical-align: center;'>   <img class='im' src='". $data[1] ."' style='width:80px; height: 80px; border-radius: 30px;'> <p style='height: auto; margin-top: 0px; text-align: center; vertical-align: top;'>". $data[0] ."</p> </td>   <td class='ReaderField' style='margin-top: 30px; margin-bottom: 30px;'>
                          <div class='speech-bubble' style='width: 400px; min-height: 50px; height: auto; padding: 15px; font-family: font-family: 'Muli-Reg'; '>". $data[2] ."</div> </td> </tr> ";
                    }
                 } 
                   
                           
                           
                else {
                   
                }
            ?>
                 

            






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