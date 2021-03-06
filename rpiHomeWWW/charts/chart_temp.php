<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<title>Temperature sensor data chart</title>

<link rel="stylesheet" href="./jqwidgets/styles/jqx.base.css"
	type="text/css" />

<script type="text/javascript" src="./scripts/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="./jqwidgets/jqxcore.js"></script>
<script type="text/javascript" src="./jqwidgets/jqxdata.js"></script>
<script type="text/javascript" src="./jqwidgets/jqxdraw.js"></script>
<script type="text/javascript" src="./jqwidgets/jqxchart.core.js"></script>
<script type="text/javascript"
	src="./jqwidgets/jqxchart.rangeselector.js"></script>
<script type="text/javascript" src="./js/charts.js"></script>

<script type="text/javascript">	
	$(document).ready(function(){

		// var chartInstance = $('#jqxChart').jqxChart('getInstance');
		// first group and serie = 0,0
		// var count = chartInstance.getItemsCount(0, 0);
		// document.getElementById("debug").innerHTML = count;		
		
		// setup the chart
		$('#jqxChart').jqxChart(setChart());			

		//document.getElementById("debug").innerHTML = setChart().asString();		
		
	});
</script>
</head>

<body>
	<div id='Chart' style="margin: 0 auto; width: 800px">
		<div id='jqxChart' style="width: 800px; height: 400px"></div>
		<div id='ChartSelectorContainer' style="width: 800px; height: 150px"></div>
	</div>
	<div id='debug' style="width: 800px; height: 600px"></div>

</body>

</html>