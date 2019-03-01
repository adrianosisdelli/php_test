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
	<div class="container" style="display: flex;">
		<div style="margin-right: 100px;">
			<h3><?php echo($application_name); ?></h3>
			<p>Dados:</p>
			<button id="btnTeste">Teste</button>
		</div>
		<div>
			<table>
				<tr>
					<td>Developer</td>
					<td id="devName"></td>
				</tr>
				<tr>
					<td>Message</td>
					<td id="message"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td id="document"></td>
				</tr>
				<tr>
					<td>Key Pair</td>
					<td id="key-pair"></td>
				</tr>
				<tr>
					<td>Value</td>
					<td id="value"></td>
				</tr>
			</table>
		</div>
	</div>


	<?php phpinfo(); ?>
	
	<script type="text/javascript">
		$(document).ready(function(){

			$("#btnTeste").click(function(){
				$.ajax(
				{
					type: 'GET',
					url: 'http://adrsisdelli.ddns.net:3000/adriano.costa',
					dataType: 'json',
					crossDomain: true,
					async: true,
					success: function (data) {
						$("#devName").html('<strong>' + data.developer + '</strong>');
						$("#message").html('<strong>' + data.message + '</strong>');
						$("#document").html('<strong>' + data.values[4].email + '</strong>');
						$("#key-pair").html('<strong>' + data.values[5].key_pair + '</strong>');
						$("#value").html('<strong>' + data.values[5].value + '</strong>');
					},
					error: function(data) {
						alert(JSON.stringify(data));
					}
				});
			});
		});
	</script>
</body>
</html>
