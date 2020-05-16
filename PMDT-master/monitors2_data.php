<html>

<head>
    <title>SELEX</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="nav.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#d12').show();
            $('#Div2').hide();
            $('#Div3').hide();
            $('#Div4').hide();
            $('#Div5').hide();
            $('#b1').click(function() {
                $('#d12').show();
                $('#Div2').hide();
                $('#Div3').hide();
                $('#Div4').hide();
                $('#Div5').hide();
            })
            $('#b2').click(function() {
                $('#d12').hide();
                $('#Div2').show();
                $('#Div3').hide();
                $('#Div4').hide();
                $('#Div5').hide();
            })
            $('#b3').click(function() {
                $('#d12').hide();
                $('#Div2').hide();
                $('#Div3').show();
                $('#Div4').hide();
                $('#Div5').hide();
            })
            $('#b4').click(function() {
                $('#d12').hide();
                $('#Div2').hide();
                $('#Div3').hide();
                $('#Div4').show();
                $('#Div5').hide();
            })
            $('#b5').click(function() {
                $('#d12').hide();
                $('#Div2').hide();
                $('#Div3').hide();
                $('#Div4').hide();
                $('#Div5').show();
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
                        <div class="inner" style="margin-left:-1%;">
                            <input id="b1" type="button" value="Integrals" style="width: 81px;height: 30px;font-weight: bold;background-color: blue;color: aliceblue;">
                            <input id="b2" type="button" value="Field Monitors" style="width: 122px;height: 30px;font-weight: bold;background-color: blue;color: aliceblue;">
                            <input id="b3" type="button" value="Certification Test Results" style="width: 211px;height: 30px;font-weight: bold;background-color: blue;color: aliceblue;">
                            <input id="b4" type="button" value="Maintenance Alerts" style="width: 159px;height: 30px;font-weight: bold;background-color: blue;color: aliceblue;">
                            <input id="b5" type="button" value="Status" style="width: 63px;height: 30px;font-weight: bold;background-color: blue;color: aliceblue;">
                            <br>
                            <div id="d12">
                                <input type="text" style="width: 145px;">

                                <table class="ex1" border="1">
                                    <tbody>
                                        <tr>
                                            <td style="width: 30px;"></td>
                                            <td colspan="4">
                                                <p style="
    width: max-content;
">Antenna Fault</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td colspan="4">
                                                <p>Comm Fault</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="ex1" border="1" style="
    position: absolute;
    margin-left: 152px;
    margin-top: -76px;
">
                                    <tbody>
                                        <tr>
                                            <td colspan="3" style="
">
                                                <p style="
    width: 155px;
">Course Ident Status</p>
                                            </td>
                                            <td colspan="3">
                                                <input type="number" style="
    width: 184px;
">
                                            </td>

                                        </tr>
                                        <tr>
                                            <td style="width: 50px;"></td>
                                            <td colspan="3" style="
    width: 190px;
">Course Synthesizer Lock Fault Status</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td colspan="5">Course Reverse Sense</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="ex1" border="1" style="
    margin-top: -76px;
    margin-left: 510px;
">
                                    <tbody style="
    width: 243px;
">
                                        <tr>
                                            <td colspan="3">
                                                <p style="/* font-size: 14px; */width: 173px;">Clearance Ident Status</p>
                                            </td>
                                            <td colspan="3">
                                                <input type="number" style="
    width: 191px;
">
                                            </td>

                                        </tr>
                                        <tr>
                                            <td style="
    width: 50px;
"></td>
                                            <td colspan="3" style="
    width: 187px;
">Clearence Synthesizer Lock Fault Status</td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td colspan="5">Clearence Reverse Sense</td>

                                        </tr>
                                    </tbody>
                                </table>

                                <form>
                                    <fieldset style="width: max-content;">
                                        <legend>Course</legend>
                                        <table class="ex1" border="1">
                                            <tbody>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;">Alarm Low </td>
                                                    <td style="height: 15px;"> PreALarm Low</td>
                                                    <td style="height: 15px;">Nominal</td>
                                                    <td style="height: 15px;">PreAlarm High </td>
                                                    <td style="height: 15px;">Alarm High </td>
                                                    <td style="height: 15px;"> </td>

                                                </tr>

                                                <tr>
                                                    <td style="height: 15px;width: 160px;"> Centerline RF Level</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Centerline DDM</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">DDM</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Centerline SDM</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>

                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Ident Mod Percent</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Width DDM</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">DDM</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </fieldset>
                                </form>
                                <form>
                                    <fieldset style="width: max-content;">
                                        <legend>Clearance</legend>
                                        <table class="ex1" border="1">
                                            <tbody>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;">Alarm Low </td>
                                                    <td style="height: 15px;"> PreALarm Low</td>
                                                    <td style="height: 15px;">Nominal</td>
                                                    <td style="height: 15px;">PreAlarm High </td>
                                                    <td style="height: 15px;">Alarm High </td>
                                                    <td style="height: 15px;"> </td>

                                                </tr>

                                                <tr>
                                                    <td style="height: 15px;width: 160px;"> Centerline RF Level</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Centerline DDM</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">DDM</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Centerline SDM</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>

                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Ident Mod Percent</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Width DDM</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">DDM</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </fieldset>
                                </form>

                                <table class="ex1" border="1">
                                    <tbody>
                                        <tr>
                                            <td style="height: 15px;width: 120px;"> </td>
                                            <td style="height: 15px;">Alarm Low </td>
                                            <td style="height: 15px;"> PreALarm Low</td>
                                            <td style="height: 15px;">Nominal</td>
                                            <td style="height: 15px;">PreAlarm High </td>
                                            <td style="height: 15px;">Alarm High </td>
                                            <td style="height: 15px;"> </td>

                                        </tr>
                                        <tr>
                                            <td style="height: 15px;width: 180px;"> RF Freq Difference</td>
                                            <td style="height: 15px;">
                                                <input type="number" style="width: 83px;"> </td>
                                            <td style="height: 15px;">
                                                <input type="number" style="width: 83px;">
                                            </td>
                                            <td style="height: 15px;"></td>
                                            <td style="height: 15px;">
                                                <input type="number" style="width: 83px;">
                                            </td>
                                            <td style="height: 15px;">
                                                <input type="number" style="width: 83px;">
                                            </td>
                                            <td style="height: 15px;">HZ</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div id="Div2" style="width:880px">
                                <table class="ex1" border="1">
                                    <tbody>
                                        <tr>
                                            <td style="height: 23px;width: 193px;"></td>

                                        </tr>

                                    </tbody>
                                </table>
                                <br>
                                <form>
                                    <fieldset style="
    width: max-content;
">
                                        <legend>Near Field Monitor Course Position</legend>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox">
                                                    </td>
                                                    <td style="width: 179px;">Communications Fault</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="ex1" border="1">
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;">Alarm Low </td>
                                                    <td style="height: 15px;"> PreALarm Low</td>
                                                    <td style="height: 15px;">Nominal</td>
                                                    <td style="height: 15px;">PreAlarm High </td>
                                                    <td style="height: 15px;">Alarm High </td>
                                                    <td style="height: 15px;"> </td>

                                                </tr>

                                                <tr>
                                                    <td style="height: 15px;width: 160px;"> RF Level</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> DDM</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">DDM</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> SDM</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 83px;">
                                                    </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </fieldset>
                                </form>
                            </div>
                            <div id="Div3">
                                <table align="left">
                                    <tr>
                                        <td>Start of Test
                                            <input type="text" style="width: 80px;">
                                        </td>
                                        <td></td>
                                        <td>
                                            <input type="checkbox" style="width: 20px;">Communication Fault &nbsp;</td>
                                        <td></td>
                                        <td>Certification Category&nbsp;&nbsp;
                                            <input type="text" style="width: 60px;">
                                        </td>

                                    </tr>

                                </table>
                                <br>
                                <p></p>
                                <br>
                                <table align="left" style="width: 655px;">
                                    <tr>
                                        <td rowspan="2"></td>
                                        <th colspan="2">Ceterline High Test</th>
                                        <th colspan="2">Centerline Low Test</th>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>

                                        <th>Expected</th>
                                        <th>Actual</th>
                                        <th>Expected</th>
                                        <th>Actual</th>

                                    </tr>
                                    <tr>
                                        <th>Centerline RF Level</th>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>% of Nominal</td>

                                    </tr>
                                    <tr>
                                        <th>Centerline DDM</th>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>DDM</td>

                                    </tr>
                                    <tr>
                                        <th>Centerline SDM</th>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>%Mod</td>

                                    </tr>
                                    <tr>
                                        <th>Width DDM</th>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>DDM</td>

                                    </tr>
                                </table>
                                <table align="left" style="width: 655px;">
                                    <tr>
                                        <td rowspan="2"></td>
                                        <th colspan="2">Width Narrow Test</th>
                                        <th colspan="2">Width Wide Test</th>
                                        <td rowspan="2"></td>
                                    </tr>
                                    <tr>

                                        <th>Expected</th>
                                        <th>Actual</th>
                                        <th>Expected</th>
                                        <th>Actual</th>

                                    </tr>
                                    <tr>
                                        <th>Centerline RF Level</th>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>% of Nominal</td>

                                    </tr>
                                    <tr>
                                        <th>Centerline DDM</th>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>DDM</td>

                                    </tr>
                                    <tr>
                                        <th>Centerline SDM</th>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>%Mod</td>

                                    </tr>
                                    <tr>
                                        <th>Width DDM</th>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>
                                            <input type="number" style="width:90px">
                                        </td>
                                        <td>DDM</td>

                                    </tr>
                                </table>
                            </div>
                            <div id="Div4">
                                <table align="left" style="width:610px;">
                                    <tr>
                                        <td colspan="2" style="height: 50px;">&nbsp;&nbsp;
                                            <input type="datetime">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">&nbsp;MCPU ROM Fault</td>
                                        <td>
                                            <input type="checkbox">&nbsp;Course CSB/SBO Phase Unlock</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">&nbsp;MCPU RAM Fault</td>
                                        <td>
                                            <input type="checkbox">&nbsp;Clearance CSB/SBO Phase Unlock</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">&nbsp;MCPU Functional Fault</td>
                                        <td>
                                            <input type="checkbox">&nbsp;Synthesizer RAM Parity Error</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">&nbsp;MDSP ROM Fault</td>
                                        <td>
                                            <input type="checkbox">&nbsp;Course CSB VSWR Fault</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">&nbsp;MSDP RAM Fault</td>
                                        <td>
                                            <input type="checkbox">&nbsp; Clearance CSB VSWR Fault</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">&nbsp;MSDP Functional Fault</td>
                                        <td>
                                            <input type="checkbox">&nbsp;Course Thermal Fault</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">&nbsp;Course Transmitter Disabled</td>
                                        <td>
                                            <input type="checkbox">&nbsp;Clearance thermal Fault</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">&nbsp;Clearance Transmitter Disabled</td>
                                        <td>
                                            <input type="checkbox">&nbsp;8 Hz Clock Fault</td>
                                    </tr>

                                </table>
                            </div>
                            <div id="Div5" style="">
                                <table align="left">
                                    <tbody>
                                        <tr>
                                            <td>Start of Test &nbsp;&nbsp;
                                                <input type="text">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table align="left" style="width: 538px;position: absolute;margin-top: 75px;">
                                    <tbody>
                                        <tr>
                                            <th colspan="2">Alarm /Alerts</th>
                                            <th colspan="2">Software Revisions</th>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="checkbox">&nbsp;Monitor Alarm</td>
                                            <td colspan="2">MCPU Revision &nbsp;&nbsp;
                                                <input type="number" style="width: 80px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="checkbox"> Monitor Alert</td>
                                            <td colspan="2">MDSP Revision&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="number" style="width: 80px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="checkbox"> Maintenance Alert</td>
                                            <th colspan="2">Diagnostics</th>
                                        </tr>
                                        <tr>
                                            <th colspan="2">Operation Condition</th>
                                            <td colspan="2">
                                                <input type="checkbox"> EEPROM Fault</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="checkbox"> Remote Mode
                                                <input type="checkbox"> Local Mode</td>

                                            <td colspan="2">
                                                <input type="checkbox"> RAM Not Stored to EEPROM</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="checkbox"> Hot Standby Present</td>
                                            <td colspan="2">
                                                <input type="checkbox"> Diagnostics Test in progress</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Waveform Status &nbsp;&nbsp;
                                                <input type="number" style="width: 80px;">
                                            </td>
                                            <td colspan="2">Shutdown Status &nbsp;&nbsp;
                                                <input type="number" style="width: 80px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <th colspan="2">Ident</th>
                                        </tr>
                                        <tr>
                                            <th colspan="2">Power Supplies</th>
                                            <td colspan="2">
                                                <input type="checkbox"> DME Ident Enabled</td>
                                        </tr>
                                        <tr>
                                            <td>+5 VDC &nbsp;&nbsp;&nbsp;
                                                <input type="number" style="width: 40px;">
                                            </td>
                                            <td>+12 VDC &nbsp;&nbsp;
                                                <input type="number" style="width: 40px;">&nbsp;&nbsp;Volts</td>
                                            <td colspan="2">Localizer Ident &emsp;&emsp;&ensp;
                                                <input type="text" style="width: 80px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>+24 VDC &nbsp;
                                                <input type="number" style="width: 40px;">
                                            </td>
                                            <td>-12 VDC &nbsp;&nbsp;&nbsp;
                                                <input type="number" style="width: 40px;">&nbsp;&nbsp;Volts</td>
                                            <td colspan="2">Ident Audio to RMS &nbsp;&nbsp;
                                                <input type="text" style="width: 80px;">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>