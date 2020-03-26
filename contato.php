<?php
include_once('conf/conf.php');
?>

<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contato─CGC da Prefeitura Municipal de Quatá-SP</title>

	<base href=<?php echo BASE_URL_DIR; ?>>


	<link rel="shortcut icon" href="img/logo.ico">
	<link rel="alternate" hreflang="en" href="en/contact.php">

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/html.css">
	<link rel="stylesheet" type="text/css" href="css/language.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/content.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/health.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">

	<script src="javascript/lib/jquery-3.4.1.min.js"></script>
	<script src="https://kit.fontawesome.com/fa170b8b16.js" crossorigin="anonymous"></script>
</head>

<body>
	<?php include(HTDOCS_DIR . '/html/header.php'); ?>

	<script>
		$("#mn-contact").addClass("current-menu-item");
	</script>

	<div class="content">

		<div class='health-call-center-container' id='health-call-center-container'>
			<h2>Central Única de Atendimento ao COVID-19</h2>
			<ul>
				<li><strong>Local:</strong> Rua Maria Pérez Jorge, s/nº. Entrada pelo portão lateral da Unidade Ambulatorial ─ Santa Casa.</li>
				<li><strong>Atendimento:</strong> diariamente das 8h às 20h.</li>
				<li><strong>Telefone:</strong> (18) 99799-0070.</li>
			</ul>
			<p>Evite aglomerações!</p>
			<p>Dúvidas também são esclarecidas por telefone.</p>
		</div>

		<div class="container-cgc-call-center">
			<h2>Comitê de Gestão de Crise ─ CGC</h2>
			<p>Telefone: (18) 9XXXX-XXXX</p>
			<p>Informações específicas em relação a prestação de serviços e funcionamento de repartições podem ser obtidas diretamente com os responsáveis por cada setor. <a href="secretarias-e-servicos.php">Clique aqui para ser redirecionado!</a></p>

		</div>
	</div>

	<?php include(HTDOCS_DIR . '/html/footer.php'); ?>
</body>

</html>