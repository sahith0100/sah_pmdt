<html>

<head>
    <title>SELEX</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="nav.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#t1').show();
            $('#Div2').hide();
            $('#Div3').hide();
            $('#t4').hide();
            $('#b1').click(function() {
                $('#t1').show();
                $('#Div2').hide();
                $('#Div3').hide();
                $('#t4').hide();
            })
            $('#b2').click(function() {
                $('#t1').hide();
                $('#Div2').show();
                $('#Div3').hide();
                $('#t4').hide();
            })
            $('#b3').click(function() {
                $('#t1').hide();
                $('#Div2').hide();
                $('#Div3').show();
                $('#t4').hide();
            })
            $('#b4').click(function() {
                $('#t1').hide();
                $('#Div2').hide();
                $('#Div3').hide();
                $('#t4').show();
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
                        <div class="inner" style="margin-left: 3%;">
                            <button id="b1" style="background-color: blue;color: aliceblue;width: 96px;height: 30px;font-weight: bold;">Wattmeter</button>
                            <button id="b2" style="background-color: blue;color: aliceblue;width: 127px;height: 30px;font-weight: bold;">Transmitter 1</button>
                            <button id="b3" style="background-color: blue;color: aliceblue;width: 127px;height: 30px;font-weight: bold;">Transmitter 2</button>
                            <button id="b4" style="background-color: blue;color: aliceblue;width: 186px;height: 30px;font-weight: bold;">Integral Monitor Data</button>
                            <div id="t1">
                                <div class="main" style="width: 743px;height: 510px;">
                                    <input type="text" name="" id="date-time" readonly>
                                    <div class="main1">
                                        <div class="d1" id="a">
                                            <p><span>Forward and reflection Power Offsets</span></p>
                                            <table>
                                                <tr>
                                                    <td>CRS CSB Forward</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CRS CSB Reflected</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CRS SBO Forward</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CRS SBO Reflected</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>Standby CRS CSB Forward</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>Standby CRS SBO Forward</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CLR CSB Forward</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CLR CSB Reflected</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CLR SBO Forward</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CLR SBO Reflected</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>Standby CLR CSB Forward</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>Standby CLR SBO Forward</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>

                                            </table>
                                        </div>
                                        <div class="d2" id="b" style="margin-left:17px;">
                                            <p><span>Forward and reflection Power Scale</span></p>
                                            <table>
                                                <tr>
                                                    <td>CRS CSB Forward</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CRS CSB Reflected</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CRS SBO Forward</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CRS SBO Reflected</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>Standby CRS CSB Forward</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>Standby CRS SBO Forward</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CLR CSB Forward</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CLR CSB Reflected</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CLR SBO Forward</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>CLR SBO Reflected</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>Standby CLR CSB Forward</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>
                                                <tr>
                                                    <td>Standby CLR SBO Forward</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Watts</td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Div2">
                                <div class="main" style="height: 505px;">
                                    <input type="text" name="" id="date-time" readonly>
                                    <div class="main1">
                                        <div class="d1">
                                            <p><span>Course</span></p>
                                            <table>
                                                <tr>
                                                    <td>CSB Modulation Balance Offset</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>DDM</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB Modulation Percent Scale</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB RF Voltage Level Scale</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO RF Voltage Level Scale</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO Phase Offset</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Degrees</td>
                                                </tr>
                                                <tr>
                                                    <td>Ident Level Scale</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                            </table>
                                            <br>
                                            <p><span>Clearance</span></p>
                                            <table>
                                                <tr>
                                                    <td>CSB Modulation Balance Offset</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>DDM</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB Modulation Percent Scale</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB RF Voltage Level Scale</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO RF Voltage Level Scale</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO Phase Offset</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Degrees</td>
                                                </tr>
                                                <tr>
                                                    <td>Ident Level Scale</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Div3" style="">
                                <div class="main" style="height: 505px;">
                                    <input type="text" name="" id="date-time" readonly>
                                    <div class="main1">
                                        <div class="d1">
                                            <p><span>Course</span></p>
                                            <table>
                                                <tr>
                                                    <td>CSB Modulation Balance Offset</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>DDM</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB Modulation Percent Scale</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB RF Voltage Level Scale</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO RF Voltage Level Scale</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO Phase Offset</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Degrees</td>
                                                </tr>
                                                <tr>
                                                    <td>Ident Level Scale</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                            </table>
                                            <br>
                                            <p><span>Clearance</span></p>
                                            <table>
                                                <tr>
                                                    <td>CSB Modulation Balance Offset</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>DDM</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB Modulation Percent Scale</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>CSB RF Voltage Level Scale</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO RF Voltage Level Scale</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>SBO Phase Offset</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>Degrees</td>
                                                </tr>
                                                <tr>
                                                    <td>Ident Level Scale</td>
                                                    <td>
                                                        <input type="number">
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div id="t4">
                                <div class="main" style="height:701px;">
                                    <table class="th">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" name="" id="date-time1" readonly="">
                                                </td>
                                                <td>
                                                    <input type="text" name="" id="date-time1" readonly="">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="main1">
                                        <p style="margin: 10px 0 20px;">Course</p>
                                        <table class="t3">
                                            <tbody>
                                                <tr>
                                                </tr>
                                                <tr class="th">
                                                    <td></td>
                                                    <td>Monitor 1</td>
                                                    <td>Monitor 2</td>
                                                </tr>

                                                <tr>
                                                    <td>Centerline RF Level</td>
                                                    <td id="m1">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td id="m1">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>Centerline DDM</td>
                                                    <td id="m1">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td id="m1">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td>DDM</td>
                                                </tr>
                                                <tr>
                                                    <td>Centerline SDM</td>
                                                    <td id="m1">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td id="m1">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>Ident Mod Percent</td>
                                                    <td id="m1">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td id="m1">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>Width DDM</td>
                                                    <td id="m1">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td id="m1">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td>DDM</td>
                                                </tr>
                                                <tr>
                                                    <td>Ident Status</td>
                                                    <td id="m1-is">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td id="m1-is">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Synth Lock/Rev Sense</td>
                                                    <td id="m1-sl">
                                                        <input type="text" readonly="">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td id="m1-sl">
                                                        <input type="text" readonly="">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br>
                                        <p style="    margin-top: 291px;
    margin-left: 0px;
    position: absolute;">Clearance</p>
                                        <table class="t4">
                                            <tbody>
                                                <tr>
                                                </tr>
                                                <tr class="th">
                                                    <td></td>
                                                    <td>Monitor 1</td>
                                                    <td>Monitor 2</td>
                                                </tr>

                                                <tr>
                                                    <td>Centerline RF Level</td>
                                                    <td id="m1">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td id="m1">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>Centerline DDM</td>
                                                    <td id="m1">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td id="m1">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td>DDM</td>
                                                </tr>
                                                <tr>
                                                    <td>Centerline SDM</td>
                                                    <td id="m1">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td id="m1">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>Ident Mod Percent</td>
                                                    <td id="m1">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td id="m1">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td>%</td>
                                                </tr>
                                                <tr>
                                                    <td>Width DDM</td>
                                                    <td id="m1">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td id="m1">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td>DDM</td>
                                                </tr>
                                                <tr>
                                                    <td>Ident Status</td>
                                                    <td id="m1-is">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td id="m1-is">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Synth Lock/Rev Sense</td>
                                                    <td id="m1-sl">
                                                        <input type="text" readonly="">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td id="m1-sl">
                                                        <input type="text" readonly="">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br>
                                        <table class="t5">
                                            <tbody>
                                                <tr>
                                                    <td>RF Freq Difference</td>
                                                    <td id="m1">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td id="m1">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td>Hz</td>
                                                </tr>
                                                <tr>
                                                    <td>Synth Lock/Rev Sense</td>
                                                    <td id="m1-sl">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td id="m1-sl">
                                                        <input type="text" readonly="">
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
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