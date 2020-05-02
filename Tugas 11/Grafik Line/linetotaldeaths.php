<?php
include('koneksi.php');
$negara = mysqli_query($koneksi,"select * from negara");
while($row = mysqli_fetch_array($negara)){
$nama_negara[] = $row['nama_negara'];
	
	$query = mysqli_query($koneksi,"SELECT total_deaths AS Total_Deaths FROM tb_case WHERE id_negara='".$row['id_negara']."'");
	$row = $query->fetch_array();
	$total_deaths[] = $row['Total_Deaths'];
	
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Line Chart Total Deaths COVID-19</title>
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
<body id="body"><center>
	<header><center><h1 id="title">COVID-19 Total Deaths in Top 10 Country</h1></center></header>
	<div class="container rounded shadow bg-white ">
	<div class="card ">
			<div class="card-body">
				<div class="col-sm container">
					<div style="width:75%; height:75%">
						<canvas id="myChart"></canvas>
					</div>
				</div>
			</div>

	<script>
		var ctx = document.getElementById("myChart");
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: <?php echo json_encode($nama_negara); ?>,
				datasets: [{ 
        			data: <?php echo json_encode($total_deaths); ?>,
					label: 'Total Deaths',
        			borderColor: 'rgba(255, 99, 132, 1)',
					fill: false
				},
			]
			},
			options: {
    title: {
      display: true,
    }
  }
});
	</script>
</center>
</body>
</html>