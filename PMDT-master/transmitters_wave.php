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
            $('#Div1').hide();
            $('#Div2').hide();
            $('#Div3').hide();
            $('#Div9').hide();
            $('#Div5').hide();
            $('#Div6').hide();
            $('#Div7').hide();
            $('#Div8').hide();
            $('#t4').hide();
            $('#t5').hide();
            $('#b1').click(function() {
                $('#t1').show();
                $('#Div1').hide();
                $('#Div2').hide();
                $('#Div3').hide();
                $('#Div9').hide();
                $('#Div5').hide();
                $('#Div6').hide();
                $('#Div7').hide();
                $('#Div8').hide();
                $('#t4').hide();
                $('#t5').hide();
            })
            $('#b2').click(function() {
                $('#t1').hide();
                $('#Div1').show();
                $('#Div2').hide();
                $('#Div3').hide();
                $('#Div9').hide();
                $('#Div5').hide();
                $('#Div6').hide();
                $('#Div7').hide();
                $('#Div8').hide();
                $('#t4').hide();
                $('#t5').hide();
            })
            $('#b3').click(function() {
                $('#t1').hide();
                $('#Div1').hide();
                $('#Div2').show();
                $('#Div3').hide();
                $('#Div9').hide();
                $('#Div5').hide();
                $('#Div6').hide();
                $('#Div7').hide();
                $('#Div8').hide();
                $('#t4').hide();
                $('#t5').hide();
            })
            $('#b4').click(function() {
                $('#t1').hide();
                $('#Div1').hide();
                $('#Div2').hide();
                $('#Div3').show();
                $('#Div9').hide();
                $('#Div5').hide();
                $('#Div6').hide();
                $('#Div7').hide();
                $('#Div8').hide();
                $('#t4').hide();
                $('#t5').hide();
            })
            $('#b5').click(function() {
                $('#t1').hide();
                $('#Div1').hide();
                $('#Div2').hide();
                $('#Div3').hide();
                $('#Div9').show();
                $('#Div5').hide();
                $('#Div6').hide();
                $('#Div7').hide();
                $('#Div8').hide();
                $('#t4').hide();
                $('#t5').hide();
            })
            $('#b6').click(function() {
                $('#t1').hide();
                $('#Div1').hide();
                $('#Div2').hide();
                $('#Div3').hide();
                $('#Div9').hide();
                $('#Div5').show();
                $('#Div6').hide();
                $('#Div7').hide();
                $('#Div8').hide();
                $('#t4').hide();
                $('#t5').hide();
            })
            $('#b7').click(function() {
                $('#t1').hide();
                $('#Div1').hide();
                $('#Div2').hide();
                $('#Div3').hide();
                $('#Div9').hide();
                $('#Div5').hide();
                $('#Div6').show();
                $('#Div7').hide();
                $('#Div8').hide();
                $('#t4').hide();
                $('#t5').hide();
            })
            $('#b8').click(function() {
                $('#t1').hide();
                $('#Div1').hide();
                $('#Div2').hide();
                $('#Div3').hide();
                $('#Div9').hide();
                $('#Div5').hide();
                $('#Div6').hide();
                $('#Div7').show();
                $('#Div8').hide();
                $('#t4').hide();
                $('#t5').hide();
            })
            $('#b9').click(function() {
                $('#t1').hide();
                $('#Div1').hide();
                $('#Div2').hide();
                $('#Div3').hide();
                $('#Div9').hide();
                $('#Div5').hide();
                $('#Div6').hide();
                $('#Div7').hide();
                $('#Div8').show();
                $('#t4').hide();
                $('#t5').hide();
            })
            $('#b10').click(function() {
                $('#t1').hide();
                $('#Div1').hide();
                $('#Div2').hide();
                $('#Div3').hide();
                $('#Div9').hide();
                $('#Div5').hide();
                $('#Div6').hide();
                $('#Div7').hide();
                $('#Div8').hide();
                $('#t4').show();
                $('#t5').hide();
            })
            $('#b11').click(function() {
                $('#t1').hide();
                $('#Div1').hide();
                $('#Div2').hide();
                $('#Div3').hide();
                $('#Div9').hide();
                $('#Div5').hide();
                $('#Div6').hide();
                $('#Div7').hide();
                $('#Div8').hide();
                $('#t4').hide();
                $('#t5').show();
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
                            <button id="b1" style="background-color: blue;color: aliceblue;width: 106px;height: 30px;font-weight: bold;">Wattmeter Data</button>
                            <button id="b2" style="background-color: blue;color: aliceblue;width: 125px;height: 30px;font-weight: bold;">Waveform #1</button>
                            <button id="b3" style="background-color: blue;color: aliceblue;width: 125px;height: 30px;font-weight: bold;">Waveform #2</button>
                            <button id="b4" style="background-color: blue;color: aliceblue;width: 125px;height: 30px;font-weight: bold;">Waveform #3</button>
                            <button id="b5" style="background-color: blue;color: aliceblue;width: 125px;height: 30px;font-weight: bold;">Waveform #4</button>
                            <button id="b6" style="background-color: blue;color: aliceblue;width: 125px;height: 30px;font-weight: bold;">Waveform #5</button>
                            <button id="b7" style="background-color: blue;color: aliceblue;width: 125px;height: 30px;font-weight: bold;">Waveform #6</button>
                            <button id="b8" style="background-color: blue;color: aliceblue;width: 125px;height: 30px;font-weight: bold;">Waveform #7</button>
                            <button id="b9" style="background-color: blue;color: aliceblue;width: 125px;height: 30px;font-weight: bold;">Waveform #8</button>
                            <button id="b10" style="background-color: blue;color: aliceblue;width: 186px;height: 30px;font-weight: bold;">Integral Monitor Data</button>
                            <button id="b11" style="background-color: blue;color: aliceblue;width: 178px;height: 30px;font-weight: bold;">Status Monitor Data</button>
                            <div id="t1" style="height:500px !important">
                                <div class="main" style="height:460px">
                                    <input type="text" name="" id="date-time" style="margin-left: 47px;" readonly="">
                                    <div class="main1">
                                        <div class="d1" style="
    position: absolute;
    margin-left: 0px;
    margin-top: 18px;
">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Waveform #1 Name</td>
                                                        <td>
                                                            <input type="text">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Waveform #2 Name</td>
                                                        <td>
                                                            <input type="text">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Waveform #3 Name</td>
                                                        <td>
                                                            <input type="text">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Waveform #4 Name</td>
                                                        <td>
                                                            <input type="text">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d3">

                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Waveform #5 Name</td>
                                                        <td>
                                                            <input type="text">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Waveform #6 Name</td>
                                                        <td>
                                                            <input type="text">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Waveform #7 Name</td>
                                                        <td>
                                                            <input type="text">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Waveform #8 Name</td>
                                                        <td>
                                                            <input type="text">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Div1" style="height:500px">
                                <div class="main" style="height:460px">
                                    <div class="m_1">
                                        <input type="text" name="" id="date-time2" readonly="" style="
    /* width: 162px; */
">
                                        <div class="m_2">
                                            <table class="t1">
                                                <tbody>
                                                    <tr>
                                                        <td>Waveform Name</td>
                                                        <td>
                                                            <input type="text">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="m_3">
                                            <table class="t2">
                                                <tbody>
                                                    <tr>
                                                        <td>Active
                                                            <input type="text" id="active">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="main1">
                                        <div class="d1" style="
    position: absolute;
    margin-left: 0px;
    margin-top: 18px;
">
                                            <p><span>Course</span></p>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>CSB Mod Balance</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>DDM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB Mod Percent</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SBO RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intent Mod Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d3">
                                            <p><span>Clerance</span></p>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>CSB Mod Balance</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>DDM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB Mod Percent</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SBO RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intent Mod Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Div2" style="height:500px">
                                <div class="main" style="height:460px">
                                    <div class="m_1">
                                        <input type="text" name="" id="date-time2" readonly="">
                                        <div class="m_2">
                                            <table class="t1">
                                                <tbody>
                                                    <tr>
                                                        <td>Waveform Name</td>
                                                        <td>
                                                            <input type="text">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="m_3">
                                            <table class="t2">
                                                <tbody>
                                                    <tr>
                                                        <td>Active
                                                            <input type="text" id="active">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="main1">
                                        <div class="d1" style="
    position: absolute;
    margin-left:0px;
    margin-top: 18px;
">
                                            <p><span>Course</span></p>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>CSB Mod Balance</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>DDM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB Mod Percent</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SBO RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intent Mod Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d3">
                                            <p><span>Clerance</span></p>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>CSB Mod Balance</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>DDM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB Mod Percent</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SBO RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intent Mod Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Div3" style="height:500px">
                                <div class="main" style="height:460px">
                                    <div class="m_1">
                                        <input type="text" name="" id="date-time2" readonly="">
                                        <div class="m_2">
                                            <table class="t1">
                                                <tbody>
                                                    <tr>
                                                        <td>Waveform Name</td>
                                                        <td>
                                                            <input type="text">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="m_3">
                                            <table class="t2">
                                                <tbody>
                                                    <tr>
                                                        <td>Active
                                                            <input type="text" id="active">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="main1">
                                        <div class="d1" style="
    position: absolute;
    margin-left: 0px;
    margin-top: 18px;
">
                                            <p><span>Course</span></p>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>CSB Mod Balance</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>DDM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB Mod Percent</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SBO RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intent Mod Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d3">
                                            <p><span>Clerance</span></p>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>CSB Mod Balance</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>DDM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB Mod Percent</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SBO RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intent Mod Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Div9" style="height:500px">
                                <div class="main" style="height:460px">
                                    <div class="m_1">
                                        <input type="text" name="" id="date-time2" readonly="">
                                        <div class="m_2">
                                            <table class="t1">
                                                <tbody>
                                                    <tr>
                                                        <td>Waveform Name</td>
                                                        <td>
                                                            <input type="text">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="m_3">
                                            <table class="t2">
                                                <tbody>
                                                    <tr>
                                                        <td>Active
                                                            <input type="text" id="active">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="main1">
                                        <div class="d1" style="
    position: absolute;
    margin-left: 0px;
    margin-top: 18px;
">
                                            <p><span>Course</span></p>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>CSB Mod Balance</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>DDM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB Mod Percent</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SBO RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intent Mod Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d3">
                                            <p><span>Clerance</span></p>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>CSB Mod Balance</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>DDM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB Mod Percent</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SBO RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intent Mod Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Div5" style="height:500px">
                                <div class="main" style="height:460px">
                                    <div class="m_1">
                                        <input type="text" name="" id="date-time2" readonly="">
                                        <div class="m_2">
                                            <table class="t1">
                                                <tbody>
                                                    <tr>
                                                        <td>Waveform Name</td>
                                                        <td>
                                                            <input type="text">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="m_3">
                                            <table class="t2">
                                                <tbody>
                                                    <tr>
                                                        <td>Active
                                                            <input type="text" id="active">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="main1">
                                        <div class="d1" style="
    position: absolute;
    margin-left: 0px;
    margin-top: 18px;
">
                                            <p><span>Course</span></p>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>CSB Mod Balance</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>DDM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB Mod Percent</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SBO RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intent Mod Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d3">
                                            <p><span>Clerance</span></p>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>CSB Mod Balance</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>DDM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB Mod Percent</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SBO RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intent Mod Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Div6" style="height:500px">
                                <div class="main" style="height:460px">
                                    <div class="m_1">
                                        <input type="text" name="" id="date-time2" readonly="">
                                        <div class="m_2">
                                            <table class="t1">
                                                <tbody>
                                                    <tr>
                                                        <td>Waveform Name</td>
                                                        <td>
                                                            <input type="text">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="m_3">
                                            <table class="t2">
                                                <tbody>
                                                    <tr>
                                                        <td>Active
                                                            <input type="text" id="active">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="main1">
                                        <div class="d1" style="
    position: absolute;
    margin-left: 0px;
    margin-top: 18px;
">
                                            <p><span>Course</span></p>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>CSB Mod Balance</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>DDM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB Mod Percent</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SBO RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intent Mod Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d3">
                                            <p><span>Clerance</span></p>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>CSB Mod Balance</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>DDM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB Mod Percent</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SBO RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intent Mod Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Div7" style="height:500px">
                                <div class="main" style="height:460px">
                                    <div class="m_1">
                                        <input type="text" name="" id="date-time2" readonly="">
                                        <div class="m_2">
                                            <table class="t1">
                                                <tbody>
                                                    <tr>
                                                        <td>Waveform Name</td>
                                                        <td>
                                                            <input type="text">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="m_3">
                                            <table class="t2">
                                                <tbody>
                                                    <tr>
                                                        <td>Active
                                                            <input type="text" id="active">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="main1">
                                        <div class="d1" style="
    position: absolute;
    margin-left: 0px;
    margin-top: 18px;
">
                                            <p><span>Course</span></p>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>CSB Mod Balance</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>DDM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB Mod Percent</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SBO RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intent Mod Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d3">
                                            <p><span>Clerance</span></p>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>CSB Mod Balance</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>DDM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB Mod Percent</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SBO RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intent Mod Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Div8" style="height:500px">
                                <div class="main" style="height:460px">
                                    <div class="m_1">
                                        <input type="text" name="" id="date-time2" readonly="">
                                        <div class="m_2">
                                            <table class="t1">
                                                <tbody>
                                                    <tr>
                                                        <td>Waveform Name</td>
                                                        <td>
                                                            <input type="text">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="m_3">
                                            <table class="t2">
                                                <tbody>
                                                    <tr>
                                                        <td>Active
                                                            <input type="text" id="active">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="main1">
                                        <div class="d1" style="
    position: absolute;
    margin-left: 0px;
    margin-top: 18px;
">
                                            <p><span>Course</span></p>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>CSB Mod Balance</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>DDM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB Mod Percent</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SBO RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intent Mod Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d3">
                                            <p><span>Clerance</span></p>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>CSB Mod Balance</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>DDM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB Mod Percent</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>% </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSB RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SBO RF Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intent Mod Level</td>
                                                        <td>
                                                            <input type="number" name="" id="">
                                                        </td>
                                                        <td>%</td>
                                                    </tr>
                                                </tbody>
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
                                        <p style="margin-top: 291px;
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
                            <div id="t5">
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