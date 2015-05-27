<html>
<head>	
	  <!-- CSS-->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/basico_php_ler_serial.css">
      <!-- JavaScript-->
      <script src="js/jquery-1.9.1.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/Chart.js"></script>
      <script src="js/template.js"></script>
	  <script src="js/basico_php_ler_serial.js"></script>

	<title>ler porta serial com python</title>
</head>
<body>
	<div id="container">
		<div id="box">
			<p id="valor">0.0</p>
			<p id="heart">BPM</p>
		</div>
	</div>
	<div class="box">          
        <div class="box-chart">
            <canvas id="GraficoLine" style="width:100%;"></canvas>
        </div>    
    </div>
</body>
</html>