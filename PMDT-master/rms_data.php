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
            $('#e2').hide();
            $('#Div3').hide();
            $('#Div4').hide();
            $('#b1').click(function() {
                $('#Div1').show();
                $('#e2').hide();
                $('#Div3').hide();
                $('#Div4').hide();
            })
            $('#b2').click(function() {
                $('#Div1').hide();
                $('#e2').show();
                $('#Div3').hide();
                $('#Div4').hide();
            })
            $('#b3').click(function() {
                $('#Div1').hide();
                $('#e2').hide();
                $('#Div3').show();
                $('#Div4').hide();
            })
            $('#b4').click(function() {
                $('#Div1').hide();
                $('#e2').hide();
                $('#Div3').hide();
                $('#Div4').show();
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
                            <button id="b1" style="background-color: blue;color: aliceblue;width: 257px;height: 30px;font-weight: bold;">Maintainance alerts and Alarms</button>
                            <button id="b2" style="background-color: blue;color: aliceblue;width: 100px;height: 30px;font-weight: bold;">A/D data</button>
                            <button id="b3" style="background-color: blue;color: aliceblue;width: 130px;height: 30px;font-weight: bold;">Digital Inputs</button>
                            <button id="b4" style="background-color: blue;color: aliceblue;width: 132px;height: 30px;font-weight: bold;">Antenna Faults</button>
                            <div id="Div1">
                                <table>
                                    <tr>
                                        <td>
                                            <table>
                                                <tr>
                                                    <th colspan="2">Monitor Mismatch Alerts</th>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>Integral Monitor</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>Standby Monitor</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>Near Field Monitor</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>Far Field Monitor</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <th colspan="2">RMS Digital Input Alerts</th>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>Smoke Detector</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>Intrusion Detector</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>Spare Digital #1</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>Spare Digital #2</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <th colspan="4">General Alerts and Alarms</th>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>Local Mode</td>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>RMS A/D Data</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>AC Failure</td>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>BCPS Power Supplies</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td colspan="3">LCU Config Mismatch</td>

                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>Standby TX on the Air</td>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <td>Antenna Misalignment</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                        <br>
                                            <table>
                                                <tr>
                                                    <th colspan="5" style="width:800px; text-align:center;">Monitor Alerts and Alarms</th>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;border-color:#ccc;" id=""></td>
                                                    <th style="width:150px; text-align:center;">Monitor 1</th>
                                                    <th style="width:150px; text-align:center;">Monitor 2</th>
                                
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;&nbsp;*RMS to Moitor Comm Link Failed</td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;&nbsp;*EEPROM Fault</td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    
                                            

                                                </tr>
                                                <tr>
                                                    <td>&nbsp;&nbsp;*Certification Test Failed</td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    

                                                </tr>
                                                <tr>
                                                    <td>&nbsp;&nbsp;*Invalid Checksum</td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;&nbsp;*Backplane Switch Mismatch</td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;&nbsp;Maintenance Alert</td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;&nbsp;Pre-Alarm</td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;&nbsp;Alarm</td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;border-color:#ccc;"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td colspan="5"><i>&nbsp;&nbsp;* Indicates this parameter can disable a moniter.</i></td>
                                                </tr>
                                            </table>

                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div id="e2">
                                <div class="main">
                                    <div class="main1">
                                        <div class="d1">
                                            <table class="tables" border="1" frame="void" rules="all">
                                                <tr>
                                                    <td>
                                                        <input type="text" name="" readonly>
                                                    </td>
                                                    <td >Lo Limit</td>
                                                    <td style="width:60px"> &nbsp;Volts</td>
                                                    <td >Hi Limit</td>
                                                </tr>
                                                <tr>
                                                    <td>Spare A/D 1</td>
                                                    <td></td>
                                                    <td id="">
                                                       
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Spare A/D 2</td>
                                                    <td></td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Spare A/D 3</td>
                                                    <td></td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Spare A/D 4</td>
                                                    <td></td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Spare A/D 5</td>
                                                    <td></td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Spare A/D 6</td>
                                                    <td></td>
                                                    <td>
                                                       
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Spare A/D 7</td>
                                                    <td></td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Spare A/D 8</td>
                                                    <td></td>
                                                    <td>
                                                       
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Spare A/D 9</td>
                                                    <td></td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Spare A/D 10</td>
                                                    <td></td>
                                                    <td>
                                                       
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="d2">
                                            <table class="tables" border="1" frame="void" rules="all">
                                                <tr>
                                                    <td></td>
                                                    <td>Lo Limit</td>
                                                    <td style="width:60px"> &nbsp;Volts</td>
                                                    <td>Hi Limit</td>
                                                </tr>
                                                <tr>
                                                    <td>DME #1 28 V PS</td>
                                                    <td></td>
                                                    <td>
                                                       
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>DME #2 28 V PS</td>
                                                    <td></td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>+5 VDC Monitor 1</td>
                                                    <td></td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>+12 VDC Monitor 1</td>
                                                    <td></td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>-12 VDC Monitor 1</td>
                                                    <td></td>
                                                    <td>
                                                       
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>+24 VDC Monitor 1</td>
                                                    <td></td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>+5 VDC Monitor 2</td>
                                                    <td></td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>+12 VDC Monitor 2</td>
                                                    <td></td>
                                                    <td>
                                                       
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>-12 VDC Monitor 2</td>
                                                    <td></td>
                                                    <td>
                                                       
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>+24 VDC Monitor 2</td>
                                                    <td></td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="main2">
                                        <div style="position:absolute;marginleft:50px;">
                                            <table class="tables" border="1" frame="void" rules="all">
                                                <tr>
                                                    <td></td>
                                                    <td style="width:80px">Lo Limit</td>
                                                    <td style="width:80px">&nbsp;&nbsp;Deg C</td>
                                                    <td style="width:80px">Hi Limit</td>
                                                </tr>
                                                <tr>
                                                    <td>Inside Temp&nbsp;&nbsp;</td>
                                                    <td></td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="d4">
                                            <table class="tables" border="1" frame="void" rules="all">
                                                <tr>
                                                    <td></td>
                                                    <td style="width:70px">Lo Limit</td>
                                                    <td style="width:70px">&nbsp;&nbsp;Deg C</td>
                                                    <td style="width:70px">Hi Limit</td>
                                                </tr>
                                                <tr>
                                                    <td>Outside Temp &nbsp;&nbsp;</td>
                                                    <td></td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="main3">
                                        <div class="d5">
                                            <table class="tables" border="1" frame="void" rules="all">
                                                <tr>
                                                    <td></td>
                                                    <td>Lo Limit</td>
                                                    <td>Volts</td>
                                                    <td>Hi Limit</td>
                                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                    <td>Lo Limit</td>
                                                    <td>Amps</td>
                                                    <td>Hi Limit</td>
                                                </tr>
                                                <tr>
                                                    <td>AC Input</td>
                                                    <td></td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>OB Light</td>
                                                    <td></td>
                                                    <td>
                                                       
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                       
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Tx 1- 24V PS</td>
                                                    <td></td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                       
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Tx 2- 24V PS</td>
                                                    <td></td>
                                                    <td>
                                                       
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Battery 1</td>
                                                    <td></td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Battery 2</td>
                                                    <td></td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="d6">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Div3" style="">

                                <table class="ex1" border="5">
                                    <tbody>
                                        <tr>
                                            <td style="height: 21px;width: 188px;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <br>
                                <div>
                                    <p>Cabinet Interface Panel</p>
                                    <div style="border: 1px solid black;padding: 10px;width: 44%;">
                                        <table class="ex1" border="5">

                                            <tbody>
                                                <tr>
                                                    <td style="height: 13px;width: 40px;"></td>
                                                    <td style="height: 15px;width: 366px;">
                                                        <p>Cabinet Interface panel not responding</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <br>

                                        <table class="ex1" border="5">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 134px;border-color:#ccc;empty-cells: hide"></td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"> Configuration </td>
                                                    <td style="width: 15px;border-color:#ccc;">status</td>

                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">Smoke Detector</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"> </td>
                                                    <td style="width: 15px;border-color:#ccc;"></td>

                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">Intrusion Detector</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"></td>
                                                    <td style="width: 40px;border-color:#ccc;"></td>

                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">Spare 1</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"> </td>
                                                    <td style="width: 15px;border-color:#ccc;"></td>

                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">Spare 2</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"></td>
                                                    <td style="width: 15px;border-color:#ccc;"></td>

                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>

                                    <p style="position: absolute;left: 48%;top: 22%;">BCPS Power Supplies</p>
                                    <div style="position: absolute;border: 1px solid black;padding: 15px;left: 47%;top: 26%;">
                                        <table class="ex1" border="5">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 116px;border-color:#ccc;empty-cells: hide;"></td>
                                                    <td style="/* width: 72px; */border-color:#ccc;box-shadow:3px 3px 5px 6p black;"> Transmission 1 </td>
                                                    <td style="/* width: 49px; */border-color:#ccc;">Transmission 2</td>

                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">+24 VDC</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"> </td>
                                                    <td style="width: 15px;border-color:#ccc;"></td>

                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">Battery</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"></td>
                                                    <td style="width: 40px;border-color:#ccc;"></td>

                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">Converters</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"> </td>
                                                    <td style="width: 15px;border-color:#ccc;"></td>

                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">+5 VDC</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"></td>
                                                    <td style="width: 15px;border-color:#ccc;"></td>

                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">+12 VDC</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"></td>
                                                    <td style="width: 15px;border-color:#ccc;"></td>

                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">-12 VDC</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"></td>
                                                    <td style="width: 15px;border-color:#ccc;"></td>

                                                </tr>
                                                <tr>
                                                    <td style="width: 70px;border-color:#ccc;">Mon+12 VDC</td>
                                                    <td style="width: 40px;border-color:#ccc;box-shadow:3px 3px 5px 6p black;"></td>
                                                    <td style="width: 15px;border-color:#ccc;"></td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            <div id="Div4">
                                <table>
                                    <tr>
                                        <td>
                                            <table id="1">
                                                <tr>
                                                    <th>Element</th>
                                                    <th>Volts</th>
                                                    <th>Condition</th>
                                                    <th>Alarm</th>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                </tr>
                                                <tr>
                                                    <td>Antenna Misalignment</td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table id="2">
                                                <tr>
                                                    <th>Element</th>
                                                    <th>Volts</th>
                                                    <th>Condition</th>
                                                    <th>Alarm</th>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                    <td style="width: 30px;height:25px;border-color:#ccc;"></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
</body>

</html>