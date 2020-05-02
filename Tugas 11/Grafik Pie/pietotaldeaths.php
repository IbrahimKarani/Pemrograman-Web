<?php
include('koneksi.php');
$negara = mysqli_query($koneksi,"select * from negara");
while($row = mysqli_fetch_array($negara)){
	$nama_negara[] = $row['nama_negara'];
	
	$query = mysqli_query($koneksi,"SELECT total_deaths AS Total_Deaths FROM tb_case where id_negara='".$row['id_negara']."'");
	$row = $query->fetch_array();
	$total_deaths[] = $row['Total_Deaths'];
}
?>
<!doctype html>
<html>

<head>
	<title>Pie Chart Total Deaths</title>
	<script type="text/javascript" src="Chart.js"></script>
	<style type="text/css">
		#title {
			border-top: solid;
			border-bottom: solid;
			border-radius: 100px;
			margin-left: 25%;
			margin-right: 25%;
			margin-bottom: 5px;
			padding-top: 5px;
			padding-bottom: 5px;
			background-color: white;
		}
		#body {
			margin-top: 100px;
			background-color: #cfcdd4;
		}
	</style>
</head>
<header><center><h1 id="title">COVID-19 Total Deaths in Top 10 Country</h1></center></header>
<body id="body"><center>
	<div id="canvas-holder" style="width:50%">
		<canvas id="chart-area"></canvas>
	</div>
	<script>
		var config = {
			type: 'pie',
			data: {
				datasets: [{
					data:<?php echo json_encode($total_deaths); ?>,
					backgroundColor: [
					'rgba(255, 99, 132, 0.5)',
					'rgba(54, 162, 235, 0.5)',
					'rgba(255, 206, 86, 0.5)',
					'rgba(140, 243, 32, 0.5)',
					'rgba(210, 105, 30, 0.5)',	
					'rgba(255, 69, 0, 0.5)',
					'rgba(30, 144, 255, 0.5)',
					'rgba(255, 0, 255, 0.5)',
					'rgba(112, 128, 144, 0.5)',
					'rgba(0, 0, 255, 0.5)'
					],
					borderColor: [
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(140, 243, 32, 1)',
					'rgba(210, 105, 30, 1)',
					'rgba(255, 69, 0, 1)',
					'rgba(30, 144, 255 1)',
					'rgba(255, 0, 255 1)',
					'rgba(112, 128, 144 1)',
					'rgba(0, 0, 255 1)'
					],
					label: 'Presentase Penjualan Barang'
				}],
				labels: <?php echo json_encode($nama_negara); ?>},
			options: {
				responsive: true
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			window.myPie = new Chart(ctx, config);
		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			config.data.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return randomScalingFactor();
				});
			});

			window.myPie.update();
		});

		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset').addEventListener('click', function() {
			var newDataset = {
				backgroundColor: [],
				data: [],
				label: 'New dataset ' + config.data.datasets.length,
			};

			for (var index = 0; index < config.data.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());

				var colorName = colorNames[index % colorNames.length];
				var newColor = window.chartColors[colorName];
				newDataset.backgroundColor.push(newColor);
			}

			config.data.datasets.push(newDataset);
			window.myPie.update();
		});

		document.getElementById('removeDataset').addEventListener('click', function() {
			config.data.datasets.splice(0, 1);
			window.myPie.update();
		});
	</script>
	</center>
</body>

</html>
