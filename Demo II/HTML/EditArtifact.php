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

    <script src="JS/menuBar.js"></script>
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

    <!--rgba(91, 146, 229, 1)-->
    <form>

        <div style="background-color: white; min-width: 100%; height: 250px; text-align: center">





            <img class="im" src="Images/ArtWorks/plastic-bottle-art-30%20copy.jpg" style="height: 300px; padding: 30px; width: 300px; margin-top:50px; background-color: white;">
        </div>

        <div style="border: dashed orange; border-width: thick; width: auto; min-height: 400px; margin: 30px; border-radius: 40px; text-align: center; border-bottom: none; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px; ">


            <input type="text" maxlength="300" placeholder="title" value="ZOO BAGS" style="border-radius: 20px; font-size: 50px; height: auto; width: 400px; border: none; text-align: center; margin-top: 150px; margin-bottom:50px;  font-family: 'Muli-Reg';">




            <table style="width: 800px; text-align: center; font-size: 18px; margin: auto; border-bottom: solid black; padding: 5px; vertical-align: middle;">

                <tr>
                    <td>
                        <img class="im" src="Images/person_110935.png" style="height: 20px; width: 20px; margin-top: 5px;" /> &nbsp;
                        By: Jiff Thomas
                    </td>
                    <td>
                        <img class="im" src="Images/cal.png" style="height: 20px; width: 20px; margin-top: 5px;" /> &nbsp;
                        <input type="date" value="2019-12-21" style="border-radius: 20px; font-size: 15px; height: 30px; width: 150px; border: none; text-align: center; margin-bottom: 10px;">

                    </td>
                    <td>
                        <img class="im" src="Images/clock.png" style="height: 20px; width: 20px; "> &nbsp; <input type="text" maxlength="300" placeholder="time" value="25" style="border-radius: 20px; font-size: 15px; height: 30px; width: 40px; border: none; text-align: center"> minutes
                    </td>
                    <td style="vertical-align: middle">
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>

                        </label>
                    </td>
                    <td style="width:20px;">
                        Comments
                    </td>





                </tr>

            </table>



            <textarea maxlength="300" placeholder="description" style="border-radius: 20px; font-size: 20px; width: 700px; border: none; margin: auto; text-align: center; margin-top: 50px; margin-bottom:50px;  font-family: 'Muli-Reg'; min-height: 100px; padding: 10px;">Those cute bags that look like funny animals  is made from leftovers and it's a perfect for saving small stuff like keys, hair bands and staionary.. let's how to do it!"</textarea>



        </div>

        <div style="background-color: white; width: 100%; height: auto; min-height: 400px; text-align: center; ">

            <table style="margin: auto; text-align: center;  width: 1000px;">

                <tr style="text-align: center;">



                    <td style="text-align: center; ">
                        <p style="font-size: 25px;">WHAT TO HAVE:</p>
                        <div style="background-color: lightgrey; width: 300px; height: auto; border-radius: 25px; margin:auto; padding: 20px;">
                            <table id="ingredientsTable" style="width:100%; vertical-align: middle; text-align: left">

                                <tr>
                                    <td width="20%" style="text-align: center"><button class='removeIngre' type='button' onclick='returnItem(this) ; removeIngredient(this)'>-</button></td>
                                    <td>

                                        <label class="ingred">Plastic Bags

                                        </label>

                                    </td>

                                </tr>

                                <tr>
                                    <td width="5%" style="text-align: center"><button class='removeIngre' type='button' onclick='returnItem(this) ; removeIngredient(this)'>-</button></td>
                                    <td>

                                        <label class="ingred">Metal Zips

                                        </label>

                                    </td>

                                </tr>


                                <tr>
                                    <td style="text-align: center">
                                        <button class='removeIngre' type='button' onclick='returnItem(this) ; removeIngredient(this)'>-</button>
                                    </td>
                                    <td>

                                        <label class="ingred">Old Fabrics

                                        </label>

                                    </td>

                                </tr>



                                <tr>
                                    <td style="text-align: center"><button class='removeIngre' type='button' onclick='returnItem(this) ; removeIngredient(this)'>-</button></td>
                                    <td>

                                        <label class="ingred">Fake Eyes.. etc
                                        </label>

                                    </td>

                                </tr>

                                <tr id="addI" style="height:50px;">
                                    <td style="text-align: center">
                                        <input class="addIngre" type="button" value="+" onclick="removeItem('addIngreField'); addIngredient()">
                                    </td>
                                    <td>



                                        <input id="addIngreField" type="text" maxlength="25" autocomplete="off" style="outline: none;  border-radius: 20px; font-size: 15px; height: 30px; width: 95%; border: none; text-align:left; padding-left: 10px; padding-left: 10px;" list="suggests">

                                        <datalist id="suggests">
                                            <option value="Plastic Bags">
                                            <option value="colored paper">
                                            <option value="wood frames">
                                            <option value="Used Fabrics">
                                            <option value="Terapak Cartons">
                                            <option value="Hair ties">
                                            <option value="Newspaper">
                                            <option value="Cardboards">
                                            <option value="Pizza Box">
                                            <option value="Aluminum Foil">
                                            <option value="Cloth Hangers">
                                            <option value="CD's">
                                            <option value="Leather">
                                        </datalist>
                                    </td>
                                </tr>


                            </table>
                        </div>
                    </td>


                    <td style="text-align: center">
                        <p style="font-size: 25px;">WHAT TO DO:</p>
                        <table id="stepsTable" style="width: 600px; text-align: left;  margin: auto">

                            <tr>

                                <td><input class="removeSte" type="button" value="-" onclick="removeIngredient(this)"></td>
                                <td class="num"></td>
                                <td>Cut the bottom quaters of Plastic Bottles. </td>
                            </tr>

                            <tr>

                                <td><input class="removeSte" type="button" value="-" onclick="removeIngredient(this)"></td>
                                <td class="num"></td>
                                <td>Attach a couple of bottoms with each other using metal zip.</td>
                            </tr>


                            <tr>

                                <td><input class="removeSte" type="button" value="-" onclick="removeIngredient(this)"></td>
                                <td class="num"></td>
                                <td>Cut fabrics to create mouth and nose and paste fake eyes.</td>
                            </tr>

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

                <tr>
                    <td colspan="2" style="height: 150px; vertical-align: middle">
                        <button class="save">SAVE</button>
                        &nbsp;
                        <button class="cancel">CANCEL</button>


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





    </form>




</body>

</html>
