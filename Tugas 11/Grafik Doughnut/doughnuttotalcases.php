<?php
include('koneksi.php');
$negara = mysqli_query($koneksi,"select * from negara");
while($row = mysqli_fetch_array($negara)){
$nama_negara[] = $row['nama_negara'];
	
	$query = mysqli_query($koneksi,"SELECT total_case AS Total_Cases FROM tb_case WHERE id_negara='".$row['id_negara']."'");
	$row = $query->fetch_array();
	$total_case[] = $row['Total_Cases'];
	
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Doughnut Chart Total Cases COVID-19</title>
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
	<header><center><h1 id="title">COVID-19 Total Cases in Top 10 Country</h1></center></header>
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
			type: 'doughnut',
			data: {
				labels: <?php echo json_encode($nama_negara); ?>,
				datasets: [{ 
        			data: <?php echo json_encode($total_case); ?>,
					label: 'Total Cases',
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