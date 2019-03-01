<?php 
$application_name = 'Test Api';
?>

<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<title><?php echo($application_name); ?></title>
</head>
<body style="font-family: Verdana; font-size: 12px;">
	<h3><?php echo($application_name); ?></h3>
	<p>Dados:</p>
	<button id="btnTeste">Teste</button>
	<script type="text/javascript">
		$(document).ready(function(){

			$("btnTeste").click(function(){
				$.ajax({
					url: 'adrsisdelli.ddns.net:3000/adriano.costa',
					success: function(data) {
						alert(data);
					}
				});
			});
		});
	</script>
</body>
</html>
