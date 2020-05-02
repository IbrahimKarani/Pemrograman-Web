<?php
include('koneksi.php');
$negara = mysqli_query($koneksi,"select * from negara");
while($row = mysqli_fetch_array($negara)){
	$nama_negara[] = $row['nama_negara'];
	
	$query = mysqli_query($koneksi,"SELECT * FROM tb_case WHERE id_negara='".$row['id_negara']."'");
	$row = $query->fetch_array();
	$total_case[] = $row['total_case'];	
	$new_cases[] = $row['new_cases'];
	$total_deaths[] = $row['total_deaths'];
	$new_deaths[] = $row['new_deaths'];
	$total_recovered[] = $row['total_recovered'];
	$active_cases[] = $row['active_cases'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Bar Chart Covid 19</title>
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
<body id="body">
	<center>
	<header><center><h1 id="title">COVID-19 Cases in Top 10 Country</h1></center></header>
	<div style="width: 75%;height: 75%">
		<canvas id="myChart"></canvas>
	</div>


	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($nama_negara); ?>,
				datasets: [{
					data: <?php echo json_encode($total_case); ?>,
					label: 'Total Cases',
					backgroundColor: 'rgba(255, 99, 132, 0.5)',
					borderColor: 'rgba(255,99,132,1)',
					borderWidth: 1
				},{
					data: <?php echo json_encode($new_cases); ?>,
					label: 'New Cases',
					backgroundColor: 'rgba(12, 211, 211, 0.5)',
					borderColor: 'rgba(12, 211, 211, 1)',
					borderWidth: 1
				},{
					data: <?php echo json_encode($total_deaths); ?>,
					label: 'Total Deaths',
					backgroundColor: 'rgba(163, 158, 236, 0.5)',
					borderColor: 'rgba(163 , 158, 236, 1)',
					borderWidth: 1
				},{
					data: <?php echo json_encode($new_deaths); ?>,
					label: 'New Deaths',
					backgroundColor: 'rgba(153, 235, 163, 0.5)',
					borderColor: 'rgba(153 , 235, 163, 1)',
					borderWidth: 1
				},{
					data: <?php echo json_encode($total_recovered); ?>,
					label: 'Total Recovered',
					backgroundColor: 'rgba(235, 226, 59, 0.5)',
					borderColor: 'rgba(235, 226, 59,1)',
					borderWidth: 1
				},{
					data: <?php echo json_encode($active_cases); ?>,
					label: 'Active Cases',
					backgroundColor: 'rgba(140, 243, 32, 0.5)',
					borderColor: 'rgba(140, 243, 32,1)',
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
	</center>
</body>
</html>