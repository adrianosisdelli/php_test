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

	<script type="text/javascript">
		
		$(document).ready(function(){

			$.ajax({url: "http://172.18.0.2/adriano.costa", success: function(result){
				alert(result);
			}});
		});
	</script>
</body>
</html>