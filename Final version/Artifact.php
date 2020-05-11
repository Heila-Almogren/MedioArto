

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
    <title><?php  
            
                $query1 = "SELECT * FROM atwork where id =". $_GET['id'] .";";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        print "" . $row[1] . "";
                        
                    }
                }
                else
                                        echo "There are no artwork.";

            ?></title>
    <link rel="stylesheet" type="text/css" href="CSS/ArtifactStyle.css">
    <link rel="stylesheet" type="text/css" href="CSS/Navigation-visitor.css">
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    
    
    
    <script>
        $(document).ready(function() {
            var isVisitor = true; //change this
            if (isVisitor) {
                $('#brief').append("<td><form method='post' action='like.php'><input type ='hidden'id='iddlike' name='idd' value=''> <input id='toggle-heart' onChange='this.form.submit()' type='checkbox'> <label for='toggle-heart' style='font-size: 35px; color:black;'>&#10004; </label> Like </form></td>");
               
            };
            
            if (isVisitor) {
                $('#brief').append("<td><form method='post' action='removelikefromart.php'><input type ='hidden'id='idartfroo' name='idartfroo' value=''> <input id='toggle-hear' onChange='this.form.submit()' type='checkbox'> <label for='toggle-hear' style='cursor:pointer ;font-size: 35px;color:black;'>&#10006; </label> Dislike </form></td>");
               
            }; 
            
            
            
            
             
                   var sjid="<?php echo $_GET['id'] ?>" ;
                    var ele=document.getElementById("iddlike") ;
                        ele.setAttribute("value",sjid) ;
                    
             var sjidd="<?php echo $_GET['id'] ?>" ;
                    var eele=document.getElementById("idartfroo") ;
                        eele.setAttribute("value",sjidd) ;
                     
/*
            var isArtist = true; //change this
            if (isArtist) {
                $('#brief').append("<td><a href='EditArtifact.php'><img class='im' src='Images/set.png' style='height: 20px; width: 20px; '></a></td>");

            };
*/


        });

    </script>
    <script>
        $(document).ready(function() {

            $('#toggle-hear').click(function() {
                if(confirm("are you sure you want to Dislike?"))
                this.form.submit();
                //save changes..
            });
        });
                    </script>
    
   
    <script>
        
        function SendComment() { //function when sending a comment.



                
                
                
                  
    
    
                  
                
                 
                
                
               
                
                var table = document.getElementById("commentTable");




                var row = table.insertRow(table.rows.length - 1);

                var cell1 = row.insertCell(0);
                cell1.style.width = "100px";
                cell1.style.height = "100px";
                cell1.style.textAlign = "center";
                cell1.style.verticalAlign = "middle";


                  // session=============
                cell1.innerHTML = " <?php
                $query = "  SELECT * FROM visitor WHERE id='". $_SESSION['visitorid'] ."';";
                            
                $result = mysqli_query($conn, $query);
                            
                 if (mysqli_num_rows($result) > 0) {
                     
                      while ($data = mysqli_fetch_row($result)  ) {
                        print " <tr> <td style='width:100px; text-align: center; vertical-align: center;'>   <img class='im' src='". $data[5] ."' style='width:80px; height: 80px; border-radius: 30px;'> <p style='height: auto; margin-top: 0px; text-align: center; vertical-align: top;'>". $data[3] ."</p> </td> "  ;
                            
                          
                    }
                 } 
                   
                           
                           
                else {
                   
                }
            ?>";



                //+ document.getElementById("commentBox").Value;
                var cell2 = row.insertCell(1);
                cell2.addClass = "ReaderField";
                cell2.style.marginTop = "30px";
                cell2.style.marginBottom = "30px";

                cell2.innerHTML = "<div class='speech-bubble' style='width: 400px; min-height: 50px; height: auto; padding: 15px; font-family: 'Muli-Reg'; '>" + inputContent + "</div>";
                
                
                 //code content shah================================
                  
                  
            
                    
                
                
                
                
                

                document.getElementById("commentBox").value = "";


                
              
                
            }

        }

    </script>

    <!--javascript of profile pop-up menu-->

</head>

<body>

    <!--Navigation bar-->

   
    <div id="MenuBar">

       
            <?php
                      
                     $IM= $_SESSION['visitorIMAGE'];
// Echo session variables that were set on previous page
     print "<a><img src='".$IM."'  class='userProfileIcon' id='x'></a> " ;
?>
        
        
        <a href="About-Visitor.php?id=<?php
echo  $_SESSION['visitorid'];
?>">
            <p class="menuText">About</p>
        </a>
        <a href="AllArtists.php?id=<?php
echo  $_SESSION['visitorid'];
?>">
            <p class="menuText">Artists</p>
        </a>
        <a href="AllArtworks.php?id=<?php
echo  $_SESSION['visitorid'];
?>">
            <p class="menuText">Artifacts </p>
        </a>
        <a  href="visitor.php?id=<?php
