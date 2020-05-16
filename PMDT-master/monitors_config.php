<html>

<head>
    <title>SELEX</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="nav.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#c1').show();
            $('#c2').hide();
            $('#c3').hide();
            $('#c4').hide();
            $('#b1').click(function() {
                $('#c1').show();
                $('#c2').hide();
                $('#c3').hide();
                $('#c4').hide();
            })
            $('#b2').click(function() {
                $('#c1').hide();
                $('#c2').show();
                $('#c3').hide();
                $('#c4').hide();
            })
            $('#b3').click(function() {
                $('#c1').hide();
                $('#c2').hide();
                $('#c3').show();
                $('#c4').hide();
            })
            $('#b4').click(function() {
                $('#c1').hide();
                $('#c2').hide();
                $('#c3').hide();
                $('#c4').show();
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
                            <button id="b1" style="background-color: blue;color: aliceblue;width: 90px;height: 30px;font-weight: bold;">General</button>
                            <button id="b2" style="background-color: blue;color: aliceblue;width: 85px;height: 30px;font-weight: bold;">Integral</button>
                            <button id="b3" style="background-color: blue;color: aliceblue;width: 100px;height: 30px;font-weight: bold;">Standby</button>
                            <button id="b4" style="background-color: blue;color: aliceblue;width: 100px;height: 30px;font-weight: bold;">Near Field</button>
                            <div id="c1">
                                <table class="ex1" border="1" style="position: absolute;top: 72px;">
                                    <tbody>
                                        <tr>
                                            <td style="height: 15px;width: 120px;"></td>

                                        </tr>
                                    </tbody>
                                </table>
                                <form style="position: absolute;margin-left: 175px;top: 63px;">
                                    <table class="ex1" border="1">
                                        <tbody>
                                            <tr>
                                                <td style="height: 15px;">
                                                    <p style="height: 17px;">IdentCode</p>
                                                </td>
                                                <td style="height: 15px;">
                                                    <input type="text" style="width: 60px;">
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                                <form style="position: absolute;margin-left: 362px;top: 63px;">
                                    <table class="ex1" border="1">
                                        <tbody>
                                            <tr>
                                                <td style="height: 15px;">
                                                    <p style="height: 12px;">Certificatecategory</p>
                                                </td>
                                                <td>
                                                    <select>

                                                    </select>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                                <table class="ex1" border="1" style="position: absolute;margin-left: 572px;top: 65px;">
                                    <tbody>
                                        <tr>
                                            <td style="height: 15px;width: 30px;background-color: white;"></td>
                                            <td>Windows DME Keying</td>

                                        </tr>
                                    </tbody>
                                </table>
                                <form style="margin-top: 34px;margin-left: 36px;position: absolute;">
                                    <fieldset>
                                        <legend>Executive Alarms</legend>
                                        <table class="ex1" border="1">
                                            <tbody>
                                                <tr>
                                                    <td style="height: 15px;width: 150px; empty-cells:hide;" rowspan="2"></td>
                                                    <td style="height: 15px;width: 120px;" colspan="2"> IntegralMonitor</td>

                                                    <td style="height: 15px;width: 120px;" colspan="2">StandByMonitor</td>

                                                </tr>
                                                <tr>

                                                    <td style="height: 15px;width: 120px;">course</td>
                                                    <td style="height: 15px;width: 120px;">clearance</td>
                                                    <td style="height: 15px;width: 120px;">course</td>
                                                    <td style="height: 15px;width: 120px;">clearance</td>

                                                </tr>

                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Centerline RF Level</td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"></td>
                                                    <td style="height: 15px;width: 120px;"> </td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Centerline DDM</td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"></td>
                                                    <td style="height: 15px;width: 120px;"> </td>

                                                </tr>

                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Ident Mod Percent</td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"></td>
                                                    <td style="height: 15px;width: 120px;"> </td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Width DDM</td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"></td>
                                                    <td style="height: 15px;width: 120px;"> </td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Ident Status</td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"></td>
                                                    <td style="height: 15px;width: 120px;"> </td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;">SynthLOCKFault </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;">RFfrequencyError </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;">Antenna Fault </td>
                                                    <td style="height: 15px;width: 120px;"> </td>
                                                    <td style="height: 15px;width: 120px;"> </td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </fieldset>
                                </form>
                                <form style="position: absolute;margin-left: 180px;/* width: 216px; */margin-top: 344px;">
                                    <fieldset>
                                        <legend>Near Field Monitor</legend>
                                        <table class="ex1" border="1">
                                            <tbody>
                                                <tr>
                                                    <td style="height: 15px;width: 36px;background-color: white;"></td>
                                                    <td>Course RF Level</td>
                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 36px;background-color: white;"></td>
                                                    <td>Course DDM</td>
                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 36px;background-color: white;"></td>
                                                    <td>Course SDM</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </fieldset>
                                </form>
                                <table class="ex1" border="1" style="position: absolute;margin-top: 482px;margin-left: 182px;">
                                    <tbody>
                                        <tr>
                                            <td style="height: 15px;width: 36px;background-color: white;"></td>
                                            <td>OffsetClearanceMonitor</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="c2" style="">
                                <table class="ex1" border="1" style="position :relative;margin-left: 5px; top: 11px;">
                                    <tbody>
                                        <tr>
                                            <td style="height: 15px;width: 120px;"></td>

                                        </tr>
                                    </tbody>
                                </table>
                                <form style="position: absolute;margin-left: 143px;top: 67px;">
                                    <table class="ex1" border="1">
                                        <tbody>
                                            <tr>
                                                <td style="height: 15px;">
                                                    <p style="height: 12px;">shutdown delay timer</p>
                                                </td>
                                                <td style="height: 15px;">
                                                    <input type="number" style="width: 70px;">
                                                </td>
                                                <td style="height: 15px;">sec</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                                <table class="ex1" border="1" style="position: absolute;margin-left: 431px;top: 66px;">
                                    <tbody>
                                        <tr>
                                            <td style="height: 15px;">
                                                <p style="height: 12px;">continous ident timeout</p>
                                            </td>
                                            <td style="height: 15px;">
                                                <input type="number" style="width: 70px;">
                                            </td>
                                            <td style="height: 15px;/* width: 25px; */">sec</td>

                                        </tr>
                                        <tr>
                                            <td style="height: 15px;">
                                                <p style="height: 12px;">No ident timeout</p>
                                            </td>
                                            <td style="height: 15px;">
                                                <input type="number" style="width: 70px;">
                                            </td>
                                            <td style="height: 15px;">sec</td>

                                        </tr>
                                    </tbody>
                                </table>

                                <form style="margin-top: 38px;">
                                    <fieldset>
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
                                                        <input type="number" style="width: 70px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Centerline DDM</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">DDM</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Centerline SDM</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>

                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Ident Mod Percent</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Width DDM</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">DDM</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </fieldset>
                                </form>
                                <form>
                                    <fieldset>
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
                                                        <input type="number" style="width: 70px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Centerline DDM</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">DDM</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Centerline SDM</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>

                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Ident Mod Percent</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Width DDM</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
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
                                                <input type="number" style="width: 70px;"> </td>
                                            <td style="height: 15px;">
                                                <input type="number" style="width: 70px;">
                                            </td>
                                            <td style="height: 15px;"></td>
                                            <td style="height: 15px;">
                                                <input type="number" style="width: 70px;">
                                            </td>
                                            <td style="height: 15px;">
                                                <input type="number" style="width: 70px;">
                                            </td>
                                            <td style="height: 15px;">HZ</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="c3">
                                <table class="ex1" border="1" style="position :relative;margin-left: 5px; top: 11px;">
                                    <tbody>
                                        <tr>
                                            <td style="height: 15px;width: 120px;"></td>

                                        </tr>
                                    </tbody>
                                </table>
                                <form style="position: absolute;margin-left: 143px;top: 67px;">
                                    <table class="ex1" border="1">
                                        <tbody>
                                            <tr>
                                                <td style="height: 15px;">
                                                    <p style="height: 12px;">shutdown delay timer</p>
                                                </td>
                                                <td style="height: 15px;">
                                                    <input type="number" style="width: 70px;">
                                                </td>
                                                <td style="height: 15px;">sec</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                                <table class="ex1" border="1" style="position: absolute;margin-left: 431px;top: 66px;">
                                    <tbody>
                                        <tr>
                                            <td style="height: 15px;">
                                                <p style="height: 12px;">continous ident timeout</p>
                                            </td>
                                            <td style="height: 15px;">
                                                <input type="number" style="width: 70px;">
                                            </td>
                                            <td style="height: 15px;/* width: 25px; */">sec</td>

                                        </tr>
                                        <tr>
                                            <td style="height: 15px;">
                                                <p style="height: 12px;">No ident timeout</p>
                                            </td>
                                            <td style="height: 15px;">
                                                <input type="number" style="width: 70px;">
                                            </td>
                                            <td style="height: 15px;">sec</td>

                                        </tr>
                                    </tbody>
                                </table>

                                <form style="margin-top: 38px;">
                                    <fieldset>
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
                                                        <input type="number" style="width: 70px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Centerline DDM</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">DDM</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Centerline SDM</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>

                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Ident Mod Percent</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Width DDM</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">DDM</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </fieldset>
                                </form>
                                <form>
                                    <fieldset>
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
                                                        <input type="number" style="width: 70px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Centerline DDM</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">DDM</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Centerline SDM</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>

                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Ident Mod Percent</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">%</td>

                                                </tr>
                                                <tr>
                                                    <td style="height: 15px;width: 120px;"> Width DDM</td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;"> </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
                                                    </td>
                                                    <td style="height: 15px;">
                                                        <input type="number" style="width: 70px;">
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
                                                <input type="number" style="width: 70px;"> </td>
                                            <td style="height: 15px;">
                                                <input type="number" style="width: 70px;">
                                            </td>
                                            <td style="height: 15px;"></td>
                                            <td style="height: 15px;">
                                                <input type="number" style="width: 70px;">
                                            </td>
                                            <td style="height: 15px;">
                                                <input type="number" style="width: 70px;">
                                            </td>
                                            <td style="height: 15px;">HZ</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="c4">
                                <table class="ex1" border="1" style="position :relative;margin-left: 5px; top: 11px;">
                                    <tr>
                                        <td style="height: 15px;width: 120px;"></td>

                                    </tr>
                                </table>

                                <table class="ex1" border="1" style="position :relative;margin-left: 430px; top: -10px;">
                                    <tr>
                                        <td style="height: 15px;">
                                            <p style="height: 12px;width: 135px;">Alarm Delay Time</p>
                                        </td>
                                        <td style="height: 15px;">
                                            <input type="number" style="width: 70px;">
                                        </td>
                                        <td style="height: 15px;">seconds</td>

                                    </tr>

                                </table>

                                <form>
                                    <fieldset>
                                        <legend>Course Position</legend>
                                        <table class="ex1" border="1">
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
                                                    <input type="number" style="width: 70px;"> </td>
                                                <td style="height: 15px;">
                                                    <input type="number" style="width: 70px;">
                                                </td>
                                                <td style="height: 15px;">
                                                    <input type="number" style="width: 70px;">
                                                </td>
                                                <td style="height: 15px;">
                                                    <input type="number" style="width: 70px;">
                                                </td>
                                                <td style="height: 15px;">
                                                    <input type="number" style="width: 70px;">
                                                </td>
                                                <td style="height: 15px;">%</td>

                                            </tr>
                                            <tr>
                                                <td style="height: 15px;width: 120px;"> DDM</td>
                                                <td style="height: 15px;">
                                                    <input type="number" style="width: 70px;"> </td>
                                                <td style="height: 15px;">
                                                    <input type="number" style="width: 70px;">
                                                </td>
                                                <td style="height: 15px;">
                                                    <input type="number" style="width: 70px;">
                                                </td>
                                                <td style="height: 15px;">
                                                    <input type="number" style="width: 70px;">
                                                </td>
                                                <td style="height: 15px;">
                                                    <input type="number" style="width: 70px;">
                                                </td>
                                                <td style="height: 15px;">DDM</td>

                                            </tr>
                                            <tr>
                                                <td style="height: 15px;width: 120px;"> SDM</td>
                                                <td style="height: 15px;">
                                                    <input type="number" style="width: 70px;"> </td>
                                                <td style="height: 15px;">
                                                    <input type="number" style="width: 70px;">
                                                </td>
                                                <td style="height: 15px;">
                                                    <input type="number" style="width: 70px;">
                                                </td>
                                                <td style="height: 15px;">
                                                    <input type="number" style="width: 70px;">
                                                </td>
                                                <td style="height: 15px;">
                                                    <input type="number" style="width: 70px;">
                                                </td>
                                                <td style="height: 15px;">%</td>

                                            </tr>

                                        </table>
                                    </fieldset>
                                </form>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
</body>

</html>