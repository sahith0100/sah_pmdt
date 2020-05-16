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
            $('#t2').hide();
            $('#t3').hide();
            $('#b1').click(function() {
                $('#Div1').show();
                $('#t2').hide();
                $('#t3').hide();
            })
            $('#b2').click(function() {
                $('#Div1').hide();
                $('#t2').show();
                $('#t3').hide();
            })
            $('#b3').click(function() {
                $('#Div1').hide();
                $('#t2').hide();
                $('#t3').show();
            })
        });
    </script>
</head>

<body>
    <?php include "nav.php"; ?>
        <div class="header">
            <?php include "import.php"; ?>
                
        </div>
        <div class="col-sm-12 row" style="margin-top:5%;">
            <div class="col-sm-3">
                <?php include "sidebar.php"; ?>
            </div>
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body">
                        <div class="inner" style="margin-left: 2%;">
                            <button id="b1" style="background-color: blue;color: aliceblue;width: 133px;height: 30px;font-weight: bold;">Wattmeter Data</button>
                            <button id="b2" style="background-color: blue;color: aliceblue;width: 309px;height: 30px;font-weight: bold;">Transmitter 1 Synthesizer and PA Data</button>
                            <button id="b3" style="background-color: blue;color: aliceblue;width: 309px;height: 30px;font-weight: bold;">Transmitter 2 Synthesizer and PA Data</button>
                            <div id="Div1">
                                <div class="main_t">
                                    <input type="text" name="" id="date-time" readonly>
                                    <div class="main1" id="a">
                                        <div class="d1" style="margin-left: 7px;margin-top: 22px;">
                                            <p><span>Course Transmitter Paramters</span></p>
                                            <table class="t1">
                                                <tr>
                                                    <td>CSB Forward Power</td>
                                                    <td>
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB Reflected Power</td>
                                                    <td>
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO Forward Power</td>
                                                    <td>
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO Reflected Power</td>
                                                    <td>
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                            </table>
                                            <br>
                                            <p><span>Standby Course Transmitter Paramters</span></p>
                                            <table class="t1">
                                                <tr>
                                                    <td>CSB Forward Power</td>
                                                    <td>
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO Reflected Power</td>
                                                    <td>
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="d2" id="b" style="margin-left: 21px;margin-top: 22px;">
                                            <p><span>Clearance Transmitter Paramters</span></p>
                                            <table class="t1">
                                                <tr>
                                                    <td>CSB Forward Power</td>
                                                    <td>
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB Reflected Power</td>
                                                    <td>
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO Forward Power</td>
                                                    <td>
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO Reflected Power</td>
                                                    <td>
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                            </table>
                                            <br>
                                            <p><span>Standby Clearance Transmitter Paramters</span></p>
                                            <table class="t1">
                                                <tr>
                                                    <td>CSB Forward Power</td>
                                                    <td>
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO Reflected Power</td>
                                                    <td>
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="t2">
                                <div class="main" style="height:515px">
                                    <div class="cc">
                                        Course
                                        <input type="text" name="" id="course" readonly>
                                        <br>
                                        <br> Clearance
                                        <input type="text" name="" id="clearance" readonly>
                                    </div>
                                    <div class="main1">
                                        <div class="d1" style="margin-top:17px;">
                                            <p><span>Synthesizer</span></p>
                                            <table>
                                                <tr class="th">
                                                    <td></td>
                                                    <td>CRS</td>
                                                    <td>CLR</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB RF Level</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>FFT Power</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB Mod Balance</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>DDM</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB Mod Percent</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB 90Hz DM</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB 150Hz DM</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB 1020Hz DM</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO RF Level</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>FFT Power</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO Phase Control</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>mVolts DC</td>
                                                </tr>
                                                <tr>
                                                    <td>Detected RF</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>mVolts DC</td>
                                                </tr>
                                                <tr>
                                                    <td>Biphase Activity</td>
                                                    <td id="crs">
                                                        <input type="text" id="crs-bi" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" id="crs-bi" readonly>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="d2" style="position: absolute;margin-left:386px;margin-top: 18px;">
                                            <p><span>Power Amplifier</span></p>
                                            <table>
                                                <tr class="th">
                                                    <td></td>
                                                    <td>CRS</td>
                                                    <td>CLR</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB RF Level</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>FFT Power</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB Mod Balance</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>DDM</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB Mod Percent</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB 90Hz DM</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB 150Hz DM</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB 1020Hz DM</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO RF Level</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>FFT Power</td>
                                                </tr>
                                            </table>
                                            <br>
                                            <p><span>Total Harmonic Distortion</span></p>
                                            <table class="thd">
                                                <tr class="th">
                                                    <td></td>
                                                    <td>CRS</td>
                                                    <td>CLR</td>
                                                </tr>
                                                <tr>
                                                    <td>PA CSB &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>dB &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>PA SBO</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>dB</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="t3" style="">
                                
                            <div class="main" style="height:515px">
                                    <div class="cc">
                                        Course
                                        <input type="text" name="" id="course" readonly>
                                        <br>
                                        <br> Clearance
                                        <input type="text" name="" id="clearance" readonly>
                                    </div>
                                    <div class="main1">
                                        <div class="d1" style="margin-top:17px;">
                                            <p><span>Synthesizer</span></p>
                                            <table>
                                                <tr class="th">
                                                    <td></td>
                                                    <td>CRS</td>
                                                    <td>CLR</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB RF Level</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>FFT Power</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB Mod Balance</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>DDM</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB Mod Percent</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB 90Hz DM</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB 150Hz DM</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB 1020Hz DM</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO RF Level</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>FFT Power</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO Phase Control</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>mVolts DC</td>
                                                </tr>
                                                <tr>
                                                    <td>Detected RF</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>mVolts DC</td>
                                                </tr>
                                                <tr>
                                                    <td>Biphase Activity</td>
                                                    <td id="crs">
                                                        <input type="text" id="crs-bi" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" id="crs-bi" readonly>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="d2" style="position: absolute;margin-left:386px;margin-top: 18px;">
                                            <p><span>Power Amplifier</span></p>
                                            <table>
                                                <tr class="th">
                                                    <td></td>
                                                    <td>CRS</td>
                                                    <td>CLR</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB RF Level</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>FFT Power</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB Mod Balance</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>DDM</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB Mod Percent</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB 90Hz DM</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB 150Hz DM</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB 1020Hz DM</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO RF Level</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>FFT Power</td>
                                                </tr>
                                            </table>
                                            <br>
                                            <p><span>Total Harmonic Distortion</span></p>
                                            <table class="thd">
                                                <tr class="th">
                                                    <td></td>
                                                    <td>CRS</td>
                                                    <td>CLR</td>
                                                </tr>
                                                <tr>
                                                    <td>PA CSB &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>dB &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>PA SBO</td>
                                                    <td id="crs">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td id="clr">
                                                        <input type="text" readonly>
                                                    </td>
                                                    <td>dB</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
</body>

</html>