<html>

<head>
    <title>PMDT</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="nav.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#Div1').show();
            $('#Div2').hide();
            $('#Div3').hide();
            $('#Div4').hide();
            $('#Div5').hide();
            $('#b1').click(function() {
                $('#Div1').show();
                $('#Div2').hide();
                $('#Div3').hide();
                $('#Div4').hide();
                $('#Div5').hide();
            })
            $('#b2').click(function() {
                $('#Div1').hide();
                $('#Div2').show();
                $('#Div3').hide();
                $('#Div4').hide();
                $('#Div5').hide();
            })
            $('#b3').click(function() {
                $('#Div1').hide();
                $('#Div2').hide();
                $('#Div3').show();
                $('#Div4').hide();
                $('#Div5').hide();
            })
            $('#b4').click(function() {
                $('#Div1').hide();
                $('#Div2').hide();
                $('#Div3').hide();
                $('#Div4').show();
                $('#Div5').hide();
            })
            $('#b5').click(function() {
                $('#Div1').hide();
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
        <div class="col-sm-12 row" style="margin-top:5%;">
            <div class="col-sm-3">
                <?php include "sidebar.php"; ?>
            </div>
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body">
                        <div class="inner" style="margin-left: 3%;">
                            <button id="b1" style="background-color: blue;color: aliceblue;width: 183px;height: 30px;font-weight: bold;">Operational Summary</button>
                            <button id="b2" style="background-color: blue;color: aliceblue;width: 71px;height: 30px;font-weight: bold;">Alarms</button>
                            <button id="b3" style="background-color: blue;color: aliceblue;width: 163px;height: 30px;font-weight: bold;">Maintenance Alerts</button>
                            <button id="b4" style="background-color: blue;color: aliceblue;width: 157px;height: 30px;font-weight: bold;">Command Activity</button>
                            <button id="b4" style="background-color: blue;color: aliceblue;width: 158px;height: 30px;font-weight: bold;">Parameter Change</button>
                            <div id="Div1">
                                <div class="m1">
                                    <table border="1" frame="void">
                                        <tr>
                                            <td></td>
                                            <th>&nbsp;&nbsp;Transmitter 1&nbsp;&nbsp;</th>
                                            <th>&nbsp;&nbsp;Transmitter 2 &nbsp;&nbsp;</th>
                                            <th style="width:100px;text-align:center;">DME 1</th>
                                            <th style="width:100px;text-align:center;">DME 2</th>
                                        </tr>
                                        <tr>
                                            <th style="width:200px;">Time in Normal State
                                                <br>(in Hours)</th>
                                            <td>
                                                
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Time in Standby State
                                                <br>(in Hours)</th>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Time Interlocked Off
                                                <br>(in Hours)</th>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Availability (%)</th>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                                
                                            </td>
                                            <td>
                                               
                                            </td>

                                        </tr>
                                    </table>
                                    <br>
                                    <div class="times">
                                        <div class="times1">
                                            <table>
                                                <tr>
                                                    <th>Start Time</th>
                                                    <td style="width:100px">
                                                        
                                                    </td>
                                                </tr>
                                            </table>
                                            <br>
                                            <br>
                                            <table>
                                                <tr>
                                                    <th>End Time&nbsp;</th>
                                                    <td style="width:100px">
                                                       
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="times2">
                                            <table>
                                                <tr>
                                                    <th>Elapsed Time&nbsp;</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        
                                                    </td>
                                                    <td>Hours</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <input type="submit" value="Reset Operational Summary" name="reset summary" style="position: absolute;
    margin-top: 60px;" id="reset">
                                </div>
                            </div>
                            <div id="Div2">
                                <div class="m1">
                                    <div class="rms-nav">
                                        <div class="update">
                                            <button style="width:auto;height:auto">Update</button>
                                        </div>
                                        <div class="reset">
                                            <button style="width:auto;height:auto">Reset</button>
                                        </div>
                                    </div>
                                    <div class="time-tag">
                                        <table>
                                            <tr id="heading">
                                                <th>
                                                    Time tag
                                                </th>
                                                <th>Type</th>
                                                <th>Alarm</th>
                                                <th>State</th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="Div3" style="">
                                <div class="m1">
                                    <div class="rms-nav">
                                        <div class="update">
                                            <button style="width:auto;height:auto">Update</button>
                                        </div>
                                        <div class="reset">
                                            <button style="width:auto;height:auto">Reset</button>
                                        </div>
                                    </div>
                                    <div class="time-tag">
                                        <table>
                                            <tr id="heading">
                                                <th>
                                                    Time tag
                                                </th>
                                                <th>Type</th>
                                                <th>Alarm</th>
                                                <th>State</th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="Div4">
                                <div class="m1">
                                    <div class="rms-nav">
                                        <div class="update">
                                            <button style="width:auto;height:auto">Update</button>
                                        </div>
                                        <div class="reset">
                                            <button style="width:auto;height:auto">Reset</button>
                                        </div>
                                    </div>
                                    <div class="time-tag">
                                        <table>
                                            <tr id="heading">
                                                <th>
                                                    Time tag
                                                </th>
                                                <th>Type</th>
                                                <th>Alarm</th>
                                                <th>State</th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <div id="Div5">
                                <div class="m1">
                                    <div class="rms-nav">
                                        <div class="update">
                                            <button style="width:auto;height:auto">Update</button>
                                        </div>
                                        <div class="reset">
                                            <button style="width:auto;height:auto">Reset</button>
                                        </div>
                                    </div>
                                    <div class="time-tag">
                                        <table>
                                            <tr id="heading">
                                                <th>
                                                    Time tag
                                                </th>
                                                <th>Type</th>
                                                <th>Alarm</th>
                                                <th>State</th>
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
</body>

</html>