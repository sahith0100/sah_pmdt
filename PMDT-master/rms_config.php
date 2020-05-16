<html>

<head>
    <title>SELEX</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="nav.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#d1').show();
            $('#d2').hide();
            $('#d3').hide();
            $('#d4').hide();
            $('#b1').click(function() {
                $('#d1').show();
                $('#d2').hide();
                $('#d3').hide();
                $('#d4').hide();
            })
            $('#b2').click(function() {
                $('#d1').hide();
                $('#d2').show();
                $('#d3').hide();
                $('#d4').hide();
            })
            $('#b3').click(function() {
                $('#d1').hide();
                $('#d2').hide();
                $('#d3').show();
                $('#d4').hide();
            })
            $('#b4').click(function() {
                $('#d1').hide();
                $('#d2').hide();
                $('#d3').hide();
                $('#d4').show();
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
                            <button id="b2" style="background-color: blue;color: aliceblue;width: 85px;height: 30px;font-weight: bold;">Station</button>
                            <button id="b3" style="background-color: blue;color: aliceblue;width: 100px;height: 30px;font-weight: bold;">A/D data</button>
                            <button id="b4" style="background-color: blue;color: aliceblue;width: 100px;height: 30px;font-weight: bold;">Security</button>
                            <div id="d1">
                                <table style="width:auto;height: -webkit-fill-available;">
                                    <tr>
                                        <td>
                                            <table style="width: 100%;height: 100%;">
                                                <th colspan="4" style="width:400px;">RSCU Configuration</th>
                                                <tr>

                                                    <td colspan="3">
                                                        <input type="checkbox">RCSU Present</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio">Primary Runway</td>

                                                    <td>
                                                        <input type="radio">Secondary Runway</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Connection Type &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <table style="width:200px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                                    </td>

                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table style="width: 100%;height: 100%;">
                                                <th colspan="2" style="width:400px;"> Digital I/O Configuration</th>
                                                <tr>

                                                    <td>
                                                        <input type="checkbox">Smoke Alarm</td>

                                                    <td>
                                                        <input type="checkbox">Intrusion Alarm</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Spare #1 Usage &nbsp;&nbsp;&nbsp;
                                                    <table style="width:200px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td colspan="2">Spare #2 Usage&nbsp;&nbsp;&nbsp;
                                                    <table style="width:200px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                                    </td>

                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">
                                            <table style="width: 100%;height: 100%;">
                                                <th colspan="3" style="width: 100%;">Monitor Configuration</th>
                                                <tr>
                                                    <td>Monitor Voting Logic</td>
                                                    <td>
                                                        <input type="radio">AND</td>
                                                    <td>
                                                        <input type="radio">OR</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        <input type="radio">Monitor 1 Present</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        <input type="radio">Monitor 1 and 2 Present</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        <input type="radio">Monitor 1,2,3 and 4 Present</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        <input type="checkbox">Monitor Certification Enabled</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table style="width: 100%;height: 100%;">
                                                <th colspan="4">RMM Configuration</th>
                                                <tr>
                                                    <td>
                                                        <label for="car">Dial In # Rings
                                                        <table style="width:50px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <input type="checkbox" style="color: aliceblue;">
                                                        <label for="ar">Tone Dial Out</label>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <input type="checkbox" style="color: aliceblue;">
                                                        <label for="ar">Dial Out ILS Enabled</label>
                                                    </td>

                                                    <td>
                                                        <input type="checkbox" style="color: aliceblue;">
                                                        <label for="ar">Dial Out DME Enabled</label>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <label for="ar">Dial Out Phone Number</label>
                                                    </td>

                                                    <td>
                                                    <table style="width:180px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                                    </td>
                                                </tr>

                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style="width: 100%;height: 100%;">
                                                <th colspan="2">Automatic Restarts</th>
                                                <tr>

                                                    <td>
                                                        <input type="checkbox"> Restarts Enabled</td>
                                                </tr>
                                                <tr>
                                                    <td>First Restart Delay(seconds) &nbsp;&nbsp;&nbsp;
                                                    <table style="width:150px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                                    </td>

                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style="width: 100%;height: 100%;">
                                                <th>Antenna Configuration</th>
                                                <tr>
                                                    <td>Number of Antenna
                                                    <table style="width:150px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                                    </td>

                                                </tr>
                                                <tr>

                                                    <td>
                                                        <input type="checkbox">Misalignment Detection Enabled</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table style="width: 100%;height: 100%;">
                                                <th colspan="3">DME Configuration</th>
                                                <tr>
                                                    <td>DME Type &nbsp;
                                                    <table style="width:50px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                                    </td>

                                                    <td>
                                                        <input type="checkbox">Dual</td>

                                                    <td>
                                                        <input type="checkbox">Interlock</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">Keying Output &nbsp;&nbsp;
                                                    <table style="width:250px;height:25px ;" align="right"><tr><td id=" "></td></tr></table>
                                                &nbsp;&nbsp;
                                                    </td>

                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div id="d2">
                                <table style="width: auto;height: -webkit-fill-available;">
                                    <tr>
                                        <td>
                                            <table style="width: 100%;height:100%;">
                                                <tr>
                                                    <th colspan="2" style="width:200px;text-align:center;">User Configuration</th>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <input type="radio"> &nbsp;&nbsp; localizer</td>
                                                    <td>
                                                        <input type="radio">&nbsp;&nbsp; Glideslope</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <select style="width: 90%;">
                                                            <option value="Capture effect"> Capture effect</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio">&nbsp;&nbsp; Dual Equip</td>
                                                    <td>
                                                        <input type="radio">&nbsp;&nbsp; Singel Equip</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <input type="checkbox">&nbsp;&nbsp; Hot Standby</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <input type="checkbox">&nbsp;&nbsp; NFM Present</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <input type="checkbox">&nbsp;&nbsp; FFM Present </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <input type="checkbox">&nbsp;&nbsp; Inline Phase Kit Present</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"> Frequency &nbsp;&nbsp;&nbsp;
                                                        <select style="width: 50%;"></select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <button type="button" style="width: 100%;">DIP Switch Settings</button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table style="width:100%;height: 100%;">
                                                <tr>
                                                    <th style="width: 150px;text-align:center;">RMS</th>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                                <tr></tr>
                                                <tr></tr>
                                                <tr></tr>
                                                <tr></tr>
                                                <tr></tr>

                                            </table>
                                        </td>
                                        <td>
                                            <table style="width: 100%;height: 100%;">
                                                <tr>
                                                    <th colspan="4" style="width: 300px;text-align:center;">Monitors</th>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center;">&nbsp;&nbsp;Monitor 1</td>
                                                    <td style="text-align:center;">&nbsp;&nbsp;Monitor 2</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td id=""></td>
                                                    <td id=""></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td id=""></td>
                                                    <td id=""></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td id=" "></td>
                                                    <td id=""></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td id=""></td>
                                                    <td id=""></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td id=""></td>
                                                    <td id=""></td>
                                                    
                                                </tr>
                                                <tr></tr>
                                                <tr>
                                                    <td id=""></td>
                                                    <td id=""></td>
                                                </tr>
                                                <tr></tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Station Description</td>
                                        <td colspan="2">
                                            <input type="text" style="width: 100%;height: 100%;">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div id="d3">
                                <table style="width: 376px;height: 500px;position:absolute;">
                                    <tr>
                                        <td></td>
                                        <th>Low Limit</th>
                                        <th>High Limit</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Spare A/D 1</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Spare A/D 2</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Spare A/D 3</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Spare A/D 4</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Spare A/D 5</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Spare A/D 6</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Spare A/D 7</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Spare A/D 8</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Spare A/D 9</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                           
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Spare A/D 10</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">AC Input Volts</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">AC Input Current</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OB Light Current PreAlarm</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">OB Light Current </td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                </table>
                                <table style="width: 376px;height: 500px;position:relative;margin-left:400px;">
                                    <tr>
                                        <td></td>
                                        <th>Low Limit</th>
                                        <th>High Limit</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Tx 1-24 V PS Volts</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Tx 1-24 V PS Current</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Tx 2-24 V PS Volts</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Tx 2-24 V PS Current</td>
                                        <td id="">
                                           
                                        </td>
                                        <td id="">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Battery 1 Volt</td>
                                        <td id="">
                                           
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Barrtery 1 Current</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Battery 2 Volt</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Barrtery 2 Current</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Inside Temperature 'C</td>
                                        <td id="">
                                           
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">Outside Temperature 'C</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">DME #1 28 V PS Volts</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">DME #2 28 V PS Volts</td>
                                        <td id="">
                                           
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">+5 VDC</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">+12 VDC</td>
                                        <td id="">
                                            
                                        </td>
                                        <td id="">
                                            
                                        </td>
                                    </tr>
                                    <tr>

                                        <td >
                                            <input type="checkbox">-12 VDC</td>
                                        <td id="">
                                           
                                        </td>
                                        <td id="">
                                           
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div id="d4">
                                <table>
                                    <tr>
                                        <td>
                                            <table style="text_align:center;">
                                                <tr>
                                                    <td style="width:150px;text-align:center;height:25px;">User ID</td>
                                                    <td style="width:150px;text-align:center;">Password</td>
                                                    <td style="width:150px;text-align:center;">Level</td>
                                                </tr>
                                                <tr>
                                                    <td id="" style="width:150px;text-align:center;height:25px;">
                                                        
                                                    </td>
                                                    <td id="" style="width:150px;text-align:center;height:25px;">
                                                        
                                                    </td>
                                                    <td id="" style="width:150px;text-align:center;height:25px;">
                                                    
                                                         
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id=""style="width:150px;text-align:center;height:25px;">
                                                        
                                                    </td>
                                                    <td id="" style="width:150px;text-align:center;height:25px;">
                                                        
                                                    </td>
                                                    <td id="" style="width:150px;text-align:center;height:25px;">
                                                       
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id="" style="width:150px;text-align:center;height:25px;">
                                                        
                                                    </td>
                                                    <td id="" style="width:150px;text-align:center;height:25px;">
                                                        
                                                    </td>
                                                    <td id="" style="width:150px;text-align:center;height:25px;">
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id="" style="width:150px;text-align:center;height:25px;">
                                                        
                                                    </td>
                                                    <td id="" style="width:150px;text-align:center;height:25px;">
                                                        
                                                    </td>
                                                    <td id="" style="width:150px;text-align:center;height:25px;">
                                                        
                                                    </td>
                                                </tr>

                                            </table>
                                        </td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td style="width:150px;text-align:center;">User ID</td>
                                                    <td style="width:150px;text-align:center;">Password</td>
                                                    <td style="width:150px;text-align:center;">Level</td>
                                                </tr>
                                                <tr>
                                                    <td id="" style="width:150px;text-align:center;height:25px;">
                                                        
                                                    </td>
                                                    <td id="" style="width:150px;text-align:center;height:25px;">
                                                       
                                                    </td>
                                                    <td id="" style="width:150px;text-align:center;height:25px;">
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id="" style="width:150px;text-align:center;height:25px;">
                                                        
                                                    </td>
                                                    <td id="" style="width:150px;text-align:center;height:25px;">
                                                        
                                                    </td>
                                                    <td id="" style="width:150px;text-align:center;height:25px;">
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id="" style="width:150px;text-align:center;height:25px;">
                                                        
                                                    </td>
                                                    <td id="" style="width:150px;text-align:center;height:25px;">
                                                       
                                                    </td>
                                                    <td id="" style="width:150px;text-align:center;height:25px;">
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td id="" style="width:150px;text-align:center;height:25px;">
                                                        
                                                    </td>
                                                    <td id="" style="width:150px;text-align:center;height:25px;">
                                                        
                                                    </td>
                                                    <td id="" style="width:150px;text-align:center;height:25px;">
                                                        
                                                    </td>
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