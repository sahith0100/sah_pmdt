<html>
<head>
  <title>SELEX</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootstrap.css">
  <script src=nav.js></script>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-hover" style="position: sticky !important;top: 0;z-index:500;">
    <div class="container-fluid">
      <div class="navbar-header">
        <img src="logo.png" height="40px" width="40px" style="margin-left: -14px;margin-top: -3px;">
        <img src="title.png" class="navbar-brand" style="
          width: 113px;
          margin-left: -4px;
          height: 40px;
          margin-top: -2px;
          ">
      </div>
    <div class="collapse navbar-collapse" id="navbarHover">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="system.php" name="Connect">System <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    RMS
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="rms_status.php" name="RMS Status">Status</a></li>
                    <li><a class="dropdown-item" href="rms_data.php"  name="RMS Data">Data</a></li>
                    <li><a class="dropdown-item" href="rms_logs.php" name="RMS Logs">Logs</a></li>
                    <li><a class="dropdown-item" href="rms_config.php"  name="RMS Configuration">Configuration</a></li>
                    <li><a class="dropdown-item dropdown-toggle" href="#">Commands</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                            <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="#"  name="RMS Config Restore" onclick="select(event,this)">Config Restore</a></li>
                    <li><a class="dropdown-item" href="#"  name="RMS Config Backup" onclick="select(event,this)">Config Backup</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Monitors
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="monitors_data.php"  name="Moniters Data">Data</a></li>
                    <li><a class="dropdown-item" href="monitors_config.php" name="Moniters Configuration">Configuration</a></li>
                    <li><a class="dropdown-item dropdown-toggle" href="#" name="Moniters Commands" onclick="select(event,this)">Commands</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                            <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Monitor1
              </a>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="monitors1_data.php"  name="Monitor1 Data">Data</a></li>
                  <li><a class="dropdown-item" href="#" name="Monitor1 Configuration" onclick="select(event,this)">Configuration</a></li>
                  <li><a class="dropdown-item dropdown-toggle" href="#" name="Monitor1 Commands" onclick="select(event,this)">Commands</a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                          <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                      </ul>
                  </li>
              </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Monitor2
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="monitors2_data.php" name="Monitor2 Data">Data</a></li>
                <li><a class="dropdown-item" href="#" name="Monitor2 Configuration" onclick="select(event,this)">Configuration</a></li>
                <li><a class="dropdown-item dropdown-toggle" href="#" name="Monitor2 Commands" onclick="select(event,this)">Commands</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                        <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Monitor3
          </a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#" name="Monitor3 Data" onclick="select(event,this)">Data</a></li>
              <li><a class="dropdown-item" href="#" name="Monitor3 Configuration" onclick="select(event,this)">Configuration</a></li>
              <li><a class="dropdown-item dropdown-toggle" href="#" name="Monitor3 Commands" onclick="select(event,this)">Commands</a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                      <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                  </ul>
              </li>
          </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Monitor4
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#" name="Monitor4 Data" onclick="select(event,this)">Data</a></li>
            <li><a class="dropdown-item" href="#" name="Monitor4 Configuration" onclick="select(event,this)">Configuration</a></li>
            <li><a class="dropdown-item dropdown-toggle" href="#" name="Monitor4 Commands" onclick="select(event,this)">Commands</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                    <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                </ul>
            </li>
        </ul>
    </li> -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Transmitters
      </a>
      <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="transmitters_data.php" name="Transmitters Data">Data</a></li>
          <li><a class="dropdown-item" href="transmitters_config.php" name="Transmitters Configuration">Configuration</a></li>
          <li><a class="dropdown-item" href="transmitters_wave.php" name="Transmitters Waveforms">Waveforms</a></li>
          <li><a class="dropdown-item dropdown-toggle" href="#" name="Transmitters Commands" onclick="select(event,this)">Commands</a>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                  <li><a class="dropdown-item"name="Submenu link" onclick="select(event,this)"  href="#">Submenu link</a></li>
              </ul>
          </li>
      </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Diagnostics
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#" name="Diagnostics Data" onclick="select(event,this)">Data</a></li>
        <li><a class="dropdown-item" href="#" name="Diagnostics Configuration" onclick="select(event,this)">Configuration</a></li>
        <li><a class="dropdown-item dropdown-toggle" href="#" name="Diagnostics Commands" onclick="select(event,this)">Commands</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
                <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
            </ul>
        </li>
    </ul>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Info
  </a>
  <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#" name="Info Data" onclick="select(event,this)">Data</a></li>
      <li><a class="dropdown-item" href="#" name="Info Configuration" onclick="select(event,this)">Configuration</a></li>
      <li><a class="dropdown-item dropdown-toggle" href="#" name="Info Commands" onclick="select(event,this)">Commands</a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
              <li><a class="dropdown-item" name="Submenu link" onclick="select(event,this)" href="#">Submenu link</a></li>
          </ul>
      </li>
  </ul>
</li>
  </ul>
 </div>
</nav>
<!-- <img src="aero3.gif" style="
    margin-left: 80%;
    position: fixed;
    margin-top: 5%;
    z-index: 501;
"> -->
<!-- <img src="https://www.animatedimages.org/data/media/71/animated-aeroplane-image-0006.gif" border="0" alt="animated-aeroplane-image-0006" width="10%;" style="position: fixed;margin-left: 32%;margin-top: 18%;z-index: 12;"> -->
</body>
</html>