echo  $_SESSION['visitorid'];
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
echo  $_SESSION['visitorfname'];
?>
            
            
        </p>

        
        <script>
        $(document).ready(function() {
         $("#x").mouseover(function() { 
             
             $("#myForm").slideDown("fast");
         
         
         });
    
    $("#x").one("mouseover",function() {
             
             /*
             
             flag 1 --> artists
             flag 2 --> visitor
             flag 3 -- > admin
             links i used here are kharbota.. make valid php links, thanks
             */
         
               
        
        flag2 = true;
        if(flag2){
                    //for visitor, show edit account
                    
                    var editTabV = document.createElement("a");
                    
                    editTabV.innerHTML = "<a href='visitorDashboard.php?id=<?php
echo  $_SESSION['visitorid'];
?>'><div class='ProfileOption edit' style='color:black;'>&#128100; &nbsp; View Account</div></a>";
                    
                    $(".ProfileTitle").after(editTabV);
                };
        
        
      
        
        
        
         
         });
    
    
    
    
    
    
    
            
         $("#myForm").mouseleave(function(){
         $("#myForm").slideUp("fast");
         });
    
    
    
   });
        
        
        
        
        </script>



        <a href="MedioArto.php">
            <div class="ProfileOption">
                &#x1f511; &nbsp;
                Logout
            </div>
        </a>

    </nav>


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

    <div style="border: dashed orange; border-width: thick; width: auto; min-height: 400px; margin: 30px; border-radius: 40px; text-align: center; border-bottom: none; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px; ">
        <!--name of the artwork-->
        <p style="margin-top: 150px;  font-family: 'Muli-Reg'; font-size: 50px; text-align: center; width: 100%; "> 
            <?php  
            
                $query1 = "SELECT * FROM atwork where id =". $_GET['id'] .";";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        print "<b>" . $row[1] . "</b>";
                        
                    }
                }
                else
                                        echo "There are no artwork";

            ?></p>


        <!--table for artwork info (artists name, time, date, etc..) -->
        <table style="width: 800px; text-align: center; font-size: 18px; margin: auto; border-bottom: solid black; padding: 5px; vertical-align: middle;">

            <tr id="brief">
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
                    <img class="im" src="Images/cal.png" style="height: 20px; width: 20px; margin-top: 5px;" /> &nbsp;
<?php  
            
                $query1 = "SELECT * FROM atwork where id =". $_GET['id'] .";";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        print "<p>" . $row[5] . "</p>";
                        
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
                        print "<p>" . $row[3] . " minutes </p>";
                        
                    }
                }
                else
                    echo "There are no artwork.";
            ?>             
                    
                </td>


            </tr>

        </table>

        <!--artwork description-->
        <p style=" font-family: 'Muli-Reg'; font-size: 20px; text-align: center; width: 700px; margin: auto; margin-top: 50px; margin-bottom: 50px;">
           
            <?php  
            
                $query1 = "SELECT * FROM atwork where id =". $_GET['id'] .";";
                $result1 = mysqli_query($conn, $query1);
                if ($result1) {
                    while ($row = mysqli_fetch_row($result1)) {
                        print "<p>" . $row[2] . "  </p>";
                        
                    }
                }
                else
                    echo "There are no artwork.";
            ?>         
            
        </p>





    </div>

    <div style="background-color: white; width: 100%; height: auto; min-height: 400px; text-align: center; ">

        <table style="margin: auto; text-align: center;  width: 1000px;">

            <tr style="text-align: center;">


                <!--list of ingredients-->
                <td style="text-align: center; ">
                    <p style="font-size: 25px;">
                        
                        
                        WHAT TO HAVE:</p>
                    <div style="background-color: lightgrey; width: 300px; height: auto; border-radius: 25px; margin:auto; padding: 20px;">
                        <table style="width:100%; vertical-align: middle; text-align: left">

                           
             
                            <script>
                            var id =
                            
                            </script>
                                                           
         <?php
                $query = "SELECT name FROM tool WHERE id IN (SELECT tool_id FROM madefrom WHERE atwork_id IN(SELECT id FROM atwork where id =". $_GET['id'] ."));";
                            
                $result = mysqli_query($conn, $query);
                 if (mysqli_num_rows($result) > 0) 
                 {
                    while ($data = mysqli_fetch_row($result)) {
                        print "<tr> <td> <label class='container'>". $data[0] ." <input type='checkbox'>  <span class='checkmark'></span> </label> </td></tr> ";
                    }
                }
                else {
                    echo "There are no tool.";
                }
            ?>
                   
                            
                            


                        </table>
                    </div>
                </td>


                <td style="text-align: center; ">
                    <p style="font-size: 25px;">WHAT TO DO:</p>


                    <!--list of instructions.. The numbering is automatic-->
                    <table class="instr" style="width:100%; text-align: left;">

                        
                                                                         
         <?php
                $query = "SELECT * FROM step WHERE artworkId  IN(SELECT id FROM atwork where id =". $_GET['id'] .");";
                            
                $result = mysqli_query($conn, $query);
                 if (mysqli_num_rows($result) > 0) 
                 {
                    while ($data = mysqli_fetch_row($result)) {
                        print "<tr> <td width='10%' class='num' ></td> <td> ". $data[1] ." </td></tr> ";
                    }
                }
                else {
                                        echo "There are no step.";

                }
            ?>
                  
                        
                        
                        
                        
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
                 

            


            <tr>
                <td>
                </td>
                
                <!--here is the comment input-->
                
                
               
                
                <td id='comment'>
                    
 <form id="scs" method='post' action='comment.php'>
                    <input type="text" id="commentBox" name="commentBox" class="commentBox" maxlength="300" placeholder="Join the discussion">
                   <input type="hidden" name="idd"  id="idcomment" value=" ">
                    <input  id = 'sc' type='submit'  value="&rarr;" class="commentButton"  onclick="SendComment()" >
                    
                    </form>
                    
                    <script>
                    var sjid="<?php echo $_GET['id'] ?>" ;
                    var ele=document.getElementById("idcomment") ;
                        ele.setAttribute("value",sjid) ;
                    
                    </script>
                    
                </td>
                
                
                <?php
                $query = "SELECT enableComment FROM atwork WHERE id= ". $_GET['id'] .";";
                            
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0)  
                 {
                    while ($data = mysqli_fetch_row($result)) {
                        if($data[0]==0){
                           echo " <script>$('#comment').hide();
                            </script>" ;
                        }
                    }
                }
                else {
                   
                }
            ?>
                   
                   
                
                
                
                 


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
<?php
                mysqli_close($conn);
?>

