<?php
include_once('conf/conf.php');
$contact_url = BASE_URL_DIR . "contato.php";
?>

<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Quatá contra o COVID-19─Prefeitura Municipal de Quatá-SP</title>

	<base href=<?php echo BASE_URL_DIR; ?>>


	<link rel="shortcut icon" href="img/logo.ico">

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/html.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/content.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/call-center.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/health.css">

	<script src="javascript/lib/jquery-3.4.1.min.js"></script>
	<script src="https://kit.fontawesome.com/fa170b8b16.js" crossorigin="anonymous"></script>
	<script src="javascript/lib/chartjs/Chart.min.js"></script>

</head>




<body>
	<?php include(HTDOCS_DIR . '/html/header.php'); ?>

	<script>
		$("#mn-home").addClass("current-menu-item");
	</script>


	<div class='content'>
		<div class='update-panel-container'>
			<span>Última atualização em 06 de abril de 2020 às 20:30</span>
		</div>

		<div class='cases-panel-container'>
			<div class='cases-label-container' id='label-suspeitos'>
				<span class='cases-label'>Casos suspeitos</span><span class='cases-counter'>011</span>
			</div>
			<div class='cases-label-container' id='label-suspeitos-curados'>
				<span class='cases-label'>*Casos suspeitos removidos</span><span class='cases-counter'>016</span>
			</div>
			<div class='cases-label-container' id='label-descartados'>
				<span class='cases-label'>Casos descartados</span><span class='cases-counter'>000</span>
			</div>
			<div class='cases-label-container' id='label-confirmados'>
				<span class='cases-label'>Casos confirmados</span><span class='cases-counter'>000</span>
			</div>
			<div class='cases-label-container' id='label-obitos'>
				<span class='cases-label'>Óbitos</span><span class='cases-counter'>000</span>
			</div>
		</div>

		<p>
		*Casos suspeitos removidos são aqueles que eram monitorados por apresentarem quadro de síndrome gripal (casos suspeitos) e, após 14 (catorze) dias, foram curados, isto é, não apresentam mais sintomas.
		<p>

		<div class='chart-panel-container'>
			<canvas id="cases-chart"></canvas>
		</div>


		<div class='cases-table'>
			<div class='cases-table-header'>
				<span class='table-cell table-cell-0'><span>Sexo</span></span>
				<span class='table-cell table-cell-1'><span>Idade</span></span>
				<span class='table-cell table-cell-2'><span>Condição do paciente</span></span>
				<span class='table-cell table-cell-3'><span>SWAB<br>Exame<br>COVID-19</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>M</span></span>
				<span class='table-cell table-cell-1'><span>74</span></span>
				<span class='table-cell table-cell-2'><span>Internação Domiciliar</span></span>
				<span class='table-cell table-cell-3'><span>Não</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>M</span></span>
				<span class='table-cell table-cell-1'><span>74</span></span>
				<span class='table-cell table-cell-2'><span>Internação Hospitalar/UTI</span></span>
				<span class='table-cell table-cell-3'><span>Sim</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>M</span></span>
				<span class='table-cell table-cell-1'><span>36</span></span>
				<span class='table-cell table-cell-2'><span>Internação Domiciliar</span></span>
				<span class='table-cell table-cell-3'><span>Não</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>M</span></span>
				<span class='table-cell table-cell-1'><span>21</span></span>
				<span class='table-cell table-cell-2'><span>Internação Domiciliar</span></span>
				<span class='table-cell table-cell-3'><span>Não</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>F</span></span>
				<span class='table-cell table-cell-1'><span>38</span></span>
				<span class='table-cell table-cell-2'><span>Internação Domiciliar</span></span>
				<span class='table-cell table-cell-3'><span>Não</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>F</span></span>
				<span class='table-cell table-cell-1'><span>39</span></span>
				<span class='table-cell table-cell-2'><span>Internação Domiciliar</span></span>
				<span class='table-cell table-cell-3'><span>Não</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>M</span></span>
				<span class='table-cell table-cell-1'><span>51</span></span>
				<span class='table-cell table-cell-2'><span>Internação Domiciliar</span></span>
				<span class='table-cell table-cell-3'><span>Não</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>F</span></span>
				<span class='table-cell table-cell-1'><span>52</span></span>
				<span class='table-cell table-cell-2'><span>Internação Domiciliar</span></span>
				<span class='table-cell table-cell-3'><span>Não</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>M</span></span>
				<span class='table-cell table-cell-1'><span>03</span></span>
				<span class='table-cell table-cell-2'><span>Internação Domiciliar</span></span>
				<span class='table-cell table-cell-3'><span>Não</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>M</span></span>
				<span class='table-cell table-cell-1'><span>27</span></span>
				<span class='table-cell table-cell-2'><span>Internação Domiciliar</span></span>
				<span class='table-cell table-cell-3'><span>Não</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>F</span></span>
				<span class='table-cell table-cell-1'><span>24</span></span>
				<span class='table-cell table-cell-2'><span>Internação Domiciliar</span></span>
				<span class='table-cell table-cell-3'><span>Não</span></span>
			</div>			
		</div>
	</div>

	<?php include(HTDOCS_DIR . '/html/footer.php'); ?>
</body>

<script>
	new Chart(document.getElementById("cases-chart"), {
		type: 'line',
		data: {
			labels: ['21/03', '22/03', '23/03', '24/03', '25/03', '26/03', '27/03', '28/03', '29/03', '30/03', '31/03', '01/04', '02/04', '03/04', '04/04', '05/04', '06/04'],
			datasets: [{
				data: [0, 1, 10, 10, 16, 16, 19, 19, 19, 19, 23, 19, 21, 20, 20, 11, 11],
				label: "Casos suspeitos",
				borderColor: "#FFFF00",
				fill: false
			},
			{
				data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 4, 6, 6, 16, 16],
				label: "Casos suspeitos removidos",
				borderColor: "#90EE90",
				fill: false
			},
			{
				data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
				label: "Casos descartados",
				borderColor: "#008800",
				fill: false
			}, {
				data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
				label: "Casos confirmados",
				borderColor: "#FF0000",
				fill: false
			}, {
				data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
				label: "Óbitos",
				borderColor: "#000000",
				fill: false
			}]
		},
		options: {
			maintainAspectRatio: false,
			title: {
				display: false,
			},
			scales: {
				yAxes: [{
					ticks: {
						precision: 0
					}
				}]
			}
		}
	});
</script>

</html>