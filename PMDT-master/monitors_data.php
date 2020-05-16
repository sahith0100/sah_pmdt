<html>

<head>
    <title>SELEX</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="nav.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#Div1').show();
            $('#Div2').hide();
            $('#b1').click(function() {
                $('#Div1').show();
                $('#Div2').hide();
            })
            $('#b2').click(function() {
                $('#Div1').hide();
                $('#Div2').show();
            })
        });
    </script>
</head>

<body>
    <?php include "nav.php"; ?>
        <div class="header">
            <?php include "import.php"; ?>
        </div>
        <div class="col-sm-12 row" style="margin-top: 5%;">
            <div class="col-sm-3">
                <?php include "sidebar.php"; ?>
            </div>
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body">
                        <div class="inner" style="margin-left: 3%;">
                            <input id="b1" type="button" value="Integrals" style="width: 110px;height: 30px;font-weight: bold;background-color: blue;color: aliceblue;">
                            <input id="b2" type="button" value="Field Monitors" style="width: 150px;height: 30px;font-weight: bold;background-color: blue;color: aliceblue;">
                            <br>
                            <div id="Div1">

                                <table class="ex1" border="1">
                                    <tr>
                                        <td style="height: 15px;width: 177px;empty-cells: hide;"></td>
                                        <td style="height: 15px;width: 135px;"></td>
                                        <td style="height: 15px;width: 135px;"></td>
                                        <td style="height: 15px;width: 135px;"></td>
                                        <td style="height: 15px;width: 135px;"></td>
                                    </tr>
                                </table>
                                <br>
                                <table class="ex1" border="1">
                                    <tr>
                                        <td style="height: 15px;width: 150px;"><b> COURSE</b></td>
                                        <td style="height: 15px;width: 120px;"><b> MONITOR 1</b></td>
                                        <td style="height: 15px;width: 120px;"><b> MONITOR 2</b></td>
                
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 120px;"> Centerline RF Level</td>
                                        <td style="height: 15px;width: 120px;"> </td>
                                        <td style="height: 15px;width: 120px;"> </td>
                   
                                        <td>%</td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 120px;"> Centerline DDM</td>
                                        <td style="height: 15px;width: 120px;"> </td>
                                        <td style="height: 15px;width: 120px;"> </td>
                                    
                                        <td>DDM</td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 120px;"> Centerline SDM</td>
                                        <td style="height: 15px;width: 120px;"> </td>
                                        <td style="height: 15px;width: 120px;"> </td>
                                     
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 120px;"> Ident Mod Percent</td>
                                        <td style="height: 15px;width: 120px;"> </td>
                                        <td style="height: 15px;width: 120px;"> </td>
                                     
                                        <td>%</td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 120px;"> Width DDM</td>
                                        <td style="height: 15px;width: 120px;"> </td>
                                        <td style="height: 15px;width: 120px;"> </td>
                                 
                                        <td>DDM</td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 120px;"> Ident Status</td>
                                        <td style="height: 15px;width: 120px;"> </td>
                                        <td style="height: 15px;width: 120px;"> </td>
                                      
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 120px;">SynthLOCK/ReverseSense </td>
                                        <td style="height: 15px;width: 120px;">
                                            <table>
                                                <td style="border: 1px solid black;width: 25px;height: 20px;"></td>
                                                <td style="border: 1px solid black;width: 25px;"></td>
                                            </table>
                                        </td>
                                        <td style="height: 15px;width: 120px;">
                                            <table>
                                                <td style="border: 1px solid black;width: 25px;height: 20px;"></td>
                                                <td style="border: 1px solid black;width: 25px;"></td>
                                            </table>
                                        </td>
                                        <td></td>
                                    </tr>

                                </table>
                                <br>
                                <table class="ex1" border="1">
                                    <tr>
                                        <td style="height: 15px;width: 150px;"><b> CLEARANCE</b></td>
                                        <td style="height: 15px;width: 120px;"></td>
                                        <td style="height: 15px;width: 120px;"> </td>
                                       
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 120px;"> Centerline RF Level</td>
                                        <td style="height: 15px;width: 120px;"> </td>
                                        <td style="height: 15px;width: 120px;"> </td>
                                      
                                        <td>%</td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 120px;"> Centerline DDM</td>
                                        <td style="height: 15px;width: 120px;"> </td>
                                        <td style="height: 15px;width: 120px;"> </td>
                                    
                                        <td>DDM</td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 120px;"> Centerline SDM</td>
                                        <td style="height: 15px;width: 120px;"> </td>
                                        <td style="height: 15px;width: 120px;"> </td>
                                        
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 120px;"> Ident Mod Percent</td>
                                        <td style="height: 15px;width: 120px;"> </td>
                                        <td style="height: 15px;width: 120px;"> </td>
                                       
                                        <td>%</td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 120px;"> Width DDM</td>
                                        <td style="height: 15px;width: 120px;"> </td>
                                        <td style="height: 15px;width: 120px;"> </td>
                                       
                                        <td>DDM</td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 120px;"> Ident Status</td>
                                        <td style="height: 15px;width: 120px;"> </td>
                                        <td style="height: 15px;width: 120px;"> </td>
                                        
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 120px;">SynthLOCK/ReverseSense </td>
                                        <td style="height: 15px;width: 120px;">
                                            <table>
                                                <td style="border: 1px solid black;width: 25px;height: 20px;"></td>
                                                <td style="border: 1px solid black;width: 25px;"></td>
                                            </table>
                                        </td>
                                        <td style="height: 15px;width: 120px;">
                                            <table>
                                                <td style="border: 1px solid black;width: 25px;height: 20px;"></td>
                                                <td style="border: 1px solid black;width: 25px;"></td>
                                            </table>
                                        </td>
                                        <td></td>
                                    </tr>

                                </table>
                                <br>
                                <table class="ex1" border="1">
                                    <tr>
                                        <td style="height: 15px;width: 150px;">RF Freq Difference</td>
                                        <td style="height: 15px;width: 135px;"></td>
                                        <td style="height: 15px;width: 135px;"> </td>
                                        
                                        <td>Hz</td>
                                    </tr>
                                    <tr>
                                        <td style="height: 15px;width: 120px;"> Antenna Fault</td>
                                        <td style="height: 15px;width: 135px;"> </td>
                                        <td style="height: 15px;width: 135px;"> </td>
                                        
                                        <td></td>
                                    </tr>
                                </table>

                            </div>
                            <div id="Div2">
                                <div>
                                    <form>
                                        <fieldset>
                                            <legend> Near Field Monitor Course Position</legend>
                                            <br>
                                            <table class="ex1" border="1">
                                                <tr>
                                                    <td style="height: 15px;width: 120px;empty-cells: hide;"></td>
                                                    <td style="height: 15px;width: 120px;"></td>
                                                    <td style="height: 15px;width: 120px;"></td>
                                                    <td style="height: 15px;width: 120px;"></td>
                                                    <td style="height: 15px;width: 120px;"></td>
                                                </tr>
                                            </table>
                                            <br>
                                            <table class="ex1" border="1">
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"></td>
                                                    <td style="height: 15px;width: 120px;"> MONITOR 1</td>
                                                    <td style="height: 15px;width: 120px;"> MONITOR 2</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;">RF Level</td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> DDM</td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    
                                                    <td>DDM</td>
                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> SDM</td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Comm Fault</td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <br>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>