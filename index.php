<?php 
$application_name = 'Test Api';
?>

<!DOCTYPE html>
<html>
<head>
	<script
	src="https://code.jquery.com/jquery-3.3.1.slim.js"
	integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA="
	crossorigin="anonymous"></script>
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